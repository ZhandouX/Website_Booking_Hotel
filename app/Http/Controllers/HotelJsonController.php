<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HotelJsonController extends Controller
{
    // Tampilkan semua hotel dari JSON
    public function showData()
    {
        $path = public_path('detail-hotel.json');
        $json = File::get($path);
        $hotels = json_decode($json, true);

        return view('admin.hotel.index', compact('hotels'));
    }

    // Tampilkan form tambah hotel
    public function create()
    {
        return view('admin.hotel.create');
    }

    // Simpan data hotel baru
  public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'address' => 'required',
        'description' => 'required',
    ]);

    try {
        $path = public_path('detail-hotel.json');
        $hotels = json_decode(File::get($path), true);

        $slug = strtolower(str_replace(' ', '-', $request->name));
        $folder = 'gambar-hotel_baru/' . $slug;

        if (!File::exists(public_path($folder))) {
            File::makeDirectory(public_path($folder), 0755, true);
        }

        $gambarPaths = [];
        for ($i = 1; $i <= 5; $i++) {
            if ($request->hasFile("gambar_$i")) {
                $file = $request->file("gambar_$i");
                $filename = "gambar_$i." . $file->getClientOriginalExtension();
                $file->move(public_path($folder), $filename);
                $gambarPaths["gambar_$i"] = "$folder/$filename";
            } else {
                $gambarPaths["gambar_$i"] = null;
            }
        }

        // Gambar kamar
        $images_standar = null;
        if ($request->hasFile('images_standar')) {
            $file = $request->file('images_standar');
            $filename = "standar." . $file->getClientOriginalExtension();
            $file->move(public_path($folder), $filename);
            $images_standar = "$folder/$filename";
        }

        $images_medium = null;
        if ($request->hasFile('images_medium')) {
            $file = $request->file('images_medium');
            $filename = "medium." . $file->getClientOriginalExtension();
            $file->move(public_path($folder), $filename);
            $images_medium = "$folder/$filename";
        }

        $images_mewah = null;
        if ($request->hasFile('images_mewah')) {
            $file = $request->file('images_mewah');
            $filename = "mewah." . $file->getClientOriginalExtension();
            $file->move(public_path($folder), $filename);
            $images_mewah = "$folder/$filename";
        }

        // Fasilitas Utama Default (hapus jika input ingin dipakai)
        $fasilitasUtama = [
            ["icon" => "🛏️", "nama" => "AC"],
            ["icon" => "🚗", "nama" => "Parkir"],
            ["icon" => "🍽️", "nama" => "Restoran"],
            ["icon" => "📶", "nama" => "WIFI"]
        ];

        // Jika ada inputan dan tidak kosong
        if ($request->filled('fasilitas_utama')) {
            $fasilitasUtama = collect(explode(',', $request->fasilitas_utama))->map(function ($item) {
                $parts = explode('|', trim($item));
                if (count($parts) != 2) {
                    throw new \Exception("Format fasilitas utama salah. Gunakan format seperti: 🚗|Parkir");
                }
                return ["icon" => trim($parts[0]), "nama" => trim($parts[1])];
            });
        }

        $hotels[$slug] = [
            "name" => $request->name,
            "address" => $request->address,
            "lokasi" => $request->lokasi,
            "description" => $request->description,
            "luas" => $request->luas,
            "status" => $request->status,
            "bintang" => $request->bintang,
            "pembayaran" => $request->pembayaran,
            "keamanan" => $request->keamanan,
            "gambar_1" => $gambarPaths['gambar_1'],
            "gambar_2" => $gambarPaths['gambar_2'],
            "gambar_3" => $gambarPaths['gambar_3'],
            "gambar_4" => $gambarPaths['gambar_4'],
            "gambar_5" => $gambarPaths['gambar_5'],
            "harga_standar" => $request->harga_standar,
            "images_standar" => $images_standar,
            "harga_medium" => $request->harga_medium,
            "images_medium" => $images_medium,
            "harga_mewah" => $request->harga_mewah,
            "images_mewah" => $images_mewah,
            "fasilitas_utama" => $fasilitasUtama,
            "tempat_terdekat" => array_map('trim', explode(',', $request->tempat_terdekat)),
            "fasilitas" => $request->fasilitas,
            "lokasi_strategis" => $request->lokasi_strategis,
            "alasan" => $request->alasan,
            "tipe_kamar" => array_map('trim', explode(',', $request->tipe_kamar)),
            "kebijakan_hotel" => array_map('trim', explode(',', $request->kebijakan_hotel))
        ];

        File::put($path, json_encode($hotels, JSON_PRETTY_PRINT));

       return redirect()->route('hotel.json')->with('success', 'Data hotel berhasil ditambahkan!');
    } catch (\Exception $e) {
        return back()->withInput()->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
    }
}

}

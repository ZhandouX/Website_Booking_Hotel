<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UlasanController extends Controller
{
    public function simpan(Request $request)
    {
        $request->validate([
            'id' => 'required|string',
            'name' => 'required|string',
            'nama_pengunjung' => 'required|string',
            'email' => 'required|email',
            'pesan' => 'required|string',
        ]);

        $filePath = 'data/ulasan-hotel.json';

        // Ambil data lama
        $ulasanLama = [];
        if (Storage::exists($filePath)) {
            $ulasanLama = json_decode(Storage::get($filePath), true);
        }

        // Tambah data baru
        $ulasanLama[] = $request->all();

        // Simpan kembali
        Storage::put($filePath, json_encode($ulasanLama, JSON_PRETTY_PRINT));

        return response()->json(['message' => 'Ulasan berhasil disimpan.']);
    }

    public function ambil()
    {
        $filePath = 'data/ulasan-hotel.json';

        if (!Storage::exists($filePath)) {
            return response()->json([]);
        }

        $json = Storage::get($filePath);
        return response($json, 200)->header('Content-Type', 'application/json');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatPembayaran;
use Midtrans\Snap;
use Midtrans\Config;
use Illuminate\Support\Facades\Storage;

class PemesananController extends Controller
{
    public function createSnapToken(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'nomor_hp' => 'required|string',
            'nama_hotel' => 'required|string',
            'tipe_kamar' => 'required|string',
            'jumlah_kamar' => 'required|integer|min:1',
            'jumlah_dewasa' => 'required|integer|min:1',
            'jumlah_anak' => 'required|integer|min:0',
            'tanggal_checkin' => 'required|date',
            'total_harga' => 'required|integer|min:1'
        ]);

        // Buat ID unik dan timestamp
        $data['order_id'] = 'ORDER-' . time();
        $data['status'] = 'pending';
        $data['created_at'] = now()->toDateTimeString();

        // Simpan ke file JSON
        $file = storage_path('app/riwayat_transaksi.json');
        $riwayat = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
        $riwayat[] = $data;
        file_put_contents($file, json_encode($riwayat, JSON_PRETTY_PRINT));

        // Midtrans config
        Config::$serverKey = 'SB-Mid-server-SF9gSwdZsGGhVYPCU0lvb8Ei';
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Snap params
        $params = [
            'transaction_details' => [
                'order_id' => $data['order_id'],
                'gross_amount' => $data['total_harga'],
            ],
            'customer_details' => [
                'first_name' => $data['nama'],
                'email' => $data['email'],
                'phone' => $data['nomor_hp'],
            ]
        ];

        $snapToken = Snap::getSnapToken($params);
        return response()->json(['snapToken' => $snapToken]);
    }
}

<?php

// 1. Load Composer & Laravel
require_once __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
use Illuminate\Contracts\Console\Kernel;
use App\Models\Booking;
$kernel = $app->make(Kernel::class);
$kernel->bootstrap();

// 2. Midtrans Config
\Midtrans\Config::$serverKey = 'SB-Mid-server-SF9gSwdZsGGhVYPCU0lvb8Ei';
\Midtrans\Config::$isProduction = false;
\Midtrans\Config::$isSanitized = true;
\Midtrans\Config::$is3ds = true;

// 3. Ambil data dari input JSON
$raw_input = file_get_contents("php://input");
$data = json_decode($raw_input, true);

if (!isset($data['amount'], $data['nama'], $data['email'], $data['hp'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Data tidak lengkap']);
    exit;
}

$order_id = 'INV-' . time();

$params = [
    'transaction_details' => [
        'order_id' => $order_id,
        'gross_amount' => (int) $data['amount']
    ],
    'customer_details' => [
        'first_name' => $data['nama'],
        'email' => $data['email'],
        'phone' => $data['hp']
    ]
];

try {
    $snapToken = \Midtrans\Snap::getSnapToken($params);

    $data_booking = [
        'order_id' => $order_id,
        'nama' => $data['nama'],
        'email' => $data['email'],
        'hp' => $data['hp'],
        'hotel' => $data['hotel'] ?? 'Tidak diketahui',
        'kamar' => $data['kamar'] ?? 'Tidak diketahui',
        'total' => (int) $data['amount'],
        'status' => 'pending',
        'waktu' => date('Y-m-d H:i:s')
    ];

    // ✅ Simpan ke file JSON
    $riwayatFile = __DIR__ . '/riwayat_transaksi.json';
    $riwayat = file_exists($riwayatFile) ? json_decode(file_get_contents($riwayatFile), true) ?? [] : [];
    $riwayat[] = $data_booking;
    file_put_contents($riwayatFile, json_encode($riwayat, JSON_PRETTY_PRINT));

    // ✅ Simpan ke database Laravel
    Booking::create($data_booking);

    echo json_encode(['token' => $snapToken]);
} catch (\Exception $e) {
    // Cek error
    file_put_contents(__DIR__ . '/error_log.txt', $e->getMessage(), FILE_APPEND);
    http_response_code(500);
    echo json_encode(['error' => 'Gagal menyimpan data']);
}

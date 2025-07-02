<?php
require_once __DIR__ . '/../vendor/autoload.php';

\Midtrans\Config::$serverKey = 'SB-Mid-server-SF9gSwdZsGGhVYPCU0lvb8Ei';
\Midtrans\Config::$isProduction = false;
\Midtrans\Config::$isSanitized = true;
\Midtrans\Config::$is3ds = true;

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

  $riwayatFile = 'riwayat_transaksi.json';
  $riwayat = [];

  if (file_exists($riwayatFile)) {
    $isi = file_get_contents($riwayatFile);
    $riwayat = json_decode($isi, true) ?: [];
  }

  $riwayat[] = [
    'order_id' => $order_id,
    'nama' => $data['nama'],
    'email' => $data['email'],
    'hp' => $data['hp'],
    'total' => (int) $data['amount'],
    'status' => 'pending',
    'waktu' => date('Y-m-d H:i:s')
  ];

  file_put_contents($riwayatFile, json_encode($riwayat, JSON_PRETTY_PRINT));

  echo json_encode(['token' => $snapToken]);

} catch (Exception $e) {
  http_response_code(500);
  echo json_encode(['error' => $e->getMessage()]);
}

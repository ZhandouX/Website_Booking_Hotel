<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Pesan dari Pengunjung</title>
</head>
<body>
  <h2>Pesan Baru dari Website Ambon Hotel</h2>
  <p><strong>Nama:</strong> {{ $details['name'] }}</p>
  <p><strong>Email:</strong> {{ $details['email'] }}</p>
  @if(!empty($details['phone']))
    <p><strong>Telepon:</strong> {{ $details['phone'] }}</p>
  @endif
  @if(!empty($details['subject']))
    <p><strong>Subjek:</strong> {{ $details['subject'] }}</p>
  @endif
  <p><strong>Pesan:</strong></p>
  <p>{{ $details['message'] }}</p>
</body>
</html>

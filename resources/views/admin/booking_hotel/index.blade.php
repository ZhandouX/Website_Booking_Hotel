@extends('layouts.dashboard')

@section('title', 'Daftar Booking Hotel')

@section('sidebar')
    @include('admin.sidebar')
@endsection

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4">Daftar Booking Hotel</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark text-nowrap">
                <tr>
                    <th>Order ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Hotel</th>
                    <th>Kamar</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Waktu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->order_id }}</td>
                        <td>{{ $booking->nama }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->hp }}</td>
                        <td>{{ $booking->hotel }}</td>
                        <td>{{ $booking->kamar }}</td>
                        <td>Rp{{ number_format($booking->total) }}</td>
                        <td>
                            <span class="badge bg-{{ $booking->status == 'pending' ? 'warning' : ($booking->status == 'diproses' ? 'primary' : 'success') }}">
                                {{ ucfirst($booking->status) }}
                            </span>
                        </td>
                        <td>{{ $booking->waktu }}</td>
                        <td>
                            <form action="{{ route('admin.booking.updateStatus', $booking->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="d-flex flex-column gap-1">
                                    <select name="status" class="form-select form-select-sm">
                                        <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                        <option value="diproses" {{ $booking->status == 'diproses' ? 'selected' : '' }}>Sedang Diproses</option>
                                        <option value="selesai" {{ $booking->status == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                    </select>
                                    <button type="submit" class="btn btn-sm btn-primary">Ubah</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" class="text-center">Belum ada booking.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Menampilkan semua data booking
     */
    public function index()
    {
        $bookings = Booking::orderBy('waktu', 'desc')->get();
       return view('admin.booking_hotel.index', compact('bookings')); // Kirim ke view
    }

    /**
     * Update status booking (pending, diproses, selesai)
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,diproses,selesai'
        ]);

        $booking = Booking::findOrFail($id);
        $booking->status = $request->status;
        $booking->save();

        return redirect()->back()->with('success', 'Status booking berhasil diperbarui!');
    }
}

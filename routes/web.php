<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\PemesananController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DaftarKamarController;
use App\Http\Controllers\HasilPencarianController;
use App\Http\Controllers\PemesananKamarController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\DetailHotelController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HotelJsonController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ProfileController;





// Landing Page
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');


// -------------------- LOGIN & REGISTER --------------------
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login']);
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

Route::get('/admin/register', [AdminAuthController::class, 'showRegister'])->name('admin.register');
Route::post('/admin/register', [AdminAuthController::class, 'register']);

// -------------------- DASHBOARD ADMIN --------------------
Route::get('/dashboard_admin', function () {
    if (!session()->has('admin_id')) {
        return redirect()->route('admin.login')->with('error', 'Silakan login terlebih dahulu.');
    }

    return view('admin.dashboard_admin.index');
})->name('dashboard_admin');

// -------------------- HOTEL (JSON BASED) --------------------
Route::get('/admin/hotel', function () {
    if (!session()->has('admin_id')) {
        return redirect()->route('admin.login')->with('error', 'Silakan login terlebih dahulu.');
    }

    return app(HotelJsonController::class)->showData();
})->name('hotel.json');


Route::get('/admin/hotel/create', function () {
    if (!session()->has('admin_id')) {
        return redirect()->route('admin.login')->with('error', 'Silakan login terlebih dahulu.');
    }

    return app(HotelJsonController::class)->create();
})->name('hotel.create');
Route::get('/admin/hotel', [HotelJsonController::class, 'showData'])->name('hotel.json');

Route::post('/admin/hotel/store', function () {
    if (!session()->has('admin_id')) {
        return redirect()->route('admin.login')->with('error', 'Silakan login terlebih dahulu.');
    }

    return app(HotelJsonController::class)->store(request());
})->name('hotel.store');

// -------------------- BOOKING --------------------
Route::get('/booking', function () {
    if (!session()->has('admin_id')) {
        return redirect()->route('admin.login')->with('error', 'Silakan login terlebih dahulu.');
    }

    return app(BookingController::class)->index();
})->name('admin.booking.index');

Route::put('/booking/{id}/status', function ($id) {
    if (!session()->has('admin_id')) {
        return redirect()->route('admin.login')->with('error', 'Silakan login terlebih dahulu.');
    }

    return app(BookingController::class)->updateStatus(request(), $id);
})->name('admin.booking.updateStatus');



// Route Json File
Route::get('/data/{filename}', function ($filename) {
    $path = public_path('data/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    return Response::make($file, 200)->header("Content-Type", $type);
});

// Route Booking Room (Transaksi MidTrans)
Route::post('/booking/store', [PemesananController::class, 'store'])->name('booking.store');
Route::post('/booking', [PemesananController::class, 'createSnapToken']);

// Ulasan
Route::get('/ambil-ulasan', [UlasanController::class, 'ambil']);
Route::post('/kirim-ulasan', [UlasanController::class, 'simpan']);

// Signature
Route::get('/signature/create', [SignatureController::class, 'create'])->name('signature.create');
Route::post('/signature/store', [SignatureController::class, 'store'])->name('signature.store');
Route::get('/signature/{id}', [SignatureController::class, 'show'])->name('signature.show');

// Halaman utama
Route::get('/daftar_kamar', [DaftarKamarController::class, 'daftar'])->name('daftar_kamar');
Route::get('/detail_hotel', [DetailHotelController::class, 'detail_hotel'])->name('detail_hotel');

// Folder about_us
Route::get('/about_us/about', [AboutController::class, 'about'])->name('about_us.about');
Route::get('/about_us/contact', [ContactController::class, 'contact'])->name('about_us.contact');
Route::get('/about_us/service', [ServiceController::class, 'service'])->name('about_us.service');
Route::get('/about_us/team', [TeamController::class, 'team'])->name('about_us.team');

// Hotel & Kamar
Route::get('/properties', [PropertiesController::class, 'propert'])->name('properties');
Route::get('/pemesanan_kamar', [PemesananKamarController::class, 'pemesanan_kamar'])->name('pemesanan_kamar');
Route::get('/hasil_pencarian', [HasilPencarianController::class, 'hasil_pencarian'])->name('hasil_pencarian');


// API Google Maps
Route::get('/nearby-hotels', [HotelController::class, 'getNearbyHotels']);

// Autentikasi Berbasis JSON (Custom)
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});


// // Route Auth
// Route::get('/dashboard', function () {
//     if (!Session::has('user')) {
//         return redirect('/login');
//     }
//     return view('dashboard');
// })->name('dashboard');

// Route Halaman Profil
Route::get('/profile', function () {
    if (!Session::has('user')) {
        return redirect('/login');
    }
    return view('profile');
})->name('profile');


// Untuk Breeze
// require __DIR__.'/auth.php';

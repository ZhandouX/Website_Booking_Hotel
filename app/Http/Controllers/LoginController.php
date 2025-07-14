<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class LoginController extends Controller
{
    // Menampilkan form login
    public function show()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari user berdasarkan email di tabel users
        $user = User::where('email', $request->email)->first();

        // Jika tidak ditemukan atau password salah
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'Email atau password salah'])->withInput();
        }

        // Simpan sesi pengguna
        Session::put('user', [
            'id'    => $user->id,
            'name'  => $user->name,
            'email' => $user->email
        ]);

        return redirect()->route('dashboard');
    }

    // Proses logout
    public function logout()
    {
        Session::forget('user');
        return redirect('/');
    }
}

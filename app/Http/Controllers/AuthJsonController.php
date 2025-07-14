<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class AuthJsonController extends Controller
{
    private $path = 'data/users.json';

    public function showLogin() {
        return view('auth.login');
    }

    public function showRegister() {
        return view('auth.register');
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $users = json_decode(File::get(public_path($this->path)), true);

        foreach ($users as $user) {
            if ($user['email'] === $request->email && $user['password'] === $request->password) {
                Session::put('user', $user);
                return redirect('/')->with('success', 'Login berhasil!');
            }
        }

        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $users = json_decode(File::get(public_path($this->path)), true);

        foreach ($users as $user) {
            if ($user['email'] === $request->email) {
                return back()->withErrors(['email' => 'Email sudah terdaftar']);
            }
        }

        $users[] = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password // gunakan bcrypt() untuk keamanan
        ];

        File::put(public_path($this->path), json_encode($users, JSON_PRETTY_PRINT));

        return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function logout() {
        Session::forget('user');
        return redirect('/login');
    }
}

<?php
// app/Http/Controllers/AdminAuthController.php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showRegister()
    {
        return view('admin.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,superadmin'
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        return redirect('/admin/login')->with('success', 'Registrasi berhasil, silakan login.');
    }

    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return back()->with('error', 'Email atau password salah.');
        }

        session([
            'admin_id' => $admin->id,
            'admin_name' => $admin->name,
            'admin_role' => $admin->role
        ]);

        if ($admin->role === 'superadmin') {
            return redirect('dashboard_admin');
        } else {
            return redirect('/admin/hotel');
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect('/admin/login')->with('success', 'Logout berhasil.');
    }
   
}


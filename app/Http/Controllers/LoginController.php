<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\UserJsonHelper;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = UserJsonHelper::findUserByEmail($request->email);
        if (!$user || !Hash::check($request->password, $user['password'])) {
            return back()->withErrors(['email' => 'Email atau password salah']);
        }

        Session::put('user', ['name' => $user['name'], 'email' => $user['email']]);
        return redirect('/dashboard');
    }

    public function logout()
    {
        Session::forget('user');
        return redirect('/login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\UserJsonHelper;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function show()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (UserJsonHelper::findUserByEmail($request->email)) {
            return back()->withErrors(['email' => 'Email sudah digunakan.']);
        }

        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ];

        UserJsonHelper::saveUser($user);

        Session::put('user', ['name' => $user['name'], 'email' => $user['email']]);

        return redirect('/dashboard');
    }
}

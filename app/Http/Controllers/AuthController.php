<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => now()
        ]);

        return redirect('/login')
            ->with('success', 'Register berhasil');
    }

    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $user = DB::table('users')
            ->where('email', $request->email)
            ->first();

        if($user && Hash::check($request->password, $user->password))
        {
            session([
                'login' => true,
                'user' => $user->name
            ]);

            return redirect('/');
        }

        return back()->with('error', 'Email atau password salah');
    }
}
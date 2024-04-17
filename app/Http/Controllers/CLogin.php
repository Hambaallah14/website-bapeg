<?php

namespace App\Http\Controllers;

use App\Models\Signin_model;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\Auth;

class CLogin extends Controller
{
    public function index()
    {
        return view('sign-in.index', [
            "title"        => "Login - Badan Kepegawaian Provinsi Sumatera Utara",
        ]);
    }

    public function authenticate(Request $request)
    {
        $cek_data = $request->validate([
            'username'  => 'required|min:3|max:255',
            'password'  => 'required|min:5|max:255'
        ]);

        if (Auth::attempt($cek_data)) {
            $request->session()->regenerate();
            return redirect()->intended('/main-dashboard');
        }

        return back()->with('login-error', 'Login Gagal');
    }

    public function registrasi()
    {
        return view('sign-in.registrasi', [
            "title"        => "Registrasi - Badan Kepegawaian Provinsi Sumatera Utara",
        ]);
    }

    public function add_registrasi(Request $request)
    {
        $data = $request->validate([
            'name'         => 'required|max:255',
            'email'        => 'required|email:dns|unique:users',
            'username'     => 'required|min:3|max:255|unique:users',
            'password'     => 'required|min:5|max:255'
        ]);

        // encripsi password
        // $data['pass-login'] = bcrypt($data['pass-login']);
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect('/login-backend')->with('success', 'Registrasi Berhasil!');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login-backend');
    }
}

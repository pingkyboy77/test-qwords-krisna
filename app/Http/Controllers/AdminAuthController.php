<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    function index(){
        return view('auth.login');
    }

    public function doLogin(Request $request)
    {
        // dd($request->all());
        // Validasi data yang diterima dari form login
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        // dd($data);

        // Coba melakukan proses login menggunakan Auth::attempt()
        if (Auth::attempt($data)) {
            // dd($request->all());
            $request->session()->regenerate();

            // Dapatkan informasi pengguna yang masuk
            $user = User::where('email', $data['email'])->first();
            return redirect()->route('home');
        }

        // Jika login gagal, kembali ke halaman login dengan pesan error
        return back()->with('LoginError', 'Gagal Login, identitas atau password tidak ditemukan');
    }

    function logout()
    {
        // dd('masuk');
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login');
    }

}

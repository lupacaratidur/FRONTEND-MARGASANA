<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function daftar()
    {
        return view('auth/daftar', [
            'title' => 'Daftar',
        ]);
    }

    public function masuk()
    {
        return view('auth/masuk', [
            'title' => 'Masuk',
        ]);
    }

    public function register(Request $request)
    {
        $response = Http::post('http://localhost:8000/api/register', [
            'username' => $request->username,
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'password' => $request->password,
        ]);

        $data = $response->json();

        if ($response->successful()) {
            // Berhasil mendaftarkan akun, lakukan sesuatu jika diperlukan
            return redirect('masuk')->with('success', 'Berhasil mendaftarkan akun');
        } else {
            // Gagal mendaftarkan akun, tampilkan pesan kesalahan
            $errorMessage = $data['message'] ?? 'Gagal mendaftarkan akun';
            return redirect()->back()->with('error', $errorMessage);
        }
    }

    public function username()
    {
        return 'username';
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $response = Http::post('http://localhost:8000/api/login', [
            'username' => $request->username,
            'password' => $request->password,
        ]);

        $data = $response->json();

        if ($response->successful()) {
            // Simpan data nama ke dalam sesi
            session([
                'nama' => $data['user']['nama'],
                'level' => $data['user']['level'],
                'token' => $data['authorization']['token'],
            ]);
            // Berhasil login, alihkan ke halaman dashboard
            return redirect()->route('dashboard')->with('success', 'Login berhasil');
        } else {
            // Gagal login, tampilkan pesan kesalahan
            $errorMessage = $data['message'] ?? 'Gagal login';
            return redirect()->back()->with('error', $errorMessage);
        }
    }


    public function keluar(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

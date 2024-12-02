<?php

namespace App\Http\Controllers;

use App\Models\Penyewaan;
use App\Models\Gedung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenyewaanController extends Controller
{
    public function index()
    {
        // Memastikan pengguna sudah login menggunakan Auth::check()
        if (Auth::check()) {
            // Jika pengguna login, lanjutkan untuk mengambil data gedung dan penyewaan
            $gedung = Gedung::where('is_available', true)->get();
            $penyewaan = Penyewaan::where('id_user', Auth::id())->get(); // Menggunakan Auth::id() untuk mendapatkan ID pengguna
        } else {
            // Jika pengguna belum login, redirect ke halaman login
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        return view('penyewaan.index', compact('gedung', 'penyewaan'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'gedung_id' => 'required|exists:gedungs,id',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date|after_or_equal:tanggal_mulai',
            'detail_acara' => 'required|string',
        ]);

        // Memastikan pengguna sudah login menggunakan Auth::check()
        if (Auth::check()) {
            // Simpan penyewaan
            Penyewaan::create([
                'id_user' => Auth::id(), // Menggunakan Auth::id() untuk mendapatkan ID pengguna yang login
                'gedung_id' => $request->gedung_id,
                'tanggal_mulai' => $request->tanggal_mulai,
                'tanggal_selesai' => $request->tanggal_selesai,
                'detail_acara' => $request->detail_acara,
                'confirmed_status' => 0, // Default belum dikonfirmasi
            ]);

            return redirect()->route('customer.penyewaan')->with('success', 'Penyewaan berhasil dibuat.');
        } else {
            // Jika pengguna belum login, arahkan ke halaman login
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }
    }
}

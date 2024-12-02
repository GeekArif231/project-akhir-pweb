<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Alamat;
use App\Models\Kecamatan;
use App\Models\Kabupaten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // Pastikan file Blade register ada di resources/views/auth/register.blade.php
    }

    public function register(Request $request)
    {
        // Validasi Input
        $request->validate([
            'nama' => 'required|string|max:255', // Tambahkan validasi untuk 'name'
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'nomor_telepon' => 'required|string|max:20',
            'nama_jalan' => 'required|string|max:255',
            'nama_kecamatan' => 'required|string|max:255',
            'nama_kabupaten' => 'required|string|max:255',
        ]);

        // Simpan Data
        $kabupaten = Kabupaten::firstOrCreate(['nama_kabupaten' => $request->nama_kabupaten]);
        $kecamatan = Kecamatan::firstOrCreate(['nama_kecamatan' => $request->nama_kecamatan, 'kabupaten_id' => $kabupaten->id]);
        $alamat = Alamat::create(['nama_jalan' => $request->nama_jalan, 'kecamatan_id' => $kecamatan->id]);

        $user = User::create([
            'nama' => $request->nama, // Pastikan 'name' diisi
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nomor_telepon' => $request->nomor_telepon,
            'alamat_id' => $alamat->id,
        ]);

        Auth::login($user);
        // Login Otomatis
        // auth()->login($user);

        // return redirect()->route('customer.dashboard')->with('success', 'Registration successful!');
        return view('customer.dashboard')->with('success', 'Registration successful!');
    }
}


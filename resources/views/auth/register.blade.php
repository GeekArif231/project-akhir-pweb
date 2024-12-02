@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6 text-center">Register</h2>

    <!-- Menampilkan Pesan Error -->
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST" class="max-w-md mx-auto">
        @csrf

        <!-- Nama -->
        <div class="mb-4">
            <label for="nama" class="block text-gray-700">Nama</label>
            <input type="text" id="nama" name="nama" class="w-full p-2 border rounded mt-2" value="{{ old('nama') }}" required>
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" id="email" name="email" class="w-full p-2 border rounded mt-2" value="{{ old('email') }}" required>
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" id="password" name="password" class="w-full p-2 border rounded mt-2" required>
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700">Konfirmasi Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="w-full p-2 border rounded mt-2" required>
        </div>

        <!-- Nomor Telepon -->
        <div class="mb-4">
            <label for="nomor_telepon" class="block text-gray-700">Nomor Telepon</label>
            <input type="text" id="nomor_telepon" name="nomor_telepon" class="w-full p-2 border rounded mt-2" value="{{ old('nomor_telepon') }}" required>
        </div>

        <!-- Nama Jalan -->
        <div class="mb-4">
            <label for="nama_jalan" class="block text-gray-700">Nama Jalan</label>
            <input type="text" id="nama_jalan" name="nama_jalan" class="w-full p-2 border rounded mt-2" value="{{ old('nama_jalan') }}" required>
        </div>

        <!-- Nama Kecamatan -->
        <div class="mb-4">
            <label for="nama_kecamatan" class="block text-gray-700">Kecamatan</label>
            <input type="text" id="nama_kecamatan" name="nama_kecamatan" class="w-full p-2 border rounded mt-2" value="{{ old('nama_kecamatan') }}" required>
        </div>

        <!-- Nama Kabupaten -->
        <div class="mb-4">
            <label for="nama_kabupaten" class="block text-gray-700">Kota</label>
            <input type="text" id="nama_kabupaten" name="nama_kabupaten" class="w-full p-2 border rounded mt-2" value="{{ old('nama_kabupaten') }}" required>
        </div>

        <!-- Tombol Register -->
        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700">Register</button>
    </form>
</div>
@endsection

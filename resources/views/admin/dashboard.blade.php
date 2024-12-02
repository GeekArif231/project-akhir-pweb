{{-- <h1 class="bg-blue-600">Admin Dashboard</h1> --}}
{{-- <a href="{{ route('gedung.index') }}">Kelola Gedung</a> --}}
@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold text-gray-800">Admin Dashboard</h1>
        <p class="mt-4 text-lg">Selamat datang di dashboard admin. Anda dapat mengelola gedung di sini.</p>
        <div class="mt-6">
            {{-- <a href="{{ route('gedung.index') }}" class="text-white bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded">Manage Gedung</a> --}}
        </div>
    </div>
@endsection

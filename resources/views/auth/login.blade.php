@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold text-gray-800 text-center">Login</h2>

    <!-- Menampilkan pesan error jika login gagal -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Login -->
    <form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto mt-6">
        @csrf

        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email Address</label>
            <input type="email" name="email" id="email" class="form-control w-full p-2 border rounded mt-2" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" name="password" id="password" class="form-control w-full p-2 border rounded mt-2" required>
        </div>

        <div class="mb-4 flex items-center">
            <input type="checkbox" name="remember" id="remember" class="mr-2">
            <label for="remember" class="text-gray-700">Remember Me</label>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700">Login</button>
    </form>
</div>
@endsection

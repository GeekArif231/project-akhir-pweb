<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config( 'app.name', 'GedungIn') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('styles')
</head>
<body class="font-Poopins bg-gray-100">
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <nav class="bg-blue-600 p-4 text-white">
            <div class="container mx-auto flex justify-between">
                <a href="/" class="font-bold">{{ config('GedungIn', 'GedungIn') }}</a>
                <div>
                    @auth
                        <a href="{{ route('logout') }}" class="hover:bg-blue-700 px-4 py-2 rounded">Logout</a>
                    @else
                        <a href="{{ route('login') }}" class="hover:bg-blue-700 px-4 py-2 rounded">Login</a>
                        <a href="{{ route('register') }}" class="hover:bg-blue-700 px-4 py-2 rounded">Register</a>
                    @endauth
                </div>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-grow">
            @yield('content')
        </main>
    </div>
</body>
</html>

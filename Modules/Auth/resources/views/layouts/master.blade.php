<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Aplikasi Catatan' }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles {{-- Livewire Styles --}}
</head>
<body class="bg-gray-100 text-gray-800 antialiased">
<div class="min-h-screen flex flex-col">
    {{-- Navbar --}}
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <a href="/" class="text-lg font-bold text-gray-800">Aplikasi Catatan</a>
            <div>
                @auth
                    <span class="text-gray-600">Hi, {{ auth()->user()->nau_name }}</span>
                    <a href="{{ route('logout') }}" class="text-red-500 ml-4">Logout</a>
                @else
                    <a href="{{ route('login') }}" class="text-blue-500">Login</a>
                    <a href="{{ route('register') }}" class="text-blue-500 ml-4">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main class="flex-1 container mx-auto px-6 py-8">
        {{ $slot }}
    </main>
</div>

@livewireScripts {{-- Livewire Scripts --}}
</body>
</html>

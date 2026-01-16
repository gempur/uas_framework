<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Perpustakaan')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-600 text-white shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <div class="text-xl font-bold">
                    <a href="{{ route('home') }}">Sistem Perpustakaan</a>
                </div>
                <div class="flex space-x-4">
                    <a href="{{ route('pengarangs.index') }}" class="hover:bg-blue-700 px-3 py-2 rounded">Pengarang</a>
                    <a href="{{ route('raks.index') }}" class="hover:bg-blue-700 px-3 py-2 rounded">Rak</a>
                    <a href="{{ route('bukus.index') }}" class="hover:bg-blue-700 px-3 py-2 rounded">Buku</a>
                    <a href="{{ route('isi_raks.index') }}" class="hover:bg-blue-700 px-3 py-2 rounded">Isi Rak</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="container mx-auto px-4 py-8">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white mt-12">
        <div class="container mx-auto px-4 py-6 text-center">
            <p>&copy; {{ date('Y') }} Sistem Perpustakaan. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

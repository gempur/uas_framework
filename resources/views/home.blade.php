@extends('layouts.app')

@section('title', 'Home - Sistem Perpustakaan')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold text-gray-800 mb-4">Selamat Datang di Sistem Perpustakaan</h1>
    <p class="text-gray-600 mb-8">Kelola data perpustakaan Anda dengan mudah</p>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-12">
        <a href="{{ route('pengarangs.index') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
            <div class="text-blue-600 text-4xl mb-4">📝</div>
            <h3 class="text-xl font-semibold mb-2">Pengarang</h3>
            <p class="text-gray-600">Kelola data pengarang buku</p>
        </a>
        
        <a href="{{ route('raks.index') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
            <div class="text-green-600 text-4xl mb-4">📚</div>
            <h3 class="text-xl font-semibold mb-2">Rak</h3>
            <p class="text-gray-600">Kelola rak penyimpanan buku</p>
        </a>
        
        <a href="{{ route('bukus.index') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
            <div class="text-purple-600 text-4xl mb-4">📖</div>
            <h3 class="text-xl font-semibold mb-2">Buku</h3>
            <p class="text-gray-600">Kelola koleksi buku perpustakaan</p>
        </a>
        
        <a href="{{ route('isi_raks.index') }}" class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition">
            <div class="text-orange-600 text-4xl mb-4">🗄️</div>
            <h3 class="text-xl font-semibold mb-2">Isi Rak</h3>
            <p class="text-gray-600">Kelola penempatan buku di rak</p>
        </a>
    </div>
</div>
@endsection

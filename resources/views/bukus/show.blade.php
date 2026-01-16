@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Detail Buku</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Kode Buku</label>
            <p class="text-gray-800">{{ $buku->kode_buku }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Judul Buku</label>
            <p class="text-gray-800">{{ $buku->judul_buku }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Pengarang</label>
            <p class="text-gray-800">{{ $buku->pengarang->nama }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Tahun Terbit</label>
            <p class="text-gray-800">{{ $buku->tahun_terbit }}</p>
        </div>

        <div class="flex space-x-4">
            <a href="{{ route('bukus.edit', $buku) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-2 rounded">
                Edit
            </a>
            <a href="{{ route('bukus.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection

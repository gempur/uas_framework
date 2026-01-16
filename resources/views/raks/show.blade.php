@extends('layouts.app')

@section('title', 'Detail Rak')

@section('content')
<div class="max-w-4xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Detail Rak</h1>

    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">ID</label>
            <p class="text-gray-800">{{ $rak->id }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Nama Rak</label>
            <p class="text-gray-800">{{ $rak->nama_rak }}</p>
        </div>

        <div class="flex space-x-4">
            <a href="{{ route('raks.edit', $rak) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-2 rounded">
                Edit
            </a>
            <a href="{{ route('raks.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded">
                Kembali
            </a>
        </div>
    </div>

    @if($rak->bukus->count() > 0)
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Buku di Rak Ini</h2>
        <ul class="space-y-2">
            @foreach($rak->bukus as $buku)
            <li class="border-b pb-2">
                <span class="font-semibold">{{ $buku->kode_buku }}</span> - {{ $buku->judul_buku }}
            </li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@endsection

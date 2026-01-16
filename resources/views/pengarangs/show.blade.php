@extends('layouts.app')

@section('title', 'Detail Pengarang')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Detail Pengarang</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">ID</label>
            <p class="text-gray-800">{{ $pengarang->id }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Nama Pengarang</label>
            <p class="text-gray-800">{{ $pengarang->nama }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Dibuat</label>
            <p class="text-gray-800">{{ $pengarang->created_at->format('d M Y H:i') }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Terakhir Diupdate</label>
            <p class="text-gray-800">{{ $pengarang->updated_at->format('d M Y H:i') }}</p>
        </div>

        <div class="flex space-x-4">
            <a href="{{ route('pengarangs.edit', $pengarang) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-2 rounded">
                Edit
            </a>
            <a href="{{ route('pengarangs.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection

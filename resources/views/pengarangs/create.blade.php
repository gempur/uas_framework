@extends('layouts.app')

@section('title', 'Tambah Pengarang')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Tambah Pengarang</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('pengarangs.store') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama Pengarang</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama') }}" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 @error('nama') border-red-500 @enderror">
                @error('nama')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex space-x-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">
                    Simpan
                </button>
                <a href="{{ route('pengarangs.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

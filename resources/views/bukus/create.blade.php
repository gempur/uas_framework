@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Tambah Buku</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('bukus.store') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label for="kode_buku" class="block text-gray-700 font-semibold mb-2">Kode Buku</label>
                <input type="text" name="kode_buku" id="kode_buku" value="{{ old('kode_buku') }}" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 @error('kode_buku') border-red-500 @enderror">
                @error('kode_buku')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="judul_buku" class="block text-gray-700 font-semibold mb-2">Judul Buku</label>
                <input type="text" name="judul_buku" id="judul_buku" value="{{ old('judul_buku') }}" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 @error('judul_buku') border-red-500 @enderror">
                @error('judul_buku')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="pengarang_id" class="block text-gray-700 font-semibold mb-2">Pengarang</label>
                <select name="pengarang_id" id="pengarang_id" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 @error('pengarang_id') border-red-500 @enderror">
                    <option value="">-- Pilih Pengarang --</option>
                    @foreach($pengarangs as $pengarang)
                        <option value="{{ $pengarang->id }}" {{ old('pengarang_id') == $pengarang->id ? 'selected' : '' }}>
                            {{ $pengarang->nama }}
                        </option>
                    @endforeach
                </select>
                @error('pengarang_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="tahun_terbit" class="block text-gray-700 font-semibold mb-2">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" id="tahun_terbit" value="{{ old('tahun_terbit') }}" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 @error('tahun_terbit') border-red-500 @enderror">
                @error('tahun_terbit')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex space-x-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">
                    Simpan
                </button>
                <a href="{{ route('bukus.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

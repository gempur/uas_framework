@extends('layouts.app')

@section('title', 'Edit Isi Rak')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Isi Rak</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('isi_raks.update', $isiRak) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="rak_id" class="block text-gray-700 font-semibold mb-2">Rak</label>
                <select name="rak_id" id="rak_id" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 @error('rak_id') border-red-500 @enderror">
                    <option value="">-- Pilih Rak --</option>
                    @foreach($raks as $rak)
                        <option value="{{ $rak->id }}" {{ old('rak_id', $isiRak->rak_id) == $rak->id ? 'selected' : '' }}>
                            {{ $rak->nama_rak }}
                        </option>
                    @endforeach
                </select>
                @error('rak_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="buku_id" class="block text-gray-700 font-semibold mb-2">Buku</label>
                <select name="buku_id" id="buku_id" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 @error('buku_id') border-red-500 @enderror">
                    <option value="">-- Pilih Buku --</option>
                    @foreach($bukus as $buku)
                        <option value="{{ $buku->id }}" {{ old('buku_id', $isiRak->buku_id) == $buku->id ? 'selected' : '' }}>
                            {{ $buku->kode_buku }} - {{ $buku->judul_buku }}
                        </option>
                    @endforeach
                </select>
                @error('buku_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex space-x-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">
                    Update
                </button>
                <a href="{{ route('isi_raks.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Edit Rak')

@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Rak</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('raks.update', $rak) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label for="nama_rak" class="block text-gray-700 font-semibold mb-2">Nama Rak</label>
                <input type="text" name="nama_rak" id="nama_rak" value="{{ old('nama_rak', $rak->nama_rak) }}" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 @error('nama_rak') border-red-500 @enderror">
                @error('nama_rak')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex space-x-4">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">
                    Update
                </button>
                <a href="{{ route('raks.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-6 py-2 rounded">
                    Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

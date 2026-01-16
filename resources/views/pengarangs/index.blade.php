@extends('layouts.app')

@section('title', 'Daftar Pengarang')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Daftar Pengarang</h1>
    <a href="{{ route('pengarangs.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
        Tambah Pengarang
    </a>
</div>

<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <table class="min-w-full">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">ID</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Nama</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @forelse($pengarangs as $pengarang)
            <tr>
                <td class="px-6 py-4">{{ $pengarang->id }}</td>
                <td class="px-6 py-4">{{ $pengarang->nama }}</td>
                <td class="px-6 py-4">
                    <div class="flex space-x-2">
                        <a href="{{ route('pengarangs.show', $pengarang) }}" class="text-blue-600 hover:text-blue-800">Lihat</a>
                        <a href="{{ route('pengarangs.edit', $pengarang) }}" class="text-yellow-600 hover:text-yellow-800">Edit</a>
                        <form action="{{ route('pengarangs.destroy', $pengarang) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="px-6 py-4 text-center text-gray-500">Tidak ada data pengarang</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $pengarangs->links() }}
</div>
@endsection

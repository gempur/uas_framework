@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800">Daftar Buku</h1>
    <a href="{{ route('bukus.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
        Tambah Buku
    </a>
</div>

<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <table class="min-w-full">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Kode Buku</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Judul</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Pengarang</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Tahun</th>
                <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @forelse($bukus as $buku)
            <tr>
                <td class="px-6 py-4">{{ $buku->kode_buku }}</td>
                <td class="px-6 py-4">{{ $buku->judul_buku }}</td>
                <td class="px-6 py-4">{{ $buku->pengarang->nama }}</td>
                <td class="px-6 py-4">{{ $buku->tahun_terbit }}</td>
                <td class="px-6 py-4">
                    <div class="flex space-x-2">
                        <a href="{{ route('bukus.show', $buku) }}" class="text-blue-600 hover:text-blue-800">Lihat</a>
                        <a href="{{ route('bukus.edit', $buku) }}" class="text-yellow-600 hover:text-yellow-800">Edit</a>
                        <form action="{{ route('bukus.destroy', $buku) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="px-6 py-4 text-center text-gray-500">Tidak ada data buku</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $bukus->links() }}
</div>
@endsection

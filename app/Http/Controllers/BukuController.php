<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Pengarang;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus = Buku::with('pengarang')->orderBy('kode_buku')->paginate(10);
        return view('bukus.index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengarangs = Pengarang::orderBy('nama')->get();
        return view('bukus.create', compact('pengarangs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required|string|max:255|unique:bukus',
            'judul_buku' => 'required|string|max:255',
            'pengarang_id' => 'required|exists:pengarangs,id',
            'tahun_terbit' => 'required|integer|min:1900|max:' . (date('Y') + 1),
        ]);

        Buku::create($request->all());

        return redirect()->route('bukus.index')
            ->with('success', 'Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        $buku->load('pengarang', 'raks');
        return view('bukus.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        $pengarangs = Pengarang::orderBy('nama')->get();
        return view('bukus.edit', compact('buku', 'pengarangs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'kode_buku' => 'required|string|max:255|unique:bukus,kode_buku,' . $buku->id,
            'judul_buku' => 'required|string|max:255',
            'pengarang_id' => 'required|exists:pengarangs,id',
            'tahun_terbit' => 'required|integer|min:1900|max:' . (date('Y') + 1),
        ]);

        $buku->update($request->all());

        return redirect()->route('bukus.index')
            ->with('success', 'Buku berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect()->route('bukus.index')
            ->with('success', 'Buku berhasil dihapus');
    }
}

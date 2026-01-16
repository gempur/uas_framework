<?php

namespace App\Http\Controllers;

use App\Models\Pengarang;
use Illuminate\Http\Request;

class PengarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengarangs = Pengarang::orderBy('nama')->paginate(10);
        return view('pengarangs.index', compact('pengarangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengarangs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        Pengarang::create($request->all());

        return redirect()->route('pengarangs.index')
            ->with('success', 'Pengarang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengarang $pengarang)
    {
        return view('pengarangs.show', compact('pengarang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengarang $pengarang)
    {
        return view('pengarangs.edit', compact('pengarang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengarang $pengarang)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $pengarang->update($request->all());

        return redirect()->route('pengarangs.index')
            ->with('success', 'Pengarang berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengarang $pengarang)
    {
        $pengarang->delete();

        return redirect()->route('pengarangs.index')
            ->with('success', 'Pengarang berhasil dihapus');
    }
}

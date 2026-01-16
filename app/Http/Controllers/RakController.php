<?php

namespace App\Http\Controllers;

use App\Models\Rak;
use Illuminate\Http\Request;

class RakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $raks = Rak::orderBy('nama_rak')->paginate(10);
        return view('raks.index', compact('raks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('raks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_rak' => 'required|string|max:255',
        ]);

        Rak::create($request->all());

        return redirect()->route('raks.index')
            ->with('success', 'Rak berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rak $rak)
    {
        $rak->load('bukus');
        return view('raks.show', compact('rak'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rak $rak)
    {
        return view('raks.edit', compact('rak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rak $rak)
    {
        $request->validate([
            'nama_rak' => 'required|string|max:255',
        ]);

        $rak->update($request->all());

        return redirect()->route('raks.index')
            ->with('success', 'Rak berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rak $rak)
    {
        $rak->delete();

        return redirect()->route('raks.index')
            ->with('success', 'Rak berhasil dihapus');
    }
}

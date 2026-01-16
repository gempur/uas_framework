<?php

namespace App\Http\Controllers;

use App\Models\IsiRak;
use App\Models\Rak;
use App\Models\Buku;
use Illuminate\Http\Request;

class IsiRakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $isiRaks = IsiRak::with(['rak', 'buku'])->paginate(10);
        return view('isi_raks.index', compact('isiRaks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $raks = Rak::orderBy('nama_rak')->get();
        $bukus = Buku::orderBy('kode_buku')->get();
        return view('isi_raks.create', compact('raks', 'bukus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rak_id' => 'required|exists:raks,id',
            'buku_id' => 'required|exists:bukus,id',
        ]);

        IsiRak::create($request->all());

        return redirect()->route('isi_raks.index')
            ->with('success', 'Isi Rak berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(IsiRak $isiRak)
    {
        $isiRak->load(['rak', 'buku.pengarang']);
        return view('isi_raks.show', compact('isiRak'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IsiRak $isiRak)
    {
        $raks = Rak::orderBy('nama_rak')->get();
        $bukus = Buku::orderBy('kode_buku')->get();
        return view('isi_raks.edit', compact('isiRak', 'raks', 'bukus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IsiRak $isiRak)
    {
        $request->validate([
            'rak_id' => 'required|exists:raks,id',
            'buku_id' => 'required|exists:bukus,id',
        ]);

        $isiRak->update($request->all());

        return redirect()->route('isi_raks.index')
            ->with('success', 'Isi Rak berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IsiRak $isiRak)
    {
        $isiRak->delete();

        return redirect()->route('isi_raks.index')
            ->with('success', 'Isi Rak berhasil dihapus');
    }
}

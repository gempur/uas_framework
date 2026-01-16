<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = ['kode_buku', 'judul_buku', 'pengarang_id', 'tahun_terbit'];

    public function pengarang()
    {
        return $this->belongsTo(Pengarang::class);
    }

    public function isiRaks()
    {
        return $this->hasMany(IsiRak::class);
    }

    public function raks()
    {
        return $this->belongsToMany(Rak::class, 'isi_raks', 'buku_id', 'rak_id');
    }
}

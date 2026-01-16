<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    protected $fillable = ['nama_rak'];

    public function isiRaks()
    {
        return $this->hasMany(IsiRak::class);
    }

    public function bukus()
    {
        return $this->belongsToMany(Buku::class, 'isi_raks', 'rak_id', 'buku_id');
    }
}

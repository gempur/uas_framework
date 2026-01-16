<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IsiRak extends Model
{
    protected $fillable = ['rak_id', 'buku_id'];

    public function rak()
    {
        return $this->belongsTo(Rak::class);
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}

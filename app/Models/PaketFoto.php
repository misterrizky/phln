<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaketFoto extends Model
{
    protected $table = 'transaction.paket_foto';
    public $timestamps = false;
    protected $casts = [
        'tanggal' => 'date',
    ];
    public function getImageAttribute()
    {
        return asset('storage/' . $this->foto);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KegiatanDokumen extends Model
{
    protected $table = 'transaction.kegiatan_dokumen';
    public $timestamps = false;
    protected $casts = [
        'tanggal_terbit' => 'date',
    ];
}

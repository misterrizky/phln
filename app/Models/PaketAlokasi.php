<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaketAlokasi extends Model
{
    protected $table = 'transaction.paket_alokasi';
    public $timestamps = false;
    protected $casts = [
        'tanggal_revisi' => 'date',
    ];
}

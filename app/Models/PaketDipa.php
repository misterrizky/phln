<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaketDipa extends Model
{
    protected $table = 'transaction.paket_dipa';
    public $timestamps = false;
    protected $casts = [
        'tanggal_revisi' => 'date',
    ];
}

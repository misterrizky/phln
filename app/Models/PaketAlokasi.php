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
    public function matauang_alokasi(){
        return $this->belongsTo(MataUang::class,'mata_uang_alokasi','id');
    }
}

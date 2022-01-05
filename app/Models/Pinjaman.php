<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $table = 'transaction.pinjaman';
    protected $casts = [
        'tanggal_efektif' => 'date',
        'tanggal_closing' => 'date',
    ];
    public $timestamps = false;
    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }
    public function mata_uang()
    {
        return $this->belongsTo(MataUang::class);
    }
}

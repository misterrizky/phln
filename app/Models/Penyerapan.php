<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyerapan extends Model
{
    protected $table = 'transaction.kegiatan_penyerapan';
    public $timestamps = false;
    protected $casts = [
        'tanggal' => 'date',
    ];
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class,'kegiatan_id','id');
    }
    public function mata_uang()
    {
        return $this->belongsTo(MataUang::class,'mata_uang_id','id');
    }
    public function rate()
    {
        return $this->belongsTo(Rate::class,'mata_uang_id','mata_uang_id');
    }
}

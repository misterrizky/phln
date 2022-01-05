<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = 'master.rate_mata_uang';
    public $timestamps = false;
    protected $casts = [
        'awal' => 'date',
        'akhir' => 'date',
    ];
    
    public function matauang(){
        return $this->belongsTo(MataUang::class,'mata_uang_id','id');
    }
}

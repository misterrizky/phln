<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataUang extends Model
{
    protected $table = 'master.mata_uang';
    public $timestamps = false;
    public function rate(){
        return $this->belongsTo(Rate::class,'mata_uang_id','id');
    }
}
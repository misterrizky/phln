<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $table = 'master.agency';
    public $timestamps = false;

    public function kl(){
        return $this->belongsTo(KlEksternal::class,'kl_id','id');
    }
    public function unor(){
        return $this->belongsTo(Unor::class,'unor_id','id');
    }
    public function unit_kerja(){
        return $this->belongsTo(UnitKerja::class,'unit_kerja_id','id');
    }

}

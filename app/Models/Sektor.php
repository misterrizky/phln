<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sektor extends Model
{
    protected $table = 'master.sektor';
    public $timestamps = false;
    public function kegiatan(){
        return $this->hasMany(Kegiatan::class,'sektor_id','id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{
    protected $table = 'master.satker';
    public $timestamps = false;

    public function department(){
        return $this->belongsTo(Department::class,'department_id','id');
    }
    public function unor(){
        return $this->belongsTo(Unor::class,'unor_id','id');
    }
}

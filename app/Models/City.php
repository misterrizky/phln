<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'regional.kabupaten';
    public $timestamps = false;
    public function province()
    {
        return $this->belongsTo(Province::class,'id_prov','id_prov');
    }
}

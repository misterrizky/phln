<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'regional.provinsi';
    public $timestamps = false;
    public function paket(){
        return $this->hasMany(Paket::class,'prov_id','id_prov');
    }
}

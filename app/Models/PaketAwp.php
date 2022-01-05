<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class PaketAwp extends Model
{
    protected $table = 'transaction.paket_awp';
    public $timestamps = false;
    public function paket(){
        return $this->belongsTo(Paket::class,'paket_id','id');
    }
    public function kategori(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function subkategori(){
        return $this->belongsTo(Category::class,'subcategory_id','id');
    }
    public function tahunOwp()
    {
        return $this->hasMany(PaketAwp::class,'paket_id','paket_id')->select(DB::raw('sum("target_dana") AS target_dana'))->where('ta','>', date('Y'))->groupBy('paket_id')->groupBy('ta')->orderBy('ta','ASC');
    }
}

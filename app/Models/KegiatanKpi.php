<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KegiatanKpi extends Model
{
    protected $table = 'transaction.kegiatan_kpi';
    public $timestamps = false;
    protected $casts = [
        'tanggal_efektif' => 'date',
        'tanggal_closing' => 'date',
    ];
    public function detil(){
        return $this->hasMany(KegiatanKpiDetail::class,'kpi_id','id');
    }
}

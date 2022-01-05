<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KegiatanExec extends Model
{
    protected $table = 'transaction.kegiatan_exec';
    public $timestamps = false;
    public function kl()
    {
        return $this->belongsTo(Department::class,'department_code','kode');
    }
    public function unor()
    {
        return $this->belongsTo(Unor::class,'unor_code','id_unor');
    }
    public function satker()
    {
        return $this->belongsTo(Satker::class,'satker_code','kode');
    }
}

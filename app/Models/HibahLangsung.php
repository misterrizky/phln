<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HibahLangsung extends Model
{
    protected $table = 'transaction.hibah_langsung';
    public $timestamps = false;
    protected $casts = [
        'tanggal_awal' => 'date',
        'tanggal_akhir' => 'date',
    ];
    public function sektor()
    {
        return $this->belongsTo(Sektor::class);
    }
    public function kurs()
    {
        return $this->belongsTo(Rate::class,'rate_mata_uang_id','id');
    }
    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }
    public function mata_uang()
    {
        return $this->belongsTo(MataUang::class);
    }
}

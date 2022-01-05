<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'transaction.kegiatan';
    public $timestamps = false;
    protected $casts = [
        'tanggal_efektif' => 'date',
        'tanggal_closing' => 'date',
    ];
    public function sektor()
    {
        return $this->belongsTo(Sektor::class)->where('tipe','Pinjaman');
    }
    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }
    public function mata_uang()
    {
        return $this->belongsTo(MataUang::class);
    }
    public function mata_uang_2()
    {
        return $this->belongsTo(MataUang::class);
    }
    public function department()
    {
        return $this->belongsTo(KlEksternal::class,'exec_kl_code','kode');
    }
    public function dipa(){
        return $this->hasMany(KegiatanDipa::class,'kegiatan_id','id');
    }
    public function kpi(){
        return $this->hasMany(KegiatanKpi::class,'kegiatan_id','id');
    }
    public function dokumen(){
        return $this->hasMany(KegiatanDokumen::class,'kegiatan_id','id');
    }
    public function exec(){
        return $this->hasMany(KegiatanExec::class,'kegiatan_id','id');
    }
    public function imp(){
        return $this->hasMany(KegiatanImp::class,'kegiatan_id','id');
    }
    public function exec_kl()
    {
        return $this->belongsTo(KlEksternal::class,'exec_kl_code','kode');
    }
    public function exec_unor()
    {
        return $this->belongsTo(Unor::class,'exec_unor_code','id_unor');
    }
    public function exec_satker()
    {
        return $this->belongsTo(Satker::class,'exec_satker_code','kode');
    }
    public function imp_kl()
    {
        return $this->belongsTo(KlEksternal::class,'imp_kl_code','kode');
    }
    public function imp_unor()
    {
        return $this->belongsTo(Unor::class,'imp_unor_code','id_unor');
    }
    public function imp_satker()
    {
        return $this->belongsTo(Satker::class,'imp_satker_code','kode');
    }
    public function managementUnit()
    {
        return $this->hasMany(ManagementUnit::class,'kegiatan_id','id');
    }
    public function penyerapan()
    {
        return $this->hasMany(Penyerapan::class,'id','kegiatan_id');
    }
    public function paket()
    {
        return $this->hasMany(Paket::class,'kegiatan_id','id');
    }
    // public static function konversi($kondisi,$parameter)
    // {
    //     $nilai_kurs = 0;
    //     foreach(Kegiatan::where('tipe_kegiatan','=',$kondisi)->get() AS $row){
    //         $mata_uang = MataUang::where('id',$row->mata_uang_id)->first();
    //         if($mata_uang->kode != "IDR"){
    //             $rates = Rate::where('mata_uang_id', $row->mata_uang_id)->first();
    //             $nilai_kurs += $rates->rate * $row->$parameter;
    //         }else{
    //             $nilai_kurs += $row->$parameter;
    //         }
    //     }
    //     return $nilai_kurs;
    // }
}

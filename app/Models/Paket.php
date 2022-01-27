<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'transaction.paket';
    public $timestamps = false;
    public function provinsi(){
        return $this->belongsTo(Province::class,'prov_id','id_prov');
    }
    public function kabupaten(){
        return $this->belongsTo(City::class,'kab_id','id');
    }
    public function matauang_alokasi(){
        return $this->belongsTo(MataUang::class,'mata_uang_alokasi','id');
    }
    public function matauang_kontrak(){
        return $this->belongsTo(MataUang::class,'mata_uang_nilai_kontrak','id');
    }
    public function penarikan(){
        return $this->belongsTo(Penarikan::class,'penarikan_id','id');
    }
    public function paketOwp()
    {
        return $this->hasMany(PaketAwp::class,'paket_id','id')->select(DB::raw('sum("target_dana") AS target_dana'),'ta')->where('ta','>', date('Y'))->groupBy('ta')->groupBy('paket_id')->orderBy('ta','ASC');
    }
    public function last_fisik()
    {
        return $this->belongsTo(PaketAwp::class,'paket_id','id')->orderBy('id','desc');
    }
    public function last_keu()
    {
        $data = $this->belongsTo(PaketAwp::class,'paket_id','id')->orderBy('id','desc')->first();
        $target = $data['target_dana'] ?: 0;
        $real = $data['real_dana'] ?: 0;
        if($real != 0){
            $keu = $real / $target;
        }else{
            $keu = 0;
        }
        return $keu;
    }
    public function paket_awp()
    {
        return $this->hasMany(PaketAwp::class,'paket_id','id')->select(DB::raw('sum("target_dana") AS target_dana'),'ta')->groupBy('ta')->groupBy('paket_id')->orderBy('ta','ASC');
    }
    public function paketFoto()
    {
        return $this->hasMany(PaketFoto::class,'paket_id','id')->orderBy('id','ASC');
    }
    public function paketAlokasi()
    {
        return $this->hasMany(PaketAlokasi::class,'paket_id','id')->orderBy('id','ASC');
    }
    public function paket_alokasi()
    {
        return $this->belongsTo(PaketAlokasi::class,'id','paket_id')->orderBy('tanggal_revisi','desc');
    }
    public function paketDipa()
    {
        return $this->hasMany(PaketDipa::class,'paket_id','id')->orderBy('tahun','ASC');
    }
    public function getLastDipa()
    {
        return $this->belongsTo(PaketDipa::class,'id','paket_id')->where('tahun',date('Y'))->orderBy('tanggal_revisi','DESC');
    }
    public function paketAwp()
    {
        return $this->hasMany(PaketAwp::class,'paket_id','id')->orderBy('ta','ASC')->orderBy('bulan','ASC');
    }
    public function q1($paket)
    {
        return PaketAwp::select(DB::raw('sum("target_dana") AS target_dana'), DB::raw('sum("real_dana") AS real_dana'))->where('ta','=',date('Y'))->where('paket_id','=',$paket)->where('bulan','>=','1')->where('bulan','<=','3')->get();
    }
    public function q2($paket)
    {
        return PaketAwp::select(DB::raw('sum("target_dana") AS target_dana'), DB::raw('sum("real_dana") AS real_dana'))->where('ta','=',date('Y'))->where('paket_id','=',$paket)->where('bulan','=','2')->first();
    }
    public function q3($paket)
    {
        return PaketAwp::select(DB::raw('sum("target_dana") AS target_dana'), DB::raw('sum("real_dana") AS real_dana'))->where('ta','=',date('Y'))->where('paket_id','=',$paket)->where('bulan','=','3')->first();
    }
    public function q4($paket)
    {
        return PaketAwp::select(DB::raw('sum("target_dana") AS target_dana'), DB::raw('sum("real_dana") AS real_dana'))->where('ta','=',date('Y'))->where('paket_id','=',$paket)->where('bulan','=','4')->first();
    }
    public function q_b($paket,$bulan)
    {
        return PaketAwp::where('ta','=',date('Y'))->where('paket_id','=',$paket)->where('bulan','=',$bulan)->first();
    }
    public function q_dana()
    {
        return $this->hasMany(PaketAwp::class,'paket_id','id')->where('ta','=',date('Y'));
    }
    public function getLastDipaByTahun()
    {
        return $this->belongsTo(PaketDipa::class,'id','paket_id')->orderBy('tanggal_revisi','DESC')->first();
    }
    public function get_dipa()
    {
        return $this->belongsTo(PaketDipa::class,'id','paket_id');
    }
    protected $casts = [
        'tanggal_mkontrak' => 'date',
        'tanggal_skontrak' => 'date',
        'tanggal_mtender' => 'date',
        'tanggal_stender' => 'date',
    ];
}

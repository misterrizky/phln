<?php

namespace App\Http\Controllers\Phln;

use App\Models\Rate;
use App\Models\Paket;
use App\Models\Kegiatan;
use App\Models\MataUang;
use App\Models\PaketAwp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PaketAwpController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ta' => 'required',
            'bulan' => 'required',
            'target_dana' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('ta')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('ta'),
                ]);
            }elseif($errors->has('bulan')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('bulan'),
                ]);
            }elseif($errors->has('target_dana')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('target_dana'),
                ]);
            }
        }
        $paket = Paket::where('id',$request->paket_id)->first();
        $data = PaketAwp::where('paket_id',$request->paket_id)->where('ta',$request->ta)->where('bulan',$request->bulan)->first();
        if($data){
            $data = $data;
        }else{
            $data = new PaketAwp();
        }
        $data->kegiatan_id = $request->kegiatan_id;
        $data->paket_id = $request->paket_id;
        $data->ta = $request->ta;
        $data->bulan = $request->bulan;
        $data->target_dana = str_replace("_","",str_replace(",",".",str_replace(".","",$request->target_dana)));
        $data->target_fisik = str_replace(',','',$request->target_fisik) ?: 0;
        if($data){
            $data->save();
        }else{
            $data->update();
        }
        return response()->json([
            'alert' => 'success',
            'message' => 'Paket AWP tersimpan',
            'redirect' => 'input',
            'route' => route('phln.paket.edit',[$paket->kegiatan_id,$paket->id]),
        ]);
    }
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ta' => 'required',
            'bulan' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('ta')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('ta'),
                ]);
            }elseif($errors->has('bulan')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('bulan'),
                ]);
            }
        }
        $paket = Paket::where('id',$request->paket_id)->first();
        $data = PaketAwp::where('paket_id',$request->paket_id)->where('ta',$request->ta)->where('bulan',$request->bulan)->first();
        if($data){
            $data->real_dana = str_replace("_","",str_replace(",",".",str_replace(".","",$request->real_dana)));
            $data->real_fisik = str_replace(',','',$request->real_fisik) ?: 0;
            $data->update();
        }else{
            return response()->json([
                'alert' => 'info',
                'message' => 'Harap masukkan target terlebih dahulu',
                'redirect' => 'input',
                'route' => route('phln.paket.edit',[$paket->kegiatan_id,$paket->id]),
            ]);
        }
        $kegiatan = Kegiatan::where('id',$request->kegiatan_id)->first();
        $today = date('Y-m-d');
        $efektif = $kegiatan->tanggal_efektif;
        $closing = $kegiatan->tanggal_closing;
        $etr1 = $efektif->diffInDays($today);
        $etr2 = $closing->diffInDays($efektif);
        $etr = $etr1/$etr2;
        $nilai_penyerapan = PaketAwp::where('kegiatan_id', $data->kegiatan_id)->sum('real_dana');
        $jumlah_penyerapan = $nilai_penyerapan;
        $jumlah_kegiatan = $kegiatan->nilai_konversi;
        $dr = $jumlah_penyerapan / $jumlah_kegiatan;
        $pv = $dr/$etr;
        $kegiatan->etr = $etr;
        $kegiatan->dr = $dr;
        $kegiatan->pv = $pv;
        $kegiatan->penyerapan = $jumlah_penyerapan;
        $st = '';
        if($dr = 0){
            if($etr > 0.7){
                $st = 'At Risk';
            }elseif($etr <= 0.7){
                $st = 'Behind Schedule';
            }
        }else{
            if($pv <= 0.3 || $etr > 0.7){
                $st = 'At Risk';
            }elseif($pv >= 0.3 AND $pv <= 1 || $etr <= 0.7){
                $st = 'Behind Schedule';
            }elseif($pv >= 1){
                $st = 'On Schedule';
            }
        }
        $kegiatan->st = $st;
        $kegiatan->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Paket AWP tersimpan',
            'redirect' => 'input',
            'route' => route('phln.paket.edit',[$paket->kegiatan_id,$paket->id]),
        ]);
    }
    public function update_masalah(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ta' => 'required',
            'bulan' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('ta')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('ta'),
                ]);
            }elseif($errors->has('bulan')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('bulan'),
                ]);
            }
        }
        $paket = Paket::where('id',$request->paket_id)->first();
        $data = PaketAwp::where('paket_id',$request->paket_id)->where('ta',$request->ta)->where('bulan',$request->bulan)->first();
        if($data){
            $data->masalah = $request->masalah;
            $data->tindak_lanjut = $request->tindak_lanjut;
            $data->category_id = $request->kategori?:0;
            $data->target_penyelesaian = $request->target_penyelesaian;
            $data->subcategory_id = $request->subkategori?:0;
            $data->update();
        }else{
            return response()->json([
                'alert' => 'info',
                'message' => 'Harap masukkan target terlebih dahulu',
                'redirect' => 'input',
                'route' => route('phln.paket.edit',[$paket->kegiatan_id,$paket->id]),
            ]);
        }
        $kegiatan = Kegiatan::where('id',$request->kegiatan_id)->first();
        $today = date('Y-m-d');
        $efektif = $kegiatan->tanggal_efektif;
        $closing = $kegiatan->tanggal_closing;
        $etr1 = $efektif->diffInDays($today);
        $etr2 = $closing->diffInDays($efektif);
        $etr = $etr1/$etr2;
        $nilai_penyerapan = PaketAwp::where('kegiatan_id', $data->kegiatan_id)->sum('real_dana');
        $jumlah_penyerapan = $nilai_penyerapan;
        $jumlah_kegiatan = $kegiatan->nilai_konversi;
        $dr = $jumlah_penyerapan / $jumlah_kegiatan;
        $pv = $dr/$etr;
        $kegiatan->etr = $etr;
        $kegiatan->dr = $dr;
        $kegiatan->pv = $pv;
        $kegiatan->penyerapan = $jumlah_penyerapan;
        $st = '';
        if($dr = 0){
            if($etr > 0.7){
                $st = 'At Risk';
            }elseif($etr <= 0.7){
                $st = 'Behind Schedule';
            }
        }else{
            if($pv <= 0.3 || $etr > 0.7){
                $st = 'At Risk';
            }elseif($pv >= 0.3 AND $pv <= 1 || $etr <= 0.7){
                $st = 'Behind Schedule';
            }elseif($pv >= 1){
                $st = 'On Schedule';
            }
        }
        $kegiatan->st = $st;
        $kegiatan->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Paket AWP tersimpan',
            'redirect' => 'input',
            'route' => route('phln.paket.edit',[$paket->kegiatan_id,$paket->id]),
        ]);
    }
    public function destroy(PaketAwp $paketAwp)
    {
        $paket = Paket::where('id',$paketAwp->paket_id)->first();
        $paketAwp->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Paket AWP terhapus',
            'redirect' => 'input',
            'route' => route('phln.paket.edit',[$paket->kegiatan_id,$paket->id]),
        ]);
    }
}

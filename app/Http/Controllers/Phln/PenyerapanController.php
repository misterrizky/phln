<?php

namespace App\Http\Controllers\Phln;

use App\Models\Rate;
use App\Models\Kegiatan;
use App\Models\MataUang;
use App\Models\Penyerapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PenyerapanController extends Controller
{
    public function index(Request $request,Kegiatan $kegiatan)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = Penyerapan::where('kegiatan_id','=',$kegiatan->id)
            // ->where('nama','LIKE','%'.$keywords.'%')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.penyerapan.list',compact('collection','kegiatan'));
        }
        return view('page.app.penyerapan.main', compact('kegiatan'));
    }
    public function create(Kegiatan $kegiatan)
    {
        $mata_uang = MataUang::get();
        return view('page.app.penyerapan.input', ['data' => new Penyerapan, 'mata_uang' => $mata_uang,'kegiatan' => $kegiatan]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mata_uang' => 'required',
            'nilai' => 'required',
            'tanggal' => 'required|date_format:d-m-Y',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if($errors->has('mata_uang')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('mata_uang'),
                ]);
            }elseif($errors->has('nilai')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nilai'),
                ]);
            }elseif($errors->has('tanggal')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal'),
                ]);
            }
        }
        $penyerapan = new Penyerapan;
        $penyerapan->kegiatan_id = $request->kegiatan_id;
        $penyerapan->tanggal = $request->tanggal;
        $penyerapan->nilai = str_replace(',','',$request->nilai);
        $penyerapan->mata_uang_id = $request->mata_uang;

        // $penyerapan->nilai = $jumlah_penyerapan;
        $kegiatan = Kegiatan::where('id',$request->kegiatan_id)->first();
        $today = date('Y-m-d');
        $efektif = $kegiatan->tanggal_efektif;
        $closing = $kegiatan->tanggal_closing;
        $etr1 = $efektif->diffInDays($today);
        $etr2 = $closing->diffInDays($efektif);
        $etr = $etr1/$etr2;
        $penyerapan->save();
        $nilai_penyerapan = Penyerapan::where('kegiatan_id', $kegiatan->id)->sum('nilai');
        $mata_uang_penyerapan = MataUang::where('id',$penyerapan->mata_uang_id)->first();
        if($mata_uang_penyerapan->kode != "IDR"){
            $rate_kegiatan = Rate::where('awal' ,'<=' ,$request->tanggal)
            ->where('akhir' ,'>=' ,$request->tanggal)
            ->where('mata_uang_id' ,'=' ,$mata_uang_penyerapan->id)
            ->first();
            $nilai_kurs_penyerapan = $rate_kegiatan->rate;
            $jumlah_penyerapan = floatval($nilai_penyerapan)*floatval($nilai_kurs_penyerapan);
        }else{
            $jumlah_penyerapan = $nilai_penyerapan;
        }
        $mata_uang_kegiatan = MataUang::where('id',$kegiatan->mata_uang_id)->first();
        if($mata_uang_kegiatan->kode != "IDR"){
            $rate_kegiatan = Rate::where('awal' ,'<=' ,$request->tanggal)
            ->where('akhir' ,'>=' ,$request->tanggal)
            ->where('mata_uang_id' ,'=' ,$mata_uang_kegiatan->id)
            ->first();
            $nilai_kurs_kegiatan = $rate_kegiatan->rate;
            $jumlah_kegiatan = floatval($kegiatan->nilai)*floatval($nilai_kurs_kegiatan);
        }else{
            $jumlah_kegiatan = $kegiatan->nilai;
        }
        $dr = $jumlah_penyerapan / $jumlah_kegiatan;
        $pv = $dr/$etr;
        $kegiatan->etr = $etr;
        $kegiatan->dr = $dr;
        $kegiatan->pv = $pv;
        $kegiatan->penyerapan = $jumlah_penyerapan;
        $st = '';
        if($pv <= 0.3 || $etr > 0.7){
            $st = 'At Risk';
        }elseif($pv >= 0.3 AND $pv <= 1 || $etr <= 0.7){
            $st = 'Behind Schedule';
        }elseif($pv >= 1){
            $st = 'On Schedule';
        }
        $kegiatan->st = $st;
        $kegiatan->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Penyerapan Tersimpan',
        ]);
    }
    public function show(Penyerapan $penyerapan)
    {
        //
    }
    public function edit(Kegiatan $kegiatan,Penyerapan $penyerapan)
    {
        $mata_uang = MataUang::get();
        return view('page.app.penyerapan.input', ['data' => $penyerapan, 'mata_uang' => $mata_uang,'kegiatan' => $kegiatan]);
    }
    public function update(Request $request, Penyerapan $penyerapan)
    {
        $validator = Validator::make($request->all(), [
            'mata_uang' => 'required',
            'nilai' => 'required',
            'tanggal' => 'required|date_format:d-m-Y',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if($errors->has('mata_uang')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('mata_uang'),
                ]);
            }elseif($errors->has('nilai')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nilai'),
                ]);
            }elseif($errors->has('tanggal')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal'),
                ]);
            }
        }
        $penyerapan->kegiatan_id = $request->kegiatan_id;
        $penyerapan->tanggal = $request->tanggal;
        $penyerapan->nilai = str_replace(',','',$request->nilai);
        $penyerapan->mata_uang_id = $request->mata_uang;
        
        // $penyerapan->nilai = $jumlah_penyerapan;
        $kegiatan = Kegiatan::where('id',$request->kegiatan_id)->first();
        $today = date('Y-m-d');
        $efektif = $kegiatan->tanggal_efektif;
        $closing = $kegiatan->tanggal_closing;
        $etr1 = $efektif->diffInDays($today);
        $etr2 = $closing->diffInDays($efektif);
        $etr = $etr1/$etr2;
        $penyerapan->update();
        $nilai_penyerapan = Penyerapan::where('kegiatan_id', $kegiatan->id)->sum('nilai');
        $mata_uang_penyerapan = MataUang::where('id',$penyerapan->mata_uang_id)->first();
        if($mata_uang_penyerapan->kode != "IDR"){
            $rate_kegiatan = Rate::where('awal' ,'<=' ,$request->tanggal)
            ->where('akhir' ,'>=' ,$request->tanggal)
            ->where('mata_uang_id' ,'=' ,$mata_uang_penyerapan->id)
            ->first();
            $nilai_kurs_penyerapan = $rate_kegiatan->rate;
            $jumlah_penyerapan = floatval($nilai_penyerapan)*floatval($nilai_kurs_penyerapan);
        }else{
            $jumlah_penyerapan = $nilai_penyerapan;
        }
        // dd($jumlah_penyerapan);
        $mata_uang_kegiatan = MataUang::where('id',$kegiatan->mata_uang_id)->first();
        if($mata_uang_kegiatan->kode != "IDR"){
            $rate_kegiatan = Rate::where('awal' ,'<=' ,$request->tanggal)
            ->where('akhir' ,'>=' ,$request->tanggal)
            ->where('mata_uang_id' ,'=' ,$mata_uang_kegiatan->id)
            ->first();
            $nilai_kurs_kegiatan = $rate_kegiatan->rate;
            $jumlah_kegiatan = floatval($kegiatan->nilai)*floatval($nilai_kurs_kegiatan);
        }else{
            $jumlah_kegiatan = $kegiatan->nilai;
        }
        // dd($jumlah_kegiatan);
        $dr = $jumlah_penyerapan / $jumlah_kegiatan;
        $pv = $dr/$etr;
        $kegiatan->etr = $etr;
        $kegiatan->dr = $dr;
        $kegiatan->pv = $pv;
        $st = '';
        if($pv <= 0.3 || $etr > 0.7){
            $st = 'At Risk';
        }elseif($pv >= 0.3 AND $pv <= 1 || $etr <= 0.7){
            $st = 'Behind Schedule';
        }elseif($pv >= 1){
            $st = 'On Schedule';
        }
        $kegiatan->st = $st;
        $kegiatan->penyerapan = $jumlah_penyerapan;
        $kegiatan->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Penyerapan Diupdate',
        ]);
    }
    public function destroy(Penyerapan $penyerapan)
    {
        $penyerapan->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Penyerapan terhapus',
        ]);
    }
}
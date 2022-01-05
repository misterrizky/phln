<?php

namespace App\Http\Controllers\Phln;

use App\Models\Rate;
use App\Models\Donor;
use App\Models\Sektor;
use App\Models\MataUang;
use Illuminate\Http\Request;
use App\Models\HibahLangsung;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HibahLangsungController extends Controller
{
    public function index(Request $request)
    {
        $sektor_user = Auth::guard('office')->user()->sektor;
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            // if($sektor_user == 5){
                $collection = HibahLangsung::where('no_register','LIKE','%'.$keywords.'%')
                ->whereRaw('UPPER("nama") LIKE \'%'.$keywords.'%\'')
                ->orderBy('id', 'ASC')
                ->paginate(10);
            // }else{
            //     $collection = HibahLangsung::where('sektor_id','=',$sektor_user)
            //     ->where('no_register','LIKE','%'.$keywords.'%')
            //     ->whereRaw('UPPER("nama") LIKE \'%'.$keywords.'%\'')
            //     ->orderBy('id', 'ASC')
            //     ->paginate(10);
            // }
            return view('page.app.hibahLangsung.list',compact('collection'));
        }
        return view('page.app.hibahLangsung.main');
    }
    public function create()
    {
        $donor = Donor::get();
        $mata_uang = MataUang::get();
        $sektor = Sektor::where('tipe','Hibah')->get();
        return view('page.app.hibahLangsung.input', ['data' => new hibahLangsung, 'donor' => $donor, 'mata_uang' => $mata_uang, 'sektor' => $sektor]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'no_register' => 'required',
            'mata_uang' => 'required',
            'nama' => 'required',
            'nilai' => 'required',
            'real_nilai' => 'required',
            'sektor' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('no_register')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('no_register'),
                ]);
            }elseif($errors->has('mata_uang')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('mata_uang'),
                ]);
            }elseif($errors->has('nama')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif($errors->has('nilai')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nilai'),
                ]);
            }elseif($errors->has('real_nilai')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('real_nilai'),
                ]);
            }elseif($errors->has('sektor')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('sektor'),
                ]);
            }
        }
        // $mata_uang = MataUang::where('id',$request->mata_uang)->first();
        // $rate_kegiatan = Rate::where('awal' ,'<=' ,date('Y-m-d'))
        // ->where('akhir' ,'>=' ,date('Y-m-d'))
        // ->where('mata_uang_id' ,'=' ,$mata_uang->id)
        // ->first();
        // if($mata_uang->kode != "IDR"){
        //     $nilai_kurs_kegiatan = $rate_kegiatan->rate;
        //     $nilai_rp = str_replace(',','',$request->nilai)*$nilai_kurs_kegiatan;
        //     $real_nilai_rp = str_replace(',','',$request->real_nilai)*$nilai_kurs_kegiatan;
        // }else{
        //     $nilai_rp = str_replace(',','',$request->nilai);
        //     $real_nilai_rp = str_replace(',','',$request->real_nilai);
        // }
        $data = new HibahLangsung;
        $data->sektor_id = $request->sektor?:0;
        $data->nama = $request->nama;
        $data->donor_id = $request->donor ?:0;
        $data->no_register = $request->no_register;
        $data->tanggal_awal = $request->tanggal_awal;
        $data->tanggal_akhir = $request->tanggal_akhir;
        $data->mata_uang_id = $request->mata_uang ?:0;
        $data->rate_mata_uang_id = $request->rate_kegiatan ?:0;
        $data->nilai = str_replace(',','',$request->nilai);
        $data->nilai_rp = str_replace(',','',$request->nilai_rp);
        // $data->nilai_rp = $nilai_rp;
        $data->real_nilai = str_replace(',','',$request->real_nilai);
        $data->real_rp = str_replace(',','',$request->real_rp);
        // $data->real_rp = $real_nilai_rp;
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Hibah Langsung tersimpan',
        ]);
    }
    public function show(HibahLangsung $hibahLangsung)
    {
        //
    }
    public function edit(HibahLangsung $hibahLangsung)
    {
        $donor = Donor::get();
        $mata_uang = MataUang::get();
        $sektor = Sektor::where('tipe','Hibah')->get();
        return view('page.app.hibahLangsung.input', ['data' => $hibahLangsung, 'donor' => $donor, 'mata_uang' => $mata_uang, 'sektor' => $sektor]);
    }
    public function update(Request $request, HibahLangsung $hibahLangsung)
    {
        $validator = Validator::make($request->all(), [
            'mata_uang' => 'required',
            'nama' => 'required',
            'nilai' => 'required',
            'real_nilai' => 'required',
            'sektor' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if($errors->has('mata_uang')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('mata_uang'),
                ]);
            }elseif($errors->has('nama')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif($errors->has('nilai')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nilai'),
                ]);
            }elseif($errors->has('real_nilai')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('real_nilai'),
                ]);
            }elseif($errors->has('sektor')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('sektor'),
                ]);
            }
        }
        // $mata_uang = MataUang::where('id',$request->mata_uang)->first();
        // $rate_kegiatan = Rate::where('awal' ,'<=' ,date('Y-m-d'))
        // ->where('akhir' ,'>=' ,date('Y-m-d'))
        // ->where('mata_uang_id' ,'=' ,$mata_uang->id)
        // ->first();
        // if($mata_uang->kode != "IDR"){
        //     $nilai_kurs_kegiatan = $rate_kegiatan->rate;
        //     $nilai_rp = str_replace(',','',$request->nilai)*$nilai_kurs_kegiatan;
        //     $real_nilai_rp = str_replace(',','',$request->real_nilai)*$nilai_kurs_kegiatan;
        // }else{
        //     $nilai_rp = str_replace(',','',$request->nilai);
        //     $real_nilai_rp = str_replace(',','',$request->real_nilai);
        // }
        $hibahLangsung->sektor_id = $request->sektor?:0;
        $hibahLangsung->nama = $request->nama;
        $hibahLangsung->donor_id = $request->donor ?:0;
        $hibahLangsung->no_register = $request->no_register;
        $hibahLangsung->tanggal_awal = $request->tanggal_awal;
        $hibahLangsung->tanggal_akhir = $request->tanggal_akhir;
        $hibahLangsung->mata_uang_id = $request->mata_uang ?:0;
        $hibahLangsung->rate_mata_uang_id = $request->rate_kegiatan ?:0;
        $hibahLangsung->nilai = str_replace(',','',$request->nilai);
        $hibahLangsung->nilai_rp = str_replace(',','',$request->nilai_rp);
        // $hibahLangsung->nilai_rp = $nilai_rp;
        $hibahLangsung->real_nilai = str_replace(',','',$request->real_nilai);
        $hibahLangsung->real_rp = str_replace(',','',$request->real_rp);
        // $hibahLangsung->real_rp = $real_nilai_rp;
        $hibahLangsung->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Hibah Langsung terubah',
        ]);
    }
    public function destroy(HibahLangsung $hibahLangsung)
    {
        $hibahLangsung->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Hibah Langsung terhapus',
        ]);
    }
}

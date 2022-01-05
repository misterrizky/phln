<?php

namespace App\Http\Controllers\Phln;

use Carbon\Carbon;
use App\Models\Rate;
use App\Models\Unor;
use App\Models\Donor;
use App\Models\Satker;
use App\Models\Sektor;
use App\Models\MataUang;
use App\Models\PaketAwp;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\HibahTerencana;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HibahTerencanaController extends Controller
{
    public function index(Request $request)
    {
        $sektor_user = Auth::guard('office')->user()->sektor_id;
        if (Auth::guard('office')->user()->role <= 3 || Auth::guard('office')->user()->role == 5){
            $ar = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('st','=','At Risk')
            ->orderBy('id', 'ASC')
            ->get()->count();
            $bs = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('st','=','Behind Schedule')
            ->orderBy('id', 'ASC')
            ->get()->count();
            $os = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('st','=','On Schedule')
            ->orderBy('id', 'ASC')
            ->get()->count();
        }else{
            $ar = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','At Risk')
            ->orderBy('id', 'ASC')
            ->get()->count();
            $bs = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','Behind Schedule')
            ->orderBy('id', 'ASC')
            ->get()->count();
            $os = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','On Schedule')
            ->orderBy('id', 'ASC')
            ->get()->count();
        }
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            if (Auth::guard('office')->user()->role <= 3 || Auth::guard('office')->user()->role == 5){
                $collection = HibahTerencana::where('tipe_kegiatan','=','Hibah')
                ->where('kode_register','LIKE','%'.$keywords.'%')
                ->whereRaw('UPPER("judul") LIKE \'%'.$keywords.'%\'')
                ->orderBy('id', 'ASC')
                ->paginate(10);
            }else{
                $collection = HibahTerencana::where('tipe_kegiatan','=','Hibah')
                ->where('sektor_id','=',$sektor_user)
                ->where('kode_register','LIKE','%'.$keywords.'%')
                ->whereRaw('UPPER("judul") LIKE \'%'.$keywords.'%\'')
                ->orderBy('id', 'ASC')
                ->paginate(10);
            }
            return view('page.app.hibah.list',compact('collection'));
        }
        return view('page.app.hibah.main',compact('ar','bs','os'));
    }
    public function risk()
    {
        $sektor_user = Auth::guard('office')->user()->sektor_id;
        if (Auth::guard('office')->user()->role <= 3 || Auth::guard('office')->user()->role == 5){
            $collection = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('st','=','At Risk')
            ->orderBy('id', 'ASC')
            ->get();
            $bs = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('st','=','Behind Schedule')
            ->orderBy('id', 'ASC')
            ->get()->count();
            $os = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('st','=','On Schedule')
            ->orderBy('id', 'ASC')
            ->get()->count();
        }else{
            $collection = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','At Risk')
            ->orderBy('id', 'ASC')
            ->get();
            $bs = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','Behind Schedule')
            ->orderBy('id', 'ASC')
            ->get()->count();
            $os = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','On Schedule')
            ->orderBy('id', 'ASC')
            ->get()->count();
        }
        return view('page.app.hibah.risk',compact('collection','bs','os'));
    }
    public function bs()
    {
        $sektor_user = Auth::guard('office')->user()->sektor_id;
        if (Auth::guard('office')->user()->role <= 3 || Auth::guard('office')->user()->role == 5){
            $collection = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('st','=','Behind Schedule')
            ->orderBy('id', 'ASC')
            ->get();
            $ar = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('st','=','At Risk')
            ->orderBy('id', 'ASC')
            ->get()->count();
            $os = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('st','=','On Schedule')
            ->orderBy('id', 'ASC')
            ->get()->count();
        }else{
            $collection = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','Behind Schedule')
            ->orderBy('id', 'ASC')
            ->get();
            $ar = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','At Risk')
            ->orderBy('id', 'ASC')
            ->get()->count();
            $os = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','On Schedule')
            ->orderBy('id', 'ASC')
            ->get()->count();
        }
        return view('page.app.hibah.bs',compact('collection','ar','os'));
    }
    public function os()
    {
        $sektor_user = Auth::guard('office')->user()->sektor_id;
        if (Auth::guard('office')->user()->role <= 3 || Auth::guard('office')->user()->role == 5){
            $collection = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('st','=','On Schedule')
            ->orderBy('id', 'ASC')
            ->get();
            $ar = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('st','=','At Risk')
            ->orderBy('id', 'ASC')
            ->get()->count();
            $bs = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('st','=','Behind Schedule')
            ->orderBy('id', 'ASC')
            ->get()->count();
        }else{
            $collection = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','On Schedule')
            ->orderBy('id', 'ASC')
            ->get();
            $ar = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','At Risk')
            ->orderBy('id', 'ASC')
            ->get()->count();
            $bs = HibahTerencana::where('tipe_kegiatan','=','Hibah')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','Behind Schedule')
            ->orderBy('id', 'ASC')
            ->get()->count();
        }
        return view('page.app.hibah.os',compact('collection','ar','bs'));
    }
    public function create()
    {
        $donor = Donor::get();
        $mata_uang = MataUang::get();
        $department = Department::get();
        $unor = Unor::get();
        $satker = Satker::get();
        $sektor = Sektor::where('tipe','Pinjaman')->get();
        return view('page.app.hibah.input', ['data' => new HibahTerencana, 'sektor' => $sektor, 'donor' => $donor, 'mata_uang' => $mata_uang , 'department' => $department, 'unor' => $unor, 'satker' => $satker]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_register' => 'required|unique:pgsql.transaction.kegiatan',
            'no_loan' => 'required',
            'donor' => 'required',
            'mata_uang' => 'required',
            'judul' => 'required',
            'nilai' => 'required',
            'nilai_konversi' => 'required',
            'tanggal_efektif' => 'required|date_format:d-m-Y',
            'tanggal_closing' => 'required|date_format:d-m-Y|after:tanggal_efektif',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('kode_register')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kode_register'),
                ]);
            }elseif($errors->has('no_loan')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('no_loan'),
                ]);
            }elseif($errors->has('donor')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('donor'),
                ]);
            }elseif($errors->has('mata_uang')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('mata_uang'),
                ]);
            }elseif($errors->has('judul')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('judul'),
                ]);
            }elseif($errors->has('nilai_konversi')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nilai_konversi'),
                ]);
            }elseif($errors->has('nilai')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nilai'),
                ]);
            }elseif($errors->has('tanggal_efektif')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal_efektif'),
                ]);
            }elseif($errors->has('tanggal_closing')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal_closing'),
                ]);
            }
        }
        $data = new HibahTerencana;
        $data->kode_register = $request->kode_register;
        $data->no_loan = $request->no_loan;
        $data->donor_id = $request->donor;
        $data->mata_uang_id = $request->mata_uang;
        $data->mata_uang_2_id = $request->mata_uang_2;
        $data->judul = Str::title($request->judul);
        $data->tujuan = $request->tujuan;
        if($request->nilai){
            $data->nilai = str_replace("_","",str_replace(",",".",str_replace(".","",$request->nilai)));
        }
        if($request->nilai_2){
            $data->nilai_2 = str_replace("_","",str_replace(",",".",str_replace(".","",$request->nilai_2)));
        }
        if($request->nilai_konversi){
            $data->nilai_konversi = str_replace("_","",str_replace(",",".",str_replace(".","",$request->nilai_konversi)));
        }
        $data->tanggal_efektif = $request->tanggal_efektif;
        $data->tanggal_closing = $request->tanggal_closing;
        $data->sasaran = $request->sasaran;
        $data->komponen = $request->komponen;
        $data->lingkup_kegiatan = $request->lingkeg;
        $data->sektor_id = $request->sektor;
        $data->metode_pembayaran = $request->metode_pembayaran;
        $data->etr = 0;
        $data->dr = 0;
        $data->pv = 0;
        $today = date('Y-m-d');
        $efektif = Carbon::parse($request->tanggal_efektif);
        $closing = Carbon::parse($request->tanggal_closing);
        $etr1 = $efektif->diffInDays($today);
        $etr2 = $closing->diffInDays($efektif);
        $etr = $etr1/$etr2;
        $dr = 0;
        // $pv = $dr/$etr;
        $pv = 0;
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
        $data->st = $st;
        $data->tipe_kegiatan = "Hibah";
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Kegiatan tersimpan',
            'redirect' => 'input',
            'route' => route('phln.hibah-terencana.edit',$data->id),
        ]);
    }
    public function show(HibahTerencana $hibahTerencana)
    {
        //
    }
    public function edit(HibahTerencana $hibahTerencana)
    {
        $donor = Donor::get();
        $mata_uang = MataUang::get();
        $department = Department::get();
        $unor = Unor::get();
        $satker = Satker::get();
        $sektor = Sektor::where('tipe','Pinjaman')->get();
        return view('page.app.hibah.input', ['data' => $hibahTerencana, 'sektor' => $sektor, 'donor' => $donor, 'mata_uang' => $mata_uang , 'department' => $department, 'unor' => $unor, 'satker' => $satker]);
    }
    public function update(Request $request, HibahTerencana $hibahTerencana)
    {
        $validator = Validator::make($request->all(), [
            'kode_register' => 'required',
            'no_loan' => 'required',
            'donor' => 'required',
            'mata_uang' => 'required',
            'judul' => 'required',
            'nilai' => 'required',
            'nilai_konversi' => 'required',
            'tanggal_efektif' => 'required|date_format:d-m-Y',
            'tanggal_closing' => 'required|date_format:d-m-Y|after:tanggal_efektif',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('kode_register')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kode_register'),
                ]);
            }elseif($errors->has('no_loan')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('no_loan'),
                ]);
            }elseif($errors->has('donor')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('donor'),
                ]);
            }elseif($errors->has('mata_uang')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('mata_uang'),
                ]);
            }elseif($errors->has('judul')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('judul'),
                ]);
            }elseif($errors->has('nilai_konversi')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nilai_konversi'),
                ]);
            }elseif($errors->has('nilai')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nilai'),
                ]);
            }elseif($errors->has('tanggal_efektif')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal_efektif'),
                ]);
            }elseif($errors->has('tanggal_closing')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal_closing'),
                ]);
            }
        }
        $hibahTerencana->kode_register = $request->kode_register;
        $hibahTerencana->no_loan = $request->no_loan;
        $hibahTerencana->donor_id = $request->donor;
        $hibahTerencana->mata_uang_id = $request->mata_uang;
        $hibahTerencana->mata_uang_2_id = $request->mata_uang_2;
        $hibahTerencana->judul = Str::title($request->judul);
        $hibahTerencana->tujuan = $request->tujuan;
        if($request->nilai){
            $hibahTerencana->nilai = str_replace("_","",str_replace(",",".",str_replace(".","",$request->nilai)));
        }
        if($request->nilai_2){
            $hibahTerencana->nilai_2 = str_replace("_","",str_replace(",",".",str_replace(".","",$request->nilai_2)));
        }
        if($request->nilai_konversi){
            $hibahTerencana->nilai_konversi = str_replace("_","",str_replace(",",".",str_replace(".","",$request->nilai_konversi)));
        }
        $hibahTerencana->tanggal_efektif = $request->tanggal_efektif;
        $hibahTerencana->tanggal_closing = $request->tanggal_closing;
        $hibahTerencana->sasaran = $request->sasaran;
        $hibahTerencana->komponen = $request->komponen;
        $hibahTerencana->sektor_id = $request->sektor;
        $hibahTerencana->metode_pembayaran = $request->metode_pembayaran;
        $hibahTerencana->lingkup_kegiatan = $request->lingkeg;
        $today = date('Y-m-d');
        $efektif = Carbon::parse($request->tanggal_efektif);
        $closing = Carbon::parse($request->tanggal_closing);
        $etr1 = $efektif->diffInDays($today);
        $etr2 = $closing->diffInDays($efektif);
        $etr = $etr1/$etr2;
        $dr = 0;
        // $pv = $dr/$etr;
        $pv = 0;
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
        $hibahTerencana->st = $st;
        $hibahTerencana->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Kegiatan terupdate',
            'redirect' => 'input',
            'route' => route('phln.hibah-terencana.edit',$hibahTerencana->id),
        ]);
    }
    public function destroy(HibahTerencana $hibahTerencana)
    {
        $hibahTerencana->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Kegiatan terhapus',
        ]);
    }
    public function sync()
    {
        $allkegiatan = HibahTerencana::get();
        foreach($allkegiatan AS $kegiatan){
            $today = date('Y-m-d');
            $efektif = $kegiatan->tanggal_efektif;
            $closing = $kegiatan->tanggal_closing;
            $etr1 = $efektif->diffInDays($today);
            $etr2 = $closing->diffInDays($efektif);
            $etr = $etr1/$etr2;
            $penyerapan = PaketAwp::where('kegiatan_id',$kegiatan->id)->orderBy('id','DESC')->first();
            if($penyerapan != null){
                $nilai_penyerapan = PaketAwp::where('kegiatan_id', $kegiatan->id)->sum('real_dana');
                $jumlah_penyerapan = $nilai_penyerapan;
                $dr = $jumlah_penyerapan / $kegiatan->nilai_konversi;
                $pv = $dr/$etr;
                $kegiatan->nilai_konversi = $kegiatan->nilai_konversi;
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
            }else{
                $kegiatan->etr = $etr;
            }
            $kegiatan->update();
        }
        return response()->json([
            'alert' => 'success',
            'message' => 'Sinkronasi Berhasil',
        ]);
    }
}

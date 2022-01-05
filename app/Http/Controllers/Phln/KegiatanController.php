<?php

namespace App\Http\Controllers\Phln;

use Carbon\Carbon;
use App\Models\Rate;
use App\Models\Unor;
use App\Models\Donor;
use App\Models\Satker;
use App\Models\Sektor;
use App\Models\Kegiatan;
use App\Models\MataUang;
use App\Models\PaketAwp;
use App\Models\Department;
use App\Models\Penyerapan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use \PDF;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        $sektor_user = Auth::guard('office')->user()->sektor_id;
        if (Auth::guard('office')->user()->role <= 3 || Auth::guard('office')->user()->role == 5){
            $ar = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('st','=','At Risk')
            ->orderBy('id', 'ASC')
            ->get();
            $bs = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('st','=','Behind Schedule')
            ->orderBy('id', 'ASC')
            ->get();
            $os = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('st','=','On Schedule')
            ->orderBy('id', 'ASC')
            ->get();
        }else{
            $ar = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','At Risk')
            ->orderBy('id', 'ASC')
            ->get();
            $bs = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','Behind Schedule')
            ->orderBy('id', 'ASC')
            ->get();
            $os = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','On Schedule')
            ->orderBy('id', 'ASC')
            ->get();
        }
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            if (Auth::guard('office')->user()->role <= 3 || Auth::guard('office')->user()->role == 5){
                $collection = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
                ->where('kode_register','LIKE','%'.$keywords.'%')
                ->whereRaw('UPPER("judul") LIKE \'%'.$keywords.'%\'')
                ->orderBy('id', 'ASC')
                ->paginate(5);
            }else{
                $collection = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
                ->where('sektor_id','=',$sektor_user)
                ->where('kode_register','LIKE','%'.$keywords.'%')
                ->whereRaw('UPPER("judul") LIKE \'%'.$keywords.'%\'')
                ->orderBy('id', 'ASC')
                ->paginate(5);
            }
            return view('page.app.kegiatan.list',compact('collection'));
        }
        return view('page.app.kegiatan.main',compact('ar','bs','os'));
    }
    public function risk()
    {
        $sektor_user = Auth::guard('office')->user()->sektor_id;
        if (Auth::guard('office')->user()->role <= 3 || Auth::guard('office')->user()->role == 5){
            $ar = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('st','=','At Risk')
            ->orderBy('id', 'ASC')
            ->get();
            $bs = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('st','=','Behind Schedule')
            ->orderBy('id', 'ASC')
            ->get();
            $os = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('st','=','On Schedule')
            ->orderBy('id', 'ASC')
            ->get();
        }else{
            $ar = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','At Risk')
            ->orderBy('id', 'ASC')
            ->get();
            $bs = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','Behind Schedule')
            ->orderBy('id', 'ASC')
            ->get();
            $os = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','On Schedule')
            ->orderBy('id', 'ASC')
            ->get();
        }
        return view('page.app.kegiatan.risk',compact('ar','bs','os'));
    }
    public function bs()
    {
        $sektor_user = Auth::guard('office')->user()->sektor_id;
        if (Auth::guard('office')->user()->role <= 3 || Auth::guard('office')->user()->role == 5){
            $bs = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('st','=','Behind Schedule')
            ->orderBy('id', 'ASC')
            ->get();
            $ar = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('st','=','At Risk')
            ->orderBy('id', 'ASC')
            ->get();
            $os = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('st','=','On Schedule')
            ->orderBy('id', 'ASC')
            ->get();
        }else{
            $bs = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','Behind Schedule')
            ->orderBy('id', 'ASC')
            ->get();
            $ar = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','At Risk')
            ->orderBy('id', 'ASC')
            ->get();
            $os = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','On Schedule')
            ->orderBy('id', 'ASC')
            ->get();
        }
        return view('page.app.kegiatan.bs',compact('bs','ar','os'));
    }
    public function os()
    {
        $sektor_user = Auth::guard('office')->user()->sektor_id;
        if (Auth::guard('office')->user()->role <= 3 || Auth::guard('office')->user()->role == 5){
            $os = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('st','=','On Schedule')
            ->orderBy('id', 'ASC')
            ->get();
            $ar = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('st','=','At Risk')
            ->orderBy('id', 'ASC')
            ->get();
            $bs = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('st','=','Behind Schedule')
            ->orderBy('id', 'ASC')
            ->get();
        }else{
            $os = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','On Schedule')
            ->orderBy('id', 'ASC')
            ->get();
            $ar = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','At Risk')
            ->orderBy('id', 'ASC')
            ->get();
            $bs = Kegiatan::where('tipe_kegiatan','=','Pinjaman')
            ->where('sektor_id','=',$sektor_user)
            ->where('st','=','Behind Schedule')
            ->orderBy('id', 'ASC')
            ->get();
        }
        return view('page.app.kegiatan.os',compact('os','ar','bs'));
    }
    public function create()
    {
        $donor = Donor::get();
        $mata_uang = MataUang::get();
        $department = Department::get();
        $unor = Unor::get();
        $satker = Satker::get();
        $sektor = Sektor::where('tipe','Pinjaman')->get();
        return view('page.app.kegiatan.input', ['data' => new Kegiatan,'sektor' => $sektor, 'donor' => $donor, 'mata_uang' => $mata_uang , 'department' => $department, 'unor' => $unor, 'satker' => $satker]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_register' => 'required|unique:pgsql.transaction.kegiatan',
            'no_loan' => 'required',
            'donor' => 'required',
            'mata_uang' => 'required',
            'total_nilai' => 'required',
            'judul' => 'required',
            'nilai' => 'required',
            'tanggal_efektif' => 'required|date_format:Y-m-d',
            'tanggal_closing' => 'required|date_format:Y-m-d|after:tanggal_efektif',
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
            }elseif($errors->has('total_nilai')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('total_nilai'),
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
        $data = new Kegiatan;
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
        if($request->total_nilai){
            $data->nilai_konversi = str_replace("_","",str_replace(",",".",str_replace(".","",$request->total_nilai)));
        }
        $data->tanggal_efektif = $request->tanggal_efektif;
        $data->tanggal_closing = $request->tanggal_closing;
        $data->sasaran = $request->sasaran;
        $data->komponen = $request->komponen;
        $data->lingkup_kegiatan = $request->lingkeg;
        $data->sektor_id = $request->sektor?:0;
        $data->metode_pembayaran = $request->metode_pembayaran;
        $data->etr = 0;
        $data->dr = 0;
        $data->pv = 0;

        // $mata_uang_kegiatan = MataUang::where('id',$request->mata_uang)->first();
        // if($mata_uang_kegiatan->kode != "IDR"){
        //     $rate_kegiatan = Rate::where('awal' ,'<=' ,date('Y-m-d'))
        //     ->where('akhir' ,'>=' ,date('Y-m-d'))
        //     ->where('mata_uang_id' ,'=' ,$mata_uang_kegiatan->id)
        //     ->first();
        //     $nilai_kurs_kegiatan = $rate_kegiatan->rate;
        //     $nilai_konversi = floatval($request->nilai)*floatval($nilai_kurs_kegiatan);
        // }else{
        //     $nilai_konversi = $request->nilai;
        // }
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
        $data->tipe_kegiatan = "Pinjaman";
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Kegiatan tersimpan',
            'redirect' => 'input',
            'route' => route('phln.kegiatan.edit',$data->id),
        ]);
    }
    public function show(Kegiatan $kegiatan)
    {
        //
    }
    public function edit(Kegiatan $kegiatan)
    {
        $donor = Donor::get();
        $mata_uang = MataUang::get();
        $department = Department::get();
        $unor = Unor::get();
        $satker = Satker::get();
        $sektor = Sektor::where('tipe','Pinjaman')->get();
        return view('page.app.kegiatan.input', ['data' => $kegiatan,'sektor' => $sektor, 'donor' => $donor, 'mata_uang' => $mata_uang , 'department' => $department, 'unor' => $unor, 'satker' => $satker]);
    }
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $validator = Validator::make($request->all(), [
            'kode_register' => 'required',
            'no_loan' => 'required',
            'donor' => 'required',
            'mata_uang' => 'required',
            'judul' => 'required',
            'nilai' => 'required',
            'total_nilai' => 'required',
            'tanggal_efektif' => 'required|date_format:Y-m-d',
            'tanggal_closing' => 'required|date_format:Y-m-d|after:tanggal_efektif',
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
            }elseif($errors->has('total_nilai')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('total_nilai'),
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
        $kegiatan->kode_register = $request->kode_register;
        $kegiatan->no_loan = $request->no_loan;
        $kegiatan->donor_id = $request->donor;
        $kegiatan->mata_uang_id = $request->mata_uang;
        $kegiatan->mata_uang_2_id = $request->mata_uang_2;
        $kegiatan->judul = Str::title($request->judul);
        $kegiatan->tujuan = $request->tujuan;
        if($request->nilai){
            $kegiatan->nilai = str_replace("_","",str_replace(",",".",str_replace(".","",$request->nilai)));
        }
        if($request->nilai_2){
            $kegiatan->nilai_2 = str_replace("_","",str_replace(",",".",str_replace(".","",$request->nilai_2)));
        }
        if($request->total_nilai){
            $kegiatan->nilai_konversi = str_replace("_","",str_replace(",",".",str_replace(".","",$request->total_nilai)));
        }
        $kegiatan->tanggal_efektif = $request->tanggal_efektif;
        $kegiatan->tanggal_closing = $request->tanggal_closing;
        $kegiatan->sasaran = $request->sasaran;
        $kegiatan->komponen = $request->komponen;
        $kegiatan->sektor_id = $request->sektor?:0;
        $kegiatan->metode_pembayaran = $request->metode_pembayaran;
        $kegiatan->lingkup_kegiatan = $request->lingkeg;
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
        $kegiatan->st = $st;
        $kegiatan->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Kegiatan terupdate',
            'redirect' => 'input',
            'route' => route('phln.kegiatan.edit',$kegiatan->id),
        ]);
    }
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Kegiatan terhapus',
        ]);
    }
    public function sync()
    {
        $allkegiatan = Kegiatan::get();
        foreach($allkegiatan AS $kegiatan){
            $today = date('Y-m-d');
            $efektif = $kegiatan->tanggal_efektif;
            $closing = $kegiatan->tanggal_closing;
            $etr1 = $efektif->diffInDays($today);
            $etr2 = $closing->diffInDays($efektif);
            $etr = $etr1/$etr2;
            $st = '';
            $penyerapan = PaketAwp::where('kegiatan_id',$kegiatan->id)->orderBy('id','DESC')->first();
            if($penyerapan != null){
                $nilai_penyerapan = PaketAwp::where('kegiatan_id', $kegiatan->id)->sum('real_dana');
                $jumlah_penyerapan = $nilai_penyerapan;
                // $mata_uang_kegiatan = MataUang::where('id',$kegiatan->mata_uang_id)->first();
                // if($mata_uang_kegiatan->kode != "IDR"){
                //     $rate_kegiatan = Rate::where('awal' ,'<=' ,$today)
                //     ->where('akhir' ,'>=' ,$today)
                //     ->where('mata_uang_id' ,'=' ,$mata_uang_kegiatan->id)
                //     ->first();
                //     $nilai_kurs_kegiatan = $rate_kegiatan->rate;
                //     $jumlah_kegiatan = floatval($kegiatan->nilai)*floatval($nilai_kurs_kegiatan);
                // }else{
                //     $jumlah_kegiatan = $kegiatan->nilai;
                // }
                $dr = $jumlah_penyerapan / $kegiatan->nilai_konversi;
                $pv = $dr/$etr;
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
                $kegiatan->etr = $etr;
                $kegiatan->dr = $dr;
                $kegiatan->pv = $pv;
                $kegiatan->penyerapan = $jumlah_penyerapan;
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
    public function cetak_pdf()
    {
        $kegiatan = Kegiatan::select('sektor_id')->with('sektor')->where('sektor_id','!=',NULL)->groupBy('sektor_id')->get();
        
        $pdf = PDF::loadview('page.app.pdf.kegiatan',['kegiatan'=>$kegiatan])->setPaper('a4', 'landscape');
        return $pdf->download('kegiatan-'.date('Y').'.pdf');
    }
}

<?php

namespace App\Http\Controllers\Phln;

use Carbon\Carbon;
use App\Models\City;
use App\Models\Paket;
use App\Models\Category;
use App\Models\Kegiatan;
use App\Models\PaketAwp;
use App\Models\Province;
use Carbon\CarbonPeriod;
use App\Models\Penarikan;
use Illuminate\Support\Str;
use App\Models\KegiatanDipa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PaketController extends Controller
{
    public function project_brief(Request $request, Kegiatan $kegiatan)
    {
        $q_kegiatan = DB::select(DB::raw('
        SELECT
            unnest(ARRAY[1,2]) as "type",
            SUM( "tbl"."nilai_konversi" ) - SUM ( "tbl"."penyerapan" ) AS "sisa",
            SUM ( "tbl"."penyerapan" ) AS "penyerapan"
        FROM
            "transaction"."kegiatan" AS "tbl"
        WHERE
            "tbl"."id" = '.$kegiatan->id.'
        '));
        $arr_k = array();
        foreach($q_kegiatan as $item){
            $nama = "";
            $jumlah = 0;
            if($item->type == 1){
                $nama = "Belum terserap";
                $jumlah = number_format($item->sisa);
                // $color = 'am4core.color("#ED1C24")';
            }
            if($item->type == 2){
                $nama = "Penyerapan";
                $jumlah = number_format($item->penyerapan);
                // $color = 'am4core.color("#ED1C24")';
            }
            $temp=array(
                "nama"=>$nama,
                "jumlah"=>$jumlah
            );
            array_push($arr_k,$temp);
        }
        $kegiatans = json_encode($arr_k);
        $kegiatanss = Kegiatan::where('id','=',$kegiatan->id)->get();
        $arr_ks = array();
        for ($i=0; $i < 2; $i++) { 
            $today = date('Y-m-d');
            $efektif = $kegiatan->tanggal_efektif;
            $closing = $kegiatan->tanggal_closing;
            $etr1 = $efektif->diffInDays($today);
            $etr2 = $closing->diffInDays($today);
            if($i == 1){
                $nama = "Elapsed";
                $jumlah = $etr1;
            }else{
                $nama = "Un-Elapsed";
                $jumlah = $etr2;
            }
            $temps=array(
                "nama"=>$nama,
                "jumlah"=>$jumlah
            );
            array_push($arr_ks,$temps);
        }
        $year = date("Y");
        $kegiatanss = json_encode($arr_ks);
        $kinerja_kegiatan = PaketAwp::select('kegiatan_id','ta','bulan', DB::raw('SUM("real_dana") as "rd"'))->where('kegiatan_id','=',$kegiatan->id)->groupBy('kegiatan_id','ta','bulan')->orderBy('bulan','asc')->orderBy('ta','ASC')->get();
        $pagu_dipa = KegiatanDipa::where('kegiatan_id','=',$kegiatan->id)->where('tahun','=',$year)->get()->sum('dipa');
        $realisasi = KegiatanDipa::where('kegiatan_id','=',$kegiatan->id)->where('tahun','=',$year)->get()->sum('dipa_real');
        return view('page.app.paketBrief.main', compact('kegiatan','kegiatans','kegiatanss','kinerja_kegiatan','pagu_dipa','realisasi'));
    }
    public function index(Request $request, Kegiatan $kegiatan)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            if (Auth::guard('office')->user()->role == 5){
                $collection = Paket::where('kegiatan_id','=',$kegiatan->id)
                ->where('prov_id','=',Auth::guard('office')->user()->province->id_prov)
                ->whereRaw('UPPER("nama_paket") LIKE \'%'.$keywords.'%\'')
                ->orderBy('id', 'ASC')
                ->paginate(10);
            }else{
                $collection = Paket::where('kegiatan_id','=',$kegiatan->id)
                // ->where('nama','LIKE','%'.$keywords.'%')
                ->whereRaw('UPPER("nama_paket") LIKE \'%'.$keywords.'%\'')
                ->orderBy('id', 'ASC')
                ->paginate(10);
            }
            return view('page.app.paket.list',compact('collection','kegiatan'));
        }
        return view('page.app.paket.main', compact('kegiatan'));
    }
    public function paket_timeline(Request $request, Kegiatan $kegiatan)
    {
        $tanggal = Paket::select(DB::raw('min(tanggal_mtender) AS tanggal_mtender'),DB::raw('max(tanggal_skontrak) AS tanggal_skontrak'))->where('kegiatan_id','=',$kegiatan->id)->first();
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = Paket::where('kegiatan_id','=',$kegiatan->id)
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.paketTimeline.list',compact('collection','kegiatan','tanggal'));
        }
        return view('page.app.paketTimeline.main', compact('kegiatan'));
    }
    public function paket_owp(Request $request, Kegiatan $kegiatan)
    {
        if ($request->ajax()) {
            $tahun = PaketAwp::select('ta')->where('kegiatan_id','=',$kegiatan->id)->groupBy('ta')->orderBy('ta','ASC')->get();
            $keywords = strtoupper($request->keyword);
            $realisasi = PaketAwp::where('kegiatan_id','=',$kegiatan->id)->where('ta','<',DATE('Y'))->groupBy('paket_id')->sum('real_dana');
            $real = PaketAwp::where('kegiatan_id','=',$kegiatan->id)->where('ta','=',DATE('Y'))->groupBy('paket_id')->sum('real_dana');
            $dipa = PaketAwp::where('kegiatan_id','=',$kegiatan->id)->where('ta','=',DATE('Y'))->groupBy('paket_id')->sum('target_dana');
            $collection = Paket::where('kegiatan_id','=',$kegiatan->id)
            // ->where('nama','LIKE','%'.$keywords.'%')
            // ->whereRaw('UPPER("nama_paket") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.paketOwp.list',compact('collection','tahun','kegiatan','realisasi','dipa','real'));
        }
        return view('page.app.paketOwp.main', compact('kegiatan'));
    }
    public function paket_awp(Request $request, Kegiatan $kegiatan)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $target = PaketAwp::where('kegiatan_id','=',$kegiatan->id)->where('ta','<',DATE('Y'))->groupBy('paket_id')->sum('target_dana');
            $realisasi = PaketAwp::where('kegiatan_id','=',$kegiatan->id)->where('ta','<',DATE('Y'))->groupBy('paket_id')->sum('real_dana');
            $real = PaketAwp::where('kegiatan_id','=',$kegiatan->id)->where('ta','=',DATE('Y'))->groupBy('paket_id')->sum('real_dana');
            $dipa = PaketAwp::where('kegiatan_id','=',$kegiatan->id)->where('ta','=',DATE('Y'))->groupBy('paket_id')->sum('target_dana');
            $collection = Paket::where('kegiatan_id','=',$kegiatan->id)
            // ->where('nama','LIKE','%'.$keywords.'%')
            // ->whereRaw('UPPER("nama_paket") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.paketAwp.list',compact('collection','kegiatan','target','realisasi','dipa','real'));
        }
        return view('page.app.paketAwp.main', compact('kegiatan'));
    }
    public function create(Kegiatan $kegiatan)
    {
        $provinsi = Province::get();
        // $penarikan = Penarikan::get();
        return view('page.app.paket.input', ['data' => new Paket, 'provinsi' => $provinsi,'kegiatan' => $kegiatan]);
    }
    public function store(Request $request)
    {
        $jenispaket = $request->jenis_paket;
        if($jenispaket == 1){
            $validator = Validator::make($request->all(), [
                'prov_id' => 'required',
                'kab_id' => 'required',
                'jenis_paket' => 'required',
                // 'penarikan_id' => 'required',
                'kode_paket' => 'required',
                'nama_paket' => 'required',
                'alokasi' => 'required',
                'tanggal_mkontrak' => 'required|date_format:d-m-Y',
                'tanggal_skontrak' => 'required|date_format:d-m-Y',
                'tanggal_mtender' => 'required|date_format:d-m-Y',
                'tanggal_stender' => 'required|date_format:d-m-Y',
                'st_tender' => 'required',
                'nilai_kontrak' => 'required',
                'penyedia_jasa' => 'required',
                // 'realisasi_t1' => 'required',
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors();
               if($errors->has('prov_id')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('prov_id'),
                    ]);
                }elseif($errors->has('kab_id')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('kab_id'),
                    ]);
                }
                // elseif($errors->has('penarikan_id')){
                //     return response()->json([
                //         'alert' => 'error',
                //         'message' => $errors->first('penarikan_id'),
                //     ]);
                // }
                elseif($errors->has('jenis_paket')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('jenis_paket'),
                    ]);
                }elseif($errors->has('kode_paket')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('kode_paket'),
                    ]);
                }elseif($errors->has('nama_paket')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('nama_paket'),
                    ]);
                }elseif($errors->has('alokasi')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('alokasi'),
                    ]);
                }elseif($errors->has('tanggal_mkontrak')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('tanggal_mkontrak'),
                    ]);
                }elseif($errors->has('tanggal_skontrak')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('tanggal_skontrak'),
                    ]);
                }elseif($errors->has('tanggal_mtender')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('tanggal_mtender'),
                    ]);
                }elseif($errors->has('tanggal_stender')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('tanggal_stender'),
                    ]);
                }elseif($errors->has('st_tender')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('st_tender'),
                    ]);
                }elseif($errors->has('nilai_kontrak')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('nilai_kontrak'),
                    ]);
                }elseif($errors->has('penyedia_jasa')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('penyedia_jasa'),
                    ]);
                }
                // elseif($errors->has('realisasi_t1')){
                //     return response()->json([
                //         'alert' => 'error',
                //         'message' => $errors->first('realisasi_t1'),
                //     ]);
                // }
                
            }
        }
        else{
            $validatornon = Validator::make($request->all(),[
                'prov_id' => 'required',
                'kab_id' => 'required',
                'jenis_paket' => 'required',
                'kode_paket' => 'required',
                'nama_paket' => 'required',
            ]);
            if ($validatornon->fails()) {
                $errors = $validatornon->errors();
                if($errors->has('prov_id')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('prov_id'),
                    ]);
                }elseif($errors->has('kab_id')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('kab_id'),
                    ]);
                }
                elseif($errors->has('jenis_paket')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('jenis_paket'),
                    ]);
                }elseif($errors->has('kode_paket')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('kode_paket'),
                    ]);
                }elseif($errors->has('nama_paket')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('nama_paket'),
                    ]);
                }
            }
        }
        $data = new Paket;
        $data->kegiatan_id = $request->kegiatan_id;
        $data->prov_id = $request->prov_id;
        $data->kab_id = $request->kab_id;
        // $data->penarikan_id = $request->penarikan_id;
        $data->jenis_paket = $request->jenis_paket;
        $data->kode_paket = $request->kode_paket;
        $data->nama_paket = Str::title($request->nama_paket);
        $data->alokasi = str_replace(',','',$request->alokasi);
        $data->tanggal_mkontrak = $request->tanggal_mkontrak;
        $data->tanggal_skontrak = $request->tanggal_skontrak;
        $data->tanggal_mtender = $request->tanggal_mtender;
        $data->tanggal_stender = $request->tanggal_stender;
        $data->st_tender = $request->st_tender;
        $data->nilai_kontrak = str_replace(',','',$request->nilai_kontrak);
        $data->penyedia_jasa = $request->penyedia_jasa;
        // $data->realisasi_t1 = $request->realisasi_t1;
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Paket tersimpan',
            'redirect' => 'input',
            'route' => route('phln.paket.edit',[$data->kegiatan_id,$data->id]),
        ]);
    }
    public function show(Paket $paket)
    {
        //
    }
    public function edit(Request $request,Kegiatan $kegiatan, Paket $paket)
    {
        if ($request->ajax()) {
            $kategori = Category::where('category_id',0)->orderBy('id','ASC')->get();
            $provinsi = Province::get();
            $filter = $request->filter_tahun;
            if($filter){
                if($filter != "all"){
                    $paket_dipa = $paket->paketDipa->where('tahun',$request->filter_tahun);
                    $paket_awp = $paket->paketAwp->where('ta',$request->filter_tahun);
                    $paket_awp_realisasi = $paket->paketAwp->where('ta',$request->filter_tahun)->where('real_dana','!=',NULL);
                }else{
                    $paket_dipa = $paket->paketDipa;
                    $paket_awp = $paket->paketAwp;
                    $paket_awp_realisasi = $paket->paketAwp->where('real_dana','!=',NULL);
                }
            }else{
                $paket_dipa = $paket->paketDipa;
                $paket_awp = $paket->paketAwp;
                $paket_awp_realisasi = $paket->paketAwp->where('real_dana','!=',NULL);
            }
            $kabupaten = City::get();
            $penarikan = Penarikan::get();
            return view('page.app.paket.input', ['data' => $paket,'kategori' => $kategori, 'paket_dipa' => $paket_dipa, 'paket_awp' => $paket_awp, 'kegiatan' => $kegiatan, 'penarikan' => $penarikan,'provinsi'=>$provinsi,'kabupaten'=>$kabupaten,'paket_awp_realisasi' => $paket_awp_realisasi]);   
        }
    }
    public function update(Request $request, Paket $paket)
    {
        $validator = Validator::make($request->all(), [
            'prov_id' => 'required',
            'kab_id' => 'required',
            // 'penarikan_id' => 'required',
            'jenis_paket' => 'required',
            'kode_paket' => 'required',
            'nama_paket' => 'required',
            'alokasi' => 'required',
            'tanggal_mkontrak' => 'required|date_format:d-m-Y',
            'tanggal_skontrak' => 'required|date_format:d-m-Y',
            'tanggal_mtender' => 'required|date_format:d-m-Y',
            'tanggal_stender' => 'required|date_format:d-m-Y',
            'st_tender' => 'required',
            'nilai_kontrak' => 'required',
            'penyedia_jasa' => 'required',
            // 'realisasi_t1' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if($errors->has('prov_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('prov_id'),
                ]);
            }elseif($errors->has('kab_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kab_id'),
                ]);
            }
            // elseif($errors->has('penarikan_id')){
            //     return response()->json([
            //         'alert' => 'error',
            //         'message' => $errors->first('penarikan_id'),
            //     ]);
            // }
            elseif($errors->has('jenis_paket')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('jenis_paket'),
                ]);
            }elseif($errors->has('kode_paket')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kode_paket'),
                ]);
            }elseif($errors->has('nama_paket')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama_paket'),
                ]);
            }elseif($errors->has('alokasi')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('alokasi'),
                ]);
            }elseif($errors->has('tanggal_mkontrak')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal_mkontrak'),
                ]);
            }elseif($errors->has('tanggal_skontrak')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal_skontrak'),
                ]);
            }elseif($errors->has('tanggal_mtender')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal_mtender'),
                ]);
            }elseif($errors->has('tanggal_stender')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal_stender'),
                ]);
            }elseif($errors->has('st_tender')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('st_tender'),
                ]);
            }elseif($errors->has('nilai_kontrak')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nilai_kontrak'),
                ]);
            }elseif($errors->has('penyedia_jasa')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('penyedia_jasa'),
                ]);
            }
            // elseif($errors->has('realisasi_t1')){
            //     return response()->json([
            //         'alert' => 'error',
            //         'message' => $errors->first('realisasi_t1'),
            //     ]);
            // }
            
        }
        $paket->prov_id = $request->prov_id;
        $paket->kab_id = $request->kab_id;
        // $paket->penarikan_id = $request->penarikan_id;
        $paket->jenis_paket = $request->jenis_paket;
        $paket->kode_paket = $request->kode_paket;
        $paket->nama_paket = Str::title($request->nama_paket);
        $paket->alokasi = str_replace(',','',$request->alokasi);
        $paket->tanggal_mkontrak = $request->tanggal_mkontrak;
        $paket->tanggal_skontrak = $request->tanggal_skontrak;
        $paket->tanggal_mtender = $request->tanggal_mtender;
        $paket->tanggal_stender = $request->tanggal_stender;
        $paket->st_tender = $request->st_tender;
        $paket->nilai_kontrak = str_replace(',','',$request->nilai_kontrak);
        $paket->penyedia_jasa = $request->penyedia_jasa;
        // $paket->realisasi_t1 = $request->realisasi_t1;
        $paket->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Paket Diupdate',
            'redirect' => 'input',
            'route' => route('phln.paket.edit',[$paket->kegiatan_id,$paket->id]),
        ]);
    }
    public function destroy(Paket $paket)
    {
        $paket->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Paket terhapus',
        ]);
    }
}
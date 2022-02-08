<?php

namespace App\Http\Controllers\Phln;

use App\Models\Donor;
use App\Models\Paket;
use App\Models\Kegiatan;
use App\Models\Province;
use App\Models\PaketDipa;
use App\Models\KegiatanDipa;
use Illuminate\Http\Request;
use App\Models\HibahLangsung;
use App\Models\PaketDipaBulan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::guard('office')->user()->role <= 3){
            if ($request->ajax()) {
                // $pnilai_alokasi = Kegiatan::konversi('Pinjaman','nilai');
                $pnilai_alokasi = Kegiatan::where('tipe_kegiatan','=','Pinjaman')->get()->sum('nilai_konversi');
                $pnilai_penyerapan = Kegiatan::where('tipe_kegiatan','=','Pinjaman')->get()->sum('penyerapan');
                $pkegiatan_pinjaman = Kegiatan::where('tipe_kegiatan','=','Pinjaman')->get()->count();
                $pagu_asc = DB::select(DB::raw('
                SELECT 
                    SUM( CASE WHEN "k"."tipe_kegiatan" = \''.'Pinjaman'.'\' THEN "pd"."dipa" ELSE 0 END ) AS "dipa_pinjaman", 
                    SUM( CASE WHEN "k"."tipe_kegiatan" = \''.'Hibah'.'\' THEN "pd"."dipa" ELSE 0 END ) AS "dipa_hibah" 
                FROM
                "transaction"."kegiatan" "k"
                    INNER JOIN "transaction"."paket" "p" ON "k"."id" = "p"."kegiatan_id"
                    INNER JOIN "transaction"."paket_dipa" "pd" ON "p"."id" = "pd"."paket_id" 
                WHERE
                    "pd"."tahun" = \''.$request->keyword.'\'
                GROUP BY
                    "pd"."tanggal_revisi" 
                ORDER BY
                    "pd"."tanggal_revisi" ASC 
                    LIMIT 1
                '));
                $pagu_desc = DB::select(DB::raw('
                SELECT 
                    SUM( CASE WHEN "k"."tipe_kegiatan" = \''.'Pinjaman'.'\' THEN "pd"."dipa" ELSE 0 END ) AS "dipa_pinjaman", 
                    SUM( CASE WHEN "k"."tipe_kegiatan" = \''.'Hibah'.'\' THEN "pd"."dipa" ELSE 0 END ) AS "dipa_hibah" 
                FROM
                "transaction"."kegiatan" "k"
                    INNER JOIN "transaction"."paket" "p" ON "k"."id" = "p"."kegiatan_id"
                    INNER JOIN "transaction"."paket_dipa" "pd" ON "p"."id" = "pd"."paket_id" 
                WHERE
                    "pd"."tahun" = \''.$request->keyword.'\'
                GROUP BY
                    "pd"."tanggal_revisi" 
                ORDER BY
                    "pd"."tanggal_revisi" DESC 
                    LIMIT 1
                '));
                $hnilai_alokasi = Kegiatan::where('tipe_kegiatan','=','Hibah')->get()->sum('nilai_konversi');
                $hlnilai_alokasi = HibahLangsung::get()->sum('nilai_rp');
                $hnilai_penyerapan = Kegiatan::where('tipe_kegiatan','=','Hibah')->get()->sum('penyerapan');
                $hlnilai_penyerapan = HibahLangsung::get()->sum('real_rp');
                $hkegiatan_pinjaman = Kegiatan::where('tipe_kegiatan','=','Hibah')->get()->count();
                $hlkegiatan_pinjaman = HibahLangsung::select('no_register')->groupBy('no_register')->get()->count();
                $title_dipa_pagu = "DIPA (".$request->keyword.")";
                return view('page.app.dashboard.list_main',compact('pkegiatan_pinjaman','pnilai_alokasi','pnilai_penyerapan','pagu_asc','pagu_desc','hkegiatan_pinjaman','hnilai_alokasi','hnilai_penyerapan','hlkegiatan_pinjaman','hlnilai_alokasi','hlnilai_penyerapan','title_dipa_pagu'));
            }
            return view('page.app.dashboard.main');
        }else{
            return redirect()->route('phln.kegiatan.index');
        }
    }
    public function profil(Request $request){
        if(Auth::guard('office')->user()->role <= 3){
            $tahun = KegiatanDipa::select('tahun')->groupBy('tahun')->orderBy('tahun','DESC')->get();
            if ($request->ajax()) {
                // $pnilai_alokasi = Kegiatan::konversi('Pinjaman','nilai');
                $pnilai_alokasi = Kegiatan::where('tipe_kegiatan','=','Pinjaman')->get()->sum('nilai_konversi');
                $pnilai_penyerapan = Kegiatan::where('tipe_kegiatan','=','Pinjaman')->get()->sum('penyerapan');
                $pkegiatan_pinjaman = Kegiatan::where('tipe_kegiatan','=','Pinjaman')->get()->count();
                $ea = DB::select(DB::raw('
                SELECT
                    COUNT(DISTINCT("tbl".id)) AS total_kegiatan_ea,
                    SUM(DISTINCT("tbl".nilai_konversi)) AS total_nilai_ea
                FROM
                    "transaction"."kegiatan" as "tbl"
                LEFT JOIN "transaction"."kegiatan_exec" AS "ea" ON "ea"."kegiatan_id" = "tbl"."id"
                LEFT JOIN "transaction"."kegiatan_imp" AS "ia" ON "ia"."kegiatan_id" = "tbl"."id" 
                WHERE
                    "ea"."unor_code" = \''.'05'.'\'
                    AND
                    "tbl"."tipe_kegiatan" = \''.'Pinjaman'.'\'
                '));
                $ia = DB::select(DB::raw('
                SELECT
                    COUNT(DISTINCT("tbl".id)) AS total_kegiatan_ia,
                    SUM(DISTINCT("tbl".nilai_konversi)) AS total_nilai_ia
                FROM
                    "transaction"."kegiatan" as "tbl"
                LEFT JOIN "transaction"."kegiatan_exec" AS "ea" ON "ea"."kegiatan_id" = "tbl"."id"
                            LEFT JOIN "transaction"."kegiatan_imp" AS "ia" ON "ia"."kegiatan_id" = "tbl"."id" 
                WHERE
                    "ea"."unor_code" != \''.'05'.'\'
                    AND
                    "ia"."unor_code" = \''.'05'.'\'
                    AND
                    "tbl"."tipe_kegiatan" = \''.'Pinjaman'.'\'
                '));
                $hnilai_alokasi = Kegiatan::where('tipe_kegiatan','=','Hibah')->get()->sum('nilai_konversi');
                $hlnilai_alokasi = HibahLangsung::get()->sum('nilai_rp');
                $hnilai_penyerapan = Kegiatan::where('tipe_kegiatan','=','Hibah')->get()->sum('penyerapan');
                $hlnilai_penyerapan = HibahLangsung::get()->sum('real_rp');
                $hkegiatan_pinjaman = Kegiatan::where('tipe_kegiatan','=','Hibah')->get()->count();
                $hlkegiatan_pinjaman = HibahLangsung::select('no_register')->groupBy('no_register')->get()->count();

                return view('page.app.dashboard.list_profil',compact('pkegiatan_pinjaman','pnilai_alokasi','pnilai_penyerapan','hkegiatan_pinjaman','hnilai_alokasi','hnilai_penyerapan','hlkegiatan_pinjaman','hlnilai_alokasi','hlnilai_penyerapan','ea','ia'));
            }
            return view('page.app.dashboard.profil',compact('tahun'));
        }else{
            return redirect()->route('phln.kegiatan.index');
        }
    }
    public function pendanaan(Request $request)
    {
        if ($request->ajax()) {
            $q_donor = DB::select(DB::raw('
            SELECT
                SUM( "tbl"."nilai_konversi" ) - SUM ( "tbl"."penyerapan" ) AS "alokasi",
                SUM ( "tbl"."penyerapan" ) AS "penyerapan",
                "donor"."singkatan" as "donor"
            FROM
                "transaction"."kegiatan" AS "tbl"
            LEFT JOIN "master"."donor" AS "donor" ON "tbl"."donor_id" = "donor"."id"
            WHERE
                "tbl"."tipe_kegiatan" LIKE \'%'.$request->kategori.'%\'
            GROUP BY
                "donor"."singkatan"
            '));
            $arr_d = array();
            foreach($q_donor as $item){
                $temp=array(
                    "alokasi"=>number_format($item->alokasi/1000000000),
                    "penyerapan"=>number_format($item->penyerapan/1000000000),
                    "donor"=>$item->donor
                );
                array_push($arr_d,$temp);
            }
            $donor = json_encode($arr_d);

            $q_sektor = DB::select(DB::raw('
            SELECT
                SUM( "tbl"."nilai_konversi" ) - SUM ( "tbl"."penyerapan" ) AS "alokasi",
                SUM ( "tbl"."penyerapan" ) AS "penyerapan",
                "sektor"."nama"
            FROM
                "transaction"."kegiatan" AS "tbl"
            LEFT JOIN "master"."sektor" AS "sektor" ON "tbl"."sektor_id" = "sektor"."id"
            WHERE
                "tbl"."tipe_kegiatan" LIKE \'%'.$request->kategori.'%\'
            GROUP BY
                "sektor"."nama"
            '));
            $arr_s = array();
            $nmsektor = '';
            foreach($q_sektor as $item){
                $nmsektor = $item->nama;
                $temp=array(
                    "alokasi"=>number_format($item->alokasi/1000000000),
                    "penyerapan"=>number_format($item->penyerapan/1000000000),
                    "nama"=>$nmsektor
                );
                array_push($arr_s,$temp);
            }
            $sektor = json_encode($arr_s);

            $q_kegiatan = DB::select(DB::raw('
            SELECT
                unnest(ARRAY[1,2]) as "type",
                SUM( "tbl"."nilai_konversi" ) - SUM( "tbl"."penyerapan" ) AS "sisa",
                SUM ( "tbl"."penyerapan" ) AS "penyerapan"
            FROM
                "transaction"."kegiatan" AS "tbl"
            WHERE
                "tbl"."tipe_kegiatan" LIKE \'%'.$request->kategori.'%\'
            '));
            $arr_k = array();
            foreach($q_kegiatan as $item){
                $nama = "";
                $jumlah = 0;
                if($item->type == 1){
                    $nama = "Belum terserap";
                    $jumlah = number_format($item->sisa/1000000000);
                }
                if($item->type == 2){
                    $nama = "Penyerapan";
                    $jumlah = number_format($item->penyerapan/1000000000);
                }
                $temp=array(
                    "nama"=>$nama,
                    "jumlah"=>$jumlah
                );
                array_push($arr_k,$temp);
            }
            $kegiatan = json_encode($arr_k);
            return view('page.app.dashboard.list_pendanaan',compact('donor','sektor','kegiatan'));
        }
        return view('page.app.dashboard.pendanaan');
    }
    public function kinerja(Request $request)
    {
        if ($request->ajax()) {
            $q_donor = DB::select(DB::raw('
            SELECT
                SUM(CASE WHEN "tbl"."st" = \'Behind Schedule\' THEN 1 ELSE 0 END) bs,
                SUM(CASE WHEN "tbl"."st" = \'On Schedule\' THEN 1 ELSE 0 END) os,
                SUM(CASE WHEN "tbl"."st" =\'At Risk\' THEN 1 ELSE 0 END) ar,
                "donor"."singkatan" AS "nama"
            FROM
                "transaction"."kegiatan" "tbl"
            LEFT JOIN "master"."donor" AS "donor" ON "donor"."id" = "tbl"."donor_id"
            WHERE
                "tbl"."tipe_kegiatan" LIKE \'%'.$request->kategori.'%\'
            GROUP BY
                "donor"."singkatan"
            '));
            $arr_d = array();

            foreach($q_donor as $item){
                $temp=array(
                    "bs"=>number_format($item->bs),
                    "os"=>number_format($item->os),
                    "ar"=>number_format($item->ar),
                    "nama"=>$item->nama
                );
                array_push($arr_d,$temp);
            }
            $donor = json_encode($arr_d);

            $q_sektor = DB::select(DB::raw('
            SELECT
                SUM(CASE WHEN "tbl"."st" = \'Behind Schedule\' THEN 1 ELSE 0 END) bs,
                SUM(CASE WHEN "tbl"."st" = \'On Schedule\' THEN 1 ELSE 0 END) os,
                SUM(CASE WHEN "tbl"."st" =\'At Risk\' THEN 1 ELSE 0 END) ar,
                "sektor"."nama"
            FROM
                "transaction"."kegiatan" "tbl"
            LEFT JOIN "master"."sektor" AS "sektor" ON "tbl"."sektor_id" = "sektor"."id"
            WHERE
                "tbl"."tipe_kegiatan" LIKE \'%'.$request->kategori.'%\'
            GROUP BY
                "sektor"."nama"
            '));
            $arr_s = array();
            $nmsektor = '';
            foreach($q_sektor as $item){
                $nmsektor = $item->nama;
                $temp=array(
                    "bs"=>number_format($item->bs),
                    "os"=>number_format($item->os),
                    "ar"=>number_format($item->ar),
                    "nama"=>$nmsektor
                );
                array_push($arr_s,$temp);
            }
            $sektor = json_encode($arr_s);

            $q_kegiatan = DB::select(DB::raw('
            SELECT
                COUNT("tbl"."id") AS "total",
                "tbl"."st"
            FROM
                "transaction"."kegiatan" "tbl"
            WHERE
                "tbl"."tipe_kegiatan" LIKE \'%'.$request->kategori.'%\'
            GROUP BY
                "tbl"."st"
            '));
            $arr_k = array();
            foreach($q_kegiatan as $item){
                $temp=array(
                    "total"=>number_format($item->total),
                    "st"=>$item->st
                );
                array_push($arr_k,$temp);
            }
            $kegiatan = json_encode($arr_k);
            return view('page.app.dashboard.list_kinerja',compact('donor','sektor','kegiatan'));
        }
        return view('page.app.dashboard.kinerja');
    }
    public function evaluasi_kinerja(Request $request)
    {
        if ($request->ajax()) {
            $q_evaluasi = DB::select(DB::raw('
            SELECT
                "tbl"."nilai_konversi",
                "tbl"."pv",
                "tbl"."judul"
            FROM
                "transaction"."kegiatan" "tbl"
            WHERE
                "tbl"."tipe_kegiatan" LIKE \'%'.$request->kategori.'%\'
            ORDER BY
                "nilai_konversi" DESC
            '));
            $arr_e = array();
            foreach($q_evaluasi as $item){
                $temp=array(
                    "nilai_konversi"=>number_format($item->nilai_konversi),
                    "pv"=>$item->pv,
                    "judul"=>$item->judul
                );
                array_push($arr_e,$temp);
            }
            $evaluasi = json_encode($arr_e);
            return view('page.app.dashboard.list_evaluasi', compact('evaluasi'));
        }
        return view('page.app.dashboard.evaluasi_kinerja');
    }
    public function prognosis(Request $request)
    {
        // $collection = PaketDipa::where('tahun','=','2021')->latest('tanggal_revisi')->first()->sum('dipa');
        // dd($collection);
        $arr = array();
        if ($request->ajax()) {
            $tahun = $request->keyword;
            $kegiatan = Kegiatan::get();
            $dipa = 0;
            $real = 0;
            $prognosis = 0;
            foreach($kegiatan as $k){
                foreach($k->paket as $p){
                    $real += PaketDipaBulan::where('ta',$request->keyword)->where('kode_paket',$p->kode_paket)->get()->sum('real_dana');
                    $dipa += PaketDipa::where('tahun',$request->keyword)->where('paket_id',$p->id)->orderBy('tanggal_revisi','DESC')->limit(1)->get()->sum('dipa');
                    $prognosis += PaketDipa::where('tahun',$request->keyword)->where('paket_id',$p->id)->orderBy('tanggal_revisi','DESC')->limit(1)->get()->sum('prognosis');
                }
            }
            $tt = $dipa - $prognosis;
            $bt = $dipa - $tt - $real;
            $temp = array(
                [
                    'kategori'=>'',
                    'tt'=>$tt,
                    'bt'=>$bt,
                    'real'=>$real
                ],
            );
            $pp = number_format(($prognosis/$dipa)*100,2);
            $result = json_encode($temp);
            return view('page.app.dashboard.list_prognosis', compact('result','tahun','pp'));
        }
        return view('page.app.dashboard.prognosis');
    }
    public function sandingan(Request $request)
    {
        if ($request->ajax()) {
            $tahun = $request->keyword;
            $arr = array();
            $tipe = $request->kategori;
            $prov = '';
            $kuning = 0;
            $merah = 0;
            $dipa = 0;
            $sumdipa = 0;
            $real = 0;
            $sumreal = 0;
            $prov = Province::get();
            $sumreal = DB::select(DB::raw('
            SELECT 
                SUM( "real_dana" ) AS "real"
            FROM
                "transaction"."paket_dipa_bulan"
            WHERE
                "ta" LIKE \'%'.$request->keyword.'%\'
            '));

            $sumdipa = DB::select(DB::raw('
            SELECT 
                SUM( "dipa" ) AS "dipa"
            FROM
                "transaction"."paket_dipa"
            WHERE
                "tahun" LIKE \'%'.$request->keyword.'%\'
            GROUP BY
            "paket_id","tanggal_revisi"
            ORDER BY "tanggal_revisi" DESC LIMIT 1
            '));
            $sumreal = $sumreal ? $sumreal[0]->real : 0;
            $sumdipa = $sumdipa ? $sumdipa[0]->dipa : 0;
            $merah = $sumreal ? ($sumreal / $sumdipa) * 100 : $sumreal;
            foreach($prov AS $prv){
                foreach($prv->paket as $pkt){
                    $real = $pkt->paket_dipa_bulan->where('ta','LIKE','%'.$tahun.'%')->sum('real_dana');
                    $real = DB::select(DB::raw('
                    SELECT 
                        SUM( "real_dana" ) AS "real"
                    FROM
                        "transaction"."paket_dipa_bulan"
                    WHERE
                        "ta" LIKE \'%'.$request->keyword.'%\'
                    AND
                        "kode_paket" = \''.$pkt->kode_paket.'\'
                    '));
                    $real = $real ? $real[0]->real:0;
                    $dipa = DB::select(DB::raw('
                    SELECT 
                        SUM( "dipa" ) AS "dipa"
                    FROM
                        "transaction"."paket_dipa"
                    WHERE
                        "tahun" LIKE \'%'.$request->keyword.'%\'
                    AND
                        "paket_id" = \''.$pkt->id.'\'
                    GROUP BY
                    "tanggal_revisi"
                    ORDER BY "tanggal_revisi" DESC LIMIT 1
                    '));
                    $dipa = $dipa ? $dipa[0]->dipa:0;
                    $kuning = $real ? ($real / $dipa) *100 : 0;
                    $temp = 
                        [
                            'prov'=>$prv->nm_prov,
                            'real'=>$real > 0 ? $real / 1000000000:$real,
                            'dipa'=>$dipa > 0 ? $dipa / 1000000000:$dipa,
                            'kuning'=>$kuning,
                            'merah'=>$merah
                        ];
                    array_push($arr,$temp);
                }
            }
            // $paket = Paket::join('transaction.kegiatan as k','k.id','paket.kegiatan_id')->whereIn('prov_id', $prov)->where('k.tipe_kegiatan',$tipe)->get();
            // $kegiatan = Kegiatan::where('tipe_kegiatan',$tipe)->orderBy('id', 'ASC')->pluck('id');
            // $paket = Paket::whereIn('kegiatan_id', $kegiatan)->get();
            // foreach ($paket as $p) {
            //     $prov = $p->provinsi->nm_prov;
            //     $real = PaketDipaBulan::where('kode_paket',$p->kode_paket)->get()->sum('real_dana');
            //     $dipa = PaketDipa::where('paket_id',$p->id)->orderBy('tanggal_revisi','DESC')->limit(1)->get()->sum('dipa');
            //     $sumreal += PaketDipaBulan::where('kode_paket',$p->kode_paket)->get()->sum('real_dana');
            //     $sumdipa += PaketDipa::where('paket_id',$p->id)->orderBy('tanggal_revisi','DESC')->limit(1)->get()->sum('dipa');
            //     $kuning = $real > 0 AND $dipa > 0 ? number_format(($real/$dipa)* 100,2) : 0;
            //     $merah += $sumreal AND $sumdipa ? ($sumreal / $sumdipa) : 0;
                
            // }
            $result = json_encode($arr);
            // dd($result);
            // $pp = number_format(($prognosis/$dipa)*100,2);
            return view('page.app.dashboard.list_sandingan', compact('result','tipe','tahun'));
        }
        return view('page.app.dashboard.sandingan');
    }
    public function jknp(Request $request)
    {
        if ($request->ajax()) {
            $tipe = $request->tipe;
            if($tipe == "Donor"){
                $kegiatan = Kegiatan::select('donor_id')->selectRaw('SUM(nilai_konversi) as nilai')->selectRaw('COUNT(donor_id) as total')->where('tipe_kegiatan',$request->kategori)->groupBy('donor_id')->orderByRaw('nilai DESC')->get();
            }else{
                $kegiatan = Kegiatan::select('sektor_id')->selectRaw('SUM(nilai_konversi) as nilai')->selectRaw('COUNT(sektor_id) as total')->where('tipe_kegiatan',$request->kategori)->groupBy('sektor_id')->orderByRaw('nilai DESC')->get();
            }
            $arr = array();
            foreach($kegiatan as $k){
                if($tipe == "Donor"){
                    $nama = $k->donor->nama;
                }else{
                    $nama = $k->sektor->nama;
                }
                $temp = array(
                    'name'=>$nama,
                    'value'=>$k->nilai
                );
                array_push($arr,$temp);
            }
            $result = json_encode($arr);
            return view('page.app.dashboard.list_jknp',compact('kegiatan','tipe','result'));
        }
        return view('page.app.dashboard.jknp');
    }
    public function kpkpln(Request $request)
    {
        if ($request->ajax()) {
            $tipe = $request->tipe;
            if($tipe == "Donor"){
                $pie = DB::select(DB::raw('
                SELECT
                    unnest(ARRAY[1,2]) as "type",
                    SUM ( "k"."nilai_konversi" ) AS "nilai",
                    SUM ( CASE WHEN "awp"."real_dana" IS NULL THEN 0 ELSE "awp"."real_dana" END ) AS "real",
                    (SUM ( CASE WHEN "awp"."real_dana" IS NULL THEN 0 ELSE "awp"."real_dana" END ) / SUM ( "k"."nilai_konversi" ) * 100) AS "persen"
                FROM
                    "transaction"."kegiatan" "k"
                    INNER JOIN "master"."donor" "d" ON "k"."donor_id" = "d"."id"
                    LEFT JOIN "transaction"."paket_awp" "awp" ON "k"."id" = "awp"."kegiatan_id"
                '));
                $kegiatan = DB::select(DB::raw('
                SELECT
                    "d"."nama",
                    SUM ( "k"."nilai_konversi" ) AS "nilai",
                    SUM ( CASE WHEN "awp"."real_dana" IS NULL THEN 0 ELSE "awp"."real_dana" END ) AS "real",
                    (SUM ( CASE WHEN "awp"."real_dana" IS NULL THEN 0 ELSE "awp"."real_dana" END ) / SUM ( "k"."nilai_konversi" ) * 100) AS "persen"
                FROM
                    "transaction"."kegiatan" "k"
                    INNER JOIN "master"."donor" "d" ON "k"."donor_id" = "d"."id"
                    LEFT JOIN "transaction"."paket_awp" "awp" ON "k"."id" = "awp"."kegiatan_id" 
                GROUP BY
                    "d"."nama"
                ORDER BY
                    "persen" DESC
                '));
                $lkegiatan = DB::select(DB::raw('
                SELECT
                    "d"."nama",
                    SUM ( "k"."nilai_konversi" ) AS "nilai",
                    SUM ( CASE WHEN "awp"."real_dana" IS NULL THEN 0 ELSE "awp"."real_dana" END ) AS "real",
                    (SUM ( CASE WHEN "awp"."real_dana" IS NULL THEN 0 ELSE "awp"."real_dana" END ) / SUM ( "k"."nilai_konversi" ) * 100) AS "persen"
                FROM
                    "transaction"."kegiatan" "k"
                    INNER JOIN "master"."donor" "d" ON "k"."donor_id" = "d"."id"
                    LEFT JOIN "transaction"."paket_awp" "awp" ON "k"."id" = "awp"."kegiatan_id" 
                GROUP BY
                    "d"."nama"
                ORDER BY
                    "persen" ASC
                '));
            }else{
                $kegiatan = DB::select(DB::raw('
                SELECT
                    "s"."nama",
                    SUM ( "k"."nilai_konversi" ) AS "nilai",
                    SUM ( CASE WHEN "awp"."real_dana" IS NULL THEN 0 ELSE "awp"."real_dana" END ) AS "real",
                    (SUM ( CASE WHEN "awp"."real_dana" IS NULL THEN 0 ELSE "awp"."real_dana" END ) / SUM ( "k"."nilai_konversi" ) * 100) AS "persen"
                FROM
                    "transaction"."kegiatan" "k"
                    INNER JOIN "master"."sektor" "s" ON "k"."sektor_id" = "s"."id"
                    LEFT JOIN "transaction"."paket_awp" "awp" ON "k"."id" = "awp"."kegiatan_id" 
                GROUP BY
                    "s"."nama"
                ORDER BY
                    "persen" DESC
                '));
                $lkegiatan = DB::select(DB::raw('
                SELECT
                    "s"."nama",
                    SUM ( "k"."nilai_konversi" ) AS "nilai",
                    SUM ( CASE WHEN "awp"."real_dana" IS NULL THEN 0 ELSE "awp"."real_dana" END ) AS "real",
                    (SUM ( CASE WHEN "awp"."real_dana" IS NULL THEN 0 ELSE "awp"."real_dana" END ) / SUM ( "k"."nilai_konversi" ) * 100) AS "persen"
                FROM
                    "transaction"."kegiatan" "k"
                    INNER JOIN "master"."sektor" "s" ON "k"."sektor_id" = "s"."id"
                    LEFT JOIN "transaction"."paket_awp" "awp" ON "k"."id" = "awp"."kegiatan_id" 
                GROUP BY
                    "s"."nama"
                ORDER BY
                    "persen" ASC
                '));
                $pie = DB::select(DB::raw('
                SELECT
                    unnest(ARRAY[1,2]) as "type",
                    SUM ( "k"."nilai_konversi" ) AS "nilai",
                    SUM ( CASE WHEN "awp"."real_dana" IS NULL THEN 0 ELSE "awp"."real_dana" END ) AS "real",
                    (SUM ( CASE WHEN "awp"."real_dana" IS NULL THEN 0 ELSE "awp"."real_dana" END ) / SUM ( "k"."nilai_konversi" ) * 100) AS "persen"
                FROM
                    "transaction"."kegiatan" "k"
                    INNER JOIN "master"."sektor" "d" ON "k"."sektor_id" = "d"."id"
                    LEFT JOIN "transaction"."paket_awp" "awp" ON "k"."id" = "awp"."kegiatan_id"
                '));
            }
            $arr_p = array();
            foreach($pie as $item){
                $nama = "";
                $jumlah = 0;
                if($item->type == 1){
                    $nama = "Undisburse";
                    $jumlah = $item->nilai - $item->real;
                }
                if($item->type == 2){
                    $nama = "Disburse";
                    $jumlah = $item->real;
                }
                $tempp = array(
                    "nama"=>$nama,
                    "jumlah"=>number_format($jumlah/1000000000000,2)
                );
                array_push($arr_p, $tempp);
            }
            $arr = array();
            $persen = 0;
            $sumnilai = 0;
            foreach($kegiatan as $k){
                $t = $k->real;
                $bt = $k->nilai - $k->real;
                $persen += $k->real / $k->nilai * 100;
                $sumnilai += $k->real;
                $temp = array(
                    'nama'=>$k->nama,
                    'bt'=>number_format($bt/1000000000000,3),
                    't'=>number_format($t/1000000000000,3)
                );
                array_push($arr,$temp);
            }
            $results = json_encode($arr_p);
            $result = json_encode($arr);
            return view('page.app.dashboard.list_kpkpln',compact('kegiatan','lkegiatan','tipe','result','persen','sumnilai','results'));
        }
        return view('page.app.dashboard.kpkpln');
    }
    public function kppd(Request $request)
    {
        if ($request->ajax()) {
            $arr = array();
            $sumreal = DB::select(DB::raw('
            SELECT 
                SUM( "real_dana" ) AS "real"
            FROM
                "transaction"."paket_dipa_bulan"
            WHERE
                "ta" LIKE \'%'.$request->keyword.'%\'
            '));

            $sumdipa = DB::select(DB::raw('
            SELECT 
                SUM( "dipa" ) AS "dipa"
            FROM
                "transaction"."paket_dipa"
            WHERE
                "tahun" LIKE \'%'.$request->keyword.'%\'
            GROUP BY
            "paket_id","tanggal_revisi"
            ORDER BY "tanggal_revisi" DESC LIMIT 1
            '));
            $sumreal = $sumreal ? $sumreal[0]->real : 0;
            $sumdipa = $sumdipa ? $sumdipa[0]->dipa : 0;
            $tipe = $request->tipe;
            if($tipe == "Donor"){
                
                $donor = Donor::get();
                foreach($donor AS $d){
                    foreach($d->kegiatan as $k){
                        foreach($k->paket as $p){
                            $real = DB::select(DB::raw('
                            SELECT 
                                SUM( "real_dana" ) AS "real"
                            FROM
                                "transaction"."paket_dipa_bulan"
                            WHERE
                                "ta" LIKE \'%'.$request->keyword.'%\'
                            AND
                                "kode_paket" = \''.$p->kode_paket.'\'
                            '));
                            $real = $real ? $real[0]->real:0;
                            $dipa = DB::select(DB::raw('
                            SELECT 
                                SUM( "dipa" ) AS "dipa"
                            FROM
                                "transaction"."paket_dipa"
                            WHERE
                                "tahun" LIKE \'%'.$request->keyword.'%\'
                            AND
                                "paket_id" = \''.$p->id.'\'
                            GROUP BY
                            "tanggal_revisi"
                            ORDER BY "tanggal_revisi" DESC LIMIT 1
                            '));
                            $dipa = $dipa ? $dipa[0]->dipa:0;
                            $temp = 
                                [
                                    'nama'=>$d->nama,
                                    'real'=>$real > 0 ? $real / 1000000000:$real,
                                    'dipa'=>$dipa > 0 ? $dipa / 1000000000:$dipa
                                ];
                            array_push($arr,$temp);
                        }
                    }
                }
            }else{
                
            }
            $result = json_encode($arr);
            dd($result);
            return view('page.app.dashboard.list_kppd',compact('kegiatan','lkegiatan','tipe','result','persen','sumnilai','results'));
        }
        return view('page.app.dashboard.kppd');
    }
}
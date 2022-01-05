<?php

namespace App\Http\Controllers\Phln;

use App\Models\Kegiatan;
use App\Models\KegiatanDipa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\HibahLangsung;
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
                $ppagu = DB::select(DB::raw('
                SELECT
                    SUM("dipa"."dipa") AS "target",
                    SUM("dipa"."dipa_real") AS "real"
                FROM
                    "transaction"."kegiatan" AS "tbl"
                LEFT JOIN "transaction"."kegiatan_dipa" AS "dipa" ON "tbl"."id" = "dipa"."kegiatan_id"
                WHERE
                    "dipa"."tahun" = \''.$request->keyword.'\'
                AND
                    "tbl"."tipe_kegiatan" = \''.'Pinjaman'.'\'
                '));
                $hpagu = DB::select(DB::raw('
                SELECT
                    SUM("dipa"."dipa") AS "target",
                    SUM("dipa"."dipa_real") AS "real"
                FROM
                    "transaction"."kegiatan" AS "tbl"
                LEFT JOIN "transaction"."kegiatan_dipa" AS "dipa" ON "tbl"."id" = "dipa"."kegiatan_id"
                WHERE
                    "dipa"."tahun" = \''.$request->keyword.'\'
                AND
                    "tbl"."tipe_kegiatan" = \''.'Hibah'.'\'
                '));
                $hnilai_alokasi = Kegiatan::where('tipe_kegiatan','=','Hibah')->get()->sum('nilai_konversi');
                $hlnilai_alokasi = HibahLangsung::get()->sum('nilai_rp');
                $hnilai_penyerapan = Kegiatan::where('tipe_kegiatan','=','Hibah')->get()->sum('penyerapan');
                $hlnilai_penyerapan = HibahLangsung::get()->sum('real_rp');
                $hkegiatan_pinjaman = Kegiatan::where('tipe_kegiatan','=','Hibah')->get()->count();
                $hlkegiatan_pinjaman = HibahLangsung::select('no_register')->groupBy('no_register')->get()->count();
                $title_dipa_pagu = "DIPA Pagu (".$request->keyword.")";
                $title_dipa_realisasi = "DIPA Realisasi (".$request->keyword.")";
                return view('page.app.dashboard.list_main',compact('pkegiatan_pinjaman','pnilai_alokasi','pnilai_penyerapan','ppagu','hpagu','hkegiatan_pinjaman','hnilai_alokasi','hnilai_penyerapan','hlkegiatan_pinjaman','hlnilai_alokasi','hlnilai_penyerapan','title_dipa_pagu','title_dipa_realisasi'));
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
}
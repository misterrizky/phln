<?php

namespace App\Http\Controllers\Phln;

use App\Models\Kegiatan;
use App\Models\PaketAwp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaketKurvaController extends Controller
{
    public function index(Request $request, Kegiatan $kegiatan){
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            // if (Auth::guard('office')->user()->role == 5){
            //     $collection = Paket::where('kegiatan_id','=',$kegiatan->id)
            //     ->where('prov_id','=',Auth::guard('office')->user()->province->id_prov)
            //     ->whereRaw('UPPER("nama_paket") LIKE \'%'.$keywords.'%\'')
            //     ->orderBy('id', 'ASC')
            //     ->paginate(10);
            // }else{
                $collection = PaketAwp::selectRaw('
                SUM("real_dana") AS "real", 
                SUM("target_dana") AS "target",
                "ta",
                "bulan"
                ')->
                where('kegiatan_id','=',$kegiatan->id)
                ->whereRaw('"ta" LIKE \'%'.$keywords.'%\'')
                ->groupBy('ta', 'bulan')
                ->orderBy('bulan', 'ASC')
                ->get();
                $arr_k = array();
                foreach($collection as $item){
                    $bln = ['','Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
                    $temp=array(
                        "real"=>$item->real,
                        "target"=>$item->target,
                        "bulan"=>$bln[$item->bulan]
                    );
                    array_push($arr_k,$temp);
                }
                $collection = json_encode($arr_k);
            // }
            return view('page.app.paketKurva.list',compact('collection','kegiatan'));
        }
        return view('page.app.paketKurva.main', compact('kegiatan'));
    }
}

<?php

namespace App\Http\Controllers\Phln;

use App\Models\Kegiatan;
use App\Models\KegiatanKpi;
use Illuminate\Http\Request;
use App\Models\KegiatanKpiDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KegiatanKpiController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_kegiatan' => 'required',
            'indikator' => 'required',
            'target' => 'required',
            'satuan' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('id_kegiatan')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('id_kegiatan'),
                ]);
            }elseif($errors->has('indikator')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('indikator'),
                ]);
            }elseif($errors->has('target')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('target'),
                ]);
            }elseif($errors->has('satuan')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('satuan'),
                ]);
            }
        }
        $kegiatan = Kegiatan::where('id',$request->id_kegiatan)->first();
        if($request->id){
            $data = KegiatanKpi::where('id',$request->id)->first();
        }else{
            $data = new KegiatanKpi;
        }
        $data->kegiatan_id = $kegiatan->id;
        $data->indikator = $request->indikator;
        $data->target = $request->target;
        $data->satuan = $request->satuan;
        $data->ket = $request->keterangan;
        if($request->id){
            $data->update();
        }else{
            $data->save();
        }
        return response()->json([
            'alert' => 'success',
            'message' => 'KPI tersimpan',
            'redirect' => 'input',
            'route' => route('phln.kegiatan.edit',$kegiatan->id),
        ]);
    }
    public function show(kegiatanKpi $kegiatanKpi)
    {
        return view('page.app.kegiatan.show_kpi', compact('kegiatanKpi'));
    }
    public function destroy(KegiatanKpi $kegiatanKpi)
    {
        $id = $kegiatanKpi->kegiatan_id;
        $kegiatanKpi->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'KPI terhapus',
            'redirect' => 'input',
            'route' => route('phln.kegiatan.edit',$id),
        ]);
    }
    public function create_kpi(KegiatanKpi $kegiatanKpi)
    {
        return view('page.app.kegiatan.input_kpi_detail', ['data' => new KegiatanKpiDetail, 'kegiatanKpi' => $kegiatanKpi]);
    }
}

<?php

namespace App\Http\Controllers\Phln;

use App\Models\KegiatanKpi;
use Illuminate\Http\Request;
use App\Models\KegiatanKpiDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KegiatanKpiDetailController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_kpi' => 'required',
            'tahun' => 'required',
            'target' => 'required',
            'capaian' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('id_kpi')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('id_kpi'),
                ]);
            }elseif($errors->has('tahun')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tahun'),
                ]);
            }elseif($errors->has('target')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('target'),
                ]);
            }elseif($errors->has('capaian')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('capaian'),
                ]);
            }
        }
        $cek = KegiatanKpiDetail::where('kpi_id',$request->id_kpi)->where('tahun',$request->tahun)->get()->count();
        if($cek > 0){
            return response()->json([
                'alert' => 'info',
                'message' => 'KPI Detail sudah tersedia',
            ]);
        }
        $kpi = KegiatanKpi::where('id',$request->id_kpi)->first();
        $data = new KegiatanKpiDetail;
        $data->kpi_id = $request->id_kpi;
        $data->tahun = $request->tahun;
        $data->target = $request->target;
        $data->capaian = $request->capaian;
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'KPI Detail tersimpan',
            'redirect' => 'input',
            'route' => route('phln.kegiatan.edit',$kpi->kegiatan_id),
        ]);
    }
    public function edit(KegiatanKpiDetail $kegiatanKpiDetail)
    {
        $kegiatanKpi = KegiatanKpi::where('id',$kegiatanKpiDetail->kpi_id)->first();
        return view('page.app.kegiatan.input_kpi_detail', ['data' => $kegiatanKpiDetail, 'kegiatanKpi' => $kegiatanKpi]);
    }
    public function update(Request $request, KegiatanKpiDetail $kegiatanKpiDetail)
    {
        $validator = Validator::make($request->all(), [
            'id_kpi' => 'required',
            'tahun' => 'required',
            'target' => 'required',
            'capaian' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('id_kpi')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('id_kpi'),
                ]);
            }elseif($errors->has('tahun')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tahun'),
                ]);
            }elseif($errors->has('target')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('target'),
                ]);
            }elseif($errors->has('capaian')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('capaian'),
                ]);
            }
        }
        $kpi = KegiatanKpi::where('id',$request->id_kpi)->first();
        $kegiatanKpiDetail->kpi_id = $request->id_kpi;
        $kegiatanKpiDetail->tahun = $request->tahun;
        $kegiatanKpiDetail->target = $request->target;
        $kegiatanKpiDetail->capaian = $request->capaian;
        $kegiatanKpiDetail->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'KPI Detail tersimpan',
            'redirect' => 'input',
            'route' => route('phln.kegiatan.edit',$kpi->kegiatan_id),
        ]);
    }
    public function destroy(KegiatanKpiDetail $kegiatanKpiDetail)
    {
        $kpi = KegiatanKpi::where('id',$kegiatanKpiDetail->kpi_id)->first();
        $kegiatanKpiDetail->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'KPI Detail terhapus',
            'redirect' => 'input',
            'route' => route('phln.kegiatan.edit',$kpi->kegiatan_id),
        ]);
    }
}

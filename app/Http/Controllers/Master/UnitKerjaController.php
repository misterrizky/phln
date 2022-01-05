<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Province;
use App\Models\UnitKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class UnitKerjaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = UnitKerja::where('kode_satker','LIKE','%'.$keywords.'%')
            ->orWhereRaw('UPPER("nama") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.unitKerja.list',compact('collection'));
        }
        return view('page.app.unitKerja.main');
    }
    public function create()
    {
        $province = Province::orderBy('id','ASC')->get();
        return view('page.app.unitKerja.input', ['data' => new UnitKerja, 'province' => $province]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_satker' => 'required|unique:pgsql.master.unit_kerja',
            'nama' => 'required',
            'provinsi_id' => 'required',
            'kabupaten_id' => 'required',
            'st' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('kode_satker')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kode_satker'),
                ]);
            }elseif($errors->has('nama')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif($errors->has('provinsi_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('provinsi_id'),
                ]);
            }elseif($errors->has('kabupaten_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kabupaten_id'),
                ]);
            }elseif($errors->has('st')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('st'),
                ]);
            }
        }
        $data = new UnitKerja;
        $data->kode_satker = $request->kode_satker;
        $data->nama = Str::title($request->nama);
        $data->provinsi_id = $request->provinsi_id;
        $data->kabupaten_id = $request->kabupaten_id;
        $data->st = $request->st;
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Unit Kerja tersimpan',
        ]);
    }
    public function show(UnitKerja $unitKerja)
    {
        // 
    }
    public function edit(UnitKerja $unitKerja)
    {
        $province = Province::orderBy('id','ASC')->get();
        return view('page.app.unitKerja.input', ['data' => $unitKerja, 'province' => $province]);
    }
    public function update(Request $request, UnitKerja $unitKerja)
    {
        $validator = Validator::make($request->all(), [
            'kode_satker' => 'required|integer|unique:pgsql.master.unit_kerja,kode_satker,'.$unitKerja->id,
            'nama' => 'required',
            'provinsi_id' => 'required',
            'kabupaten_id' => 'required',
            'st' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('kode_satker')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kode_satker'),
                ]);
            }elseif($errors->has('nama')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif($errors->has('provinsi_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('provinsi_id'),
                ]);
            }elseif($errors->has('kabupaten_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kabupaten_id'),
                ]);
            }elseif($errors->has('st')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('st'),
                ]);
            }
        }
        $unitKerja->kode_satker = $request->kode_satker;
        $unitKerja->nama = Str::title($request->nama);
        $unitKerja->provinsi_id = $request->provinsi_id;
        $unitKerja->kabupaten_id = $request->kabupaten_id;
        $unitKerja->st = $request->st;
        $unitKerja->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Unit Kerja terupdate',
        ]);
    }
    public function destroy(UnitKerja $unitKerja)
    {
        $unitKerja->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Unit Kerja terhapus',
        ]);
    }
}
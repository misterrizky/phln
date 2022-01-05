<?php

namespace App\Http\Controllers\Phln;

use App\Models\Kegiatan;
use App\Models\KegiatanDipa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KegiatanDipaController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_kegiatan' => 'required',
            'tahun' => 'required',
            'dipa' => 'required',
            'dipa_real' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('id_kegiatan')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('id_kegiatan'),
                ]);
            }elseif($errors->has('tahun')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tahun'),
                ]);
            }elseif($errors->has('dipa')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('dipa'),
                ]);
            }elseif($errors->has('dipa_real')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('dipa_real'),
                ]);
            }
        }
        $kegiatan = Kegiatan::where('id',$request->id_kegiatan)->first();
        $cek = KegiatanDipa::where('kegiatan_id',$kegiatan->id)->where('tahun',$request->tahun)->get()->count();
        if($cek > 0){
            return response()->json([
                'alert' => 'info',
                'message' => 'DIPA tahun '. $request->tahun .' sudah ada',
            ]);
        }
        if($request->id){
            $data = KegiatanDipa::where('id',$request->id)->first();
        }else{
            $data = new KegiatanDipa;
        }
        $data->kegiatan_id = $kegiatan->id;
        $data->tahun = $request->tahun;
        $data->dipa = str_replace(",","",$request->dipa);
        $data->dipa_real = str_replace(",","",$request->dipa_real);
        if($request->id){
            $data->update();
        }else{
            $data->save();
        }
        return response()->json([
            'alert' => 'success',
            'message' => 'DIPA tersimpan',
            'redirect' => 'input',
            'route' => route('phln.kegiatan.edit',$kegiatan->id),
        ]);
    }
    public function show(KegiatanDipa $kegiatanDipa)
    {
        //
    }
    public function edit(KegiatanDipa $kegiatanDipa)
    {
        //
    }
    public function update(Request $request, KegiatanDipa $kegiatanDipa)
    {
        //
    }
    public function destroy(KegiatanDipa $kegiatanDipa)
    {
        $id = $kegiatanDipa->kegiatan_id;
        $kegiatanDipa->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'DIPA terhapus',
            'redirect' => 'input',
            'route' => route('phln.kegiatan.edit',$id),
        ]);
    }
}

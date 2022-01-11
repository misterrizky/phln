<?php

namespace App\Http\Controllers\Phln;

use App\Models\Paket;
use App\Models\PaketAlokasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PaketAlokasiController extends Controller
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
            'paket_id' => 'required',
            'mata_uang_alokasi' => 'required',
            'alokasi_valas' => 'required',
            'alokasi_rupiah' => 'required',
            'tanggal_revisi' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('paket_id')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('paket_id'),
                ]);
            }elseif($errors->has('mata_uang_alokasi')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('mata_uang_alokasi'),
                ]);
            }elseif($errors->has('alokasi_valas')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('alokasi_valas'),
                ]);
            }elseif($errors->has('alokasi_rupiah')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('alokasi_rupiah'),
                ]);
            }elseif($errors->has('tanggal_revisi')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal_revisi'),
                ]);
            }
        }
        $paket = Paket::where('id',$request->paket_id)->first();
        if($request->id){
            $data = PaketAlokasi::where('id',$request->id)->first();
        }else{
            $data = new PaketAlokasi;
        }
        $data->paket_id = $paket->id;
        $data->alokasi_valas = str_replace("_","",str_replace(",",".",str_replace(".","",$request->alokasi_valas)));
        $data->alokasi_rupiah = str_replace("_","",str_replace(",",".",str_replace(".","",$request->alokasi_rupiah)));
        $data->mata_uang_alokasi = $request->mata_uang_alokasi;
        $data->tanggal_revisi = $request->tanggal_revisi;
        $data->keterangan = $request->keterangan;
        if($request->id){
            $data->update();
        }else{
            $data->save();
        }
        $paket->mata_uang_alokasi = $data->mata_uang_alokasi;
        $paket->alokasi_valas = $data->alokasi_valas;
        $paket->alokasi_rupiah = $data->alokasi_rupiah;
        $paket->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Alokasi tersimpan',
            'redirect' => 'input',
            'route' => route('phln.paket.edit',[$paket->kegiatan_id,$paket->id]),
        ]);
    }
    public function show(PaketAlokasi $paketAlokasi)
    {
        //
    }
    public function edit(PaketAlokasi $paketAlokasi)
    {
        //
    }
    public function update(Request $request, PaketAlokasi $paketAlokasi)
    {
        //
    }
    public function destroy(PaketAlokasi $paketAlokasi)
    {
        $paket = Paket::where('id',$paketAlokasi->paket_id)->first();
        $paketAlokasi->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Alokasi terhapus',
            'redirect' => 'input',
            'route' => route('phln.paket.edit',[$paket->kegiatan_id,$paket->id]),
        ]);
    }
}

<?php

namespace App\Http\Controllers\Phln;

use App\Models\Paket;
use App\Models\PaketDipa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PaketDipaController extends Controller
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
            'ta' => 'required',
            'dipa' => 'required',
            'prognosis' => 'required',
            'tanggal_revisi' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('paket_id')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('paket_id'),
                ]);
            }elseif($errors->has('ta')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('ta'),
                ]);
            }elseif($errors->has('dipa')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('dipa'),
                ]);
            }elseif($errors->has('prognosis')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('prognosis'),
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
            $data = PaketDipa::where('id',$request->id)->first();
        }else{
            $data = new PaketDipa;
        }
        $data->paket_id = $paket->id;
        $data->tahun = $request->ta;
        $data->dipa = str_replace("_","",str_replace(",",".",str_replace(".","",$request->dipa)));
        $data->prognosis = str_replace("_","",str_replace(",",".",str_replace(".","",$request->prognosis)));
        $data->tanggal_revisi = $request->tanggal_revisi;
        $data->keterangan = $request->keterangan;
        if($request->id){
            $data->update();
        }else{
            $data->save();
        }
        return response()->json([
            'alert' => 'success',
            'message' => 'DIPA tersimpan',
            'redirect' => 'input',
            'route' => route('phln.paket.edit',[$paket->kegiatan_id,$paket->id]),
        ]);
    }
    public function show(PaketDipa $paketDipa)
    {
        //
    }
    public function edit(PaketDipa $paketDipa)
    {
        //
    }
    public function update(Request $request, PaketDipa $paketDipa)
    {
        //
    }
    public function destroy(PaketDipa $paketDipa)
    {
        $paket = Paket::where('id',$paketDipa->paket_id)->first();
        $paketDipa->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'DIPA terhapus',
            'redirect' => 'input',
            'route' => route('phln.paket.edit',[$paket->kegiatan_id,$paket->id]),
        ]);
    }
}

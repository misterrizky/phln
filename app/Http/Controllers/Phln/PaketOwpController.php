<?php

namespace App\Http\Controllers\Phln;

use App\Models\PaketOwp;
use App\Models\Paket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
class PaketOwpController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tahun' => 'required',
            'nilai' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('tahun')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tahun'),
                ]);
            }elseif($errors->has('nilai')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nilai'),
                ]);
            }
        }
        $paket = Paket::where('id',$request->paket_id)->first();
        if($request->id){
            $data = PaketOwp::where('id',$request->id)->first();
        }else{
            $data = new PaketOwp;
        }
        $data->paket_id = $paket->id;
        $data->tahun = $request->tahun;
        $data->nilai = str_replace(',','',$request->nilai);
        if($request->id){
            $data->update();
        }else{
            $data->save();
        }
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Paket Owp tersimpan',
            'redirect' => 'input',
            'route' => route('phln.paket.edit',[$paket->kegiatan_id,$paket->id]),
        ]);
    }
    public function destroy(PaketOwp $paketOwp)
    {
        $paket = Paket::where('id',$paketOwp->paket_id)->first();
        $paketOwp->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Paket Owp terhapus',
            'redirect' => 'input',
            'route' => route('phln.paket.edit',[$paket->kegiatan_id,$paket->id]),
        ]);
    }
}

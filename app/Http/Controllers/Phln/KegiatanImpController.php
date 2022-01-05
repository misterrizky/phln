<?php

namespace App\Http\Controllers\Phln;

use App\Models\Kegiatan;
use App\Models\KegiatanImp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KegiatanImpController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'imp_kl' => 'required',
            'imp_unor' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('imp_kl')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('imp_kl'),
                ]);
            }elseif($errors->has('imp_unor')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('imp_unor'),
                ]);
            }
        }
        if($request->id){
            $data = KegiatanImp::where('id',$request->id)->first();
        }else{
            $data = new KegiatanImp;
        }
        $data->kegiatan_id = $request->kegiatan_imp;
        $data->department_code = $request->imp_kl;
        $data->unor_code = $request->imp_unor;
        $data->satker_code = $request->imp_satker?:0;
        if($request->id){
            $data->update();
        }else{
            $data->save();
        }
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Implementing tersimpan',
            'redirect' => 'input',
            'route' => route('phln.kegiatan.edit',$request->kegiatan_imp),
        ]);
    }

    public function destroy(KegiatanImp $kegiatanImp)
    {
        $kegiatan = Kegiatan::where('id','=',$kegiatanImp->kegiatan_id)->first();
        $kegiatanImp->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Implementing Agency terhapus',
            'redirect' => 'input',
            'route' => route('phln.kegiatan.edit',$kegiatan->id),
        ]);
    }
}

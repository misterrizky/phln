<?php

namespace App\Http\Controllers\Phln;

use App\Models\Kegiatan;
use Illuminate\Support\Str;
use App\Models\KegiatanExec;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class KegiatanExecController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'exec_kl' => 'required',
            'exec_unor' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('exec_kl')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('exec_kl'),
                ]);
            }elseif($errors->has('exec_unor')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('exec_unor'),
                ]);
            }
        }
        if($request->id){
            $data = KegiatanExec::where('id',$request->id)->first();
        }else{
            $data = new KegiatanExec;
        }
        $data->kegiatan_id = $request->kegiatan_exec;
        $data->department_code = $request->exec_kl;
        $data->unor_code = $request->exec_unor;
        $data->satker_code = $request->exec_satker?:0;
        if($request->id){
            $data->update();
        }else{
            $data->save();
        }
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Executing tersimpan',
            'redirect' => 'input',
            'route' => route('phln.kegiatan.edit',$request->kegiatan_exec),
        ]);
    }

    public function destroy(KegiatanExec $kegiatanExec)
    {
        $kegiatan = Kegiatan::where('id','=',$kegiatanExec->kegiatan_id)->first();
        $kegiatanExec->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Executing Agency terhapus',
            'redirect' => 'input',
            'route' => route('phln.kegiatan.edit',$kegiatan->id),
        ]);
    }
}
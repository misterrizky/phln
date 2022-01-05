<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\ManagementUnit;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ManagementUnitController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kd_register' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'fax' => 'required',
            'email' => 'required',
            'tipe' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('kd_register')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kd_register'),
                ]);
            }elseif($errors->has('nama')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif($errors->has('jabatan')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('jabatan'),
                ]);
            }elseif($errors->has('alamat')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('alamat'),
                ]);
            }elseif($errors->has('telp')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('telp'),
                ]);
            }elseif($errors->has('fax')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('fax'),
                ]);
            }elseif($errors->has('email')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('email'),
                ]);
            }elseif($errors->has('tipe')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tipe'),
                ]);
            }
        }
        $kegiatan = Kegiatan::where('kode_register',$request->kd_register)->first();
        if($request->id){
            $data = ManagementUnit::where('id',$request->id)->first();
        }else{
            $data = new ManagementUnit;
        }
        $data->kegiatan_id = $kegiatan->id;
        $data->nama = Str::title($request->nama);
        $data->jabatan = $request->jabatan;
        $data->alamat = $request->alamat;
        $data->telp = $request->telp;
        $data->fax = $request->fax;
        $data->email = $request->email;
        $data->type = $request->tipe;
        if($request->id){
            $data->update();
        }else{
            $data->save();
        }
        return response()->json([
            'alert' => 'success',
            'message' => 'Management Unit tersimpan',
            'redirect' => 'input',
            'route' => route('phln.kegiatan.edit',$kegiatan->id),
        ]);
    }
    public function destroy(ManagementUnit $managementUnit)
    {
        $kegiatan = Kegiatan::where('id','=',$managementUnit->kegiatan_id)->first();
        $managementUnit->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Management Unit terhapus',
            'redirect' => 'input',
            'route' => route('phln.kegiatan.edit',$kegiatan->id),
        ]);
    }
}
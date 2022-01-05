<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\ManagementUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CpmuController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = ManagementUnit::where('type','=','CPMU')
            ->where('kode','LIKE','%'.$keywords.'%')
            ->whereRaw('UPPER("nama") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.cpmu.list',compact('collection'));
        }
        return view('page.app.cpmu.main');
    }
    public function create()
    {
        return view('page.app.cpmu.input', ['data' => new ManagementUnit]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|unique:pgsql.master.management_unit',
            'nama' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'fax' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('kode')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kode'),
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
            }
        }
        $data = new ManagementUnit;
        $data->kode = $request->kode;
        $data->nama = Str::title($request->nama);
        $data->jabatan = $request->jabatan;
        $data->alamat = $request->alamat;
        $data->telp = $request->telp;
        $data->fax = $request->fax;
        $data->email = $request->email;
        $data->type = "CPMU";
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'CPMU tersimpan',
        ]);
    }
    public function show(ManagementUnit $managementUnit)
    {
        //
    }
    public function edit(ManagementUnit $cpmu)
    {
        return view('page.app.cpmu.input', ['data' => $cpmu]);
    }
    public function update(Request $request, ManagementUnit $cpmu)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|unique:pgsql.master.management_unit,kode,'.$cpmu->id,
            'nama' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'fax' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('kode')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kode'),
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
            }
        }
        $cpmu->kode = $request->kode;
        $cpmu->nama = Str::title($request->nama);
        $cpmu->jabatan = $request->jabatan;
        $cpmu->alamat = $request->alamat;
        $cpmu->telp = $request->telp;
        $cpmu->fax = $request->fax;
        $cpmu->email = $request->email;
        $cpmu->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'CPMU terupdate',
        ]);
    }
    public function destroy(ManagementUnit $cpmu)
    {
        $cpmu->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'CPMU terhapus',
        ]);
    }
}
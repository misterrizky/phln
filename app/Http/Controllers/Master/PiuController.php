<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\ManagementUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class PiuController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = ManagementUnit::where('type','=','PIU')
            ->where('kode','LIKE','%'.$keywords.'%')
            ->whereRaw('UPPER("nama") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.piu.list',compact('collection'));
        }
        return view('page.app.piu.main');
    }
    public function create()
    {
        return view('page.app.piu.input', ['data' => new ManagementUnit]);
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
        $data->type = "PIU";
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'PIU tersimpan',
        ]);
    }
    public function show(ManagementUnit $managementUnit)
    {
        //
    }
    public function edit(ManagementUnit $piu)
    {
        return view('page.app.piu.input', ['data' => $piu]);
    }
    public function update(Request $request, ManagementUnit $piu)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|unique:pgsql.master.management_unit,kode,'.$piu->id,
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
        $piu->kode = $request->kode;
        $piu->nama = Str::title($request->nama);
        $piu->jabatan = $request->jabatan;
        $piu->alamat = $request->alamat;
        $piu->telp = $request->telp;
        $piu->fax = $request->fax;
        $piu->email = $request->email;
        $piu->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'PIU terupdate',
        ]);
    }
    public function destroy(ManagementUnit $piu)
    {
        $piu->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'PIU terhapus',
        ]);
    }
}

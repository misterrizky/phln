<?php

namespace App\Http\Controllers\master;

use App\Models\Satker;
use App\Models\Department;
use App\Models\Unor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class SatkerController extends Controller
{
    public function index(Request $request, Unor $unor)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = Satker::where('unor_id','=',$unor->id)
            ->whereRaw('UPPER("nama") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.satker.list',compact('collection'));
        }
        return view('page.app.satker.main',compact('unor'));
    }

    public function create(Unor $unor)
    {
        return view('page.app.satker.input', ['data' => new Satker, 'unor' => $unor]);
    }

    public function get_list(Request $request){
        $unor = Unor::where('id_unor','=',$request->unor_id)->first();
        $collection = Satker::where('unor_id','=',$unor->id)->orderBy('id','ASC')->get();
        $list = "<option value=''>Pilih Satker</option>";
        foreach($collection as $row){
            $list.="<option value='$row->kode'$row->id==$request->unor_id?selected:''>$row->nama</option>";
        }
        echo $list;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|unique:pgsql.master.satker',
            'nama' => 'required',
            'unor_id' => 'required',
            'department_id' => 'required',
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
            }elseif($errors->has('department_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('department_id'),
                ]);
            }elseif($errors->has('unor_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('unor_id'),
                ]);
            }
        }
        $data = new Satker;
        $data->kode = $request->kode;
        $data->nama = Str::title($request->nama);
        $data->department_id = $request->department_id;
        $data->unor_id = $request->unor_id;
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Satker tersimpan',
        ]);
    }

    public function show(Satker $satker)
    {
        //
    }

    public function edit(Unor $unor, Satker $satker)
    {
        return view('page.app.satker.input', ['data' => $satker,'unor' => $unor]);
    }

    public function update(Request $request, Satker $satker)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|integer|unique:pgsql.master.satker,kode,'.$satker->id,
            'nama' => 'required',
            'department_id' => 'required',
            'unor_id' => 'required',
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
            }elseif($errors->has('department_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('department_id'),
                ]);
            }elseif($errors->has('unor_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('unor_id'),
                ]);
            }
        }
        $satker->kode = $request->kode;
        $satker->nama = Str::title($request->nama);
        $satker->department_id = $request->department_id;
        $satker->unor_id = $request->unor_id;
        $satker->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Satker terupdate',
        ]);
    }


    public function destroy(Satker $satker)
    {
        $satker->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Satker terhapus',
        ]);
    }
}

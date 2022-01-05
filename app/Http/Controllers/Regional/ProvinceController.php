<?php

namespace App\Http\Controllers\Regional;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ProvinceController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = Province::where('id_prov','LIKE','%'.$keywords.'%')
            ->orWhereRaw('UPPER("nm_prov") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.province.list',compact('collection'));
        }
        return view('page.app.province.main');
    }
    public function create()
    {
        return view('page.app.province.input', ['data' => new Province]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'no_prov' => 'required|unique:pgsql.regional.provinsi',
            'nm_prov' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('no_prov')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('no_prov'),
                ]);
            }elseif($errors->has('nm_prov')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nm_prov'),
                ]);
            }
        }
        $data = new Province;
        $data->id_prov = $request->no_prov;
        $data->nm_prov = Str::title($request->nm_prov);
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Provinsi tersimpan',
        ]);
    }
    public function show(Province $province)
    {
        //
    }
    public function edit(Province $province)
    {
        return view('page.app.province.input', ['data' => $province]);
    }
    public function update(Request $request, Province $province)
    {
        $validator = Validator::make($request->all(), [
            'no_prov' => 'required|integer',
            'nm_prov' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('no_prov')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('no_prov'),
                ]);
            }elseif($errors->has('nm_prov')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nm_prov'),
                ]);
            }
        }
        $province->id_prov = $request->no_prov;
        $province->nm_prov = Str::title($request->nm_prov);
        $province->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Provinsi terupdate',
        ]);
    }
    public function destroy(Province $province)
    {
        $province->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Provinsi terhapus',
        ]);
    }
}

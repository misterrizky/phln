<?php

namespace App\Http\Controllers\Master;

use App\Models\Sektor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SektorController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = Sektor::where('nama','LIKE','%'.$keywords.'%')
            ->orderBy('id','ASC')
            ->paginate(5);
            return view('page.app.sektor.list',compact('collection'));
        }
        return view('page.app.sektor.main');
    }
    public function create()
    {
        return view('page.app.sektor.input', ['data' => new Sektor]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'tipe' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if($errors->has('nama')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }
            elseif($errors->has('tipe')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tipe'),
                ]);
            }
        }
        $data = new Sektor;
        $data->nama = $request->nama;
        $data->tipe = $request->tipe;
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Sektor tersimpan',
        ]);
    }
    public function show(Sektor $sektor)
    {
        //
    }
    public function edit(Sektor $sektor)
    {
        return view('page.app.sektor.input', ['data' => $sektor]);
    }
    public function update(Request $request, Sektor $sektor)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'tipe' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if($errors->has('nama')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }
            elseif($errors->has('tipe')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tipe'),
                ]);
            }
        }
        $sektor->nama = $request->nama;
        $sektor->tipe = $request->tipe;
        $sektor->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Sektor tersimpan',
        ]);
    }
    public function destroy(Sektor $sektor)
    {
        $sektor->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Sektor terhapus',
        ]);
    }
}

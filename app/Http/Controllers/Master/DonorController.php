<?php

namespace App\Http\Controllers\Master;

use App\Models\Donor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class DonorController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = Donor::whereRaw('UPPER("nama") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.donor.list',compact('collection'));
        }
        return view('page.app.donor.main');
    }
    public function create()
    {
        return view('page.app.donor.input', ['data' => new Donor]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'kategori' => 'required',
            'singkatan' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif($errors->has('kategori')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kategori'),
                ]);
            }elseif($errors->has('singkatan')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('singkatan'),
                ]);
            }
        }
        $data = new Donor;
        $data->nama = Str::title($request->nama);
        $data->kategori = Str::title($request->kategori);
        $data->singkatan = $request->singkatan;
        $data->no_register = $request->no_register;
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Donor tersimpan',
        ]);
    }
    public function show(Donor $donor)
    {
        //
    }
    public function edit(Donor $donor)
    {
        return view('page.app.donor.input', ['data' => $donor]);
    }
    public function update(Request $request, Donor $donor)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'kategori' => 'required',
            'singkatan' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif($errors->has('kategori')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kategori'),
                ]);
            }elseif($errors->has('singkatan')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('singkatan'),
                ]);
            }
        }
        $donor->nama = Str::title($request->nama);
        $donor->kategori = Str::title($request->kategori);
        $donor->singkatan = $request->singkatan;
        $donor->no_register = $request->no_register;
        $donor->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Donor terupdate',
        ]);
    }
    public function destroy(Donor $donor)
    {
        $donor->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Donor terhapus',
        ]);
    }
}
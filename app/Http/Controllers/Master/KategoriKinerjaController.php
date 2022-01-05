<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\KategoriKinerja;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class KategoriKinerjaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = KategoriKinerja::whereRaw('UPPER("kategori") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.kategoriKinerja.list',compact('collection'));
        }
        return view('page.app.kategoriKinerja.main');
    }
    public function create()
    {
        return view('page.app.kategoriKinerja.input', ['data' => new KategoriKinerja]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'pv' => 'required',
            'etr' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('kategori')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kategori'),
                ]);
            }elseif($errors->has('pv')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('pv'),
                ]);
            }elseif($errors->has('etr')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('etr'),
                ]);
            }
        }
        $data = new KategoriKinerja;
        $data->kategori = Str::title($request->kategori);
        $data->pv = $request->pv;
        $data->etr = $request->etr;
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Kategori Kinerja tersimpan',
        ]);
    }
    public function show(KategoriKinerja $kategoriKinerja)
    {
        //
    }
    public function edit(KategoriKinerja $kategoriKinerja)
    {
        return view('page.app.kategoriKinerja.input', ['data' => $kategoriKinerja]);
    }
    public function update(Request $request, KategoriKinerja $kategoriKinerja)
    {
        $validator = Validator::make($request->all(), [
            'kategori' => 'required',
            'pv' => 'required',
            'etr' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('kategori')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kategori'),
                ]);
            }elseif($errors->has('pv')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('pv'),
                ]);
            }elseif($errors->has('etr')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('etr'),
                ]);
            }
        }
        $kategoriKinerja->kategori = Str::title($request->kategori);
        $kategoriKinerja->pv = $request->pv;
        $kategoriKinerja->etr = $request->etr;
        $kategoriKinerja->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Kategori Kinerja terupdate',
        ]);
    }
    public function destroy(KategoriKinerja $kategoriKinerja)
    {
        $kategoriKinerja->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Kategori Kinerja terhapus',
        ]);
    }
}
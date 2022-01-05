<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Penarikan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class PenarikanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = Penarikan::whereRaw('UPPER("nama") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.penarikan.list',compact('collection'));
        }
        return view('page.app.penarikan.main');
    }
    public function create()
    {
        return view('page.app.penarikan.input', ['data' => new Penarikan]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }
        }
        $data = new Penarikan;
        $data->nama = Str::title($request->nama);
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Penarikan tersimpan',
        ]);
    }
    public function show(Penarikan $penarikan)
    {
        //
    }
    public function edit(Penarikan $penarikan)
    {
        return view('page.app.penarikan.input', ['data' => $penarikan]);
    }
    public function update(Request $request, Penarikan $penarikan)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }
        }
        $penarikan->nama = Str::title($request->nama);
        $penarikan->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Penarikan terupdate',
        ]);
    }
    public function destroy(Penarikan $penarikan)
    {
        $penarikan->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Penarikan terhapus',
        ]);
    }
}
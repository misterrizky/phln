<?php

namespace App\Http\Controllers\Master;

use App\Models\JenisSatker;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class JenisSatkerController extends Controller
{
 
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = JenisSatker::where('kode','LIKE','%'.$keywords.'%')
            ->orWhereRaw('UPPER("nama") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.jenisSatker.list',compact('collection'));
        }
        return view('page.app.jenisSatker.main');
    }

    public function create()
    {
        return view('page.app.jenisSatker.input', ['data' => new JenisSatker]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|unique:pgsql.master.jenis_satker',
            'nama' => 'required',
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
            }
        }
        $data = new JenisSatker;
        $data->kode = $request->kode;
        $data->nama = Str::title($request->nama);
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Jenis Satker tersimpan',
        ]);
    }

    public function show(JenisSatker $jenisSatker)
    {
        // 
    }

    public function edit(JenisSatker $jenisSatker)
    {
        return view('page.app.jenisSatker.input', ['data' => $jenisSatker]);
    }

    public function update(Request $request, JenisSatker $jenisSatker)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|integer|unique:pgsql.master.jenis_satker,kode,'.$jenisSatker->id ,
            'nama' => 'required',
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
            }
        }
        $jenisSatker->kode = $request->kode;
        $jenisSatker->nama = Str::title($request->nama);
        $jenisSatker->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Jenis Satker terupdate',
        ]);
    }

    public function destroy(JenisSatker $jenisSatker)
    {
        $jenisSatker->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Jenis Satker terhapus',
        ]);
    }
}

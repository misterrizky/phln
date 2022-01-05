<?php

namespace App\Http\Controllers\Master;

use App\Models\MataUang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class MataUangController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = MataUang::where('kode','LIKE','%'.$keywords.'%')
            ->orWhereRaw('UPPER("nama") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.mataUang.list',compact('collection'));
        }
        return view('page.app.mataUang.main');
    }

    public function create()
    {
        return view('page.app.mataUang.input', ['data' => new MataUang]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|unique:pgsql.master.mata_uang',
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
        $data = new MataUang;
        $data->kode = $request->kode;
        $data->nama = Str::title($request->nama);
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Mata uang tersimpan',
        ]);
    }

    public function show(MataUang $MataUang)
    {
        //
    }

    public function edit(MataUang $MataUang)
    {
        return view('page.app.mataUang.input', ['data' => $MataUang]);
    }

    public function update(Request $request, MataUang $MataUang)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|unique:pgsql.master.mata_uang,kode,'.$MataUang->id,
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
        $MataUang->kode = $request->kode;
        $MataUang->nama = Str::title($request->nama);
        $MataUang->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Mata uang terupdate',
        ]);
    }

    public function destroy(MataUang $MataUang)
    {
        $MataUang->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Mata uang terhapus',
        ]);
    }
}

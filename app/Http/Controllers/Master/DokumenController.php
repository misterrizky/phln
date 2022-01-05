<?php

namespace App\Http\Controllers\Master;

use App\Models\Dokumen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class DokumenController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = Dokumen::where('keterangan','LIKE','%'.$keywords.'%')
            ->orWhereRaw('UPPER("nama") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.dokumen.list',compact('collection'));
        }
        return view('page.app.dokumen.main');
    }
    public function create()
    {
        return view('page.app.dokumen.input', ['data' => new Dokumen]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'keterangan' => 'required',
            'file' => 'required|mimes:pdf',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif($errors->has('keterangan')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('keterangan'),
                ]);
            }elseif($errors->has('file')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('file'),
                ]);
            }
        }
        $data = new Dokumen;
        $data->nama = Str::title($request->nama);
        $data->keterangan = Str::title($request->keterangan);
        $file = request()->file('file')->store("dokumen");
        $data->file = $file;
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Dokumen tersimpan',
        ]);
    }
    public function show(Dokumen $dokumen)
    {
        //
    }
    public function edit(Dokumen $dokumen)
    {
        return view('page.app.dokumen.input', ['data' => $dokumen]);
    }
    public function update(Request $request, Dokumen $dokumen)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'keterangan' => 'required',
            'file' => 'mimes:pdf',
        ]);

          if ($validator->fails()) {
                $errors = $validator->errors();
                if ($errors->has('nama')) {
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('nama'),
                    ]);
                }elseif($errors->has('keterangan')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('keterangan'),
                    ]);
                }elseif($errors->has('file')){
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('file'),
                    ]);
                }
        }
        $dokumen->nama = Str::title($request->nama);
        $dokumen->keterangan = Str::title($request->keterangan);
        if (request()->file('file')) {
            Storage::delete($dokumen->file);
            $file = request()->file('file')->store("dokumen");
            $dokumen->file = $file;
        }
        $dokumen->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Dokumen terupdate',
        ]);
    }
    public function destroy(Dokumen $dokumen)
    {
        Storage::delete($dokumen->file);
        $dokumen->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Dokumen terhapus',
        ]);
    }
}
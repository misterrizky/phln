<?php

namespace App\Http\Controllers\Phln;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Models\KegiatanDokumen;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KegiatanDokumenController extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_kegiatan' => 'required',
            'judul_dokumen' => 'required',
            'tanggal_terbit' => 'required',
            'file' => 'mimes:pdf',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('id_kegiatan')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('id_kegiatan'),
                ]);
            }elseif($errors->has('judul_dokumen')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('judul_dokumen'),
                ]);
            }elseif($errors->has('tanggal_terbit')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal_terbit'),
                ]);
            }elseif($errors->has('file')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('file'),
                ]);
            }
        }
        $kegiatan = Kegiatan::where('id',$request->id_kegiatan)->first();
        if($request->id){
            $data = KegiatanDokumen::where('id',$request->id)->first();
            if (request()->file('file')) {
                Storage::delete($data->file);
            }
        }else{
            $data = new KegiatanDokumen;
        }
        if (request()->file('file')) {
            $file = request()->file('file')->store("dokumen");
            $data->file = $file;
        }
        $data->kegiatan_id = $kegiatan->id;
        $data->judul_dokumen = $request->judul_dokumen;
        $data->tanggal_terbit = $request->tanggal_terbit;
        $data->deskripsi = $request->deskripsi;
        if($request->id){
            $data->update();
        }else{
            $data->save();
        }
        return response()->json([
            'alert' => 'success',
            'message' => 'Dokumen tersimpan',
            'redirect' => 'input',
            'route' => route('phln.kegiatan.edit',$kegiatan->id),
        ]);
    }
    public function show(KegiatanDokumen $kegiatanDokumen)
    {
        //
    }
    public function edit(KegiatanDokumen $kegiatanDokumen)
    {
        //
    }
    public function update(Request $request, KegiatanDokumen $kegiatanDokumen)
    {
        //
    }
    public function destroy(KegiatanDokumen $kegiatanDokumen)
    {
        $id = $kegiatanDokumen->kegiatan_id;
        Storage::delete($kegiatanDokumen->file);
        $kegiatanDokumen->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Dokumen terhapus',
            'redirect' => 'input',
            'route' => route('phln.kegiatan.edit',$id),
        ]);
    }
    public function download(KegiatanDokumen $kegiatanDokumen)
    {
        return Storage::download($kegiatanDokumen->file);
    }
}
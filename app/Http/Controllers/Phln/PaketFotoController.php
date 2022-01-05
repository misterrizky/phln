<?php

namespace App\Http\Controllers\Phln;

use App\Models\Paket;
use App\Models\PaketFoto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PaketFotoController extends Controller
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
            'tanggal' => 'required',
            'foto' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('tanggal')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal'),
                ]);
            }elseif ($errors->has('foto')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('foto'),
                ]);
            }elseif($errors->has('latitude')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('latitude'),
                ]);
            }elseif($errors->has('longitude')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('longitude'),
                ]);
            }
        }
        $paket = Paket::where('id',$request->paket_id)->first();
        $data = new PaketFoto;
        if (request()->file('foto')) {
            $file = request()->file('foto')->store("foto_paket");
            $data->foto = $file;
        }
        $data->tanggal = $request->tanggal;
        $data->paket_id = $request->paket_id;
        $data->lat = $request->latitude;
        $data->lng = $request->longitude;
        $data->keterangan = $request->keterangan;
            $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Foto tersimpan',
            'redirect' => 'input',
            'route' => route('phln.paket.edit',[$paket->kegiatan_id,$paket->id]),
        ]);
    }
    public function show(PaketFoto $paketFoto)
    {
        //
    }
    public function edit(PaketFoto $paketFoto)
    {
        //
    }
    public function update(Request $request, PaketFoto $paketFoto)
    {
        //
    }
    public function destroy(PaketFoto $paketFoto)
    {
        $paket = Paket::where('id',$paketFoto->paket_id)->first();
        Storage::delete($paketFoto->foto);
        $paketFoto->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Foto terhapus',
            'redirect' => 'input',
            'route' => route('phln.paket.edit',[$paket->kegiatan_id,$paket->id]),
        ]);
    }
}

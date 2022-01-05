<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use App\Models\Unor;
use App\Models\klEksternal;
use App\Models\UnitKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ImpAgenController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = Agency::where('type','=','imp')
            ->whereRaw('UPPER("nama") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.impAgen.list',compact('collection'));
        }
        return view('page.app.impAgen.main');
    }

    public function create()
    {
        $unor = Unor::get();
        $kl = klEksternal::get();
        $unit_kerja = UnitKerja::get();
        return view('page.app.impAgen.input',  ['data' => new Agency,
                                                'unor' => $unor,
                                                'kl' => $kl,
                                                'unit_kerja' => $unit_kerja
                                               ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'kl_id' => 'required',
            'unor_id' => 'required',
            'unit_kerja_id' => 'required',
            'type' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif($errors->has('kl_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kl_id'),
                ]);
            }elseif($errors->has('unor_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('unor_id'),
                ]);
            }elseif($errors->has('unit_kerja_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('unit_kerja_id'),
                ]);
            }
        }
        $data = new Agency;
        $data->nama = Str::title($request->nama);
        $data->kl_id = $request->kl_id;
        $data->unor_id = $request->unor_id;
        $data->unit_kerja_id = $request->unit_kerja_id;
        $data->type = "imp";
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Agency tersimpan',
        ]);
    }

    public function show(Agency $impAgen)
    {
        //
    }

    public function edit(Agency $impAgen)
    {
        $unor = Unor::get();
        $kl = klEksternal::get();
        $unit_kerja = UnitKerja::get();
        return view('page.app.impAgen.input',  ['data' => $impAgen,
                                                'unor' => $unor,
                                                'kl' => $kl,
                                                'unit_kerja' => $unit_kerja
                                               ]);
    }

    public function update(Request $request, Agency $impAgen)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'kl_id' => 'required',
            'unor_id' => 'required',
            'unit_kerja_id' => 'required',
            'type' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif($errors->has('kl_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kl_id'),
                ]);
            }elseif($errors->has('unor_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('unor_id'),
                ]);
            }elseif($errors->has('unit_kerja_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('unit_kerja_id'),
                ]);
            }
        }
        $impAgen->nama = Str::title($request->nama);
        $impAgen->kl_id = $request->kl_id;
        $impAgen->unor_id = $request->unor_id;
        $impAgen->unit_kerja_id = $request->unit_kerja_id;
        $impAgen->type = "imp";
        $impAgen->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Agency terupdate',
        ]);
    }

    public function destroy(Agency $impAgen)
    {
        $impAgen->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Agency terhapus',
        ]);
    }
}

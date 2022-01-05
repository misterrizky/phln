<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\KlEksternal;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class KlEksternalController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = KlEksternal::whereRaw('UPPER("nama") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.klEksternal.list',compact('collection'));
        }
        return view('page.app.klEksternal.main');
    }

    public function create()
    {
        return view('page.app.klEksternal.input', ['data' => new KlEksternal]);
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
        $data = new KlEksternal;
        $data->nama = Str::title($request->nama);
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Kl Eksternal tersimpan',
        ]);
    }

    public function show(KlEksternal $klEksternal)
    {
        //
    }

    public function edit(KlEksternal $klEksternal)
    {
        return view('page.app.klEksternal.input', ['data' => $klEksternal]);
    }

    public function update(Request $request, KlEksternal $klEksternal)
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
        $klEksternal->nama = Str::title($request->nama);
        $klEksternal->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Kl Eksternal terupdate',
        ]);
    }

    public function destroy(KlEksternal $klEksternal)
    {
        $klEksternal->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'kl Eksternal terhapus',
        ]);
    }
}

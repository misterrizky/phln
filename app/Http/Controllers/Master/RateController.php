<?php

namespace App\Http\Controllers\Master;

use App\Models\Rate;
use App\Models\MataUang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class RateController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = Rate::where('rate','LIKE','%'.$keywords.'%')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.rate.list',compact('collection'));
        }
        return view('page.app.rate.main');
    }

    public function create()
    {
        $matauang = MataUang::get();
        return view('page.app.rate.input', ['data' => new Rate, 'matauang'=> $matauang]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mata_uang' => 'required',
            'berlaku' => 'required',
            'sd' => 'required',
            'rate' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('mata_uang')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('mata_uang'),
                ]);
            }elseif($errors->has('berlaku')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('berlaku'),
                ]);
            }elseif($errors->has('sd')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('sd'),
                ]);
            }elseif($errors->has('rate')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('rate'),
                ]);
            }
        }
        $data = new Rate;
        $data->mata_uang_id = $request->mata_uang;
        $data->awal = $request->berlaku;
        $data->akhir = $request->sd;
        $data->rate = str_replace("_","",str_replace(",",".",str_replace(".","",$request->rate)));
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Rate tersimpan',
        ]);
    }

    public function show(Rate $rate)
    {
        //
    }

    public function edit(Rate $rate)
    {
        $matauang = MataUang::get();
        return view('page.app.rate.input', ['data' => $rate, 'matauang'=> $matauang]);
    }

    public function update(Request $request, Rate $rate)
    {
        $validator = Validator::make($request->all(), [
            'mata_uang' => 'required',
            'berlaku' => 'required',
            'sd' => 'required',
            'rate' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('mata_uang')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('mata_uang'),
                ]);
            }elseif($errors->has('berlaku')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('berlaku'),
                ]);
            }elseif($errors->has('sd')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('sd'),
                ]);
            }elseif($errors->has('rate')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('rate'),
                ]);
            }
        }
        $rate->mata_uang_id = $request->mata_uang;
        $rate->awal = $request->berlaku;
        $rate->akhir = $request->sd;
        $rate->rate = str_replace("_","",str_replace(",",".",str_replace(".","",$request->rate)));
        $rate->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Rate terupdate',
        ]);
    }

    public function destroy(Rate $rate)
    {
        $rate->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Rate terhapus',
        ]);
    }
    public function get_list(Request $request){
        $collection = Rate::where('mata_uang_id','=',$request->mata_uang)->orderBy('id','ASC')->get();
        $list = "<option value=''>Pilih Rate Mata Uang</option>";
        foreach($collection as $row){
            $list.="<option value='$row->id'>".number_format($row->rate)." | ".$row->awal->format('j F Y')." - ".$row->akhir->format('j F Y')."</option>";
        }
        echo $list;
    }
}

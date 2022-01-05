<?php

namespace App\Http\Controllers\Regional;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Support\Facades\DB;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    public function index(Request $request, Province $province)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = City::where('id_prov','=',$province->id_prov)
            ->whereRaw('UPPER("nm_kab") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.city.list',compact('collection'));
        }
        return view('page.app.city.main',compact('province'));
    }
    public function create(Province $province)
    {
        return view('page.app.city.input', ['data' => new City, 'province' => $province]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_prov' => 'required',
            'no_kab' => 'required',
            'nm_kab' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('no_kab')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('no_kab'),
                ]);
            }elseif($errors->has('nm_kab')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nm_kab'),
                ]);
            }
        }
        $check = City::where('id_prov',$request->id_prov)->where('id_kab',$request->no_kab)->get()->count();
        if($check > 0){
            return response()->json([
                'alert' => 'error',
                'message' => 'id Kota / Kabupaten per Propinsi tidak boleh sama',
            ]);
        }
        $data = new City;
        $data->id_prov = $request->id_prov;
        $data->id_kab = $request->no_kab;
        $data->nm_kab = Str::title($request->nm_kab);
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Kota / Kabupaten tersimpan',
        ]);
    }
    public function show(City $city)
    {
        //
    }
    public function edit(Province $province, City $city)
    {
        return view('page.app.city.input', ['data' => $city, 'province' => $province]);
    }
    public function update(Request $request, City $city)
    {
        $validator = Validator::make($request->all(), [
            'id_prov' => 'required',
            'no_kab' => 'required',
            'nm_kab' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('no_kab')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('no_kab'),
                ]);
            }elseif($errors->has('nm_kab')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nm_kab'),
                ]);
            }
        }
        $check = City::where('id_prov',$request->id_prov)->where('id_kab',$request->no_kab)->first();
        if($check){
            if($check->id_kab != $request->no_kab){
                return response()->json([
                    'alert' => 'error',
                    'message' => 'id Kota / Kabupaten per Propinsi tidak boleh sama',
                ]);
            }
        }
        $city->id_prov = $request->id_prov;
        $city->id_kab = $request->no_kab;
        $city->nm_kab = Str::title($request->nm_kab);
        $city->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Kota / Kabupaten terupdate',
        ]);
    }
    public function destroy(City $city)
    {
        $city->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Kota / Kabupaten terhapus',
        ]);
    }
    public function get_list(Request $request){
        $collection = City::where('id_prov',$request->id_prov)->get();
        $list = "<option>Pilih Kota / Kabupaten</option>";
        foreach($collection as $row){
            $list.="<option value='$row->id' $row->id==$request->id_prov?selected:''>$row->nm_kab</option>";
        }
        echo $list;
    }
}

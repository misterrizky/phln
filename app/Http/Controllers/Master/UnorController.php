<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\Unor;
use App\Models\Department;
use App\Models\Satker;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class UnorController extends Controller
{
    public function index(Request $request, Department $department)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = Unor::where('department_id','=',$department->id)
            ->whereRaw('UPPER("nama") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.unor.list',compact('collection'));
        }
        return view('page.app.unor.main', compact('department'));
    }

    public function create(Department $department)
    {
        return view('page.app.unor.input', ['data' => new Unor,'department' => $department]);
    }

    public function get_list(Request $request){
        $department = Department::where('kode','=',$request->department_id)->first();
        $collection = Unor::where('department_id',$department->id)->get();
        $list = "<option value=''>Pilih Unor</option>";
        foreach($collection as $row){
            $list.="<option value='$row->id_unor'$row->id==$request->department_id?selected:''>$row->nama</option>";
        }
        echo $list;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_unor' => 'required|unique:pgsql.master.unor',
            'nama' => 'required',
            'department_id' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('id_unor')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('id_unor'),
                ]);
            }else if ($errors->has('department_id')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('department_id'),
                ]);
            }else if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }
        }
        $data = new Unor;
        $data->id_unor = $request->id_unor;
        $data->nama = Str::title($request->nama);
        $data->department_id = $request->department_id;
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Unor tersimpan',
        ]);
    }

    public function show(Unor $unor)
    {
        //
    }

    public function edit(Department $department, Unor $unor)
    {
        return view('page.app.unor.input', ['data' => $unor, 'department' => $department]);
    }

    public function update(Request $request, Unor $unor)
    {
        $validator = Validator::make($request->all(), [
            'id_unor' => 'required|unique:pgsql.master.unor,id_unor,'.$unor->id,
            'nama' => 'required',
            'department_id' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('id_unor')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('id_unor'),
                ]);
            }elseif($errors->has('nama')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif($errors->has('department_id')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('department_id'),
                ]);
            }
        }
        $unor->id_unor = $request->id_unor;
        $unor->nama = Str::title($request->nama);
        $unor->department_id = $request->department_id;
        $unor->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Unor terupdate',
        ]);
    }

    public function destroy(Unor $unor)
    {
        $unor->delete();
        Satker::where('unor_id', $unor->id)->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Unor terhapus',
        ]);
    }
}

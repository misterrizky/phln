<?php

namespace App\Http\Controllers\Master;

use App\Models\Department;
use App\Models\Unor;
use App\Models\Satker;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = Department::where('kode','LIKE','%'.$keywords.'%')
            ->orWhereRaw('UPPER("nama") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.department.list',compact('collection'));
        }
        return view('page.app.department.main');
    }

    public function create()
    {
        return view('page.app.department.input', ['data' => new Department]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|unique:pgsql.master.department',
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
        $data = new Department;
        $data->kode = $request->kode;
        $data->nama = Str::title($request->nama);
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Departemen tersimpan',
        ]);
    }

    public function show(Department $department)
    {
        //
    }

    public function edit(Department $department)
    {
        return view('page.app.department.input', ['data' => $department]);
    }

    public function update(Request $request, Department $department)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|unique:pgsql.master.department,kode,'.$department->id,
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
        $department->kode = $request->kode;
        $department->nama = Str::title($request->nama);
        $department->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Departemen terupdate',
        ]);
    }

    public function destroy(Department $department)
    {
        $department->delete();
        Unor::where('department_id', $department->id)->delete();
        Satker::where('department_id', $department->id)->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Departemen terhapus',
        ]);
    }
}

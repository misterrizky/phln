<?php

namespace App\Http\Controllers\master;

use App\Models\Workflow;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class WorkflowController extends Controller
{
    public function index(Request  $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = Workflow::where('urutan','LIKE','%'.$keywords.'%')
            ->orWhereRaw('UPPER("nama") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.workflow.list',compact('collection'));
        }
        return view('page.app.workflow.main');
    }

    public function create()
    {
        return view('page.app.workflow.input', ['data' => new Workflow]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'urutan' => 'required|unique:pgsql.master.workflow',
            'nama' => 'required',
            'waktu' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('urutan')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('urutan'),
                ]);
            }elseif($errors->has('nama')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif($errors->has('waktu')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('waktu'),
                ]);
            }
        }
        $data = new Workflow;
        $data->urutan = $request->urutan;
        $data->nama = Str::title($request->nama);
        $data->waktu = $request->waktu;
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Workflow tersimpan',
        ]);
    }

    public function show(Workflow $workflow)
    {
        //
    }

    public function edit(Workflow $workflow)
    {
        return view('page.app.workflow.input', ['data' => $workflow]);
    }

    public function update(Request $request, Workflow $workflow)
    {
        $validator = Validator::make($request->all(), [
            'urutan' => 'required|integer|unique:pgsql.master.workflow,urutan,'.$workflow->id,
            'nama' => 'required',
            'waktu' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('urutan')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('urutan'),
                ]);
            }elseif($errors->has('nama')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif($errors->has('waktu')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('waktu'),
                ]);
            }
        }
        $workflow->urutan = $request->urutan;
        $workflow->nama = Str::title($request->nama);
        $workflow->waktu = $request->waktu;
        $workflow->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Workflow terupdate',
        ]);
    }

    public function destroy(Workflow $workflow)
    {
        $workflow->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Workflow terhapus',
        ]);
    }
}

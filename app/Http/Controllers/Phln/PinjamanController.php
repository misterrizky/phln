<?php

namespace App\Http\Controllers\Phln;

use App\Models\Donor;
use App\Models\MataUang;
use App\Models\Pinjaman;
use App\Models\UnitKerja;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PinjamanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = Pinjaman::where('no_loan','LIKE','%'.$keywords.'%')
            // ->orWhereRaw('UPPER("nama") LIKE \'%'.$keywords.'%\'')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.pinjaman.list',compact('collection'));
        }
        return view('page.app.pinjaman.main');
    }
    public function create()
    {
        $donor = Donor::get();
        $mata_uang = MataUang::get();
        return view('page.app.pinjaman.input', ['data' => new Pinjaman, 'donor' => $donor, 'mata_uang' => $mata_uang]);
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'donor' => 'required',
            'no_loan' => 'required|unique:pgsql.transaction.kegiatan',
            'nilai' => 'required',
            'mata_uang' => 'required',
            'tanggal_efektif' => 'required|date_format:d-m-Y',
            'tanggal_closing' => 'required|date_format:d-m-Y|after:tanggal_efektif',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            if($errors->has('donor')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('donor'),
                ]);
            }elseif($errors->has('no_loan')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('no_loan'),
                ]);
            }elseif($errors->has('nilai')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nilai'),
                ]);
            }elseif($errors->has('mata_uang')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('mata_uang'),
                ]);
            }elseif($errors->has('tanggal_efektif')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal_efektif'),
                ]);
            }elseif($errors->has('tanggal_closing')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal_closing'),
                ]);
            }
        }
        $data = new Pinjaman;
        $data->donor_id = $request->donor;
        $data->no_loan = $request->no_loan;
        $data->nilai = str_replace(',', '', $request->nilai);
        $data->mata_uang_id = $request->mata_uang;
        $data->tanggal_efektif = $request->tanggal_efektif;
        $data->tanggal_closing = $request->tanggal_closing;
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Pinjaman tersimpan',
        ]);
    }
    public function show(Pinjaman $pinjaman)
    {
        //
    }
    public function edit(Pinjaman $pinjaman)
    {
        $donor = Donor::get();
        $mata_uang = MataUang::get();
        $unit_kerja = UnitKerja::get();
        return view('page.app.pinjaman.input', ['data' => $pinjaman, 'donor' => $donor, 'mata_uang' => $mata_uang, 'unit_kerja' => $unit_kerja]);
    }
    public function update(Request $request, Pinjaman $pinjaman)
    {
        $validator = Validator::make($request->all(), [
            'donor' => 'required',
            'no_loan' => 'required|unique:pgsql.transaction.kegiatan,id_reg,'.$pinjaman->no_loan,
            'nilai' => 'required',
            'mata_uang' => 'required',
            'tanggal_efektif' => 'required|date_format:d-m-Y',
            'tanggal_closing' => 'required|date_format:d-m-Y|after:tanggal_efektif',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if($errors->has('donor')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('donor'),
                ]);
            }elseif($errors->has('no_loan')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('no_loan'),
                ]);
            }elseif($errors->has('nilai')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nilai'),
                ]);
            }elseif($errors->has('mata_uang')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('mata_uang'),
                ]);
            }elseif($errors->has('tanggal_efektif')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal_efektif'),
                ]);
            }elseif($errors->has('tanggal_closing')){
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('tanggal_closing'),
                ]);
            }
        }
        $pinjaman->donor_id = $request->donor;
        $pinjaman->no_loan = $request->no_loan;
        $pinjaman->nilai = str_replace(',', '', $request->nilai);
        $pinjaman->mata_uang_id = $request->mata_uang;
        $pinjaman->tanggal_efektif = $request->tanggal_efektif;
        $pinjaman->tanggal_closing = $request->tanggal_closing;
        $pinjaman->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Pinjaman terupdate',
        ]);
    }
    public function destroy(Pinjaman $pinjaman)
    {
        $pinjaman->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Pinjaman terhapus',
        ]);
    }
}
<?php

namespace App\Http\Controllers\Master;

use App\Models\User;
use App\Models\Sektor;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request){
        if ($request->ajax()) {
            $keywords = strtoupper($request->keyword);
            $collection = User::where('nama','LIKE','%'.$keywords.'%')
            ->orderBy('id', 'ASC')
            ->paginate(10);
            return view('page.app.user.list',compact('collection'));
        }
        return view('page.app.user.main');
    }
    public function create(){
        $propinsi = Province::get();
        $sektor = Sektor::where('tipe','Pinjaman')->get();
        return view('page.app.user.input', ['data' => new User, 'propinsi' => $propinsi, 'sektor' => $sektor]);
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:100',
            'jabatan' => 'required|max:255',
            'username' => 'required|unique:pgsql.hrm.users|max:30',
            'email' => 'required|unique:pgsql.hrm.users|email|max:255',
            'password' => 'required|min:8',
            'role' => 'required',
            'st' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif ($errors->has('jabatan')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('jabatan'),
                ]);
            }elseif ($errors->has('username')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('username'),
                ]);
            }elseif ($errors->has('email')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('email'),
                ]);
            }elseif ($errors->has('password')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('password'),
                ]);
            }elseif ($errors->has('role')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('role'),
                ]);
            }else{
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('st'),
                ]);
            }
        }
        if($request->role == 4){
            $validator = Validator::make($request->all(), [
                'sektor' => 'required',
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors();
                if ($errors->has('sektor')) {
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('sektor'),
                    ]);
                }
            }
        }elseif($request->role == 5){
            $validator = Validator::make($request->all(), [
                'propinsi' => 'required',
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors();
                if ($errors->has('propinsi')) {
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('propinsi'),
                    ]);
                }
            }
        }
        $data = new User;
        $data->nama = $request->nama;
        $data->jabatan = $request->jabatan;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->role = $request->role;
        if($request->role == 4){
            $data->sektor_id = $request->sektor;
        }else{
            $data->sektor_id = 0;
        }
        if($request->role == 5){
            $data->province_id = $request->propinsi;
        }else{
            $data->province_id = 0;
        }
        $data->st = $request->st;
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'User tersimpan',
        ]);
    }
    public function show(User $user){
    }
    public function edit(User $user){
        $propinsi = Province::get();
        $sektor = Sektor::where('tipe','Pinjaman')->get();
        return view('page.app.user.input', ['data' => $user, 'propinsi' => $propinsi, 'sektor' => $sektor]);
    }
    public function update(Request $request, User $user){
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:100',
            'jabatan' => 'required|max:255',
            'username' => 'required|max:30',
            'email' => 'required|email|max:255',
            'role' => 'required',
            'st' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama'),
                ]);
            }elseif ($errors->has('jabatan')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('jabatan'),
                ]);
            }elseif ($errors->has('username')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('username'),
                ]);
            }elseif ($errors->has('email')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('email'),
                ]);
            }elseif ($errors->has('role')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('role'),
                ]);
            }else{
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('st'),
                ]);
            }
        }
        if($request->role == 4){
            $validator = Validator::make($request->all(), [
                'sektor' => 'required',
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors();
                if ($errors->has('sektor')) {
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('sektor'),
                    ]);
                }
            }
        }elseif($request->role == 5){
            $validator = Validator::make($request->all(), [
                'propinsi' => 'required',
            ]);
            if ($validator->fails()) {
                $errors = $validator->errors();
                if ($errors->has('propinsi')) {
                    return response()->json([
                        'alert' => 'error',
                        'message' => $errors->first('propinsi'),
                    ]);
                }
            }
        }
        $user->nama = $request->nama;
        $user->jabatan = $request->jabatan;
        $user->username = $request->username;
        $user->email = $request->email;
        if($request->password){
            $user->password = Hash::make($request->password);
        }
        $user->role = $request->role;
        if($request->role == 4){
            $user->sektor_id = $request->sektor;
        }else{
            $user->sektor_id = 0;
        }
        if($request->role == 5){
            $user->province_id = $request->propinsi;
        }else{
            $user->province_id = 0;
        }
        $user->st = $request->st;
        $user->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'User terubah',
        ]);
    }
    public function destroy(User $user){
        $user->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'User terhapus',
        ]);
    }
    public function aktif(User $user){
        $user->st = "aktif";
        $user->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'User diaktifkan',
        ]);
    }
    public function taktif(User $user){
        $user->st = "tidak aktif";
        $user->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'User tidak diaktifkan',
        ]);
    }
}

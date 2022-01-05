<?php

namespace App\Http\Controllers\Phln;

use App\Models\User;
use App\Models\Sektor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct(){
        $this->middleware('guest:office')->except('do_logout');
    }
    public function index(){
        $sektor = Sektor::where('tipe','Pinjaman')->get();
        return view('page.app.auth.main', compact('sektor'));
    }
    public function do_login(Request $request){
        $validator = Validator::make($request->all(), [
            'id_pengguna' => 'required|max:30',
            'kata_sandi' => 'required|min:8',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('id_pengguna')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('id_pengguna'),
                ]);
            }else{
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kata_sandi'),
                ]);
            }
        }
        if(Auth::guard('office')->attempt(['username' => $request->id_pengguna, 'password' => $request->kata_sandi, 'st' => 'aktif'], $request->remember))
        {
            return response()->json([
                'alert' => 'success',
                'message' => 'Selamat datang '. Auth::guard('office')->user()->nama,
                'callback' => 'reload',
            ]);
        }else{
            return response()->json([
                'alert' => 'error',
                'message' => 'Maaf, sepertinya ada beberapa kesalahan yang terdeteksi, silakan coba lagi.',
            ]);
        }
    }
    public function do_register(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|max:100',
            'id_pengguna' => 'required|unique:pgsql.hrm.users|max:30',
            'email' => 'required|unique:pgsql.hrm.users|email|max:255',
            'kata_sandi' => 'required|min:8',
            'jabatan' => 'required|max:255',
            'sektor' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('nama_lengkap')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('nama_lengkap'),
                ]);
            }elseif ($errors->has('id_pengguna')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('id_pengguna'),
                ]);
            }elseif ($errors->has('email')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('email'),
                ]);
            }elseif ($errors->has('kata_sandi')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('kata_sandi'),
                ]);
            }elseif ($errors->has('jabatan')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('jabatan'),
                ]);
            }elseif ($errors->has('sektor')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('sektor'),
                ]);
            }
        }
        $data = new User;
        $data->nama = $request->nama_lengkap;
        $data->username = $request->id_pengguna;
        $data->email = $request->email;
        $data->password = Hash::make($request->kata_sandi);
        $data->jabatan = $request->jabatan;
        $data->sektor = $request->sektor;
        $data->st = 'tidak aktif';
        $data->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Akun berhasil terdaftar, harap menunggu verifikasi admin',
            'callback' => 'page_login',
        ]);
    }
    public function do_logout(){
        $user = Auth::guard('office')->user();
        Auth::logout($user);
        return redirect()->route('phln.auth.index');
    }
}

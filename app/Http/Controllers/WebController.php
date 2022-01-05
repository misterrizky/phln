<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(Request $request){
        if ($request->ajax()) {
            return view('page.web.home.main');
        }
        return view('page.web.home.app');
    }
    public function about(){
        return view('page.web.about.main');
    }
    public function map(){
        return view('page.web.home.map');
    }
    public function progress(){
        return view('page.web.home.progress');
    }
}

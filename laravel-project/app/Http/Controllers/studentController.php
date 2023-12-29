<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function studentRegister(){
        return view('studentRegister');
    }

    public function create(Request $request){
        print_r($request->all());
        return view('studentRegister');
    }
}

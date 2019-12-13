<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //

    public function index(){
        return view('home');
    }

    public function setSingle(Request $request){
        $request->session()->put('name','sithu');
        return redirect('/getHome')->with('statis','success');
    }
    
    public function getSingle(Request $request){
        $request->session()->put('name','sithu');
        return redirect('/getHome')->with('statis','success');
    }
}

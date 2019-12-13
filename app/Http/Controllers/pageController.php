<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class pageController extends Controller
{
    public function index(){
        $products=Product::all();

        return view('main-page',compact('products'));
    }

    public function add(Request $request,$id){
       $items=array();
       if($request->session()->has('items')){
           echo json_encode('$items');
           if(!in_array($id,$items)){
               array_push($item,$id);
           }
           else{
               array_push($item,$id);
           }
           $request->session()->put('items',$items);

           

           $products=Product::all();
           
        return view('main-page',compact('products'));
       }
    }
}

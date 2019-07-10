<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function thanks(Request $request){
        //return view('pages.thankyou')
       $name = $request->name;
       #return $name;
       return view('thanks')->with('name', $name);
    }

    function homeview(){
        return view('index1');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demoAction (Request $request){
        $photoFile=$request->file('photo');

        // $photoFile->storeAs('upload', $photoFile->getClientOriginalName());

        $photoFile->move('upload', $photoFile->getClientOriginalName());

        //ami chile eikhane upload/images o dite pari //

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demoAction (Request $request) {
       $data=$request->all();
       return response()->json($data);
    }
}

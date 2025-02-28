<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demoAction (Request $request) {
       $name=$request->header('name');
       $age=$request->header('age');

       return "My name is $name and my age is $age";
    }
}

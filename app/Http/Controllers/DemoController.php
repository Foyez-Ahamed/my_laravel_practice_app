<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demoAction (Request $request) {
        $name=$request->name;
        $age=$request->age;
        return "Hello this is $name. I am $age years old.";
    }
}

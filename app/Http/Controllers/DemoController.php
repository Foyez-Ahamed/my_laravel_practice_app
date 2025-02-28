<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demoAction (Request $request) {
    //url theke data recieve //
    $name=$request->name;
    $age=$request->age;

    //body theke data receive //
    $wife=$request->input('wife');
    $nephew=$request->input('nephew');

    //header theke data receive //

    $father=$request->header('father');
    $mother=$request->header('mother');

    return array(
        "name"=> $name,
        "age"=> $age,
        "wife"=> $wife,
        "nephew"=> $nephew,
        "father"=> $father,
        "mother"=> $mother
    );



    }
}

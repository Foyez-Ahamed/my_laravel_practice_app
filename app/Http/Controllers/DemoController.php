<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function demoAction (Request $request): string|null|int|bool|array {

        return 'Hello world';

    }
}

<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
{
    public function greeting() {
            $greetMsg = array("greet"=>"hello");
            return response()->json($greetMsg);
        }
}

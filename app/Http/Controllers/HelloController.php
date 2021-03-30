<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request, Response $response)
    {
        return view('hello.index')->with('request',$request)->with('response', $response);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }
}

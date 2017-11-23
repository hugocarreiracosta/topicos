<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sobreController extends Controller
{
    public function GetSobre(){
        return view('sobre');
    }
}

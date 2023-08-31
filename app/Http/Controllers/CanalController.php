<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Canal ;

class CanalController extends Controller
{
    //

    public function index()
    {
        $canaux = Canal::all();
        $cans = Canal::all();

        return view('canaux.index', compact('canaux','cans')) ;
    }
}

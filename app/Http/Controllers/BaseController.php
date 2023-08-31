<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Canal;

class BaseController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cans = Canal::all();
        return view('NiceAdmin/base', compact('cans'));
    }
}

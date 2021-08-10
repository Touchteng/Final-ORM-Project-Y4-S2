<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class indexController extends Controller
{
    public function index()
    {
        return view('index');
    }
    
    
}

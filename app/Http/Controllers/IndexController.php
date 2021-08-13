<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class indexController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function product()
    {
        return view('pages.product');
    }
    public function about()
    {
        return view('pages.about');
    }

}

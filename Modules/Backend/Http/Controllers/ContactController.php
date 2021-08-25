<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
class ContactController extends Controller
{
    public function  __construct(){
        $this->middleware('auth');
    }

    public function index(){
    $data['con'] = DB::table('contacts')
            // ->where('active', 1)
            ->paginate(22);
        return view('backend::contacts.index', $data);
    }
}

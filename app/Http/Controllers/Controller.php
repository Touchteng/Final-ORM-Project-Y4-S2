<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->category = DB::table('categories')->where('active',1)->get();
        $this->tag   = DB::table('tags')->where('active',1)->get();
        $this->recent_post = DB::table('products')->where('active',1)->orderBy('id','desc')->limit('5')->get();

        view()->share([
            'categories'    => $this->category,
            'tags'          => $this->tag,
            'recent'        => $this->recent_post,
        ]);
    }
}

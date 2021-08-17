<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class indexController extends Controller
{
    public function index()
    {
        $data['slides'] = DB::table('products')->where('active',1)->orderBy('id','desc')->limit(5)->get();

        $data['tags'] = DB::table('tags')->where('active',1)->get();
        foreach($data['tags'] as $value)
        {
           $value->product= DB::table('products')->where('active',1)->where('tag_id',$value->id)->orderBy('id','desc')->first();
        }

        $data['products'] = DB::table('products')->where('active',1)->limit(8)->orderBy('id','desc')->get();
        foreach($data['products'] as $value)
        {
            $value->stock = DB::table('avibilities')->where('id',$value->avibility_id)->first();
            $value->size = DB::table('sizes')->where('id',$value->size_id)->first();
            $value->category = DB::table('categories')->where('id',$value->category_id)->first();
        }

        return view('pages.index', $data);
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

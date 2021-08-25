<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class indexController extends Controller
{
    public function index()
    {
        $data['slides'] = DB::table('products')->where('active',1)->orderBy('id','desc')->limit(5)->get();

        $data['categories'] = DB::table('categories')->where('active',1)->get();
        foreach($data['categories'] as $value)
        {
           $value->product= DB::table('products')->where('active',1)->where('category_id',$value->id)->orderBy('id','desc')->first();
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
        $data['products'] = DB::table('products')->where('active',1)->orderBy('id','desc')->get();
        foreach($data['products'] as $value)
        {
            $value->stock = DB::table('avibilities')->where('id',$value->avibility_id)->first();
            $value->size = DB::table('sizes')->where('id',$value->size_id)->first();
            $value->category = DB::table('categories')->where('id',$value->category_id)->first();
        }

        return view('pages.product', $data);
    }

    public function productCategory($id)
    {
        $data['products'] = DB::table('products')->where('active',1)->where('category_id',$id)->get();
        foreach($data['products'] as $value)
        {
            $value->stock = DB::table('avibilities')->where('id',$value->avibility_id)->first();
            $value->size = DB::table('sizes')->where('id',$value->size_id)->first();
            $value->category = DB::table('categories')->where('id',$value->category_id)->first();
        }

        return view('pages.product', $data);
    }

    public function productTag($id)
    {
        $data['products'] = DB::table('products')->where('active',1)->where('tag_id',$id)->get();
        foreach($data['products'] as $value)
        {
            $value->stock = DB::table('avibilities')->where('id',$value->avibility_id)->first();
            $value->size = DB::table('sizes')->where('id',$value->size_id)->first();
            $value->category = DB::table('categories')->where('id',$value->category_id)->first();
        }

        return view('pages.product', $data);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $data['products'] = DB::table('products')->where('active',1)->where('name','LIKE', '%' . $search . '%')->get();
        foreach($data['products'] as $value)
        {
            $value->stock = DB::table('avibilities')->where('id',$value->avibility_id)->first();
            $value->size = DB::table('sizes')->where('id',$value->size_id)->first();
            $value->category = DB::table('categories')->where('id',$value->category_id)->first();
        }

        return view('pages.product', $data);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contact_save(Request $r)
    {
        $data = array(
            'name' => $r->name,
            'email' => $r->email,
            'subject' => $r->subject,
            'company' => $r->company,
            'message' => $r->message
        );
        $i = DB::table('contacts')->insert($data);
        if($i){
            $r->session()->flash('success', 'Data has been sent!');
            return redirect('/contact');
        }
        else{
                $r->session()->flash('error', 'Fail to sent data!');
                return redirect('/contact')->withInput();
        }
    }

    public function storeEmailContact(Request $request)
    {
        $data = array(
            'name'          =>  $request->name,
            'email'         =>  $request->email,
            'subject'       =>  $request->subject,
            'company'       => $request->company,
            'message'       =>  $request->message
        );

        Mail::to('soktheng28@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Thanks for your contact...!');
    }

}

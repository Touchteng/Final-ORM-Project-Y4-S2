<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
class PageController extends Controller
{
    public function  __construct(){
        $this->middleware('auth');
    }

    public function index(){
    $data['ps'] = DB::table('pages')
            ->where('active', 1)
            ->paginate(22);
        return view('backend::pages.index', $data);
    }

    public function create(){
        return view("backend::pages.create");
    }

    public function save(Request $r){
        $data = array(
            'id' => $r->id,
            'title' => $r->title,
            'description' => $r->description

        );
        $i = DB::table('pages')->insert($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/page/create');
        }
        else{
                $r->session()->flash('eror', 'Fail to save data!');
                return redirect('backend/page/create')->withInput();
        }
    }

    public function edit($id){
        $data['p'] = DB::table('pages')
             ->where('id', $id)
             ->first();
         return view('backend::pages.edit', $data);
     }
 
    public function update(Request $r){
        $data = array(
            'id' => $r->id,
            'title' => $r->title,
            'description' =>$r->description
        );
        $i = DB::table('pages')
            ->where('id', $r->id)
            ->update($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/page/edit/'.$r->id);
        }
        else{
            $r->session()->flash('eror', 'Fail to save data!');
            return redirect('backend/page/edit/'.$r->id);
        }
    }

    public function delete(Request $r){
        DB::table('pages')
            ->where('id', $r->id)
            ->update(['active'=>0]);
        $r->session()->flash('success', 'Data has been removed!');
        return redirect('backend/page');
    }
    public function detail($id)
    {
        $data['p'] = DB::table('pages')
             ->where('id', $id)
             ->first();
         return view('backend::pages.detail', $data);
    }
}

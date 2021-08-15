<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
class SizeController extends Controller
{
    public function  __construct(){
        $this->middleware('auth');
    }

    public function index(){
    $data['rs'] = DB::table('sizes')
            ->where('active', 1)
            ->paginate(22);
        return view('backend::sizes.index', $data);
    }

    public function create(){
        return view("backend::sizes.create");
    }

    public function save(Request $r){
        $data = array(
            'id' => $r->id,
            'name' => $r->name
        );
        $i = DB::table('sizes')->insert($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/size/create');
        }
        else{
                $r->session()->flash('eror', 'Fail to save data!');
                return redirect('backend/size/create')->withInput();
        }
    }

    public function edit($id){
        $data['r'] = DB::table('sizes')
             ->where('id', $id)
             ->first();
         return view('backend::sizes.edit', $data);
     }
 
    public function update(Request $r){
        $data = array(
            'id' => $r->id,
            'name' => $r->name,
        );
        $i = DB::table('sizes')
            ->where('id', $r->id)
            ->update($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/size/edit/'.$r->id);
        }
        else{
            $r->session()->flash('eror', 'Fail to save data!');
            return redirect('backend/size/edit/'.$r->id);
        }
    }

    public function delete(Request $r){
        DB::table('sizes')
            ->where('id', $r->id)
            ->update(['active'=>0]);
        $r->session()->flash('success', 'Data has been removed!');
        return redirect('backend/size');
    }
}

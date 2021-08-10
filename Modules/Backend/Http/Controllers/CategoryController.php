<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
class CategoryController extends Controller
{
    public function  __construct(){
        $this->middleware('auth');
    }

    public function index(){
    $data['rs'] = DB::table('categories')
            ->where('active', 1)
            ->paginate(22);
        return view('backend::categories.index', $data);
    }

    public function create(){
        return view("backend::categories.create");
    }

    public function save(Request $r){
        $data = array(
            'id' => $r->id,
            'name' => $r->name
        );
        $i = DB::table('categories')->insert($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/category/create');
        }
        else{
                $r->session()->flash('eror', 'Fail to save data!');
                return redirect('backend/category/create')->withInput();
        }
    }

    public function edit($id){
        $data['r'] = DB::table('categories')
             ->where('id', $id)
             ->first();
         return view('backend::categories.edit', $data);
     }
 
    public function update(Request $r){
        $data = array(
            'id' => $r->id,
            'name' => $r->name,
        );
        $i = DB::table('categories')
            ->where('id', $r->id)
            ->update($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/category/edit/'.$r->id);
        }
        else{
            $r->session()->flash('eror', 'Fail to save data!');
            return redirect('backend/category/edit/'.$r->id);
        }
    }

    public function delete(Request $r){
        DB::table('categories')
            ->where('id', $r->id)
            ->update(['active'=>0]);
        $r->session()->flash('success', 'Data has been removed!');
        return redirect('backend/category');
    }
}

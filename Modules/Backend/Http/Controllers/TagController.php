<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
class TagController extends Controller
{
    public function  __construct(){
        $this->middleware('auth');
    }

    public function index(){
    $data['ls'] = DB::table('tags')
            ->where('active', 1)
            ->paginate(22);
        return view('backend::tags.index', $data);
    }

    public function create(){
        return view("backend::tags.create");
    }

    public function save(Request $r){
        $data = array(
            'id' => $r->id,
            'name' => $r->name
        );
        $i = DB::table('tags')->insert($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/tag/create');
        }
        else{
                $r->session()->flash('eror', 'Fail to save data!');
                return redirect('backend/tag/create')->withInput();
        }
    }

    public function edit($id){
        $data['l'] = DB::table('tags')
             ->where('id', $id)
             ->first();
         return view('backend::tags.edit', $data);
     }
 
    public function update(Request $r){
        $data = array(
            'id' => $r->id,
            'name' => $r->name,
        );
        $i = DB::table('tags')
            ->where('id', $r->id)
            ->update($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/tag/edit/'.$r->id);
        }
        else{
            $r->session()->flash('eror', 'Fail to save data!');
            return redirect('backend/tag/edit/'.$r->id);
        }
    }

    public function delete(Request $r){
        DB::table('tags')
            ->where('id', $r->id)
            ->update(['active'=>0]);
        $r->session()->flash('success', 'Data has been removed!');
        return redirect('backend/tag');
    }
}

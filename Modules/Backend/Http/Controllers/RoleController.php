<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
class RoleController extends Controller
{
    public function  __construct(){
        $this->middleware('auth');
    }

    public function index(){
    $data['rs'] = DB::table('roles')
            ->where('active', 1)
            ->paginate(22);
        return view('backend::roles.index', $data);
    }

    public function create(){
        return view("backend::roles.create");
    }

    public function save(Request $r){
        $data = array(
            'id' => $r->id,
            'name' => $r->name
        );
        $i = DB::table('roles')->insert($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/role/create');
        }
        else{
                $r->session()->flash('eror', 'Fail to save data!');
                return redirect('backend/role/create')->withInput();
        }
    }

    public function edit($id){
        $data['r'] = DB::table('roles')
             ->where('id', $id)
             ->first();
         return view('backend::roles.edit', $data);
     }
 
    public function update(Request $r){
        $data = array(
            'id' => $r->id,
            'name' => $r->name,
        );
        $i = DB::table('roles')
            ->where('id', $r->id)
            ->update($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/role/edit/'.$r->id);
        }
        else{
            $r->session()->flash('eror', 'Fail to save data!');
            return redirect('backend/role/edit/'.$r->id);
        }
    }

    public function delete(Request $r){
        DB::table('roles')
            ->where('id', $r->id)
            ->update(['active'=>0]);
        $r->session()->flash('success', 'Data has been removed!');
        return redirect('backend/role');
    }
}

<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
class AvibilityController extends Controller
{
    public function  __construct(){
        $this->middleware('auth');
    }

    public function index(){
    $data['ls'] = DB::table('avibilities')
            ->where('active', 1)
            ->paginate(22);
        return view('backend::avibilities.index', $data);
    }

    public function create(){
        return view("backend::avibilities.create");
    }

    public function save(Request $r){
        $data = array(
            'id' => $r->id,
            'name' => $r->name
        );
        $i = DB::table('avibilities')->insert($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/avibility/create');
        }
        else{
                $r->session()->flash('eror', 'Fail to save data!');
                return redirect('backend/avibility/create')->withInput();
        }
    }

    public function edit($id){
        $data['l'] = DB::table('avibilities')
             ->where('id', $id)
             ->first();
         return view('backend::avibilities.edit', $data);
     }
 
    public function update(Request $r){
        $data = array(
            'id' => $r->id,
            'name' => $r->name,
        );
        $i = DB::table('avibilities')
            ->where('id', $r->id)
            ->update($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/avibility/edit/'.$r->id);
        }
        else{
            $r->session()->flash('eror', 'Fail to save data!');
            return redirect('backend/avibility/edit/'.$r->id);
        }
    }

    public function delete(Request $r){
        DB::table('avibilities')
            ->where('id', $r->id)
            ->update(['active'=>0]);
        $r->session()->flash('success', 'Data has been removed!');
        return redirect('backend/avibility');
    }
}

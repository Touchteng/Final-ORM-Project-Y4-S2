<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
class ShiftController extends Controller
{
    public function  __construct(){
        $this->middleware('auth');
    }

    public function index(){
    $data['rs'] = DB::table('shifts')
            ->where('active', 1)
            ->paginate(22);
        return view('backend::shifts.index', $data);
    }

    public function create(){
        return view("backend::shifts.create");
    }

    public function save(Request $r){
        $data = array(
            'id' => $r->id,
            'name' => $r->name
        );
        $i = DB::table('shifts')->insert($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/shift/create');
        }
        else{
                $r->session()->flash('eror', 'Fail to save data!');
                return redirect('backend/shift/create')->withInput();
        }
    }

    public function edit($id){
        $data['r'] = DB::table('shifts')
             ->where('id', $id)
             ->first();
         return view('backend::shifts.edit', $data);
     }
 
    public function update(Request $r){
        $data = array(
            'id' => $r->id,
            'name' => $r->name,
        );
        $i = DB::table('shifts')
            ->where('id', $r->id)
            ->update($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/shift/edit/'.$r->id);
        }
        else{
            $r->session()->flash('eror', 'Fail to save data!');
            return redirect('backend/shift/edit/'.$r->id);
        }
    }

    public function delete(Request $r){
        DB::table('shifts')
            ->where('id', $r->id)
            ->update(['active'=>0]);
        $r->session()->flash('success', 'Data has been removed!');
        return redirect('backend/shift');
    }
}

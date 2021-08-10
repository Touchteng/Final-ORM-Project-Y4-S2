<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
class LocationController extends Controller
{
    public function  __construct(){
        $this->middleware('auth');
    }

    public function index(){
    $data['ls'] = DB::table('locations')
            ->where('active', 1)
            ->paginate(22);
        return view('backend::locations.index', $data);
    }

    public function create(){
        return view("backend::locations.create");
    }

    public function save(Request $r){
        $data = array(
            'id' => $r->id,
            'name' => $r->name
        );
        $i = DB::table('locations')->insert($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/location/create');
        }
        else{
                $r->session()->flash('eror', 'Fail to save data!');
                return redirect('backend/location/create')->withInput();
        }
    }

    public function edit($id){
        $data['l'] = DB::table('locations')
             ->where('id', $id)
             ->first();
         return view('backend::locations.edit', $data);
     }
 
    public function update(Request $r){
        $data = array(
            'id' => $r->id,
            'name' => $r->name,
        );
        $i = DB::table('locations')
            ->where('id', $r->id)
            ->update($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/location/edit/'.$r->id);
        }
        else{
            $r->session()->flash('eror', 'Fail to save data!');
            return redirect('backend/location/edit/'.$r->id);
        }
    }

    public function delete(Request $r){
        DB::table('locations')
            ->where('id', $r->id)
            ->update(['active'=>0]);
        $r->session()->flash('success', 'Data has been removed!');
        return redirect('backend/location');
    }
}

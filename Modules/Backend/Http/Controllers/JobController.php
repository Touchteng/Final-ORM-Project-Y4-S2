<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
class JobController extends Controller
{
    public function  __construct(){
        $this->middleware('auth');
    }

    public function index(){
    $data['rs'] = DB::table('jobs')
            ->join('shifts', 'jobs.shift_id', 'shifts.id')
            ->join('locations', 'jobs.location_id', 'locations.id')
            ->where('jobs.active', 1)
            ->select('jobs.*', 'shifts.name as sname', 'locations.name as lname')
            ->paginate(22);
        return view('backend::jobs.index', $data);
    }

    public function create(){
        
        $data['cc'] = DB::table('shifts')
            ->where('active', 1)
            ->get();
        $data['dd'] = DB::table('locations')
            ->where('active', 1)
            ->get();
        return view("backend::jobs.create", $data);
    }

    public function save(Request $r){
        $data = array(
            'id' => $r->id,
            'name' => $r->name,
            'company' =>$r->company,
            'location_id' => $r->location,
            'category' =>$r->category,
            'feature' =>$r->feature,
            'shift_id' =>$r->shift,
            'description' =>$r->description
        );
        $i = DB::table('jobs')->insert($data);
        if($i){ 
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/job/create');
        }
        else{
                $r->session()->flash('eror', 'Fail to save data!');
                return redirect('backend/job/create')->withInput();
        }
    }

    public function edit($id){
        $data['r'] = DB::table('jobs')
             ->where('id', $id)
             ->first();
        $data['cc'] = DB::table('shifts')
             ->where('active', 1)
             ->get();
        $data['dd'] = DB::table('locations')
            ->where('active', 1)
            ->get();
        return view('backend::jobs.edit', $data);
     }
 
    public function update(Request $r){
        $data = array(
            'id' => $r->id,
            'name' => $r->name,
            'company' =>$r->company,
            'category' =>$r->category,
            'shift_id' =>$r->shift,
            'feature' => $r->feature,
            'description' =>$r->description
        );
        $i = DB::table('jobs')
            ->where('id', $r->id)
            ->update($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/job/edit/'.$r->id);
        }
        else{
            $r->session()->flash('eror', 'Fail to save data!');
            return redirect('backend/job/edit/'.$r->id);
        }
    }

    public function delete(Request $r){
        DB::table('jobs')
            ->where('id', $r->id)
            ->update(['active'=>0]);
        $r->session()->flash('success', 'Data has been removed!');
        return redirect('backend/job');
    } 

    public function search(Request $r)
    {
        $q = $r->q;
        $data['rs'] = DB::table('jobs')
        ->join('shifts', 'jobs.shift_id', 'shifts.id')
        ->join('locations', 'jobs.location_id', 'locations.id')
        ->where('jobs.active', 1)
        ->select('jobs.*', 'shifts.name as sname', 'locations.name as lname')
            ->where(function($query) use ($q){
                $query
                    ->orWhere('jobs.name', 'like', "%{$q}%")
                    ->orWhere('jobs.category', 'like', "%{$q}%")
                    ->orWhere('jobs.company', 'like', "%{$q}%");
            })
            ->orderBy('id', 'desc')
            ->paginate(18);
        return view('backend::jobs.index', $data);
    }
    public function detail($id)
    {
        $data['cat'] = DB::table('jobs')
            ->join('shifts', 'jobs.shift_id', 'shifts.id')
            ->join('locations', 'jobs.location_id', 'locations.id')
            ->where('jobs.id', $id)
            ->select('jobs.*', 'shifts.name as sname', 'locations.name as lname')
            ->first();
        return view('backend::jobs.detail', $data);
    }
}

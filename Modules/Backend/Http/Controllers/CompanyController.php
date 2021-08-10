<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data['hs'] = DB::table('companies')
            ->paginate(22);
        return view('backend::companies.index', $data);
    }
    public function create(){
        $data['ls'] = DB::table('locations')
        ->where('active',1)
        ->get();
        return view("backend::companies.create", $data);
    }
    public function save(Request $r){
        $data = array(
            'name' => $r->name,
            'location' => $r->location,
            'description' => $r->description
        );
        if($r->photo) { $data['photo'] = $r->file('photo')->store('uploads/backend/companies', 'custom'); }
        $i = DB::table('companies')->insert($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/company/create');
        }
        else{
             $r->session()->flash('eror', 'Fail to save data!');
             return redirect('backend/company/create')->withInput();
        }
    }
    public function edit($id){
        $data['ls'] = DB::table('locations')
        ->where('active',1)
        ->get();
        $data['h'] = DB::table('companies')
            ->where('id', $id)
            ->first();
        return view('backend::companies.edit', $data);
    }
 
    public function update(Request $r){
        $data = array(
            'name' => $r->name,
            'location' => $r->location,
            'description' => $r->description
        );
        if($r->photo) { $data['photo'] = $r->file('photo')->store('uploads/backend/companies', 'custom'); }
        $i = DB::table('companies')
            ->where('id', $r->id)
            ->update($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/company/edit/'.$r->id);
        }
        else{
            $r->session()->flash('eror', 'Fail to save data!');
            return redirect('backend/company/edit/'.$r->id);
        }
    }
     
    Public function delete(Request $r){
        DB::table('companies')
            ->where('id', $r->id)->delete();
        $r->session()->flash('success', 'Data has been removed!');
        return redirect('backend/company');
    }
    public function detail($id)
    {
        $data['com'] = DB::table('companies')
            ->where('id', $id)
            ->first();
        return view('backend::companies.detail', $data);
    }
}

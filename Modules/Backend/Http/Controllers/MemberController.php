<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
class MemberController extends Controller
{
    public function  __construct(){
        $this->middleware('auth');
    }

    public function index(){
    $data['ms'] = DB::table('members')
            ->where('active', 1)
            ->paginate(22);
        return view('backend::members.index', $data);
    }

    public function create(){
        return view("backend::members.create");
    }

    public function save(Request $r){
        $data = array(
            'id' => $r->id,
            'first_name' => $r->first_name,
            'last_name' => $r->last_name,
            'gender' => $r->gender,
            'email' => $r->email,
            'phone' => $r->phone,
            'username' => $r->username,
            'address' => $r->address, 
            'description' => $r->description,
            'password' => bcrypt($r->password)
        );
        if($r->photo) { $data['photo'] = $r->file('photo')->store('uploads/backend/members', 'custom'); }
        $i = DB::table('members')->insert($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/member/create');
        }
        else{
                $r->session()->flash('eror', 'Fail to save data!');
                return redirect('backend/member/create')->withInput();
        }
    }

    public function edit($id){
        $data['m'] = DB::table('members')
             ->where('id', $id)
             ->first();
         return view('backend::members.edit', $data);
     }
 
    public function update(Request $r){
        $data = array(
            'id' => $r->id,
            'first_name' => $r->first_name,
            'last_name' => $r->last_name,
            'gender' => $r->gender,
            'email' => $r->email,
            'phone' => $r->phone,
            'username' => $r->username,
            'address' => $r->address, 
            'description' => $r->description
        );
        if($r->password!=""){
            $data['password'] = bcrypt($r->password);
        }
        if($r->photo) { $data['photo'] = $r->file('photo')->store('uploads/backend/members', 'custom'); }
        $i = DB::table('members')
            ->where('id', $r->id)
            ->update($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/member/edit/'.$r->id);
        }
        else{
            $r->session()->flash('eror', 'Fail to save data!');
            return redirect('backend/member/edit/'.$r->id);
        }
    }

    public function delete(Request $r){
        DB::table('members')
            ->where('id', $r->id)
            ->update(['active'=>0]);
        $r->session()->flash('success', 'Data has been removed!');
        return redirect('backend/member');
    }
    public function detail($id)
    {
        $data['m'] = DB::table('members')
             ->where('id', $id)
             ->first();
         return view('backend::members.detail', $data);
    }
}

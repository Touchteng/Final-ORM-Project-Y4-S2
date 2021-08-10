<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Auth;
use DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // user sign out
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function index(){
        $data['us'] = DB::table('users')
            ->join('roles', 'users.role_id','roles.id')
            ->select('users.*', 'roles.name as rname')
            ->paginate(22);
        return view('backend::users.index', $data);
    }
    public function create(){
        $data['rs'] = DB::table('roles')
        ->where('active',1)
        ->get();
        return view("backend::users.create", $data);
    }
    public function save(Request $r){
        $data = array(
            'name' => $r->name,
            'role_id' => $r->role_id,
            'username' => $r->username,
            'email' => $r->email,
            'password' => bcrypt($r->password)

        );
        if($r->photo) { $data['photo'] = $r->file('photo')->store('uploads/backend/users', 'custom'); }
        $i = DB::table('users')->insert($data);

        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/user/create');
        }
        else{
             $r->session()->flash('eror', 'Fail to save data!');
             return redirect('backend/user/create')->withInput();
        }
    }
    public function edit($id){
        $data['rs'] = DB::table('roles')
        ->where('active',1)
        ->get();
        $data['u'] = DB::table('users')
            ->where('id', $id)
            ->first();
        return view('backend::users.edit', $data);
    }
 
    public function update(Request $r){
        $data = array(
            'name' => $r->name,
            'role_id' => $r->role_id,
            'username' => $r->username,
            'email' => $r->email
        );
        if($r->photo) { $data['photo'] = $r->file('photo')->store('uploads/backend/users', 'custom'); }
        $i = DB::table('users')
            ->where('id', $r->id)
            ->update($data);
            if($r->password!=""){
                $data['password'] = bcrypt($r->password);
            }
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/user/edit/'.$r->id);
        }
        else{
            $r->session()->flash('eror', 'Fail to save data!');
            return redirect('backend/user/edit/'.$r->id);
        }
    }
     
    Public function delete(Request $r){
        DB::table('users')
            ->where('id', $r->id)->delete();
        $r->session()->flash('success', 'Data has been removed!');
        return redirect('backend/user');
    }
}

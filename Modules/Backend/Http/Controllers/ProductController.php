<?php

namespace Modules\Backend\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use DB;
class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $data['pro'] = DB::table('products')
            ->join('sizes', 'products.size_id','sizes.id')
            ->join('categories', 'products.category_id','categories.id')
            ->join('tags', 'products.tag_id', 'tags.id')
            ->join('avibilities' ,'products.avibility_id' ,'avibilities.id')
            ->select('products.*', 'sizes.name as sname', 'categories.name as cname', 'tags.name as tname', 'avibilities.name as aviname')
            ->paginate(22);
        return view('backend::products.index', $data);
    }
    public function create(){
        $data['size'] = DB::table('sizes')
        ->where('active',1)
        ->get();
        $data['cat'] = DB::table('categories')
        ->where('active',1)
        ->get();
        $data['tag'] = DB::table('tags')
        ->where('active',1)
        ->get();
        $data['avi'] = DB::table('avibilities')
        ->where('active',1)
        ->get();
        return view("backend::products.create", $data);
    }
    public function save(Request $r){
        $data = array(
            'name' => $r->name,
            'size_id' => $r->size,
            'category_id' => $r->category,
            'tag_id' => $r->tag,
            'avibility_id' => $r->avibility,
            'price' => $r->price,
            'detail' => $r->detail
        );
        if($r->photo) { $data['photo'] = $r->file('photo')->store('uploads/backend/products', 'custom'); }
        $i = DB::table('products')->insert($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/product/create');
        }
        else{
             $r->session()->flash('eror', 'Fail to save data!');
             return redirect('backend/product/create')->withInput();
        }
    }
    public function edit($id){
        $data['size'] = DB::table('sizes')
        ->where('active',1)
        ->get();
        $data['cat'] = DB::table('categories')
        ->where('active',1)
        ->get();
        $data['tag'] = DB::table('tags')
        ->where('active',1)
        ->get();
        $data['avi'] = DB::table('avibilities')
        ->where('active',1)
        ->get();
        $data['h'] = DB::table('products')
            ->where('id', $id)
            ->first();
        return view('backend::products.edit', $data);
    }
 
    public function update(Request $r){
        $data = array(
            'name' => $r->name,
            'size_id' => $r->size,
            'category_id' => $r->category,
            'tag_id' => $r->tag,
            'avibility_id' => $r->avibility,
            'price' => $r->price,
            'detail' => $r->detail
        );
        if($r->photo) { $data['photo'] = $r->file('photo')->store('uploads/backend/products', 'custom'); }
        $i = DB::table('products')
            ->where('id', $r->id)
            ->update($data);
        if($i){
            $r->session()->flash('success', 'Data has been save!');
            return redirect('backend/product/edit/'.$r->id);
        }
        else{
            $r->session()->flash('eror', 'Fail to save data!');
            return redirect('backend/product/edit/'.$r->id);
        }
    }
     
    Public function delete(Request $r){
        DB::table('products')
            ->where('id', $r->id)->delete();
        $r->session()->flash('success', 'Data has been removed!');
        return redirect('backend/product');
    }
    public function detail($id)
    {
        $data['com'] = DB::table('products')
            ->join('sizes', 'products.size_id','sizes.id')
            ->join('categories', 'products.category_id','categories.id')
            ->join('tags', 'products.tag_id', 'tags.id')
            ->join('avibilities' ,'products.avibility_id' ,'avibilities.id')
            ->select('products.*', 'sizes.name as sname', 'categories.name as cname', 'tags.name as tname', 'avibilities.name as aviname')
            ->where('products.id', $id)
            ->first();
        return view('backend::products.detail', $data);
    }
}

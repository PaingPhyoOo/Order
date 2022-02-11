<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\Rolerequest;

class RoleController extends Controller
{
    public function create(){
        return view('admin.role');
    }
    public function store(Rolerequest $request){
        Role::create(['name'=>$request->get('name')]);
        return redirect('admin/role/create')->with('status','successfully one role inserted');


    }
    public function index(){
        $roles=Role::all();
        return view('admin.show',compact('roles'));
    }
}

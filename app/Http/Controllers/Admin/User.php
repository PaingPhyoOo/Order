<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class User extends Controller
{
    public function index(){
        $user=\App\Models\User::all();
        return view('auth/show',compact('user'));
    }
    public function edit($id){
        $user= \App\Models\User::find($id);

        $role=Role::all();

        $SelectedRole=$user->roles()->pluck('name')->toArray();
        return view('auth.edit',compact('user','role','SelectedRole'));

    }
    public function update(Request $request,$id){
        $user= \App\Models\User::whereId($id)->firstOrFail();
        $user->syncRoles($request->get('role'));
        return redirect(action('App\Http\Controllers\Admin\User@edit',$id))->with('status','successfully');
    }

}

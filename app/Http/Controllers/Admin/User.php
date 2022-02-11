<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class User extends Controller
{
    public function index(){
        $user=\App\Models\User::all();
        return view('auth/show',compact('user'));
    }
}

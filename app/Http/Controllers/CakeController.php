<?php

namespace App\Http\Controllers;

use App\Http\Requests\Cakerequest;
use App\Models\Cake;
use Illuminate\Http\Request;

class CakeController extends Controller
{
    public function order(){
        return view('order.cake');
    }
    public function store(Cakerequest  $request){
        Cake::create([
            'name'=>$request->get('name'),
            'tel_no'=>$request->get('tel'),
            'address'=>$request->get('adss'),
            'cake_type'=>$request->get('ctype'),
        ]);
        return redirect('order/cake')->with('status','Your order have been successfully');
    }
    public function show(){
        $cake_customer=Cake::all();
        return view('customer.cake',compact('cake_customer'));
    }
}
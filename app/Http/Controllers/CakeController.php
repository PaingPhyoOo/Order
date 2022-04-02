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
        $ctype=$request->get('cake_type');
        $b=array();
        foreach($ctype as $cake){
            array_push($b,$cake);
        }
        
        Cake::create([
            'name'=>$request->get('name'),
            'tel_no'=>$request->get('telephone'),
            'address'=>$request->get('address'),
            'cake_type'=>serialize($b),
            
        ]);
        return redirect('order/cake')->with('status','Your order have been successfully');
    }
    public function show(){
        $cake_customer=Cake::all();
        return view('customer.cake',compact('cake_customer'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\Bookrequest;
use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    public function order(){
        return view('order.book');
    }
    public function store(Bookrequest $request){
        Book::create([
            'name'=>$request->get('name'),
            'tel_no'=>$request->get('tel'),
            'address'=>$request->get('adss'),
            'book_name'=>$request->get('bname')
        ]);
        return redirect('order/book')->with('status','Your order have been successfully');
    }
    public function show(){
        $bcustomer=Book::all();
        return view('customer.book',compact('bcustomer'));
    }
}

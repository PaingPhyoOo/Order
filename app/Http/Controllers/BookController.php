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
            'tel_no'=>$request->get('telephone'),
            'address'=>$request->get('address'),
            'book_name'=>$request->get('book_name')
        ]);
        return redirect('order/book')->with('status','Your order have been successfully');
    }
    public function show(){
        $bcustomer=Book::all();
        return view('customer.book',compact('bcustomer'));
    }
}

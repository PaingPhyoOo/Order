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
        /*$files=$request->file('imgf');
        $fileArray=array();
        foreach($files as $file){
            $filename=uniqid().'_'.$file->getClientOriginalName();
            array_push($fileArray,$filename);
            $file->move(public_path().'/uploads/',$filename);
        
        }
        */
        $bname=$request->get('book_name');
        $b=array();
        foreach($bname as $book){
            array_push($b,$book);
        }
        Book::create([
            'name'=>$request->get('name'),
            'tel_no'=>$request->get('telephone'),
            'address'=>$request->get('address'),
            'book_name'=>serialize($b),
            
            //'imgs'=>serialize($fileArray),
        ]);
        return redirect('order/book')->with('status','Your order have been successfully');
    }
    public function show(){
        $bcustomer=Book::all();
        return view('customer.book',compact('bcustomer'));
    }
    }


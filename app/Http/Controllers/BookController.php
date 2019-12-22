<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Book;
use Validator;

class BookController extends Controller
{
       function list(){

    	$Books = DB::table('books')->get();
    	return view('book.index')->with('books', $Books);


    }


    function add(){

    	return view('book.add');

    }

    function adddata(Request $request){
    	$user = new Book();

    	 $user->book_name =$request->book_name;
    	 $user->count =$request->count;
    	 $user->category =$request->category;
       
         $validation = Validator::make($request->all(), [
            'book_name'=>'required',
            'count'=>'required'
           
        ]);
        if($validation->fails()){

                        $request->session()->flash('msg', 'Some Data Missing');
                        return redirect()->route('book.add');

           
        }

    	 if($user->save()){
            return redirect()->route('book.list');
        }else{
            return redirect()->route('book.add');
        }

    }

    function edit($id){

    	$book = DB::table('books')
    	->where('id', $id)
    	->first();

    	return view('book.edit')->with('book', $book);

    }
     function editdata($id,Request $request){

     	$user = Book::find($id);
       	 $user->book_name =$request->book_name;
    	 $user->count =$request->count;
    	 $user->category =$request->category;

        $validation = Validator::make($request->all(), [
           'book_name'=>'required',
            'count'=>'required'
        ]);
        if($validation->fails()){

                        $request->session()->flash('msg', 'Some Data Missing');
                        return redirect()->route('book.edit',$id);

                    }
        $user->save();
        return redirect()->route('book.list');
    	
    }

    function delete($id){

    	$user = DB::table('books')
    	->where('id', $id)
    	->delete();

    	return redirect()->route('book.list');
    	
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use Validator;

class PostController extends Controller
{

	 function list(){

    	$posts = DB::table('posts')->get();
    	return view('post.index')->with('posts', $posts);


    }
       function add(){

    	return view('post.add');

    }

    function adddata(Request $request){
    	$user = new Post();

    	 $user->name =$request->name;
    	 $user->content =$request->content;
       
         $validation = Validator::make($request->all(), [
            'name'=>'required',
            'content'=>'required'
           
        ]);
        if($validation->fails()){

                        $request->session()->flash('msg', 'Some Data Missing');
                        return redirect()->route('post.add');

           
        }

    	 if($user->save()){
            return redirect()->route('post.index');
        }else{
            return redirect()->route('post.add');
        }

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Req;
use Validator;


class WebsiteController extends Controller
{
    //
      function index(){

        $category = DB::table('categories')->get();
        $media = DB::table('medias')->get();
    	 return view('website.index')->with('medias', $media)->with('categories', $category);

    }

    function add(){

    	return view('website.add');

    }

    function adddata(Request $request){
    	$req = new Req();

    	 $req->name =$request->name;
    	 $req->email =$request->email;
    	 $req->content =$request->content;

         
           $validation = Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'required',
            'content'=>'required'
        ]);
        if($validation->fails()){

                        $request->session()->flash('msg', 'Some Data Missing');
                        return redirect()->route('website.index');

           
        }

    	 

    	 if($req->save()){
            return redirect()->route('website.index');
        }else{
            return redirect()->route('website.add');
        }
    }

    function edit($id){

        $media = DB::table('medias')
        ->where('id', $id)
        ->first();

              

        return view('website.edit')->with('media', $media);

    }

     function search(Request $request){

        
        $media = DB::table('medias')
        ->where('name','like', "%$request->value%")

        ->get();
         return view('website.search')->with('medias', $media);

    }
     function category($id){

        
        $media = DB::table('medias')
        ->where('category', "$id")

        ->get();
         return view('website.search')->with('medias', $media);

    }
}

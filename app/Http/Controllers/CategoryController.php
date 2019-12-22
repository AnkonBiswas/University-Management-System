<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Categorie;
use Validator;


class CategoryController extends Controller
{
     
    function list(){

    	$category = DB::table('categories')->get();
    	return view('category.index')->with('categories', $category);


    }

    function add(){


    	$category = DB::table('categories')->where('parent', '0')->get();

    	return view('category.add')->with('categories', $category);

    }

    function adddata(Request $request){
    	$category = new Categorie();

    	 $category->name =$request->name;
    	 $category->parent =$request->parent;


          $validation = Validator::make($request->all(), [
            'name'=>'required',
            'parent'=>'required',
        ]);
        if($validation->fails()){

                        $request->session()->flash('msg', 'Some Data Missing');
                        return redirect()->route('category.add');

           
        }
    	 

    	 if($category->save()){
            return redirect()->route('category.list');
        }else{
            return redirect()->route('category.add');
        }

    }

    function edit($id){

    	$categories = DB::table('categories')
    	->where('id', $id)
    	->first();

    	    	$category = DB::table('categories')->where('parent', '0')->get();


    	return view('category.edit')->with('category', $categories)->with('cates', $category);

    }
     function editdata($id,Request $request){

     	$category = Categorie::find($id);
        $category->name =$request->name;
    	$category->parent =$request->parent;

          $validation = Validator::make($request->all(), [
            'name'=>'required',
            'parent'=>'required',
        ]);
        if($validation->fails()){

                        $request->session()->flash('msg', 'Some Data Missing');
                        return redirect()->route('category.edit',$id);

           
        }

        $category->save();
        return redirect()->route('category.list');
    	
    }

    function delete($id){

    	$user = DB::table('categories')
    	->where('id', $id)
    	->delete();

    	return redirect()->route('category.list');
    	
    }
}

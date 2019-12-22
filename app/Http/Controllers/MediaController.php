<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Media;
use Validator;


class MediaController extends Controller
{
    //

       function list(){

    	$media = DB::table('medias')->get();
    	return view('media.index')->with('medias', $media);


    }

    function add(){


    	$category = DB::table('categories')->get();

    	return view('media.add')->with('categories', $category);

    }

    function adddata(Request $request){
    	

    	 $name =$request->name;
    	 $category =$request->category;


    	 $content ="";

    	 $img ="";

    	  if($request->hasFile('content')){
    	 	 $file = $request->file('content');
    	 	  $content = $file->getClientOriginalName();
    	 	   if($file->move('uploads/files', $file->getClientOriginalName())){
              
            }
        
          }


    	  if($request->hasFile('img')){
    	 	 $file = $request->file('img');
    	 	  $img = $file->getClientOriginalName();
    	 	   if($file->move('uploads/img', $file->getClientOriginalName())){
              
            }
        
          }


           $validation = Validator::make($request->all(), [
            'name'=>'required',
            'content'=>'required',
            'image'=>'required'
        ]);
        if($validation->fails()){

                        $request->session()->flash('msg', 'Some Data Missing');
                        return redirect()->route('media.add');

           
        }


          DB::table('medias')->insert(
    ['name' => $name, 'category' => $category,'content' => $content,'img' => $img]
);
    	 

    	
            return redirect()->route('media.list');
     

    }

    function edit($id){

    	$media = DB::table('medias')
    	->where('id', $id)
    	->first();

    	    	$category = DB::table('categories')->get();


    	return view('media.edit')->with('media', $media)->with('cates', $category);

    }
     function editdata($id,Request $request){

     	$media = Media::find($id);
        $media->name =$request->name;

        if ($request->content) {


    	  if($request->hasFile('content')){
    	 	 $file = $request->file('content');
    	 	  $media->content =$file->getClientOriginalName();
    	 	   if($file->move('uploads/files', $file->getClientOriginalName())){
              
            }
        
          }
    	
        }
           if ($request->img) {


    	  if($request->hasFile('img')){
    	 	 $file = $request->file('img');
    	 	  $media->img =$file->getClientOriginalName();
    	 	   if($file->move('uploads/img', $file->getClientOriginalName())){
              
            }
        
          }
    	
        }
    	$media->category =$request->category;


           $validation = Validator::make($request->all(), [
            'name'=>'required'
           
        ]);
        if($validation->fails()){

                        $request->session()->flash('msg', 'Some Data Missing');
                        return redirect()->route('media.edit',$id);

           
        }



        $media->save();
        return redirect()->route('media.list');
    	
    }

    function delete($id){

    	$user = DB::table('medias')
    	->where('id', $id)
    	->delete();

    	return redirect()->route('media.list');
    	
    }
}

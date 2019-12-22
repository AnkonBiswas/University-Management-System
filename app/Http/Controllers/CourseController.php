<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Course;
use Validator;

class CourseController extends Controller
{
   function list(){

    	$courses = DB::table('courses')->get();
    	return view('course.index')->with('courses', $courses);


    }


    function add(){

    	$courses = DB::table('courses')->get();

    	return view('course.add')->with('courses', $courses);

    }

    function adddata(Request $request){
    	$user = new Course();

    	 $user->id =$request->id;
    	 $user->course_name =$request->course_name;
    	 $user->seats =$request->seats;
    	 $user->section =$request->section;
         $user->category =$request->category;
         $user->status =$request->status;
         $user->preq =$request->preq;

         $validation = Validator::make($request->all(), [
            'id'=>'required',
            'course_name'=>'required',
            'seats'=>'required',
            'category'=>'required',
            'status'=>'required'
        ]);
        if($validation->fails()){

                        $request->session()->flash('msg', 'Some Data Missing');
                        return redirect()->route('course.add');

           
        }

    	 if($user->save()){
            return redirect()->route('course.list');
        }else{
            return redirect()->route('course.add');
        }

    }

    function edit($id){

    	$user = DB::table('courses')
    	->where('c_id', $id)
    	->first();

    	$courses = DB::table('courses')->get();

    	return view('course.edit')->with('user', $user)->with('courses', $courses);

    }
     function editdata($id,Request $request){

     	$user = Course::find($id);
        $user->id =$request->id;
    	 $user->course_name =$request->course_name;
    	 $user->seats =$request->seats;
    	 $user->section =$request->section;
         $user->category =$request->category;
         $user->status =$request->status;
         $user->preq =$request->preq;

        $validation = Validator::make($request->all(), [
             'id'=>'required',
            'course_name'=>'required',
            'seats'=>'required',
            'category'=>'required',
            'status'=>'required'
        ]);
        if($validation->fails()){

                        $request->session()->flash('msg', 'Some Data Missing');
                        return redirect()->route('course.edit',$id);

                    }
        $user->save();
        return redirect()->route('course.list');
    	
    }

    function delete($id){

    	$user = DB::table('courses')
    	->where('c_id', $id)
    	->delete();

    	return redirect()->route('course.list');
    	
    }
}

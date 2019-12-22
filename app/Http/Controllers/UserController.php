<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Coursestudents;

use Validator;

class UserController extends Controller
{


    function index(){
    	 return view('admin.index');

    }

    function list(){

    	$users = DB::table('users')->where('role', 'student')->get();
    	return view('student.index')->with('users', $users);


    }


    function add(){

    	return view('student.add');

    }

    function adddata(Request $request){
    	$user = new User();

    	 $user->full_name =$request->full_name;
    	 $user->username =$request->username;
    	 $user->password =$request->password;
         $user->gender =$request->gender;
         $user->contact =$request->contact;

    	 $user->role ='student';

         $validation = Validator::make($request->all(), [
            'full_name'=>'required',
            'username'=>'required',
            'gender'=>'required',
            'contact'=>'required',
            'password'=>'required'
        ]);
        if($validation->fails()){

                        $request->session()->flash('msg', 'Some Data Missing');
                        return redirect()->route('student.add');

           
        }

    	 if($user->save()){
            return redirect()->route('student.list');
        }else{
            return redirect()->route('student.add');
        }

    }

    function edit($id){

    	$user = DB::table('users')
    	->where('id', $id)
        ->where('role', 'student')
    	->first();

    	return view('student.edit')->with('user', $user);

    }
     function editdata($id,Request $request){

     	$user = User::find($id);
        $user->full_name =$request->full_name;
         $user->username =$request->username;
         $user->password =$request->password;
         $user->gender =$request->gender;
         $user->contact =$request->contact;
    	$user->role ='student';

        $validation = Validator::make($request->all(), [
            'full_name'=>'required',
            'username'=>'required'
        ]);
        if($validation->fails()){

                        $request->session()->flash('msg', 'Some Data Missing');
                        return redirect()->route('student.edit',$id);

                    }
        $user->save();
        return redirect()->route('student.list');
    	
    }

    function delete($id){

    	$user = DB::table('users')
        ->where('role', 'student')
    	->where('id', $id)
    	->delete();

    	return redirect()->route('student.list');
    	
    }


    // faculty



    function facultylist(){

        $users = DB::table('users')->where('role', 'faculty')->get();
        return view('faculty.index')->with('users', $users);


    }


    function facultyadd(){

        return view('faculty.add');

    }

    function facultyadddata(Request $request){
        $user = new User();

         $user->full_name =$request->full_name;
         $user->username =$request->username;
         $user->password =$request->password;
         $user->gender =$request->gender;
         $user->contact =$request->contact;

         $user->role ='faculty';

         $validation = Validator::make($request->all(), [
            'full_name'=>'required',
            'username'=>'required',
            'password'=>'required'
        ]);
        if($validation->fails()){

                        $request->session()->flash('msg', 'Some Data Missing');
                        return redirect()->route('faculty.add');

           
        }

         if($user->save()){
            return redirect()->route('faculty.list');
        }else{
            return redirect()->route('faculty.add');
        }

    }

    function facultyedit($id){

        $user = DB::table('users')
        ->where('id', $id)
        ->where('role', 'faculty')
        ->first();

        return view('faculty.edit')->with('user', $user);

    }
     function facultyeditdata($id,Request $request){

        $user = User::find($id);
         $user->full_name =$request->full_name;
         $user->username =$request->username;
         $user->password =$request->password;
         $user->gender =$request->gender;
         $user->contact =$request->contact;
        $user->role ='faculty';

        $validation = Validator::make($request->all(), [
             'full_name'=>'required',
            'username'=>'required'
        ]);
        if($validation->fails()){

                        $request->session()->flash('msg', 'Some Data Missing');
                        return redirect()->route('faculty.edit',$id);

                    }
        $user->save();
        return redirect()->route('faculty.list');
        
    }

    function facultydelete($id){

        $user = DB::table('users')
        ->where('role', 'faculty')
        ->where('id', $id)
        ->delete();

        return redirect()->route('faculty.list');
        
    }


    function sload(Request $request){



        header('Access-Control-Allow-Origin: *'); 

        if ($request->search != null) {
            $api = DB::table('users')
             ->where('role', $request->role)
             ->where('full_name','like', "%$request->search%")
            ->orderBy($request->sort, $request->sv)
            ->get();
            
        }else{
           $api = DB::table('users')
            ->where('role', $request->role)
            ->orderBy($request->sort, $request->sv)
            ->get();
        }
          

            return response()->json($api);

    }


     function studentcourse($id){

      //  $users = DB::table('users')->where('role', 'student')->get();
//return view('student.index')->with('users', $users);

         //   $courses = DB::table('courses')->get();

             $courses = DB::table('courses')
            ->join('coursestudents', 'courses.id', '!=', 'coursestudents.course_id')
             ->where('coursestudents.student_id', $id)
             ->distinct('courses.id')
            ->select('courses.*')
            ->get();

            $coursestudents = DB::table('coursestudents')->where('student_id', $id)->get();
            return view('student.course')->with('courses', $courses)->with('coursestudents', $coursestudents);


    }
    function studentcourseadd($id,Request $request){


        $courses = $request->course;


        foreach ($courses as $course) {


            $coursedb = new Coursestudents();

         $coursedb->course_id =$course;
         $coursedb->student_id =$id;
      

         if($coursedb->save()){
            return redirect()->route('student.list');
        }else{
            return redirect()->route('student.course',$id);
        }
            
        }


    }
}

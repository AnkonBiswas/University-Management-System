<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\course;
use App\coursestudent;
use App\coursefaculty;
use App\coursenote;
use App\mail;


use Illuminate\Support\Facades\DB;
use Validator;

class facultyController extends Controller
{
    //
    function profile(Request $request){
        $uid=$request->session()->get('uid');
        //echo $uname;
        $user = User::where('id', $uid)
                ->first();
        //echo $user;
        return view('faculty.index')->with('user', $user);
    }

    function allStudents(){
        $users = DB::table('users')
                                    ->where('role', 'student')
                                    ->get();
        return view('faculty.allStudents')->with('users', $users);
    }        
        function allCourses(){
            $courses = DB::table('courses')
                                        ->get();
            return view('faculty.allCourses')->with('courses', $courses);
    }

        function facultyCourses(){
            $courses = DB::select('select courses.* from courseFacultys, courses where courseFacultys.course_id=courses.id and courseFacultys.faculty_id=(SELECT id FROM users where id=?)', [4]);
            return view('faculty.facultyCourses')->with('courses', $courses);
        }

        function courseStudents(Request $request, $id){
            $request->session()->put('c_id', $id);
            $users = DB:: select ('select * from courseStudents, users where users.id=courseStudents.student_id and course_id=?',[$id]);
            $request->session()->put('users', $users);
            return view('faculty.courseStudents')->with('users', $users);

            //print_r($users);
        }

        function viewGrade(Request $request,$id){
            $users = DB:: select ('select * from courseStudents, users where users.id=courseStudents.student_id and cs_id=?',[$id]);
            $request->session()->put('cs_id', $id);
            return view('faculty.changeGrade')->with('users', $users);

        }

        function changeGrade(Request $request){
            $id=$request->session()->get('cs_id');
            $cid=$request->session()->get('c_id');
            $user = coursestudent::where('cs_id', $id)
            ->first();
            $user->grade = $request->grade;
            $user->save();
            return redirect()->route('faculty.courseStudents', $cid);
        }

        public function upload($id, Request $request) {
            $request->session()->put('c_id', $id);
            $courses = DB:: select ('SELECT distinct cn.id, c.course_name, cn.notes FROM courses c, coursenotes cn WHERE c.id=cn.course_id and cn.course_id=?',[$id]);

            return view('faculty.fileupload')->with('c_id', $id)->with('courses', $courses);
         }
         public function showUploadFile(Request $request) {
            if($request->hasFile('file')){
                $file = $request->file('file');
                echo $file->getClientOriginalName()."<br>";
                echo $file->getClientOriginalExtension()."<br>";
                echo $file->getSize()."<br>";
                echo $file->getMimeType();
               if($file->move('upload', $file->getClientOriginalName())) {
                //echo "success";
                $upload = new coursenote();
                $c_id=$request->session()->get('c_id');
                $upload->course_id =$c_id;
                $upload->faculty_id =$request->session()->get('uid');//store user id in session when login and put it here
                $upload->notes="upload/".$file->getClientOriginalName();
                if($upload->save()){
                return redirect()->route('faculty.fileupload', $c_id);
                }else{
                return redirect()->route('faculty.fileupload');
                }
               }
            }else{
                echo "upload fail";
            }
         }

      function mail(){
          return view('faculty.mail');
      }

      function sendMail(Request $request){
        $mail = new mail();
        $mail->faculty_id = $request->session()->get('uid');
        $mail->student_id = $request->student_id;
        $mail->subject =$request->subject;
        $mail->mail =$request->mail;

        if($mail->save()){
            return redirect()->route('faculty.sentMail');
        }else{
            return redirect()->route('faculty.mail');
        }
      }

      function sentMail(Request $request){
        $uid=$request->session()->get('uid');
        //echo $uname;
        $mails = mail::where('faculty_id', $uid)
                                                ->get();
        return view('faculty.sentMails')->with('mails', $mails);
      }
}

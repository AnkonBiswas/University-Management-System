<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\course;
use App\coursestudent;
use App\coursefaculty;
use App\coursenote;

class userController extends Controller
{
    //
    function login(){
		return view('login.index');
	}

	function verify(Request $request){
		
		//$users = User::all();
		$user = User::where('username', $request->username)
					->where('password', $request->password)
					->first();

		if($user){
            
			$request->session()->put('uid',$user->id);
            $request->session()->put('user', $user);
            if ($user->role=='faculty'){
			return redirect()->route('faculty.profile');
            }
		}else{            
			$request->session()->flash('msg', 'invalid username/password');
            return redirect()->route('user.login');
            
		}
    }
    
    function changePassword(Request $request){
        $uid=$request->session()->get('uid');
        //echo $uname;
        $user = User::where('id', $uid)
                ->first();
        //echo $user;
        return view('user.changePassword')->with('user', $user);
    }

    function changePass(Request $request){
        $uid=$request->session()->get('uid');
        $user = User::where('id', $uid)
                ->first();
        $user->password =$request->password;
        $user->save();
        //echo $user;
        if ($user->role=='faculty')
        return redirect()->route('faculty.profile'); 
    }


}

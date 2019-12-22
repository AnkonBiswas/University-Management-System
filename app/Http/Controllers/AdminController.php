<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;
use Validator;

class AdminController extends Controller
{
       function list(){

    	$admins = DB::table('admins')->get();
    	return view('manager.index')->with('admins', $admins);


    }


    function add(){

    	return view('manager.add');

    }

    function adddata(Request $request){
    	$user = new Admin();

    	 $user->username =$request->username;
    	 $user->name =$request->name;
    	 $user->password =$request->password;
       
         $validation = Validator::make($request->all(), [
            'username'=>'required',
            'password'=>'required'
           
        ]);
        if($validation->fails()){

                        $request->session()->flash('msg', 'Some Data Missing');
                        return redirect()->route('admin.add');

           
        }

    	 if($user->save()){
            return redirect()->route('admin.list');
        }else{
            return redirect()->route('admin.add');
        }

    }

    function edit($id){

    	$admin = DB::table('admins')
    	->where('id', $id)
    	->first();

    	return view('manager.edit')->with('admin', $admin);

    }
     function editdata($id,Request $request){

     	$user = Admin::find($id);
       	 $user->username =$request->username;
    	 $user->name =$request->name;
    	 $user->password =$request->password;

        $validation = Validator::make($request->all(), [
           'username'=>'required',
            'name'=>'required'
        ]);
        if($validation->fails()){

                        $request->session()->flash('msg', 'Some Data Missing');
                        return redirect()->route('admin.edit',$id);

                    }
        $user->save();
        return redirect()->route('admin.list');
    	
    }

    function delete($id){

    	$user = DB::table('admins')
    	->where('id', $id)
    	->delete();

    	return redirect()->route('admin.list');
    	
    }
}

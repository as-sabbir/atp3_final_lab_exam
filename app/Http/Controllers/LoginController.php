<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
       public function login(){
		return view('login/login');
	}
	
	   public function verify(Request $req){	
	   
	   
		$req->validate([

            "username"     => "required",
            "password"  => "required",

        ]);
	   
		$result = DB::table('users')->where('username', $req->username)
				->where('password', $req->password)
				->get();

		if(count($result) > 0){
            $req->session()->put('id', $result[0]->id);
			$req->session()->put('username', $req->username);
			$req->session()->put('password', $req->password);
			$req->session()->put('firstName', $result[0]->firstName);
			$req->session()->put('lastName', $result[0]->lastName);
			$req->session()->put('phone', $result[0]->phone);
			$req->session()->put('email', $result[0]->email);
			$req->session()->put('gender', $result[0]->gender);
			$req->session()->put('dateOfBirth', $result[0]->dateOfBirth);
			$req->session()->put('user_role', $result[0]->user_role);
			//return redirect()->route('home.index');
			//echo $result;
			$user_type=session('user_role');
			$username_sess=session('username');
			$email_sess=session('email');
			echo $user_type;
			      if ($user_type=='admin') {
					return redirect()->route('home.admin');
				} elseif ($user_type=='customer') {
					return redirect()->route('home.representative');
				} 
				elseif ($user_type=='manager') {
					return redirect()->route('home.manager');
				}
				else {
					echo "hello1111";
				}
		}else{

			$req->session()->flash('msg', 'invalid username or password');
			return redirect()->route('login.login');
			//return view('login.index');
		}
	}
}

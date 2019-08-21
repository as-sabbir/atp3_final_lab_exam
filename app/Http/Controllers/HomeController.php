<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
	public function index(Request $req){
		
		$result = DB::table('slider')->orderBy('id', 'DESC')->take(3)->get();;
		//echo $result;
		//print_r($result);
		return view('index', ['user'=>$result]);
	}
	
	public function admin(Request $req){
		return view('home.admin');
	}
	
   	public function representative(Request $req){
		return view('home.representative');
	}
	
	public function manager(Request $req){
		return view('home.manager');
	}
	
	
	public function show_contact(Request $req){
		return view('contact');
	}
	
	public function about(Request $req){
		return view('about');
	}
	
	public function register_view(Request $req){
		return view('register_view');
	}
	
	
	public function add_user(Request $req){
		
		$req->validate([

            "firstName"  => "required",
            "lastName"  => "required",
            "phone"  => "required",
            "email"  => "required | unique:users,email",
            "userName"  => "required | unique:users,userName",
            "password"  => "required | min:4",
            "gender"  => "required",
            "dateOfBirth"  => "required",
            "user_role"  => "required",

        ]);
		
		DB::table('users')->insert(
    ['firstName' => $req->firstName,'lastName' => $req->lastName,'phone' => $req->phone, 'email' => $req->email,'userName' => $req->userName, 'password' => $req->password,'gender' => $req->gender,'dateOfBirth' => $req->dateOfBirth,'user_role' => $req->user_role]
    );
        echo "successfully";
	}
	
	
	
	
	

	
	public function add_contact(Request $req){
		
		$req->validate([

            "name"     => "required",
            "email"  => "required",
            "subject"  => "required",
            "message"  => "required",

        ]);
		
		DB::table('inbox')->insert(
    ['userName' => $req->name,'subject' => $req->subject,'email_from' => $req->email, 'email_to' => 'rana@gmail.com','message' => $req->message]
    );
        echo "successfull";
	}
}

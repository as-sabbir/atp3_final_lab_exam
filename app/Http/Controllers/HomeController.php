<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
	public function index(Request $req){
		$category = DB::table('categories')->orderBy('cat_id', 'DESC')->take(3)->get();;
		$result = DB::table('books')->get();
		//echo $result;
		//print_r($result);
		return view('index', ['user'=>$result,'cat'=>$category]);
	}
	
	public function admin(Request $req){
		return view('home.admin');
	}
	
	    public function search(Request $req){
		if($req->search){
		$data = DB::table('books')
		//IF ANY OF THE COLOUMN MATCH FIND BELOW FOREACH LOOP.........
		->where('book_id','like','%'.$req->search . '%')
		->orwhere('book_title','like','%'.$req->search . '%')
		->orwhere('book_name','like','%'.$req->search . '%')
		->orwhere('book_author','like','%'.$req->search . '%')
		->orwhere('book_price','like','%'.$req->search . '%')
		->get();
		//echo $data;
		
		if($data){
			foreach($data as $value => $search){
				echo '<tr> <td>' . $search->book_id . '</td>
				           <td>' . $search->book_title . '</td>
				           <td>' . $search->book_name . '</td>
				           <td>' . $search->book_author . '</td>
				           <td>' . $search->book_price . '</td>
				           <td>' . $search->book_quantity . '</td>
				           <td>' . $search->book_description . '</td>
				      </tr>';
			}
		}
		}
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

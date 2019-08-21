<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
	
    public function show_users(){
		$data = DB::table('users')->get();
		//echo $data;
		return view('home.admin.show_users', ['user'=>$data]);
	}
	
	public function show_orders(){
		$data = DB::table('orders')->get();
		//echo $data;
		return view('home.admin.show_order', ['order'=>$data]);
	}
	
     public function profile($id){
  		$result = DB::table('users')->where('id', $id)->first();
		//echo $result;
		//print_r($result);
		return view('home.admin.profile', ['user'=>$result]);
    }
 
 	public function edit($id){
		//echo $id;
		$result = DB::table('users')->where('id', $id)->first();
		//echo $result;
		//print_r($result);
		return view('home.admin.edit_profile', ['user'=>$result]);
    }
 
 	public function update(Request $req, $id){
		
   

        DB::table('users')
            ->where('id', $id)
            ->update(['firstName' => $req->firstName,'lastName' => $req->lastName,'phone' => $req->phone,'email' => $req->email,'userName' => $req->userName,'password' => $req->password,'gender' => $req->gender,'dateOfBirth' => $req->dateOfBirth]);

				return back()->withInput();

    }
 

    public function search(Request $req){
		if($req->search){
		$data = DB::table('users')
		//IF ANY OF THE COLOUMN MATCH FIND BELOW FOREACH LOOP.........
		->where('id','like','%'.$req->search . '%')
		->orwhere('firstName','like','%'.$req->search . '%')
		->orwhere('lastName','like','%'.$req->search . '%')
		->orwhere('phone','like','%'.$req->search . '%')
		->orwhere('email','like','%'.$req->search . '%')
		->orwhere('userName','like','%'.$req->search . '%')
		->orwhere('gender','like','%'.$req->search . '%')
		->orwhere('dateOfBirth','like','%'.$req->search . '%')
		->orwhere('user_role','like','%'.$req->search . '%')
		->get();
		//echo $data;
		
		if($data){
			foreach($data as $value => $search){
				echo '<tr> <td>' . $search->id . '</td>
				           <td>' . $search->firstName . '</td>
				           <td>' . $search->lastName . '</td>
				           <td>' . $search->phone . '</td>
				           <td>' . $search->email . '</td>
				           <td>' . $search->userName . '</td>
				           <td>' . $search->gender . '</td>
				           <td>' . $search->dateOfBirth . '</td>
				           <td>' . $search->user_role . '</td>
				      </tr>';
			}
		}
		}
	}
 

    public function delete_user($id){

		DB::table('users')->where('id', $id)->delete();
		return redirect()->route('admin.show_users');
	}
	
	public function add_book_view(Request $req){
		return view('home.admin.add_book');
	}
	
	public function add_book(Request $req){
		
		$req->validate([

            "book_title"  => "required",
            "book_name"  => "required",
            "book_author"  => "required",
            "price"  => "required",
            "quantity"  => "required",
            "description"  => "required",

        ]);
		
		DB::table('books')->insert(
    ['book_title' => $req->book_title,'book_name' => $req->book_name,'book_aythor' => $req->book_author,'book_price' => $req->price, 'book_quantity' => $req->quantity,'book_description' => $req->description]
    );
        echo "success";
	}
	
	public function show_contact(Request $req){
		return view('home.admin.contact');
	}
	
	public function add_contact(Request $req){
		
		$req->validate([

            "email"     => "required",
            "subject"  => "required",
            "message"  => "required",

        ]);
		
		$username_sess=session('username');
		$email_sess=session('email');
		DB::table('inbox')->insert(
    ['userName' => $username_sess,'subject' => $req->subject,'email_from' => $email_sess, 'email_to' => $req->email,'message' => $req->message]
    );
        echo "successfull";
	}
	
	public function inbox(){
		$email_sess=session('email');
		$data = DB::table('inbox')->where('email_to', $email_sess)->orderBy('inbox_id', 'DESC')->get();
		//echo $data;
		return view('home.admin.inbox', ['user'=>$data]);
	}
	
	public function delete_message($id){

		DB::table('inbox')->where('inbox_id', $id)->delete();
		return redirect()->route('admin.inbox');
	}
	
}

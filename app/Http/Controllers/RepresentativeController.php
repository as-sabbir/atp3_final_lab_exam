<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RepresentativeController extends Controller
{
	
	public function view_ad(){
		$data = DB::table('slider')->get();
		//echo $data;
		return view('home.representative.view_ad', ['user'=>$data]);
	}
	
	public function add_ad_view(Request $req){
		return view('home.representative.add_ad');
	}
	
	public function delete_ad($id){

		DB::table('slider')->where('id', $id)->delete();
		return redirect()->route('representative.view_ad');
	}
	
	public function edit_ad($id){
		
     	$result = DB::table('slider')->where('id', $id)->first();
		return view('home.representative.edit_ad', ['slider'=>$result]);
    }
	
	public function update_ad(Request $req, $id){
		$req->validate([

            "sponsor"     => "required",
            "image"  => "required",
            "tag"  => "required",
            "date"  => "required",

        ]);
		
        if($req->hasFile('image')){
            $file = $req->file('image');
            if($file->move('image', $file->getClientOriginalName())){
	
		    DB::table('slider')
            ->where('id', $id)
            ->update(['sponsor' => $req->sponsor,'image' => $file->getClientOriginalName() ,'tag' => $req->tag, 'date' => $req->date]);

				return back()->withInput();
		 
				
                echo "success";
            }else{
                echo "error";
            }

        }else{
            echo "File upload error!";
        }

    }
	
	
	

    public function add_ad(Request $req){
		
		$req->validate([

            "sponsor"     => "required",
            "image"  => "required",
            "tag"  => "required",
            "date"  => "required",

        ]);
		
		
        if($req->hasFile('image')){
            $file = $req->file('image');
            if($file->move('image', $file->getClientOriginalName())){
	
			DB::table('slider')->insert(
			['sponsor' => $req->sponsor,'image' => $file->getClientOriginalName() ,'tag' => $req->tag, 'date' => $req->date]
			);
		 
				
                echo "success";
            }else{
                echo "error";
            }

        }else{
            echo "File upload error!";
        }

    }
	
    public function profile($id){
  		$result = DB::table('users')->where('id', $id)->first();
		//echo $result;
		//print_r($result);
		return view('home.representative.profile', ['user'=>$result]);
    }
	
	public function edit($id){
		//echo $id;
		$result = DB::table('users')->where('id', $id)->first();
		//echo $result;
		//print_r($result);
		return view('home.representative.edit_profile', ['user'=>$result]);
    }
	
	public function update(Request $req, $id){
		
   

        DB::table('users')
            ->where('id', $id)
            ->update(['firstName' => $req->firstName,'lastName' => $req->lastName,'phone' => $req->phone,'email' => $req->email,'userName' => $req->userName,'password' => $req->password,'gender' => $req->gender,'dateOfBirth' => $req->dateOfBirth]);

				return back()->withInput();

    }
	
	public function show_contact(Request $req){
		return view('home.representative.contact');
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
		return view('home.representative.inbox', ['user'=>$data]);
	}
	
	public function delete_message($id){

		DB::table('inbox')->where('inbox_id', $id)->delete();
		return redirect()->route('representative.inbox');
	}
	
}

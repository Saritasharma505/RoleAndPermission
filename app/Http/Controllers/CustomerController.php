<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   function __construct($foo = null)
   {
   	//$this->middlewere('auth');
   }
   public function index()
   {
   	$user= DB::table('tbl_member_datas')->get();
   	return view('customer.index',['user'=>$user]);
   }
   public function view($value)
   {
   	$user= DB::table('tbl_member_datas')->where('memberShipid',$value)->get();
   	dd($user);
   }
   public function message($value)
   {
   	$user= DB::table('messages')->where('member_id',$value)->get();
   	
   		return view('customer.message',['messages'=>$user]);
   }
  	public function create(Request $request)
    {
    	$subject = $request->input('subject');
    	$user_id = $request->input('user_id');
    	$member_id = $request->input('member_id');
    	$message = $request->input('message');

    	DB::insert("INSERT INTO messages(user_id, message, subject, member_id) VALUES ('$user_id','$message','$subject','$member_id')");
    	$request->session()->flash('status', 'Message Send successful!');
    	return back();
        
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Venue;
use Spatie\Permission\Models\Role;
use App\Location;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins=User::all();
       $location=Venue::all();
       $role=Role::all();
        return view('adminDetails.adminUser.index',compact(['admins','location','role']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $roles=Role::all();

        $locations=Venue::all();
        return view('adminDetails.adminUser.add',compact('locations','roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles = $request->role;
     // $user->assignRole($roles);
       $name = $request->input('name');
      $email = $request->input('email');
      // $today = date("y/m/d");
      $phone = $request->input('phone');
        $password = bcrypt($request->input(['password']));
        $role = $request->input('role');
        $location = $request->input('location');
       
        //$user=User::create($reqdata);
      $user=DB::insert("insert into users(name,email,phone,password,role,location) values('$name','$email','$phone','$password','$role','$location')");
    /* $user->assignRole($role);
     dd($user);*/
      Session::flash('message','Record Inserted Successfully');
      return redirect()->action('AdminController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $roles=Role::all();
      $locations=Venue::all();
       $admin_edit=User::where('id',$id)->get();
       return view('adminDetails.adminUser.edit',compact(['admin_edit','locations','roles']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    
      $name = $request->input('name');
       $id = $request->input('id');
        $email = $request->input('email');
         $phone = $request->input('phone');
        $password =bcrypt($request->input(['password']));
        $role = $request->input('role');
        $location = $request->input('location');
        $data=User::where('id',$id)->update(['name'=>$name,'email'=>$email,'phone'=>$phone,'password'=>$password,'role'=>$role,'location'=>$location]);
        Session::flash('message','Record Updated Sucessfully');
      return redirect()->action('AdminController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $admin_delete=User::where('id',$id)->delete();
       Session::flash('message','Record Deleted Successfully');
       return back();
    }
}

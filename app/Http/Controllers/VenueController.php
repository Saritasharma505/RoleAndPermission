<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use DB;
use App\Venue;
use Illuminate\Support\Facades\Session;


class VenueController extends Controller
{
    
    public function index($id)
    {

        $venue_loc = Venue::where('location_id',$id)->get();
       $locations = Location::where('id',$id)->get();
       $id= $id;
       return view('adminDetails.location.venue.index',compact(['locations','venue_loc','id']));
    }

   
  
    public function create($id)
    {
        //echo $id;
         $venue_loc = Venue::where('id',$id)->get();
         $location = Location::where('id',$id)->get();

        return view('adminDetails.location.venue.add',compact(['venue_loc','location']));
    }

  
    public function store(Request $request)
    {
       $id=$request->input('id');
        $locationName=$request->input('locationName');
       $parent_id=$request->input('parent_id');
        $status=$request->input('status');

       $data=DB::insert("insert into locations(locationName,parent_id,status) values('$locationName','$parent_id','$status')");
        return $this->index($locationName);
       
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $edit_location=DB::table('locations')->get();
        $edit_venue=Location::where('id',$id)->get();
        
        return view('adminDetails.location.venue.edit',compact(['edit_venue','edit_location']));
    }

    
    public function update(Request $request)
    {
        $id=$request->input('id');
        $locationName=$request->input('locationName');
       $parent_id=$request->input('parent_id');
        $status=$request->input('status');

       $data=DB::update("update locations set `parent_id`='$parent_id',`status`='$status' where `id`='$locationName'");
        return back();
    }

    public function destroy($id)
    {
       $data=Venue::where('id',$id)->delete();
       
        Session::flash('message','Record Deleted Sucessfully');
        return back();
    }
    public function sub_location(Request $req)
    {
      
        $a=$req->input('locationName');
        $b=$req->input('sub_location');
        $c=$req->input('id');
        $d=$req->input('status');

       $venue_loc = Venue::where('id',$c)->get();  

       $data=DB::INSERT("INSERT INTO venues (location_name,sub_location,location_id,v_status) VALUES ('$a','$b','$c','$d')");
        return $this->index($c);
    }
    /*public function dataAdd($id)
    {
        echo $id;
         $venue_loc = Venue::where('id',$id)->get();

        return view('adminDetails.location.venue.add',compact('venue_loc'));
    }*/

}

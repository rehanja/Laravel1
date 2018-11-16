<?php

namespace App\Http\Controllers\meeting;
use App\Meeting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class meetingController extends Controller
{
    public function MeetingCreate(){

        return view('meeting/meetingCreate');

    }

    public function MeetingStore(Request $request){
         
        $this ->validate($request,[
            'title'      => 'required',                 //input validations
            'date'       => 'required',
            'startTime'  => 'required',
            'endTime'    => 'required',
            'status'     => 'required',
        ]);


        $meeting=new Meeting;

        $meeting->title       = $request-> input('title');          //store in db
        $meeting->date        = $request-> input('date');
        $meeting->startTime   = $request-> input('startTime');
        $meeting->endTime     = $request-> input('endTime');
        $meeting->description = $request-> input('description');
        $meeting->invitees    = $request-> input('invitees');
        $meeting->status      = $request-> input('status');

        $meeting->save();

        $meeting=Meeting::all();
        return redirect()->back()->with('message','Meeting Create Successfully!'); 

    }

    public function MeetingDelete($id){
    
        $a = Meeting::find($id);
        $a->delete();
        return redirect()->back()->with('message','Meeting Delete Successfully!');

    }


    public function MeetingUpdate($id){

        $meeting = Meeting::find($id);

        return view('meeting/meetingUpdate')->with('meeting',$meeting);
           
    }


    public function MeetingUpdateSave(Request $request,$id){
        
        /*$this ->validate($request,[
            'title'      => 'required',
            'date'       => 'required',
            'startTime'  => 'required',
            'endTime'    => 'required',
            'status'     => 'required',
        ]);*/

        $meeting = Meeting::find($id);

        $meeting->title       = $request-> input('title');
        $meeting->date        = $request-> input('date');
        $meeting->startTime   = $request-> input('startTime');
        $meeting->endTime     = $request-> input('endTime');
        $meeting->description = $request-> input('description');
        $meeting->invitees    = $request-> input('invitees');
        $meeting->status      = $request-> input('status');
        
        $meeting->save();
        $data = Meeting::all();

        //return redirect('/meeting')->with('meeting',$data);

        return redirect()->back()->with('message','Meeting Update Successfully!');

    }
 
}

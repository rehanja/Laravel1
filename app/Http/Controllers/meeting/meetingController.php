<?php

namespace App\Http\Controllers\meeting;
use App\Meeting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\MeetingConfirmation;

class meetingController extends Controller
{
    public function Index(){
        
        $meeting = Meeting::all();

        $meeting = Meeting::paginate(6);
      
            return view('meeting/meetingHome',compact('meeting'))
                ->with('id', (request()->input('page', 1) - 1) * 6);

    }

    public function MeetingCreate(){

        return view('meeting/meetingCreate');

    }

    public function MeetingStore(Request $request){
         
        $this ->validate($request,[
            'name'       => 'required',                             //input validations
            'email'      => 'required',                 
            'date'       => 'required',
            'startTime'  => 'required',
            'endTime'    => 'required',
            'venue'      => 'required',
            'invitees'   => 'required',
            'status'     => 'required',
        ]);
 

        $meeting=new Meeting;

        $meeting->name        = $request-> input('name');          //store in db
        $meeting->email       = $request-> input('email');        
        $meeting->date        = $request-> input('date');
        $meeting->startTime   = $request-> input('startTime');
        $meeting->endTime     = $request-> input('endTime');
        $meeting->venue       = $request-> input('venue');
        $meeting->invitees    = $request-> input('invitees');
        $meeting->status      = $request-> input('status');

        $meeting->save();

        $meeting = Meeting::all();
        return redirect('/meeting')->with('message','Meeting Created Successfully.'); 

    }

    public function MeetingDelete($id){
    
        $a = Meeting::find($id);
        $a->delete();
        //return 0;
        return redirect()->back()->with('message','Meeting Deleted Successfully.');

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
            'venue'      => 'required',
            'status'     => 'required',
        ]);*/

        $meeting = Meeting::find($id);

        $meeting->name        = $request-> input('name');
        $meeting->email       = $request-> input('email');
        $meeting->date        = $request-> input('date');
        $meeting->startTime   = $request-> input('startTime');
        $meeting->endTime     = $request-> input('endTime');
        $meeting->venue       = $request-> input('venue');
        $meeting->invitees    = $request-> input('invitees');
        $meeting->status      = $request-> input('status');
        
        $meeting->save();
        $data = Meeting::all();

        //return redirect('/meeting')->with('meeting',$data);

        return redirect('/meeting')->with('message','Meeting Updated Successfully.');

    }

    public function MeetingViewMail($id)
    {

        $data = Meeting::find($id);
      
        $data = '05.02.2019 at 10.00AM to 10.30AM';
        Mail::to($id)->send(new MeetingConfirmation($data));
       
        return redirect()->back()->with('message','Email sent successfully.',$data);
        //return 'Email has been sent successfully';
    }  
 

}
 
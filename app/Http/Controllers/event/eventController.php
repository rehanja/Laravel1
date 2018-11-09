<?php

namespace App\Http\Controllers\event;
use App\event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class eventController extends Controller
{
    public function eventSave(Request $request){
         //validation part
// dd($request->all());
$this ->validate($request,[
    'eventName'=>'required|max:20',
    'reason'=>'required|max:20',
    'region'=>'required|max:20',
    'budget'=>'required',
    'startDate'=>'required',
    'startDate'=>'required',
    'startDate'=>'required',
 ]);


$event=new event;

 $event->eventName=$request->eventName;
 $event->reason=$request->reason;
 $event->region=$request->region;
 $event->budget=$request->budget;
 $event->startDate=$request->startDate;
 $event->startTime=$request->startTime;
 $event->endTime=$request->endTime;
 $event->save();

 $data=event::all();
//return redirect()->back();
return redirect('/event')->with('event',$data);
   
}
public function eventDelete($id){
    //dd($id);
    $a=event::find($id);
    $a->delete();
    return redirect()->back();
}


public function eventUpdate($id){

    $event = event::find($id);


    return view('event/eventUpdate')->with('event',$event);
      
      
}


public function eventUpdateSave(Request $request,$id){
     //validation part
    //dd($request->all());
    $this ->validate($request,[
        'eventName'=>'required|max: 20',
        'reason'=>'required|max:20',
        'region'=>'required|max:20',
        'budget'=>'required',
        'startDate'=>'required',
        'startDate'=>'required',
        'startDate'=>'required',
     ]);

      $event=event::find($id);

      $event->eventName = $request->eventName;
      $event->reason = $request->reason;
      $event->region = $request->region;
      $event->budget = $request->budget;
      $event->startDate = $request->startDate;
      $event->startTime = $request->startTime;
      $event->endTime = $request->endTime;
     
    //$date = $event->start;
     $event->save();
     $data=event::all();
     //return '0';
     return redirect('/event')->with('event',$data);
}
 
}

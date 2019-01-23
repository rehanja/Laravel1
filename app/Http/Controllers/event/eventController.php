<?php

namespace App\Http\Controllers\event;
use App\event;
use App\vote;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class eventController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $a=event::all();
        $a = event::orderBy('vote', 'ASCE')->get();
        //return Auth::user()->id;
        return view('event/eventHome')->with('event',$a);
    }

    
    public function eventSave(Request $request){
         //validation part
    //dd($request->all());
    $this ->validate($request,[
        'eventName'=>'required|min:10',
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
            'eventName'=>'required|min: 10',
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
    

//functions for polling
    public function PollsView(Request $request){

        $event = event::orderBy('vote', 'ASCE')->get();
        $sum = $event->sum('vote');
        $arr = [['eventName', 'votes']];

        foreach($event as $a){
            array_push($arr, [(string)$a->eventName, $a->vote]);
        }
        
        return view('polling/poll')->with(['event'=>$event, 'sum'=>$sum, 'arr'=>$arr]);

    }
    
    public function VoteAdd(Request $request){
            $id = Auth::user()->id;
            $event = Event::find($request->eventid);

            $c = count(vote::where(['event_id'=> $event->id, 'user_id'=> $id])->get());
            if($c==0){
                $event->vote = $event->vote + 1;
                $event->save();

                $vote = new vote;
                $vote->event_id= $event->id;
                $vote->user_id= $id;
                $vote->save();

                return redirect()->back()->with('message','Voted successfully.'); 
            }

            else {
                return redirect()->back()->with('error','Opps, You have already voted for this event.!'); 
            }

            $data = event::all();
            // return '0';
            return redirect('/event')->with('event',$data);
    }
     
}

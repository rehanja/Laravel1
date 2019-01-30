<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Meeting;
use App\Event;
use App\User;
use App\vote;
//use Auth;
class ApiContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    //check weather user is activated
    public function isActive($email){
        return response()->json(['isactive'=>user::findOrFail($email)->isActive]);
    }
        //get all meetings
    public function getAllMeeting(){
        
        $allmeetings=Meeting::all();
        if($allmeetings){
            return response()->json(['meetings'=>$allmeetings],200);
            
        }else{
            return response()->json(['response'=>'bad response']);
        }
        //get particular meeting
    }
    public function getPeticularMeeting($id){
        return response()->json(['meeting'=>Meeting::findOrFail($id)]);
    }
    //delete meeting
    public function delmeeting($id){
    
        $a = Meeting::find($id);
        $a->delete();
        return response()->json(['response'=>'Meeting deleted successfully']);
    }
    //meeting update
    public function MeetingUpdate(Request $request,$id){
        
 
        $meeting = Meeting::find($id);
        $meeting->name        = $request-> input('name');
        $meeting->email      = $request-> input('email');
        $meeting->date        = $request-> input('date');
        $meeting->startTime   = $request-> input('startTime');
        $meeting->endTime     = $request-> input('endTime');
        $meeting->venue = $request-> input('venue');
        $meeting->invitees    = $request-> input('invitees');
        $meeting->status      = $request-> input('status');
        
        $meeting->save();
       
    }
     
    //update meeting
    public function MeetingsCreate(Request $request){
         
        $meeting=new Meeting;
        $meeting->name        = $request-> input('name');          //store in db
        $meeting->title       = $request-> input('title');        
        $meeting->date        = $request-> input('date');
        $meeting->startTime   = $request-> input('startTime');
        $meeting->endTime     = $request-> input('endTime');
        $meeting->description = $request-> input('description');
        $meeting->invitees    = $request-> input('invitees');
        $meeting->status      = $request-> input('status');
        $meeting->save();
      
        
        //GET ALL EVENTS
    }
    public function getAllEvents(){
        
        $allevents=event::all();
        if($allevents){
            return response()->json(['events'=>$allevents],200);
            
        }else{
            return response()->json(['response'=>'bad response']);
        }
       
    }
    //GET PARTICULAR EVENT
    public function getPeticularevent($id){
        return response()->json(['event'=>event::findOrFail($id)]);
    }
    //GET ALL USERS
    public function getAllusers(){
        
        $allusers=user::all();
        if($allusers){
            return response()->json(['users'=>$allusers],200);
            
        }else{
            return response()->json(['response'=>'bad response']);
        }
    }
    //GET PARTICULAR USER
    public function getpeticularuser($id){
        return response()->json(['user'=>user::findOrFail($id)]);
    }
    //GET USER COUNT (TO GET PERCENTAGE OF VOTES)
    public function usercount(){
        return response()->json(['usercount'=>user::count()]);
    }
    //Add votes
    public function VoteAdd(Request $request,$id,$uid){
       // $uid = Auth::user()->id;
        $event = Event::find($id);
        $c = count(vote::where(['event_id'=> $id, 'user_id'=> $uid])->get());
        if($c==0){
            $event->vote = $event->vote + 1;
            $event->save();
            $vote = new vote;
            $vote->event_id= $event->id;
            $vote->user_id = $uid;
            $vote->save();
          //  return redirect()->back()->with('message','Voted successfully.'); 
        }
    }
    public function editProfile(Request $request, $id){
        $user=User::find($id);
    
        
        if ($request->nameWithInitials) {
            $user->nameWithInitials = $request->nameWithInitials; 
        }
        if ($request->name) {
            $user->name = $request->name; 
        }
        if ($request->email) {
            $user->email = $request->email; 
        }
        if ($request->nic) {
            $user->nic = $request->nic; 
        }
        if ($request->address) {
            $user->address = $request->address; 
        }
        if ($request->email) {
            $user->contactNumber = $request->contactNumber; 
        }
                
        $user->save();
        
    }
       
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
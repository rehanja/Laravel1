<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use Validator;
Use App\User;
use Auth;
use App\Meeting;
class UserController extends Controller
{
    
    public function login(){
        if(Auth::attempt(['email'=>request('email'),'password'=>request('password')])){
            //here checking logged user
            $user=Auth::user();
            $success['token']=$user->createToken('Meeting')->accessToken;
            return response()->json(['success'=>$success],200);
        }else{
            //if bad req or unauthorized event happens
                return response()->json(['error'=>'Cannot be authenticate'],401);
        }
    }
    public function register(Request $request){
     
        $validator=Validator::make($request->all(),[
                           'nameWithInitials'=>'required',
                           'name'=>'required',
                           'nic'=>'required',
                           'address'=>'required',
                           'contactNumber'=>'required',
                           'email'=>'required|email',
                           'password'=>'required',
                           'confirm_p'=>'required|same:password'  
        ]);
        if($validator->fails()){
     return response()->json(['error'=>$validator->errors()],401);
        }
        $input=$request->all();
        $input['password']=bcrypt($input['password']);
        $user=User::create($input);
        $success['token']=$user->createToken('Meeting')->accessToken;
    
        return response()->json(['success'=>$success],200);
        $thisUser = User::findOrFail($user->id);
        $this->sendEmail($thisUser);
       // return $user;
       
       Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));
    }
    //dummy function 
    public function getAllMeetings(){
                return response()->json(['data asdata'=>Meeting::all()],200);
    }
   
}
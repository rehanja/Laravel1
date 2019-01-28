<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\model_has_roles;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use App\Mail\verifyEmail;
use Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nameWithInitials' => 'required|string|max:55',
            'name' => 'required|string|max:255',
            'nic' => 'required|string|max:10',
            'address' => 'required|string|max:55',
            'contactNumber' => 'required|string|max:10',
            'pollingDivision'=>'',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        Session::flash('status','Registerd! but verify your email to activate your account');

        $user= User::create([

            'nameWithInitials' => $data['nameWithInitials'],
            'name' => $data['name'],
            'nic' => $data['nic'],
            'address' => $data['address'],
            'pollingDivision'=>$data['pollingDivision'],
            'contactNumber' => $data['contactNumber'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'verifyToken' => Str::random(40), //create randomely verify Token
        ]);

        $thisUser = User::findOrFail($user->id);

        // $event=new model_has_roles;
        // $event->role_id=1;
        // $event->model_type="App\User";
        // $event->model_id=$user->id;
        // $event->save();

        // $this->sendEmail($thisUser);

        return $user;

    }

    protected function sendEmail($thisUser){
        Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));
    }

    protected function verifyEmailFirst(){
        return view('email.verifyEmailFirst');
    }

    protected function sendEmailDone(Request $request){
        $email = $request->email;
        $verifyToken = $request->verifyToken;
        //echo User::where('email', $email)->get();
        $user = User::where(['email'=>$email,'verifyToken'=>$verifyToken])->first();
        if($user){
           return user::where(['email'=>$email,'verifyToken'=>$verifyToken])->update(['status'=>'1','verifyToken'=>NULL]);
        }else{
            return 'user not found';
        }
    }

}

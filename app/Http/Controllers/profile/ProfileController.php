<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Image;
use App\User;


class ProfileController extends Controller
{
    public function getProfile(){
        return view('profile.profile');
    }

    public function editProfile($id){
        $user = User::find($id);

        return view('profile.editprofile')->with('user',$user);
    }

    public function submit(Request $request, $id){
        $user=User::find($id);

        $user->nameWithInitials = $request->nameWithInitials;
        $user->name = $request->name;
        $user->nic = $request->nic;
        $user->address = $request->address;
        $user->contactNumber = $request->contactNumber;
        $user->email = $request->email;        
        //$date = $event->start;
        $user->save();
        $data=User::all();
        //return '0';
        return redirect('/profile')->with('user',$data);
        //dd($request->all());
       // return view('profile.profile');
    }

    public function uploadPhoto(Request $request){
         if($request->hasFile('profilePic')){
            $profilePic=$request->file('profilePic');
            $filename=time() . '.' . $profilePic->getClientOriginalExtension();
            Image::make($profilePic)->resize(300,300)->save( public_path('/uploads/profilePic/' . $filename ));

            $user=Auth::user();
            $user->profilePic=$filename;
            $user->save();
        }

        return view('profile.profile');
       
    }
}

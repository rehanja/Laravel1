<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Image;


class ProfileController extends Controller
{
    public function getProfile(){
        return view('profile.profile');
    }

    public function editprofile(){
        return view('profile.editprofile');
    }

    public function submit(Request $request){
        //dd($request->all());
        return view('profile.profile');
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

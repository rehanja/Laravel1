<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProfileController extends Controller
{
    public function getProfile(){
        return view('profile.profile');
    }

    public function editprofile(){
        return view('profile.editprofile');
    }
}

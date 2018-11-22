<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use App\Mail\verifyEmail;
use Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class UsersController extends Controller
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
     * @return voidcre
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function updateAsMember($id){
        $task=User::find($id);

        $task->isActive=1;
        $task->save();
        return redirect()->back();
    }
    protected function updateAsNotMember($id){
        $task=User::find($id);

        $task->isActive=0;
        $task->save();
        return redirect()->back();
    }

    protected function deleteMember($id){
        $task=User::find($id);

        $task->delete();
        return redirect()->back();
    }

    protected function updateMember($id){
        $task=User::find($id);

        return view('roles/updateUser')->with('data',$task);
    }

    protected function updateMemberView(Request $request){
            $id=$request->id;
            $nameWithInitials=$request->nameWithInitials;
            $name=$request->name;
            $nic=$request->nic;
            $address=$request->address;
            $contactNumber=$request->contactNumber;

            $data=User::find($id);
            $data->nameWithInitials=$nameWithInitials;
            $data->name=$name;
            $data->nic=$nic;
            $data->address=$address;
            $data->contactNumber=$contactNumber;
            $data->save();

            $d=User::all();
            return view('roles/createUser')->with('data',$d);


    }

}

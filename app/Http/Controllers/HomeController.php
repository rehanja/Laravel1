<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App\model_has_roles;
use Illuminate\Support\Facades\DB;

    class HomeController extends Controller
    {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function permissiontorole(Request $request){
    //     $role1 = Role::findById($user);
    //     $permission1 = Permission::findById($permission);
    //     $role1->givePermissionTo($permission1);
    //  }

    public function assignHome()
    {
        //dd("test");
        $assign = DB::table('roles')->get();
        //return Auth::user()->id;
        return view('assign\assignHome')->with('assign',$assign);
    }

    public function Home(request $request)
    {

           return view('home');

    }

    public function index(request $request)
    {

    //    dd($request->all());
       $memberId = $request['memberId'];
       $role = $request['role'];



    //   relavent to role dashboard
    //   $role_id => $request["p_name"];.
    //  'description' => $request->p_description,
    //  'prize' => $request->p_price,



        //creating roles for 4 types of users
        //$role = Role::create(['name' => 'p_member']);
       // $role = Role::create(['name' => 'or_fol']);
         // $role = Role::create(['name' => 'or_pm']);
       // $role = Role::create(['name' => 'supervising_officer']);
       // $role = Role::create(['name' => 'temporyMember']);



      //creating permissions for 4 types of users
       // $permission = Permission::create(['name' => 'view event']);
       // $permission = Permission::create(['name' => 'create event']);
       // $permission = Permission::create(['name' => 'delete event']);
       // $permission = Permission::create(['name' => 'update event']);

//giveing permission to p_member
    $role1 = Role::findById(1);
    $permission1 = Permission::findById(1);
    $role1->givePermissionTo($permission1);

//giveing permission to or_fol
    $role2 = Role::findById(2);
    //$permission1 = Permission::findById(1);
    $role2->givePermissionTo($permission1);

//giveing permission to or_pm
   $role3 = Role::findById(3);
   $permissionAll = Permission::all();
   $role3->givePermissionTo($permissionAll);

//giveing permission to supervising_officer
    $role4 = Role::findById(4);
    $permissionAll = Permission::all();
    $role4->givePermissionTo($permissionAll);


    $assign = DB::table('users')->get();
    $a=Auth::user()->isActive;

  // dd($a);

    if($a==0){
        auth()->user()->assignRole('temporyMember');
       // echo("added you role correctly as a temporyMember");
    }
    else{
        return view('home');
    }

//


//assign p_member role to user
    //$user1=User::find($memberId);
   // $user1->assignRole($role);



            return view('home');



    }

    public function assignNewRole(request $request)
    {

        $memberId = $request['memberId'];
        $roleId = $request['roleId'];

        $assign = DB::table('model_has_roles')->get()->toArray();

        foreach($assign as $value){
            if($memberId == $value->model_id){

                $assign = DB::table('roles')->get();

                DB::table('model_has_roles')
                ->where('model_id', $value->model_id)
                ->update(['role_id' => $roleId]);
            }
        }

        return redirect()->back();

    }
}

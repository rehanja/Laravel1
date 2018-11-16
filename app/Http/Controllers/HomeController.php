<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

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

    public function index()
    {
  
        //creating roles for 4 types of users
        //$role = Role::create(['name' => 'p_member']);
        //$role = Role::create(['name' => 'or_fol']);
        //$role = Role::create(['name' => 'or_pm']);
        //$role = Role::create(['name' => 'supervising_officer']);

      //creating permissions for 4 types of users
        //$permission = Permission::create(['name' => 'view event']);
        //$permission = Permission::create(['name' => 'create event']);
        //$permission = Permission::create(['name' => 'delete event']);
        //$permission = Permission::create(['name' => 'update event']);

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


//assign p_member role to user
    $user1=User::find(1);
    $user1->assignRole('p_member');

//assign or_fol role to user
    $user2=User::find(2);
    $user2->assignRole('or_fol');

//assign or_pm role to user
    $user3=User::find(3);
    $user3->assignRole('or_pm');

//assign supervising_officer role to user
    $user4=User::find(4);
    $user4->assignRole('supervising_officer');





        return view('home');
    }
}

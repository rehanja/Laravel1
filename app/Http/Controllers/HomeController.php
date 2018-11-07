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
  






        return view('home');
    }
}

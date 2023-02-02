<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::find(2);
        echo $users->name . ' and phone number :' . $users->phone->phone;
    }

    public function PhoneModel()
    {
        $phone = Phone::find(1);
        echo 'Phone No:' . $phone->phone;
        echo "<br>";
        echo $phone->user->name;
    }

    //add role

    public function roleAssign()
    {
        $user = User::find(1);
        $roleIds = [1, 2];
        $user->roles()->sync($roleIds);
        // $user->roles()->attach($roleIds);
    }

    //remove role
    // public function roleDetach()
    // {
    //     $user = User::find(1);
    //     $roleIds = [1, 2, 3];
    //     $user->roles()->detach($roleIds);
    // }
}

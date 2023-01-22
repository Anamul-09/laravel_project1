<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {


        // $user = new User();
        // $data = $user->where('email' = 'anam@gmail.com');
        // $pass = sha1(anam);
        // $data = $user->where('password', $pass)->get();
        // dd($data);
        return view('auth/login');
    }

    public function login(Request $request)
    {
        return redirect('/dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showAge extends Controller
{
    public function index(Request $req)
    {
        echo "Welcome you are $req->age years old";
    }
}

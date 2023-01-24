<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function report1()
    {
        $data = DB::table('products')->get();
        echo $data->count();
        dd($data);
    }
}

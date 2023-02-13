<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchProduct extends Controller
{
    public function Search(Request $request)
    {

        $term =  $request->item;

        $result = DB::table('products')->where('product_name', 'like', "%$term%")->get();
        return $result;
    }
}

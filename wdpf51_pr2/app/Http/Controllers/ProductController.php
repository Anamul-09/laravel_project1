<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cats = Category::get();
        $products = Product::latest()->paginate(5);
        // $products = Product::orderBy('id', 'DESC')->get();
        // echo "<pre>";
        // print_r($data);
        return view('backend/product/index', compact('products', 'cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::get();
        return view('backend.product.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validation = $request->validate([
            'product_name' => 'required ',
            'product_price' => 'required',
            'product_details' => 'required ',
            'product_category' => 'required ',
            'product_stock' => 'required ',
        ]);
        if ($validation) {

            $Product = new Product;
            $Product->product_name = $request->product_name;
            $Product->product_price =  $request->product_price;
            $Product->product_details =  $request->product_details;
            $Product->product_category =  $request->product_category;
            $Product->product_stock =  $request->product_stock;
            $Product->save();
            return redirect('/products')->with('msg', 'Product added successfully');
            // echo "success";
            // echo "success";
        }

        // $Product = new Product;
        // $Product->product_name = $request->product_name;
        // $Product->product_price =  $request->product_price;
        // $Product->product_details =  $request->product_details;
        // $Product->product_category =  $request->product_category;
        // $Product->product_stock =  $request->product_stock;
        // $Product->save();
        // // return redirect('products');
        // echo "success";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
    }
}

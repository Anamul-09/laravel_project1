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
            'product_image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($validation) {

            $Product = new Product;
            $Product->product_name = $request->product_name;
            $Product->product_price =  $request->product_price;
            $Product->product_details =  $request->product_details;
            $Product->product_category =  $request->product_category;
            $Product->product_stock =  $request->product_stock;

            if ($request->product_image) {
                $imageName = time() . '.' . $request->product_image->extension();
                $request->product_image->move(public_path('product_photos'), $imageName);
                $Product->product_image = $imageName;
            } else {
                $Product->product_image = '';
            }

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
        return view('backend.product.single', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $cats = Category::get();
        return view('backend.product.edit', compact('product', 'cats'));
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
        $validation = $request->validate([
            'product_name' => 'required ',
            'product_price' => 'required',
            'product_details' => 'required ',
            'product_category' => 'required ',
            'product_stock' => 'required ',
            'product_image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if ($validation) {

            // $Product = new Product;
            $product->product_name = $request->product_name;
            $product->product_price =  $request->product_price;
            $product->product_details =  $request->product_details;
            $product->product_category =  $request->product_category;
            $product->product_stock =  $request->product_stock;

            if ($request->product_image) {
                $imageName = time() . '.' . $request->product_image->extension();
                $request->product_image->move(public_path('product_photos'), $imageName);
                $product->product_image = $imageName;
            } else {
                $product->product_image = '';
            }

            $product->save();
            return redirect('/products')->with('msg', 'Product added successfully');
            // echo "success";
            // echo "success";
        }
        // echo "hello";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/products')->with('msg', 'Product Deleted successfully');
        // echo "HEllo";
    }
}

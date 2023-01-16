@extends('backend.layouts.app');

@section('content');
<div class="nk-content pr">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1>Entry Product</h1>
                <hr>

                @if($errors->any)
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
                @endif

                <form class="form" method="post" action="{{url('/products')}}" enctype="multipart/form-data" >
                    @csrf
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label" for="product-title">Product name</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" value="{{old('product_name')}}" name="product_name" id="product_name">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="sale-price">Product Details</label>
                            <div class="form-control-wrap">
                                <textarea name="product_details" class="form-control" id="product_details" cols="10" rows="5">{{old('product_details')}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="regular-price">Product Price</label>
                            <div class="form-control-wrap">
                                <input type="number" name="product_price" value="{{old('product_price')}}" class="form-control" id="product_price">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label" for="regular-price">Product Stock</label>
                            <div class="form-control-wrap">
                                <input type="number" value="{{old('product_stock')}}" name="product_stock" class="form-control" id="product_stock">
                            </div>
                        </div>
                    </div>
            
                    <div class="col-12">
                        <div class="form-group">
                            <label class="form-label" for="category">Category</label>
                            <div class="form-control-wrap">
                            
                            <select name="product_category" class="form-control" id="product_category">
                                <option value="" selected disabled>Select one</option>

                                @foreach($cats as $cat)
                                <option {{old('product_category')==$cat->id? 'selected' : ''}} value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                @endforeach

                            </select>
                            </div>
                        </div>
                    </div>
               
                    {{-- <div class="col-12">
                        
                            <div class="form-control-wrap">
                                <input type="file" name="product_image" class="form-control" id="product_image">
                            </div>
                        </div> --}}
                        <br>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add New</span></button>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
@endsection
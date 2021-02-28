@extends('layout')

@section('content')
    <section id="image-header-show-restaurant" >

    </section>
    <section id="create-product" class="create-product">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 margin-tb m-5">
            <div >

                    <h2>Add New Product</h2>
                <div >
                    <button class="btn btn-primary back-button"><a href="{{ route('products.index') }}"> Back</a></button>
                </div>

            </div>


            @if ($errors->any())
            <div class="alert alert-danger">
                <p>Whoops!</p> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <p class="add-product-tag">Food Name:</p>
            <input type="text" name="food_name" class="form-control" placeholder="Name">
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <p class="add-product-tag">Size:</p>
            <textarea class="form-control" style="height:150px" name="size" placeholder="Detail"></textarea>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <p class="add-product-tag">Price:</p>
                <textarea class="form-control" style="height:150px" name="price" placeholder="Detail"></textarea>
                </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="selectRestaurant">Select a restaurant</label>
                <select name="restaurant_id" class="form-select" aria-label="Default select example">
                    @foreach ($restaurants as $restaurant)
                        <option value="{{$restaurant->id}}">{{$restaurant->restaurant_name}}</option>
                    @endforeach
                </select>
                </div>
                </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
       
        </div>
    </section>
@endsection

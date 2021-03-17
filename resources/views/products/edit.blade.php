@extends('layout')
@section('content')
    <section id="image-header-show-restaurant" class="">

    </section>
    <section id="edit-product" class="edit-product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h2>Edit Product</h2>
                    </div>

                </div>
            </div>
            {{-- error handling --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- edit form --}}
            <form id="edit-product-form" class="edit-product-form" action="{{ route('products.update', $product->id) }}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p class="edit-product-tag">Food Name:</p>
                            <input type="text" name="food_name" value="{{ $product->food_name }}" class="form-control"
                                placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p class="edit-product-tag">Size:</p>
                            <textarea class="form-control" name="size"
                                placeholder="Detail">{{ $product->size }}</textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <p class="edit-product-tag">Price:</p>
                            <input type="text" name="price" value="{{ $product->price }}" class="form-control"
                                placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 ">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            <div>
                <button class="btn btn-primary back-button">
                    <a href="{{ route('products.index') }}"> Back</a>
                </button>
            </div>
        </div>

    </section>
@endsection

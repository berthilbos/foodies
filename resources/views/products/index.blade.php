@extends('layout')
@section('content')
    <section id="image-header">

    </section>
    <section id="create-product" class="create-product">
        <div class="container">
            <div class="">

                {{-- <h2>Products Management</h2> --}}

                <div>
                    <button class="btn btn-success"><a href="{{ route('products.create') }}"> Create New
                            Product</a></button>
                </div>


                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
            </div>
        </div>
        @endif
    </section>

    <section id="product-table" class="product-table">
        <div class="container">
            <table class="table table-bordered">
                <tr>
                    <th>Number</th>
                    <th>Food Name</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
                @foreach ($products as $key => $product)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $product->food_name }}</td>
                        <td>{{ $product->size }}</td>
                        <td>{{ $product->price }}</td>
                        <td>
                            {{-- @if (!empty($product->getRoleNames()))
                @foreach ($product->getRoleNames() as $v)
                <label class="badge badge-success">{{ $v }}</label>
                @endforeach
                @endif --}}
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>
                            @hasanyrole('Restaurant_Owner|Admin')

                            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id], 'class' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            @endhasrole
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </section>
    {{-- {!! $products->render() !!} --}}
    {


@endsection

@extends('layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb m-5">
<div class="pull-left">
<h2>Add New Restaurant</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('restaurants.index') }}"> Back</a>
</div>
</div>
</div>
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
<form action="{{ route('restaurants.store') }}" method="POST">
@csrf
<div class="row" style="color: black">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Restaurant Name:</strong>
<input type="text" name="restaurant_name" class="form-control" placeholder="Name">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Restaurant Email:</strong>
<input type="email" name="email" class="form-control" placeholder="email">
</div>
</div>


<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Restaurant street:</strong>
    <input type="text" name="street" class="form-control" placeholder="street">
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Restaurant House number:</strong>
        <input type="text" name="house_number" class="form-control" placeholder="house_number">
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Restaurant House number addition:</strong>
            <input type="text" name="house_number_addition" class="form-control" placeholder="house_number_addition">
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Restaurant postal code:</strong>
            <input type="text" name="postal_code" class="form-control" placeholder="postal_code">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Restaurant city:</strong>
                <input type="text" name="city" class="form-control" placeholder="city">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Restaurant phone number:</strong>
                <input type="text" name="phone" class="form-control" placeholder="phone">w
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Opening Hours:</strong>
                <input type="time" id="start" name="start" required>
               <input type="time" id="stop" name="stop" required>
            </div>
        </div>


<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>

@endsection

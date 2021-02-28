@extends('layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb m-5">
<div class="pull-left">
<h2>Restaurants Management</h2>
</div>
<div class="pull-right">
<a class="btn btn-success" href="{{ route('restaurants.create') }}"> Create New User</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered" style="color: rgb(5, 5, 5)">
<tr>
<th>No</th>
<th>Restaurant Name</th>
<th>Email</th>
<th>Street</th>
<th>House Number</th>
<th>House Number Addition</th>
<th>Postal Code</th>
<th>City</th>
<th>Phone</th>
<th>Roles</th>

</tr>
@foreach ($restaurants as $key => $restaurant)
<tr>
<td>{{ ++$i }}</td>
<td>{{ $restaurant->restaurant_name }}</td>
<td>{{ $restaurant->email }}</td>
<td>{{ $restaurant->street }}</td>
<td>{{ $restaurant->house_number }}</td>
<td>{{ $restaurant->house_number_addition }}</td>
<td>{{ $restaurant->postal_code }}</td>
<td>{{ $restaurant->city }}</td>
<td>{{ $restaurant->phone }}</td>

<td>
<a class="btn btn-info" href="{{ route('restaurants.show',$restaurant->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('restaurants.edit',$restaurant->id) }}">Edit</a>
{!! Form::open(['method' => 'DELETE','route' => ['restaurants.destroy', $restaurant->id],'style'=>'display:inline']) !!}
{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
</td>
</tr>
@endforeach
</table>
{!! $restaurants->render() !!}

@endsection

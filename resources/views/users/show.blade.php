@extends('layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb m-5">
<div class="pull-left" style="margin: 200px">
<h2> Show User</h2>
</div>
@can('role-list')
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
</div>
</div>
</div>
<div class="row" style="padding: 100px; color:black">
<div class="col-xs-12 col-sm-12 col-md-12" >
<div class="form-group">
<strong>First Name:</strong>
{{ $user->first_name }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Last Name:</strong>
    {{ $user->last_name }}
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Address</strong>
        {{ $user->street }}
        {{ $user->house_number }}
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Mobile Number:</strong>
            {{ $user->phone }}
            </div>
            </div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Email:</strong>
{{ $user->email }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Roles:</strong>
@if(!empty($user->getRoleNames()))
@foreach($user->getRoleNames() as $v)
<label class="badge badge-success">{{ $v }}</label>
@endforeach
@endif
</div>
</div>
</div>
@endcan
@cannot('role-list')
<h1>Sorry My friend you don't have a permission to see this page!!!</h1>
@endcannot
@endsection

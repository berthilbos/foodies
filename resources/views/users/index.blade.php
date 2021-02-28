@extends('layout')
@section('content')
<div class="row" >
<div class="col-lg-12 margin-tb m-5">
<div class="pull-left" style="margin: 200px">
<h2>Users Management</h2>
</div>
<div class="pull-right">
@can('role-list')
<a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered" style="color: black">
<tr>
<th>No</th>
<th>Name</th>
<th>Email</th>
<th>Roles</th>
<th width="280px">Action</th>
</tr>
@foreach ($data as $key => $user)
<tr>
<td >{{ ++$i }}</td>
<td>{{ $user->first_name }}</td>
<td>{{ $user->email }}</td>
{{-- <td>{{ $user->status }}</td>
<td>{{ $user->roles_name }}</td> --}}
<td>
@if(!empty($user->getRoleNames()))
@foreach($user->getRoleNames() as $v)
<label class="badge badge-success">{{ $v }}</label>
@endforeach
@endif
</td>
<td>
<a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
</td>
</tr>
@endforeach
</table>
{!! $data->render() !!}
@endcan
@cannot('role-list')
<h1>You don't have permission to see this page!!!</h1>
@endcannot

@endsection

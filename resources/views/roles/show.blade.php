@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb m-5">
            <div class="pull-left" style="margin: 200px">
                <h2> Show Role</h2>
            </div>
            @can('role-list')
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                </div>
            </div>
        </div>
        <div class="row" style="color: black">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $role->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Permissions:</strong>
                    @if (!empty($rolePermissions))
                        @foreach ($rolePermissions as $v)
                            <label class="label label-success">{{ $v->name }},</label>
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

@extends('layout.master')
@section('title','show all Roles')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="card card-body bg-light">
            <table class="table table-bordered table-striped table-dark">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                <tr>
                    <td>{{$role->id}}</td>
                    <td>{{$role->name}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

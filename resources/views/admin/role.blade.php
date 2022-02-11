@extends('layout.master')
@section('title','Role creating')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="card card-body bg-light mt-4">
        <form method="Post">
            <div class="form-group">
                @foreach($errors->all() as $error )
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                @if(session('status'))
                    <p class="alert alert-success">{{session('status')}}</p>
                    @endif
                {{csrf_field()}}
                <legend class="mt-3">Insert A Role</legend>
                <input type="text" class="form-control mt-2" id="username" name="name" placeholder="Role Name">

            </div>
            <button type="submit" class="btn btn-info mt-3">Inserted</button>
        </form>
        </div>
    </div>
    @endsection()

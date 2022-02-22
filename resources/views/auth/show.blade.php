@extends('layout.master')
@section('title','show all user')
@section('content')
    <div class="container col-md-8 col-md-offset-2 mt-3">
        <div class="well">

            <table class="table table-bordered table-striped">
                <thead class="table table-dark">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                </thead>
                <tbody>
                @foreach($user as $users)
                    <tr class="table-info">
                        <td>{{$users->id}}</td>
                        <td><a href="{{action('App\Http\Controllers\Admin\User@edit',$users->id)}}">{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <!--marquee direction="right" behavior="alternate">
        <img width="200px" src="{{asset('images/chef.jpg')}}";>

        <img width="200px" src="{{asset('images/woman.jpg')}}";>
        <img width="200px" height="200px" src="{{asset('images/man.jpg')}}";>
    </marquee-->

@endsection

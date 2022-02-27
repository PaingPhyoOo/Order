@extends('layout.master')
@section('title','Editing User')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-2 mt-4">
            <div class="card card-body bg-light">
                <form class="mr-4" method="post">
                    @if(session('status'))
                        <p class="alert alert-success">{{session('status')}}</p>
                    @endif
                    {{csrf_field()}}
                    <div class="form-group mt-2">
                        <label for="User Name" style="font-weight: bold">User Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
                    </div>
                    <div class="form-group mt-2" >
                        <label style="font-weight: bold" for="Email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}">
                    </div>
                    <div class="form-group mt-2">
                        <select class="form-control" name="role[]" multiple>
                            @foreach($role as $roles)
                                <option value="{{$roles->name}}"
                                        @if(in_array($roles->name,$SelectedRole))
                                        selected="selected"
                                    @endif
                                >
                                    {{$roles->name}}</option>


                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-info pull-right mt-2">Edit</button>
                    <div class="clearfix"></div>

                </form>

            </div>
        </div>






@endsection

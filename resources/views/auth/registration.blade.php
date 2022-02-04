<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

<!-- font awesome  -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
<script>
    function password_show_hide() {
        let x = document.getElementById("password");
        let show_eye = document.getElementById("show_eye");
        let hide_eye = document.getElementById("hide_eye");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
            x.type = "text";
            show_eye.style.display = "none";
            hide_eye.style.display = "block";
        } else {
            x.type = "password";
            show_eye.style.display = "block";
            hide_eye.style.display = "none";
        }
    }
    function myFunction() {
        let x = document.getElementById("password1");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }

</script>
@extends('layout.master')
@section('title','Register Page')
@section('content')

    <div class=" container col-md-8 mt-4 col-md-offset-2">
        <div class="card card-body bg-light">
            <form method="post"  action="{{ route('register.custom') }}">
                <legend>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-lock" width="25" height="30" class="svg-inline--fa fa-user-lock fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M224 256A128 128 0 1 0 96 128a128 128 0 0 0 128 128zm96 64a63.08 63.08 0 0 1 8.1-30.5c-4.8-.5-9.5-1.5-14.5-1.5h-16.7a174.08 174.08 0 0 1-145.8 0h-16.7A134.43 134.43 0 0 0 0 422.4V464a48 48 0 0 0 48 48h280.9a63.54 63.54 0 0 1-8.9-32zm288-32h-32v-80a80 80 0 0 0-160 0v80h-32a32 32 0 0 0-32 32v160a32 32 0 0 0 32 32h224a32 32 0 0 0 32-32V320a32 32 0 0 0-32-32zM496 432a32 32 0 1 1 32-32 32 32 0 0 1-32 32zm32-144h-64v-80a32 32 0 0 1 64 0z"></path></svg>
                    Coder register</legend>
                @foreach($errors->all() as $answer)
                    <p class="alert alert-danger">{{$answer}}</p>
                @endforeach
                @if(session('status'))
                    <p class="alert alert-success">{{session('status')}}</p>
                @endif
                {{csrf_field()}}
                <div class="form-group mb-2">
                    <div class="input-group">
                        <input type="text" class="form-control" id="username" name="name">
                        <div class="input-group-text">Name</div>
                    </div>

                    <div class="form-group mt-2">
                        <div class="input-group">
                            <input type="email" class="form-control" id="email" name="email">
                            <div class="input-group-text">Email</div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="input-group">

                            <input type="password" class="form-control" id="password" name="password" placeholder="password">

                            <div class="input-group-append">

                <span class="input-group-text" onclick="password_show_hide();">
                  <i class="fas fa-eye" id="show_eye"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                </span>
                            </div>
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="input-group">


                            <input type="password" class="form-control" id="password1" name="password_confirmation">
                            <span class="input-group-text">
                            Confirm Password
                        </span>
                        </div>
                        <input type="checkbox" onclick="myFunction()">Show Password


                    </div>


                    <!--div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Check me out
                        </label>
                    </div-->
                    <button type="submit" class="btn btn-info mt-2">Register</button>
                </div>
            </form>


        </div>
    </div>



@endsection



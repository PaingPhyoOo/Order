<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css
">
@extends('layout.master')
@section('title','Ordering Cake Page')
@section('content')
    <div class="container mt-4 col-md-8 col-md-offset-1">
        <div class=" card card-body bg-dark">
            <form method="post">
            <div class="form-group mb-2">
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                {{csrf_field()}}
                    @if(session('status'))
                        <p class="alert alert-success">{{session('status')}}</p>
                        @endif
                <legend style="color: rebeccapurple"><i class="fa-solid fa-cake-candles"></i>&nbspCake</legend>
                <div class="input-group">
                    <input type="text" class="form-control" id="username" name="name">
                    <div class="input-group-text">Name</div>
                </div>
                <div class="form-group mt-2">
                    <div class="input-group">
                        <input type="text" class="form-control" id="username" name="telephone">
                        <div class="input-group-text">Tel_No</div>
                    </div>

                </div>
                <div class="form-group mt-2">
                    <div class="input-group">
                        <input type="text" class="form-control" id="username" name="address" placeholder="Address">
                        <div class="input-group-text">Address</div>
                    </div>

                </div>
                <div class="form-group mt-2">
                    <div class="input-group">
                        <input type="text" class="form-control" id="username" name="type_of_cake" placeholder="Cake's Type">
                        <div class="input-group-text">Cake's type</div>
                    </div>

                </div>
                <button type="submit" class="btn btn-info mt-2">Order</button>
    </div>
            </form>
        </div>
    </div>

@endsection

@extends('layout.master')
@section('title','Home')
@section('content')

    <style>

        .card-title{
            text-decoration: underline;
        }
        img{
            width: 50px;
            height: 50px;
        }

        h1 {
            background-image: url(https://media.giphy.com/media/26BROrSHlmyzzHf3i/giphy.gif);
            background-size: cover;
            color: transparent;
            -webkit-background-clip: text;
            text-transform: uppercase;
            text-align: center;
            font-size: 46px;
            text-indent: 20px;
            line-height: .75;
            margin: 20px 0;
        }
    </style>

    <div class="fullscreen">
        <h1>Welcome To My Pleasure(Online shop)Page</h1><br>
    </div>

@endsection


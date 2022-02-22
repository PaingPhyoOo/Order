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
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card  border-warning " style="width:15rem;font-family: sans-serif;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

                    <img style="width: 210px;height: 170px;margin: 5px 10px" src="{{asset('images/anni cake.jpg')}}" alt="...">
                    <div class="card-body" style="color: rgb(171,163,9)">
                        <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                        <div style="text-align: center;">
                            <div class="card-text" style="font-size: medium">Type = Anniversary Cake
                            </div>

                            <div class="card-text" style="font-size: medium">
                                Size = 12 inches </div>
                            <div class="card-text" style="font-size: medium">Price = 18000kyats</div>



                        </div>

                    </div>

                </div>

            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection


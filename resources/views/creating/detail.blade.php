@extends('layout.master')
@section('title','Home')
@section('content')

    <style>

        .card-title{
            text-decoration: underline;
        }
        img{
            width: 70px;
            height: 70px;
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
    <h3 style="color:rgb(171,163,9) ">Fruits cake</h3>
    <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin: 0 10px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

        <img style="width: 217px;height: 170px;margin: 10px 19px" src="{{asset('images/f10.jpg')}}" alt="...">
        <div class="card-body" style="color: rgb(171,163,9)">
            <p style="font-size: large;text-align: center" class="card-title">Cake</p>
            <div style="text-align: center;">
                <div class="card-text" style="font-size: medium">Type = Fruits Cake
                </div>

                <div class="card-text" style="font-size: medium">
                    Size = 12 inches </div>
                <div class="card-text" style="font-size: medium">Price = 18000kyats</div>



            </div>

        </div>

    </div>

<h3 style="text-indent: 10px;color: blue">Related Cake</h3>
    <div class="row">
    <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin: 0 10px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

        <img style="width: 217px;height: 170px;margin: 10px 5px;" src="{{asset('images/f3.jpg')}}" alt="...">
        <div class="card-body" style="color: rgb(171,163,9)">
            <p style="font-size: large;text-align: center" class="card-title">Cake</p>
            <div style="text-align: center;">
                <div class="card-text" style="font-size: medium">Type = Fruits Cake
                </div>

                <div class="card-text" style="font-size: medium">
                    Size = 12 inches </div>
                <div class="card-text" style="font-size: medium">Price = 18000kyats</div>



            </div>

        </div>

    </div>

        <div class="card border-warning " style="width:16rem;font-family: sans-serif;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 160px;margin: 10px 5px " src="{{asset('images/f7.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(171,163,9)">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Fruits Cake
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 10 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 15000kyats</div>



                </div>

            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 10px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/f1.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(171,163,9)">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Fruits Cake
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 10 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 10000kyats</div>



                </div>

            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/f2.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(171,163,9)">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Fruits Cake
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 10 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 4000kyats</div>



                </div>

            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 10px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/f8.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(171,163,9)">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Fruits Cake
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 10 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 15000kyats</div>



                </div>

            </div>

        </div>
    </div>
@endsection


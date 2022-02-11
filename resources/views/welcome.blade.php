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



    <div class="card bg-light border-info" style="height: 15rem;font-family:  sans-serif;font-size:xx-large; ">
        <div class="card-body">
            <p class="card-title">About of my web pages</p>
            <h3 class="card-subtitle text-muted">My web page are built up with Three pages and one dropdown.They are</h3>
            <ol class="card-text text-muted">
                <li style="font-size: medium">Home page is what you can see first page</li>
                <li style="font-size: medium">Categories Page </li>
                <li style="font-size: medium">Details page and </li>

                <li style="font-size: medium">The last one is member dropdown menu</li>
            </ol>
        </div>
    </div>

    <div class="card bg-light mt-2 border-info" style="height: 33rem;font-family: sans-serif;font-size:xx-large;">
        <div class="card-body">
            <p class="card-title">Categories</p>
            <h3 class="card-subtitle text-muted">
            Two Categories are included in categories page(My Online Shop).

            </h3>
            <ol class="card-text text-muted" style="font-size: medium">


            <li>Cake</li>
            <li>Book</li>
            </ol>
            <h4 class="text-muted">For Instance:</h4>
            <h4 class="text-muted">Cake</h4>
            <table class="table table-bordered">
                <thead class="table-info">
                <tr  style="font-size: small">
                    <th>Anniversary Cake</th>
                    <th> Wedding Cake</th>
                    <th> Birthday Cake</th>
                </tr>
                </thead>
                <tbody class="table-success">
                <tr>
                    <td><img src="{{asset('images/anni cake.jpg')}}" alt="cake1"></td>
                    <td><img src="{{asset('images/anni cake1.jpg')}}" alt="cake2"></td>
                    <td><img src="{{asset('images/birthday cake.jpg')}}" alt="cake3"></td>

                </tr>
                </tbody>
            </table>
            <h4 class="text-muted">Book</h4>
            <table class="table table-bordered">
                <thead class="table-info">
                <tr  style="font-size: small">
                    <th>Romance book</th>
                    <th> Comic book</th>
                    <th> Biography book</th>
                </tr>
                </thead>
                <tbody class="table-success">
                <tr>
                    <td><img src="{{asset('images/romance.jpg')}}" alt="cake1"></td>
                    <td><img src="{{asset('images/comic.jpg')}}" alt="cake2"></td>
                    <td><img src="{{asset('images/biography.jpg')}}" alt="cake3"></td>

                </tr>
                </tbody>

            </table>

        </div>
    </div>
    <p style="text-indent: 20px;font-size:xx-large;font-weight: normal;text-decoration: underline">Details</p>

    <div class="container row">
    <div class="card border-warning" style="width:15rem;font-family: sans-serif;font-size:xx-large;height: 20rem;background-color: rgb(1,3,51);">

        <img style="width: 100px;height: 120px;margin-top: 5px" src="{{asset('images/birthday cake.jpg')}}" alt="...">
        <div class="card-body" style="color: rgb(171,163,9);">
        <p style="font-size: large;text-align: center;" class="card-title">Cake</p>
            <div style="text-align: center;">
        <div class="card-text" style="font-size: medium">Price =15000kyats
        </div>
                <div class="card-text" style="font-size: medium">Type = Birthday Cake
                </div>
                <div class="card-text" style="font-size: medium">Size = 10 inches
                </div>


            </div>

        </div>
    </div>

        <div class="card  offset-1 border-warning " style="width:15rem;font-family: sans-serif;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 100px;height: 120px;margin-top: 5px" src="{{asset('images/comic.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(227,112,11)">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name = Thief
                    </div>

                    <div class="card-text" style="font-size: medium">Price = 5000kyats</div>
                    <div class="card-text" style="font-size: medium">
                        Author = A Kyi Taw</div>
                    <div class="card-text" style="font-size: medium">
                        </div>


                </div>

            </div>

        </div>
    </div>

    <div class="card bg-light mt-2 border-info" style="height: 10rem;font-family: sans-serif;font-size:xx-large;">
        <div class="card-body">
            <p class="card-title">Member Dropdown Menu</p>
            <h4 class="card-text text-muted">

            Member Dropdown menu can be used only <strong>admin</strong>.Actually,This member(dropdown menu) have two item(login,register).
Admin have to need one created account and using it to login.Only admin can be checked who bought what .

            </h4>
        </div>
    </div>

@endsection



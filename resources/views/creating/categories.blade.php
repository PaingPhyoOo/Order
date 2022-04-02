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
        <h1>Welcome To Pleasures(Cake and Book)OnlineShop Page</h1><br>
    </div>

    <h3 style="text-indent: 10px;text-decoration: underline;color:rgb(67, 173, 5) ">Available Cake</h3>
    <img src="{{asset('images/anni cake.jpg')}}">

    <img src="{{asset('images/ce1.jpg')}}" >
    <img src="{{asset('images/birthday cake.jpg')}}">
    <img src="{{asset('images/fun1.jpg')}}" >

    <img src="{{asset('images/f6.jpg')}}">
    <img src="{{asset('images/f1.jpg')}}">
    <img src="{{asset('images/ch3.jpg')}}">
    <img src="{{asset('images/fun2.jpg')}}">

    <img src="{{asset('images/f5.jpg')}}">
    <img src="{{asset('images/f2.jpg')}}">
    <img src="{{asset('images/ch4.jpg')}}">
    <img src="{{asset('images/fun3.jpg')}}">

    <img src="{{asset('images/f8.jpg')}}">
    <img src="{{asset('images/f3.jpg')}}">
    <img src="{{asset('images/ch2.jpg')}}">
    <img src="{{asset('images/fun4.jpg')}}">

    <img src="{{asset('images/f7.jpg')}}">
    <img src="{{asset('images/ch5.jpg')}}">
    <img src="{{asset('images/add5.jpg')}}">
    <img src="{{asset('images/add4.jpg')}}">
    <img src="{{asset('images/add3.jpg')}}">


    <h3 style="text-indent: 10px;text-decoration: underline;color:rgb(67, 173, 5)">Available Book</h3>
    <img src="{{asset('images/romance.jpg')}}" alt="book1">
    <img src="{{asset('images/b1.jpg')}}" alt="book2">
    <img src="{{asset('images/biography.jpg')}}" alt="book3">
    <img src="{{asset('images/d1.jpg')}}" alt="book4">
    <img src="{{asset('images/e1.jpg')}}" alt="book5">

    <img src="{{asset('images/a1.jpg')}}" alt="book1">
    <img src="{{asset('images/b2.jpg')}}" alt="book2">
    <img src="{{asset('images/c1.jpg')}}" alt="book3">
    <img src="{{asset('images/d2.jpg')}}" alt="book4">
    <img src="{{asset('images/e2.jpg')}}" alt="book5">

    <img src="{{asset('images/a6.jpg')}}" alt="book1">
    <img src="{{asset('images/b3.jpg')}}" alt="book2">
    <img src="{{asset('images/c2.jpg')}}" alt="book3">
    <img src="{{asset('images/d3.jpg')}}" alt="book4">
    <img src="{{asset('images/e3.jpg')}}" alt="book5">

    <img src="{{asset('images/a5.jpg')}}" alt="book1">
    <img src="{{asset('images/b9.jpg')}}" alt="book2">
    <img src="{{asset('images/c4.jpg')}}" alt="book3">
    <img src="{{asset('images/e4.jpg')}}" alt="book4">
    <img src="{{asset('images/add2.jpg')}}" alt="book5">


    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="card bg-light mt-2" style="height: 23rem;font-family: sans-serif;font-size:xx-large;">
        <div class="card-body">
            <h4 class="text-muted">Cake</h4>
            <table class="table table-bordered">
                <thead class="table-info">
                <tr  style="font-size: small">
                    <th>Fruits Cake</th>

                    <th> Crepe Cake</th>
                    <th> Chocolate Cake</th>
                    <th>Funfetti Cake</th
                </tr>
                </thead>
                <tbody class="table-success">
                <tr>
                    <td><img src="{{asset('images/anni cake.jpg')}}" alt="cake1"></td>

                    <td><img src="{{asset('images/ce1.jpg')}}" alt="cake3"></td>
                    <td><img src="{{asset('images/birthday cake.jpg')}}" alt="cake3"></td>
                    <td><img src="{{asset('images/fun1.jpg')}}" alt="cake3"></td>

                </tr>
                <tr>
                    <td><img src="{{asset('images/f5.jpg')}}" alt="cake1"></td>
                    <td><img src="{{asset('images/f1.jpg')}}" alt="cake2"></td>
                    <td><img src="{{asset('images/ch1.jpg')}}" alt="cake3"></td>
                    <td><img src="{{asset('images/fun2.jpg')}}" alt="cake3"></td>

                </tr>
                <tr>
                    <td><img src="{{asset('images/f6.jpg')}}" alt="cake1"></td>
                    <td><img src="{{asset('images/f2.jpg')}}" alt="cake2"></td>
                    <td><img src="{{asset('images/ch2.jpg')}}" alt="cake3"></td>
                    <td><img src="{{asset('images/fun3.jpg')}}" alt="cake3"></td>

                </tr>
                </tbody>
            </table>
        </div>
    </div>
        <div class="card bg-light mt-2" style="height: 23rem;font-family: sans-serif;font-size:xx-large;">
            <div class="card-body">

            <h4 class="text-muted">Book</h4>
            <table class="table table-bordered">
                <thead class="table-info">
                <tr  style="font-size: small">
                    <th>Novel</th>
                    <th> Cartoon book</th>
                    <th>Biography Book</th>
                    <th>Stories For Children</th>
                    <th>Poem Book</th>

                </tr>
                </thead>
                <tbody class="table-success">
                <tr>
                    <td><img src="{{asset('images/romance.jpg')}}" alt="book1"></td>
                    <td><img src="{{asset('images/b1.jpg')}}" alt="book2"></td>
                    <td><img src="{{asset('images/biography.jpg')}}" alt="book3"></td>
                    <td><img src="{{asset('images/d1.jpg')}}" alt="book4"></td>
                    <td><img src="{{asset('images/e1.jpg')}}" alt="book5"></td>

                <tr>
                    <td><img src="{{asset('images/a1.jpg')}}" alt="book1"></td>
                    <td><img src="{{asset('images/b2.jpg')}}" alt="book2"></td>
                    <td><img src="{{asset('images/c3.jpg')}}" alt="book3"></td>
                    <td><img src="{{asset('images/d2.jpg')}}" alt="book4"></td>
                    <td><img src="{{asset('images/e6.jpg')}}" alt="book5"></td>

                </tr>
                <tr>
                    <td><img src="{{asset('images/a2.jpg')}}" alt="book1"></td>
                    <td><img src="{{asset('images/b3.jpg')}}" alt="book2"></td>
                    <td><img src="{{asset('images/c2.jpg')}}" alt="book3"></td>
                    <td><img src="{{asset('images/d3.jpg')}}" alt="book4"></td>
                    <td><img src="{{asset('images/e5.jpg')}}" alt="book5"></td>

                </tr>
                </tbody>

            </table>

        </div>
    </div>


@endsection

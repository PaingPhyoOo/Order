
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css
    ">

@extends('layout.master')
@section('title','Home')
@section('content')

    <style>
        #a{
            color:rgb(227,112,11);
            animation-name:cc;
            animation-delay: 4s;
            animation-duration: 10s;}

            @keyframes cc{
                0%{color: royalblue;}
                25%{color: dimgrey;}
                50%{color: cadetblue;
                }
                75%{
                    color:rebeccapurple;
                }
                100%{
                    color: palevioletred;
                }
            }
        #b{
            color:rgb(171,163,9);
            animation-name:cake;

            animation-duration: 10s;}

        @keyframes cake{
            0%{color: plum;}
            25%{color: rebeccapurple;}
            50%{color: cadetblue;
            }
            75%{
                color:lightsteelblue;
            }
            100%{
                color: darkolivegreen;
            }

        }
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
        <h1>Welcome To My Pleasure(Online shop)Page</h1>
    </div><div class="d-flex justify-content-center">
        <a  href="{{url('order/cake')}}"><button class="btn btn-primary">For Cake Order</button></a>

        <a style="margin: 0 0 0 10px" href="{{url('order/book')}}"><button class="btn btn-primary">For Book Order</button></a>

    </div>

    <h3 id="b" style="color:rgb(171,163,9) ">Fruits Cake</h3>






    <div  id="b" class="row">
    <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin: 0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

        <img style="width: 217px;height: 170px;margin: 10px 3px" src="{{asset('images/f10.jpg')}}" alt="...">
        <div class="card-body" >
            <p style="font-size: large;text-align: center" class="card-title">Cake</p>
            <div style="text-align: center;">
                <div class="card-text" style="font-size: medium">Type = Fruits Cake(1)
                </div>

                <div class="card-text" style="font-size: medium">
                    Size = 12 inches </div>
                <div class="card-text" style="font-size: medium">Price = 18000kyats</div>



            </div>

        </div>

    </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin: 0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 3px" src="{{asset('images/f4.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Fruits Cake(2)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 12 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 18000kyats</div>



                </div>

            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin: 0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 3px" src="{{asset('images/f5.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Fruits Cake(3)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 12 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 18000kyats</div>



                </div>

            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin: 0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 3px" src="{{asset('images/f6.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Fruits Cake(4)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 12 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 18000kyats</div>



                </div>

            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin: 0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 3px" src="{{asset('images/f9.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Fruits Cake(5)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 12 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 18000kyats</div>



                </div>

            </div>

        </div>
</div>
<h3 style="text-indent: 10px;margin: 10px 0 10px 0;color:rgb(171,163,9)">Fruits Cake</h3>
    <div class="row">
    <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin: 0 10px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

        <img style="width: 217px;height: 170px;margin: 10px 5px;" src="{{asset('images/f3.jpg')}}" alt="...">
        <div class="card-body" style="color: rgb(171,163,9)">
            <p style="font-size: large;text-align: center" class="card-title">Cake</p>
            <div style="text-align: center;">
                <div class="card-text" style="font-size: medium">Type = Fruits Cake(6)
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
                    <div class="card-text" style="font-size: medium">Type = Fruits Cake(7)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 10 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 15000kyats</div>



                </div>

            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 10px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/ch1.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(171,163,9)">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Fruits Cake(8)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 10 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 15000kyats</div>



                </div>

            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/f2.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(171,163,9)">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Fruits Cake(9)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 10 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 5000kyats</div>



                </div>

            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 10px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/f8.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(171,163,9)">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Fruits Cake(10)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 10 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 15000kyats</div>



                </div>

            </div>

        </div>

    </div>
    <h3 id="b" style="margin: 10px  10px ;color: rgb(171,163,9)">Crepe Cake</h3>
    <div id="b" class="row">
        <div class="card  border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/ce1.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Crepe Cake(1)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 4 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 5000kyats</div>



                </div>

            </div>

        </div>
        <div class="card  border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/f1.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Crepe Cake(2)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 4 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 5500kyats</div>



                </div>

            </div>

        </div>
        <div class="card  border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/f2.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Crepe Cake(3)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 3 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 5000kyats</div>



                </div>

            </div>

        </div>
        <div class="card  border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/ce2.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Crepe Cake(4)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 10 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 12000kyats</div>



                </div>

            </div>

        </div>
        <div class="card  border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/ce3.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Crepe Cake(5)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 3 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 5000kyats</div>



                </div>

            </div>

        </div>

    </div>
    <h3 style="color: rgb(171,163,9);margin: 10px 0 10px 0;">Chocolate Cake</h3>
    <div class="row">
        <div class="card  border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/ch2.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(171,163,9)">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Chocolate Cake(1)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 12 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 17000kyats</div>



                </div>

            </div>

        </div>
        <div class="card  border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/ch3.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(171,163,9)">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Chocolate Cake(2)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 12 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 16000kyats</div>



                </div>

            </div>

        </div>
        <div class="card  border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/ch4.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(171,163,9)">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Chocolate Cake(3)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 13 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 18000kyats</div>



                </div>

            </div>

        </div>
        <div class="card  border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/ch5.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(171,163,9)">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Chocolate Cake(4)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 12 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 15000kyats</div>



                </div>

            </div>

        </div>
        <div class="card  border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/ch6.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(171,163,9)">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Chocolate Cake(5)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 12 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 15000kyats</div>



                </div>

            </div>

        </div>

    </div>
    <h3 id="b" style="color: rgb(171,163,9);margin: 10px 0 10px 0;">Funfetti Cake</h3>
    <div id="b" class="row">
        <div class="card  border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/fun1.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Funfetti Cake(1)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 12 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 15000kyats</div>



                </div>

            </div>

        </div>
        <div class="card  border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/fun2.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Funfetti Cake(2)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 12 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 15000kyats</div>



                </div>

            </div>

        </div>
        <div class="card  border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/fun3.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Funfetti Cake(3)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 12 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 15000kyats</div>



                </div>

            </div>

        </div>
        <div class="card  border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/fun4.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Funfetti Cake(4)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 12 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 15000kyats</div>



                </div>

            </div>

        </div>
        <div class="card  border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 20rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 10px 5px " src="{{asset('images/fun5.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Cake</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Type = Funfetti Cake(5)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Size = 12 inches </div>
                    <div class="card-text" style="font-size: medium">Price = 15000kyats</div>



                </div>

            </div>

        </div>

    </div>

    <h3 id="a" style ="margin: 10px 0 10px 0;">Novel Book</h3>
    <div id="a" class="row">
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/comic.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name = Thief
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Author = A Kyi Taw</div>
                    <div class="card-text" style="font-size: medium">Price = 5000kyats</div>



                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/a1.jpg')}}" alt="...">
            <div class="card-body" >
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name = A Kyain Thu Htee
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Author = Thoe Saung</div>
                    <div class="card-text" style="font-size: medium">Price = 5500kyats</div>



                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/a6.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name = Kyar Taw The laee Maung Sa Kar
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Author = Juee</div>
                    <div class="card-text" style="font-size: medium">Price = 5500kyats</div>



                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/a2.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name = still call 'Khaing'
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Author = Phone Naing</div>
                    <div class="card-text" style="font-size: medium">Price = 7000kyats</div>



                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/a5.jpg')}}" alt="...">
            <div class="card-body" >
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name = Thu Pone Eain
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Author = Mahar Swe</div>
                    <div class="card-text" style="font-size: medium">Price = 5000kyats</div>



                </div>


            </div>

        </div>
    </div>

    <h3 style ="margin: 10px 0 10px 0;color: rgb(227,112,11)">Cartoon Book</h3>
    <div class="row">
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/b1.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(227,112,11)">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name = Par Layyar Maung Tint
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Author = Ko Shwe Htoo</div>
                    <div class="card-text" style="font-size: medium">Price = 3000kyats</div>



                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/b2.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(227,112,11)">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name = Taryar Pwa Gyi(1)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Author = Veww</div>
                    <div class="card-text" style="font-size: medium">Price = 3000kyats</div>



                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/b3.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(227,112,11)">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name = Taryar Pwa Gyi(2)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Author = Veww</div>
                    <div class="card-text" style="font-size: medium">Price = 3000kyats</div>



                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/b4.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(227,112,11)">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name = Taryar Pwa Gyi(3)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Author = Veww</div>
                    <div class="card-text" style="font-size: medium">Price = 3000kyats</div>



                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/b5.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(227,112,11)">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name = Moon Angel(Myint Myat Thuya)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Author = Za Veww Min</div>
                    <div class="card-text" style="font-size: medium">Price = 3000kyats</div>



                </div>


            </div>

        </div>
    </div>
    <h3 id="a" style ="margin: 10px 0 10px 0;">Biography Book</h3>
    <div id="a" class="row">
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/c1.jpg')}}" alt="...">
            <div class="card-body" >
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name =Alexander Graham Bell
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Translator = Moe Set Yine</div>
                    <div class="card-text" style="font-size: medium">Price = 5000kyats</div>



                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/biography.jpg')}}" alt="...">
            <div class="card-body" >
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name = Mesut Ozil
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Translator = Paing Nyein Oo</div>
                    <div class="card-text" style="font-size: medium">Price = 5000kyats</div>



                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/c2.jpg')}}" alt="...">
            <div class="card-body" >
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name = Steve Jobs
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Translator = Zin Myo</div>
                    <div class="card-text" style="font-size: medium">Price = 5000kyats</div>



                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/c3.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name = Adolf Hitler
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Translator = Zin Myo</div>
                    <div class="card-text" style="font-size: medium">Price = 5000kyats</div>



                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/c4.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name = Lee Kuan Yew
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Translator = Zin Myo</div>
                    <div class="card-text" style="font-size: medium">Price = 5000kyats</div>




                </div>


            </div>

        </div>

    </div>
    <h3  style ="margin: 10px 0 10px 0;color: rgb(227,112,11)">Stories For Children</h3>
    <div class="row">
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/d1.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(227,112,11)">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name =Stories(1)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Author = Wa Lone</div>
                    <div class="card-text" style="font-size: medium">Price = 3500kyats</div>




                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/d2.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(227,112,11)">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name =Stories(2)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Author = Min Galar Shin Aung</div>
                    <div class="card-text" style="font-size: medium">Price = 3500kyats</div>




                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/d3.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(227,112,11)">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name =Stories(3)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Author =Techal Hlaing</div>
                    <div class="card-text" style="font-size: medium">Price = 3500kyats</div>




                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/d4.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(227,112,11)">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name =Stories(4)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Author = Maung Khit Htun</div>
                    <div class="card-text" style="font-size: medium">Price = 3500kyats</div>




                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/d5.jpg')}}" alt="...">
            <div class="card-body" style="color: rgb(227,112,11)">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name =Stories(5)
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Author = Ko Kyawe</div>
                    <div class="card-text" style="font-size: medium">Price = 3500kyats</div>




                </div>


            </div>

        </div>

    </div>
    <h3 id="a" style ="margin: 10px 0 10px 0;">Poem Book</h3>
    <div id="a" class="row">
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/e1.jpg')}}" alt="...">
            <div  class="card-body" >
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name =S
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Poet = San Kyaw Swar Win</div>
                    <div class="card-text" style="font-size: medium">Price = 5000kyats</div>




                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/e2.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name =S
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Poet = San Kyaw Swar Win</div>
                    <div class="card-text" style="font-size: medium">Price = 5000kyats</div>




                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/e3.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name =Cat at window
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Poet = Sit Nyein</div>
                    <div class="card-text" style="font-size: medium">Price = 5000kyats</div>




                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/e5.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name =Staring from another life
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Poet = Sit Nyein</div>
                    <div class="card-text" style="font-size: medium">Price = 5000kyats</div>




                </div>


            </div>

        </div>
        <div class="card border-warning " style="width:16rem;font-family: sans-serif;margin:0 5px;font-size:xx-large;height: 21rem;background-color: rgb(1,3,41);">

            <img style="width: 217px;height: 170px;margin: 5px 10px" src="{{asset('images/e6.jpg')}}" alt="...">
            <div class="card-body">
                <p style="font-size: large;text-align: center" class="card-title">Book</p>
                <div style="text-align: center;">
                    <div class="card-text" style="font-size: medium">Book Name =Happy Clouds
                    </div>

                    <div class="card-text" style="font-size: medium">
                        Poet = Sit Nyein</div>
                    <div class="card-text" style="font-size: medium">Price = 5000kyats</div>




                </div>


            </div>

        </div>

    </div>
@endsection




<style>
</style>

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
                        <strong>
                <legend style="color: rebeccapurple"><i class="fa-solid fa-cake-candles"></i>&nbspCake</legend> </strong>
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
                <div class="form-group mt-2"><label style="color:white">Cake Type</label>
                   <!-- Example split danger button -->
                   <select class=" form-select mt-2 text-warning strong" aria-label="Default select example" id="ctype" name="cake_type[]" multiple="">
                   
                       <option value="Fruits Cake(1)" >Fruits Cake(1)</option>
                       <option value="Fruits Cake(2)">Fruits Cake(2)</option>
                       <option value="Fruits Cake(3)">Fruits Cake(3)</option>
                       <option value="Fruits Cake(4)">Fruits Cake(4)</option>
                       <option value="Fruits Cake(5)">Fruits Cake(5)</option>

                       <option value="Fruits Cake(6)" >Fruits Cake(6)</option>
                       <option value="Fruits Cake(7)">Fruits Cake(7)</option>
                       <option value="Fruits Cake(8)">Fruits Cake(8)</option>
                       <option value="Fruits Cake(9)">Fruits Cake(9)</option>
                       <option value="Fruits Cake(10)">Fruits Cake(10)</option>

                       <option value="Fruits Cake(11)" >Fruits Cake(11)</option>
                       <option value="Fruits Cake(12)">Fruits Cake(12)</option>
                       <option value="Crepe Cake(1)">Crepe Cake(1)</option>
                       <option value="Crepe Cake(2)">Crepe Cake(2)</option>
                       <option value="Crepe Cake(3)">Crepe Cake(3)</option>
                       <option value="Crepe Cake(4)">Crepe Cake(4)</option>
                       <option value="Crepe Cake(5)">Crepe Cake(5)</option>
                       <option value="Crepe Cake(6)">Crepe Cake(6)</option>

                       <option value="Chocolate Cake(1)">Chocolate Cake(1)</option>
                       <option value="Chocolate Cake(2)">Chocolate Cake(2)</option>
                       <option value="Chocolate Cake(3)">Chocolate Cake(3)</option>
                       <option value="Chocolate Cake(4)">Chocolate Cake(4)</option>
                       <option value="Chocolate Cake(5)">Chocolate Cake(5)</option>
                       <option value="Chocolate Cake(6)">Chocolate Cake(6)</option>

                       <option value="Funfetti Cake(1)">Funfetti Cake(1)</option>
                       <option value="Funfetti Cake(2)">Funfetti Cake(2)</option>
                       <option value="Funfetti Cake(3)">Funfetti Cake(3)</option>
                       <option value="Funfetti Cake(4)">Funfetti Cake(4)</option>
                       <option value="Funfetti Cake(5)">Funfetti Cake(5)</option>
                       <option value="Funfetti Cake(6)">Funfetti Cake(6)</option>
        
                    </select>
</div>
        
                <!--div class="form-group mt-2">
                    <div class="input-group">
                        <input type="text" class="form-control" id="username" name="type_of_cake" placeholder="Cake's Type">
                        <div class="input-group-text">Cake's type</div>
                    </div>

                </div-->
                
                <button type="submit" class="btn btn-info mt-2">Order</button>
    </div>
            </form>
        </div>
    </div>

@endsection

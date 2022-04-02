
<style>

</style>
@extends('layout.master')
@section('title','Ordering Book Page')

@section('content')

        
    
    <div class="container mt-4 col-md-8 col-md-offset-1">
        <div class=" card card-body bg-dark">
            <form method="post" enctype="multipart/form-data" >
            <div class="form-group mb-2">
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                @if(session('status'))
                    <p class="alert alert-success">{{session('status')}}</p>
                    @endif
                {{csrf_field()}}
               <strong> <legend style="color:rebeccapurple "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                        <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                    </svg>&nbspBook</legend> </strong>
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
                <div class="form-group mt-2"><label style="color:white">Books Name</label>
                   <!-- Example split danger button -->
                   <select class="form-select mt-2 text-success strong" aria-label="Default select example" id="troom" name="book_name[]" multiple="">

                       <option value="Thief" >Thief</option>
                       <option value="A Kyin Thu Htee">A Kyin Thu Htee</option>
                       <option value="Kyar Taw The laee Maung Sa Kar">Kyar Taw The laee Maung Sa Kar</option>
                       <option value="still call 'Khaing'">still call 'Khaing'</option>
                       <option value="Thu Pone Eain">Thu Pone Eain</option>

                       <option value="Does Nyi Malay believe in Love?" >Does Nyi Malay believe in Love?</option>
                       <option value="Par Layyar Maung Tint">Par Layyar Maung Tint</option>
                       <option value="Taryar Pwa Gyi(1)">Taryar Pwa Gyi(1)</option>
                       <option value="Taryar Pwa Gyi(2)">Taryar Pwa Gyi(2)</option>
                       <option value="Taryar Pwa Gyi(3)">Taryar Pwa Gyi(3)</option>
    
                       <option value="Moon Angel(Myint Myat Thuya)" >Moon Angel(Myint Myat Thuya)</option>
                       <option value="U Paw Oo & Hla Taw Thar
">U Paw Oo & Hla Taw Thar
</option>
                       <option value="Alexander Graham Bell">Alexander Graham Bell</option>
                       <option value="Mesut Ozil">Mesut Ozil</option>
                       <option value="Steve Jobs">Steve Jobs</option>
    
                       <option value="Adolf Hitler" >Adolf Hitler</option>
                       <option value="Lee Kuan Yew">Lee Kuan Yew</option>
                       <option value="Stories(1)">Stories(1)</option>
                       <option value="Stories(2)">Stories(2)</option>
                       <option value="Stories(3)">Stories(3)</option>
    
                       <option value="Stories(4)">Stories(4)</option>
                       <option value="Stories(5)">Stories(5)</option>

                       <option value="Poem(1)">Poem(1)</option>
                       <option value="Poem(2)">Poem(2)</option>
                       <option value="Cat at window">Cat at window</option>
                       <option value="Staring from another life">Staring from another life</option>
                       <option value="Happy Clouds">Happy Clouds</option>
                       <option value="Lovely Emily">Lovely Emily</option>
                    </select>
               </div>

                <!--div class="from-group mt-2">
                    <label class='text-white'>
                        Images
                    </label>
                    <input type="file" name="imgf[]" multiple>
                </div-->
                <button type="submit" class="btn btn-info mt-2">Order</button>
            </div>
            </form>
        </div>
    </div>

@endsection


@extends('layout.master')
@section('title','show all Roles')
@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="card card-body bg-light">
            <table class="table table-bordered table-striped table-dark">
                <thead class="table-info">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Tel-no</th>
                    <th>Address</th>
                    <th>Book Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($bcustomer as $answer)
                    <tr>
                        <td>{{$answer->id}}</td>
                        <td>{{$answer->name}}</td>
                        <td>{{$answer->tel_no}}</td>
                        <td>{{$answer->address}}</td>
                        <td>{{$answer->book_name}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


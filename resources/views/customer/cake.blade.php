@extends('layout.master')
@section('title','show all Roles')
@section('content')
    <div class="container mt-3 col-md-8 col-md-offset-2">
        <div class="card card-body bg-light">
            <table class="table table-bordered table-striped table-dark">
                <thead class="table-info table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Tel-no</th>
                    <th>Address</th>
                    <th>Cake Type</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cake_customer as $answer)
                    <tr>
                        <td>{{$answer->id}}</td>
                        <td>{{$answer->name}}</td>
                        <td>{{$answer->tel_no}}</td>
                        <td>{{$answer->address}}</td>
                        <td>{{$answer->cake_type}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection



<style>
    img{
        border-radius: 50%;

    }
    .a{
        animation-name: hotel;
        animation-duration: 10s;
        background-color:lightcoral;
        text-align: center;

    }


    @keyframes hotel{
        0%{background-color: rebeccapurple; }
        25%{background-color: greenyellow;}
        50%{background-color: bisque;
        }
        75%{
            background-color:cornflowerblue;
        }
        100%{
            background-color: aquamarine;
        }
    }
</style>

@extends('layout.master')
@section('title','For only Admin')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-1 mt-4">
            <div class="card card-body bg-light">
                <div class="forUser">
                    <h3>
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-edit" width="25" height="40" class="svg-inline--fa fa-user-edit fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h274.9c-2.4-6.8-3.4-14-2.6-21.3l6.8-60.9 1.2-11.1 7.9-7.9 77.3-77.3c-24.5-27.7-60-45.5-99.9-45.5zm45.3 145.3l-6.8 61c-1.1 10.2 7.5 18.8 17.6 17.6l60.9-6.8 137.9-137.9-71.7-71.7-137.9 137.8zM633 268.9L595.1 231c-9.3-9.3-24.5-9.3-33.8 0l-37.8 37.8-4.1 4.1 71.8 71.7 41.8-41.8c9.3-9.4 9.3-24.5 0-33.9z"></path></svg>
                        Edit User</h3>
                    <a href="{{url('admin/users')}}">
                        <button class="btn btn-primary">Edit Member</button>
                    </a>
                    <a href="{{url('admin/role/create')}}">
                        <button class="btn btn-primary">Role Create</button>
                    </a>
                    <h3>Show All Roles</h3>
                    <a href="{{url('admin/roles')}}">
                        <button class="btn btn-primary">Show All Roles</button>
                    </a>
                    <h3>Cake Order</h3>
                    <a href="{{url('customers for cake')}}">
                        <button class="btn btn-primary">
                            All Customer for Cakes Order
                        </button>
                    </a>
                    <h3>Book Order</h3>
                    <a href="{{url('customers for book')}}">
                        <button class="btn btn-primary">
                            All Customer for Books Order
                        </button>
                    </a>

                </div>
            </div>
        </div>

@endsection

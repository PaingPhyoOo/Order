<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">





</head>
<body>
@include('layout.nav')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

@yield('content')<div style="margin-top: 15px">
<nav aria-label="Page navigation example ">
    <ul class="pagination justify-content-center">
        <li class="page-item ">
            <a class="page-link" href="{{url('show/detail')}}" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="{{url('/')}}">Home</a></li>
        <li class="page-item"><a class="page-link" href="{{url('show/categories')}}">Categories</a></li>
        <li class="page-item"><a class="page-link" href="{{url('show/detail')}}">Detail</a></li>
        <li class="page-item">
            <a class="page-link" href="{{url('/')}}">Next</a>
        </li>
    </ul>
</nav>
</div>

@include('layout.footer')
</body>
</html>

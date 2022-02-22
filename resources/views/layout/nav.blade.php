<style> h2 {
        background-image: url(https://media.giphy.com/media/26BROrSHlmyzzHf3i/giphy.gif);
        background-size: cover;
        color: transparent;
        -webkit-background-clip: text;
        text-transform: uppercase;
        font-size: 60px;
        text-indent: 20px;
        line-height: .75;
        margin: 10px 0;
    }
</style>


<nav class="navbar navbar-expand-lg navbar-light bg-light fw-bold">
    <div class="container-fluid">


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">

            <!--li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Member <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @if(Auth::check())
                <li><a href="{{url('user/logout')}}">Logout</a></li>
                        @else
                <li><a href="{{url('user/login')}}">Login</a></li>

                            <li><a href="{{url('user/register')}}">Register</a></li>

                        @endif

                </ul>
            </li-->
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('show/categories')}}">Categories</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('show/detail')}}">Detail</a>
                </li>



                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" width="16" height="18" class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" ></path></svg>


                        Member
                    </a>
                    <ul class=" dropdown-menu" aria-labelledby="navbarDropdown">
                        @if(\Illuminate\Support\Facades\Auth::check())

                            <li><a class="dropdown-item" href="{{url('user/logout')}}">Logout</a></li>
                        @else
                            <li><a class="dropdown-item" href="{{url('user/login')}}">Login</a></li>

                            <li><a class="dropdown-item" href="{{url('user/register')}}">Register</a></li>
                        @endif
                    </ul>
                </li>
                @if(Auth::check())
                   @if(Auth::user()->hasRole('Manager'))
                    <li>
                        <a href="{{url('admin')}}"><button class="btn btn-primary">Admin</button></a>
                    </li>
                    @endif
                    @endif
            </ul>
            <form class="d-flex">
                <!--input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button-->
            </form>
        </div>
    </div>
</nav>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="src/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body style="background-color: #4a5568;" class="text-white">

<nav class="navbar text-white navvv" style="background-color: #60eb73;">
    <div class="container">
		  <span class="navbar-brand mb-0 h1">
        <a href="/">
				<img src="{{asset('src/ico/train-white.svg')}}" alt="logo" class="mr-3" style="height: 50px;"/>
        </a>Train Tickets
		  </span>
        <ul class="navbar-nav">

            @if(Auth::check())
                @if(Auth::user()->getEmail() == 'bekonti811@gmail.com')
                    <li class="nav-item">
                        <a href="{{route('admin')}}">Admin</a>
                    </li>
                @endif
                <li class="nav-item">
                    <form action="{{route('signout')}}" method="post"> @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('signin')}}">Sign In</a>
                </li>
            @endif
        </ul>

    </div>
</nav>
<div class="container" style="">

    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if(session('name_not'))
        <div class="alert alert-warning" role="alert">
            {{ session('name_not') }}
        </div>
    @endif

    @yield('main_content')
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article App</title>
    <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    @vite(['resources/js/app.js'])

    <style rel="stylesheet" src="resources/css/style.css"></style>
  <style>
    body{
      background-color: #fff;
    }
  </style>

</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand py-3" href="{{ route('dashboard') }}">Social</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            

                    @guest
                      
                    
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
              <li>
              {{--  <form action="{{route('logout')}}" method="get">
                <button type="submit" >LogOut</button>
            </form>  --}}
          
          </li>

               {{--  <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">@if(session()->has('name'))Logout @endif</a>
              </li>  --}}
@endguest

@auth 
<a href="{{route('loginuser')}}" class="nav-link">{{auth()->user()->name}}</a>
@endauth
            
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" style="border-radius: 50%" type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </div>
      </nav>    
        

    


    <!-- dynamic content -->
    @yield('content')


    </body>
</html>
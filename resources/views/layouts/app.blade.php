<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
  *{
    font-family: cairo;
    body(background-color: #cdcdcd;)
  }
</style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body dir="rtl">
 
    <div id="app">
        <nav class="navbar navbar-expand-lg" style="background-color: #616161;">
         
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link text-white" aria-current="page" href="{{route('welcome')}}">الرئيسية</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{route('itemgroup')}}">مجموعات العناصر</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="{{route('items')}}">العناصر</a>
                </li>
              </ul>
            </div>

            <div class="collapse navbar-collapse">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <h1 class="nav-link text-white"  href="#" style="font-family: cairo; font-size: 25px;">مـــنصــة حــــجـــز الــتــذاكـر </h2>
                </li>
              </ul>
            </div>

          <div>
            <ul class="navbar-nav">
            <li class="nav-item active">
              <a href="{{route('checkout')}}">
              <i class="fa-solid fa-cart-shopping text-white pt-3"></i><span class="badge bg-danger">{{Session::get('countitem')}}</span>
              </a>
              </li>
              <li class="nav-item active">
                <a class="nav-link text-white" href="{{route('login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{route('register')}}">Register</a>
              </li>
            </ul>
          </div>
        
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
</body>
</html>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
   
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand text-white" href="{{route('welcome')}}">Tuwaiq Academy</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>


              <div class="collapse navbar-collapse text-white" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item text-white">
                    <a class="nav-link active text-white" aria-current="page" href="{{route('groups')}}">Groups</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('items')}}">Items</a>
                  </li>

                  <li class="nav-item">
                    <a href="{{route('checkout')}}" class="btn btn-primary px-3">
                      <i class="bi bi-cart text-white" style="font-size: 16px;"></i> 
                      <span class="m-2">{{ Session::get('cartItems') }}</span>
                    </a>
                  </li>
                </ul>
              </div>

              <div>
                @if(Auth::guest())
                <ul class="navbar-nav">
                    <li class="nav-item ">
                    <a class="nav-link text-light" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{route('register')}}">Register</a>
                    </li>
                </ul>
                @else
                <ul class="navbar-nav">
                    <li class="nav-item ">
                    <a class="nav-link text-light" href="{{route('logout')}}">Logout</a>
                    </li>
                </ul>
                @endif
              </div>
            </div>
          </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

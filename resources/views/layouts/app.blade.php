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
              <a class="navbar-brand text-white" href="{{route('welcome')}}">  أفضل الأسعار للمستلزمات المنزلية </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>


              {{-- <div class="collapse navbar-collapse text-white" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item text-white">
                    <a class="nav-link active text-white" aria-current="page" href="{{route('groups')}}">المجموعات</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('items')}}">الاصناف</a>
                  </li>
                </ul>
              </div> --}}

              <ul class="nav">
                  <a href="{{route('checkout')}}" class="btn btn-primary bi bi-cart position-relative  mx-2">
                    العربة 
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                      {{ Session::get('cartItems') }}
                    </span>
                  </a>
                  <a href="{{route('favorite')}}" class="btn btn-primary bi bi-cart position-relative  mx-2">
                    مفضلتي 
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                      {{ Session::get('conutFavorite') }}
                    </span>
                  </a>
                  
                  <a href="{{route('profile')}}" class="btn btn-primary bi bi-person-circle mx-2">
                    حسابي                  
                  </a>
          
                <li class="nav-item">
                  @if(Auth::guest())
                  <ul class="navbar-nav">
                      <li class="nav-item ">
                      <a class="nav-link text-light" href="{{route('login')}}">تسجيل دخول</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-light" href="{{route('register')}}">التسجيل</a>
                      </li>
                  </ul>
                  @else
                  <ul class="navbar-nav">
                      <li class="nav-item ">
                      <a class="nav-link text-light" href="{{route('logout')}}">تسجيل خروج</a>
                      </li>
                      
                  </ul>
                  @endif
                </li>
              </ul>
              </div>
            </ul> 
            </div>
          </nav>

        <main class="container-fluid">
            @yield('content')
        </main>
    </div>
    <footer class="bg bg-dark text-white fixed-bottom p-1">
      <h5 class="text-center">أفضل الأسعار @ 2024</h5>
    </footer>
</body>
</html>

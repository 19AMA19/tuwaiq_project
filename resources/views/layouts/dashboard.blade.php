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
              <a class="navbar-brand text-white" href="{{route('groups')}}">أفضل الأسعار للمستلزمات المنزلية </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

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
                    <a class="nav-link text-light" href="{{route('logout')}}">خروج</a>
                    </li>
                </ul>
                @endif
              </div>
            </div>
          </nav>

        <main class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-fluid">
                        <div class="row flex-nowrap">
                            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                                
                                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                        
                                        <li class="nav-item">
                                            <a href="{{route('GetAllItem')}}" class="nav-link align-middle px-0">
                                              <span class="ms-1 d-none d-sm-inline">جميع المنتجات</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{route('AddGroupDashboard')}}" class="nav-link align-middle px-0">
                                             <span class="ms-1 d-none d-sm-inline">إضافة مجموعة جديدة</span>
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a href="{{route('AddNewItemDashboard')}}" class="nav-link px-0 align-middle">
                                            <span class="ms-1 d-none d-sm-inline">إضافة عنصر جديد</span> </a>
                                        </li>


                                    </ul>    
                   
                                </div>
                            </div>
                            <div class="col py-3">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
          
        </main>
    </div>
</body>
</html>
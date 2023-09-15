<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">
    <!-- Fonts -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/build/assets/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


    <!-- Scripts -->
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <img height="50" src="{{url('/assets/images/business_buzzer_logo.png')}}" alt="">

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav p-2">
                            <div class="menu">
                                <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                    <div class="sb-nav-link-icon"><i class="bi bi-house"></i></div>
                                    Dashboard
                                </a>
                            </div>
                           <div class="menu">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="bi bi-columns-gap"></i></div>
                                    Business
                                    <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{ route('admin.listings.index') }}"><i class="bi bi-dash-lg me-2" ></i> All Businesses</a>
                                        <a class="nav-link" href="{{ route('admin.listings.create') }}"> <i class="bi bi-dash-lg me-2"></i> Add New</a>
                                    </nav>
                                </div>
                           </div>

                           <div class="menu">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsecategory" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="bi bi-tag"></i></div>
                                    Categories
                                    <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsecategory" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{ route('admin.categories.index') }}"><i class="bi bi-dash-lg me-2"></i> All Categories</a>
                                        <a class="nav-link" href="{{ route('admin.categories.create') }}"><i class="bi bi-dash-lg me-2"></i> Add New</a>
                                    </nav>
                                </div>
                           </div>

                            <div class="menu">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseuser" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="bi bi-tag"></i></div>
                                    Users
                                    <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
                                </a>
                                <div class="collapse" id="collapseuser" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="bi bi-dash-lg me-2"></i> All Users</a>
                                        <!-- <a class="nav-link" href="{{ route('admin.users.create') }}"><i class="bi bi-dash-lg me-2"></i> Add New</a> -->
                                    </nav>
                                </div>
                            </div>

                            <div class="menu">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsefaq" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="sb-nav-link-icon"><i class="bi bi-tag"></i></div>
                                    FAQ
                                    <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsefaq" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{ route('admin.faq.index') }}"><i class="bi bi-dash-lg me-2"></i> All FAQ</a>
                                        <a class="nav-link" href="{{ route('admin.faq.create') }}"><i class="bi bi-dash-lg me-2"></i> Add New</a>
                                    </nav>
                                </div>
                            </div>


                           <div class="menu">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                    <div class="sb-nav-link-icon"><i class="bi bi-file-earmark"></i></div>
                                    Pages
                                    <div class="sb-sidenav-collapse-arrow"><i class="bi bi-chevron-down"></i></div>
                                </a>
                                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                        <a href="#" class="nav-link"><i class="bi bi-dash-lg me-2"></i> About</a>
                                    </nav>
                                </div>  
                           </div>                          
                        </div>
                    </div>

                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as: <span>{{ Auth::user()->name }}</span></div>
                        <!-- Biznessbuzzer -->
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main class="py-4">
                    @yield('content')
                </main>        
            </div>
        </div>
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
          // tinymce script init
          tinymce.init({
                selector: '#mytextareaadmin'
            });
            // tinymce script init
            $(document).ready(function () {
                $('#opening-time-admin').select2();
            });

             //    days multiple select script
             $(document).ready(function() {
                $('#select-category-admin').select2();
                
            });
    </script>
</body>
</html>

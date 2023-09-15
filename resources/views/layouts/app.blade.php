<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ url('assets/images/fav-icon.png') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Fonts -->   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- slick slider cdn  -->    

    <link rel="stylesheet" type="text/css" href="{{url('/assets/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('/assets/slick/slick-theme.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm sticky-top">
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
                            
                            <a class="btn btn-warning text-white" href="{{route('login')}}"><i class="fa fa-plus" aria-hidden="true"></i> Add Bussiness</a>
                        @else
                            
                            <li class="nav-item dropdown btn btn-outline-warning me-3 p-0">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @if (auth()->user()->type == 'admin') 
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                
                                @else
                                <a class="dropdown-item" href="{{ route('user.dashboard') }}">Dashboard</a>
                                @endif

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
                            @if (auth()->user()->type == 'admin') 
                            <li class="nav-item">
                               <a href="{{url('/admin/listings/create')}}" class="btn btn-warning text-white p-2"><i class="fa fa-plus" aria-hidden="true"></i> Add Business</a>
                            </li>
                            @else
                            <li class="nav-item">
                               <a href="{{url('/user/add-listing')}}" class="btn btn-warning text-white p-2"><i class="fa fa-plus" aria-hidden="true"></i> Add Business</a>
                            </li>
                            @endif
                            
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="{{url('/assets/slick/slick.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script>
       $(document).ready(function(){
            $('.slider-nav').slick({
                autoplay: true,        
                // dots: true,     
                arrows: true,         
                infinite: true,        
                speed: 500,           
                slidesToShow: 6,       
                slidesToScroll: 2,
                
                responsive: [
                    {
                    breakpoint: 800,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 2,
                            infinite: true,
                            dots: true
                        }
                    },

                    {
                    breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            infinite: true,
                            dots: true
                        }
                    }
                    
                ]
            });
        });

            // tinymce script init
            tinymce.init({
                selector: '#mytextarea'
            });
            // tinymce script init

            //    days multiple select script
            $(document).ready(function () {
                $('#days-multiple').select2();
            });

            $(document).ready(function () {
                $('#opening-time').select2({
                    placeholder: "Select a Opening Time",
                    theme: "classic"
                });
                
            });
            $(document).ready(function () {
                $('#closing-time').select2({
                    placeholder: "Select a Closing Time",
                    theme: "classic"
                });                
            });



            //    days multiple select script
            $(document).ready(function() {
                $('#select-category').select2({
                    placeholder: "Select a Category",
                    allowClear: true

                });
                
            });


            // script for multi image uploader
            const imageInput = document.getElementById('imageInput');
            const imagePreview = document.getElementById('imagePreview');

            imageInput.addEventListener('change', handleImageUpload);

            function handleImageUpload() {
                imagePreview.innerHTML = ''; // Clear previous previews

                const files = imageInput.files;
                for (let i = 0; i < files.length; i++) {
                    const file = files[i];
                    if (file.type.startsWith('image/')) {
                        const imageElement = document.createElement('img');
                        imageElement.src = URL.createObjectURL(file);
                        imageElement.classList.add('preview-image');
                        imagePreview.appendChild(imageElement);
                    }
                }
            }
            // script for multi image uploader end

            // add listing tabs pre next script
                            
            document.addEventListener('DOMContentLoaded', function () {
                var currentTab = 0;
                var tabs = document.querySelectorAll('.nav-link[data-bs-toggle="tab"]');
                var prevBtn = document.getElementById('prevBtn');
                var nextBtn = document.getElementById('nextBtn');
                var submitBtn = document.getElementById('submitBtn');

                // Function to show the current tab
                function showTab(index) {
                    for (var i = 0; i < tabs.length; i++) {
                        tabs[i].classList.remove('active');
                    }
                    tabs[index].classList.add('active');

                    var tabPanes = document.querySelectorAll('.tab-pane');
                    for (var i = 0; i < tabPanes.length; i++) {
                        tabPanes[i].classList.remove('show', 'active');
                    }
                    tabPanes[index].classList.add('show', 'active');

                    // Disable or enable Prev/Next buttons based on the current tab
                    if (index === 0) {
                        prevBtn.style.opacity = '0';
                    } else {
                        prevBtn.style.opacity = '1';
                    }

                    if (index === tabs.length - 1) {
                        nextBtn.style.display = 'none';
                        submitBtn.style.display = 'block';
                    } else {
                        nextBtn.style.display = 'block';
                        submitBtn.style.display = 'none';
                    }
                }

                // Initialize the form by showing the first tab
                showTab(currentTab);

                // Handle Next button click
                nextBtn.addEventListener('click', function () {
                    if (currentTab < tabs.length - 1) {
                        currentTab++;
                        showTab(currentTab);
                    }
                });

                // Handle Prev button click
                prevBtn.addEventListener('click', function () {
                    if (currentTab > 0) {
                        currentTab--;
                        showTab(currentTab);
                    }
                });

                // Handle Submit button click (You can add form submission logic here)
                submitBtn.addEventListener('click', function () {
                    alert('Form submitted!');
                });
            });
               

    </script>
</body>
</html>

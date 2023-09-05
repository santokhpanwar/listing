@extends('layouts.app')
 
@section('content')
<section class="grid-banner d-flex align-items-center">
  <div class="container">
    <h1 class="text-center text-white font-weight-bold">Dashboard</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center bg-transparent">
        <li class="breadcrumb-item"><a class="text-warning" href="#">Home</a></li>
        <li class="breadcrumb-item text-white">Dashboard</li>
      </ol>
    </nav>
  </div>
</section>
<section class="dashboard py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="card">
                     <div class="card-header  py-3 bg-white"> 
                        <h5 class="mb-0">My Dashboard</h5>
                     </div> 
                     <div class="card-body text-center item-user bg-white"> 
                        <div class="profile-pic"> 
                            <div class="profile-pic-img"> 
                                <span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="online" aria-label="online"></span> 
                                <img height="100"  src="{{url('/assets/images/user-image.png')}}" class="rounded-circle" alt="user-img" style="width:100px;"> 
                            </div>
                             <a href="userprofile.html" class="text-dark">
                                <h4 class="mt-3 mb-0">{{ Auth::user()->name }}</h4>
                            </a> 
                        </div> 
                    </div> 
                    <aside class="app-sidebar doc-sidebar my-dash"> 
                        <div class="dashboard-menu">
                             <ul class="list-group pb-1">

                                <li class="list-group-item border-top border border-0 rounded-0">
                                     <a class=" active text-dark" href="{{url('/dashboard')}}">
                                        <span><i class="bi bi-pencil-square"></i> Dashboard</span>
                                        <i class="angle fa fa-angle-right float-end my-1"></i>
                                    </a>
                                 </li>
                                 <li class="list-group-item border-top border border-0 rounded-0">
                                     <a class="text-dark" href="{{url('/add-listing')}}">
                                        <span><i class="bi bi-pencil-square"></i> Add Listing</span>
                                        <i class="angle fa fa-angle-right float-end my-1"></i>
                                    </a>
                                 </li>
                                 <li class="list-group-item border-top border border-0 rounded-0">
                                    <a class="text-dark" href="{{url('/my-account')}}">
                                        <span><i class="bi bi-pencil-square"></i> My Profile</span>
                                        <i class="angle fa fa-angle-right float-end my-1"></i>
                                    </a>
                                 </li>  
                                 <li class="list-group-item border-top border border-0 rounded-0">
                                    <a class="text-dark" href="{{url('/my-listing')}}">
                                        <span><i class="bi bi-pencil-square"></i> My Listing</span>
                                        <i class="angle fa fa-angle-right float-end my-1"></i>
                                    </a>
                                 </li>  
                                
                                <li class="list-group-item border-top border border-0 rounded-0"> 
                                    <a class="text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-left"></i><span class="side-menu__label ms-2">Logout</span></a> 
                                </li> 
                            </ul> 
                        </div> 
                    </aside> 
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="card">
                    <div class="card-header py-3 bg-white">
                        <h5 class="mb-0">My Listings</h5>
                    </div>
                    <div class="card-body p-3 pb-0 bg-white rounded">
                        <div class="mb-3">
                            <ul class="list-group list-group-horizontal flex-column flex-lg-row  justify-content-between">
                                <li class="list-group-item w-100 d-flex align-items-center">
                                    <div class="me-3">
                                        <span class="bg-warning rounded-circle p-2"><i class="bi bi-person-fill px-1 text-white"></i></span>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0 text-warning">Username</h5>
                                        <p class="name mb-0 text-uppercase">{{ Auth::user()->name }}</p>
                                    </div>
                                </li>
                                <li class="list-group-item w-100 d-flex align-items-center">
                                    <div class="me-3">
                                        <span class="bg-warning rounded-circle p-2">
                                            <i class="bi bi-geo-alt-fill px-1 text-white"></i>
                                        </span>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0 text-warning">My Location</h5>
                                        <p>India</p>
                                    </div>
                                </li>
                                <li class="list-group-item w-100 d-flex align-items-center">
                                    <div class="me-3">
                                        <span class="bg-warning rounded-circle p-2"><i class="bi bi-envelope-fill px-1 text-white"></i></span>
                                    </div>
                                    <div class="">
                                        <h5 class="mb-0 text-warning">My Email</h5>
                                        <p class="name mb-0">{{ Auth::user()->email }}</p>
                                    </div>
                                </li>
                                
                            </ul> 
                        </div>
                        <div class="list-card card shadow mb-3 p-2 w-100">
                            <div class="row no-gutter align-items-center">
                                <div class="col-md-4 d-flex align-items-stretch">                    
                                <a class="text-dark" href=""><img src="{{ url('/assets/images/placeholder.png') }}" height="150" class="card-img-top  " alt=""></a>            
                                </div>
                                <div class="col-md-8">
                                <div class="card-body p-0">
                                    <div class="list-content border-bottom px-1 pb-2">
                                    <p class="mb-0 h5"><a class="text-dark text-decoration-none" href="{{url('/single-category')}}">Best SEO Agency in Toronto</a></p>
                                    <div class="rating-star">
                                            <span class="bi bi-star-fill text-warning"></span>
                                            <span class="bi bi-star-fill text-warning"></span>
                                            <span class="bi bi-star-fill text-warning"></span>
                                            <span class="bi bi-star-fill text-warning"></span>
                                            <span class="bi bi-star-fill text-warning"></span> 
                                            <span>(5.0)</span>
                                        </div> 
                                    <div class="list-location d-flex">
                                        <div class="mr-1"><img src="{{ url('/assets/images/location.png') }}" alt="">2551 Vista Dr #B301 Alaska (AK) Juneau USA</div>
                                        
                                    </div>
                                    </div>
                                    <div class="row social-icon mt-2">
                                    <div class="col-md-8">
                                    <div class="social-icon">
                                        <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="mailto:" class="btn btn-outline-warning  border-dark"><i class="fa fa-envelope text-dark" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="tel:" class="btn btn-outline-warning border-dark"><i class="fa fa-phone text-dark" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="" target="_blank" class="btn btn-outline-warning border-dark"><i class="fa fa-globe text-dark" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="btn btn-outline-warning border-dark"><i class="fa fa-share-alt text-dark" aria-hidden="true"></i></a>
                                        </li>
                                        </ul>
                                    </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                                        <div class="direction text-right">
                                        <a class="text-warning text-decoration-none" href="">
                                            <!-- <img src="{{ url('assets/images/direction.png') }}" alt="">  -->
                                            View Details</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-card card shadow mb-3 p-2 w-100">
                            <div class="row no-gutter align-items-center">
                                <div class="col-md-4 d-flex align-items-stretch">                    
                                <a class="text-dark" href=""><img src="{{ url('/assets/images/placeholder.png') }}" height="150" class="card-img-top  " alt=""></a>            
                                </div>
                                <div class="col-md-8">
                                <div class="card-body p-0">
                                    <div class="list-content border-bottom px-1 pb-2">
                                    <p class="mb-0 h5"><a class="text-dark text-decoration-none" href="{{url('/single-category')}}">Best SEO Agency in Toronto</a></p>
                                    <div class="rating-star">
                                            <span class="bi bi-star-fill text-warning"></span>
                                            <span class="bi bi-star-fill text-warning"></span>
                                            <span class="bi bi-star-fill text-warning"></span>
                                            <span class="bi bi-star-fill text-warning"></span>
                                            <span class="bi bi-star-fill text-warning"></span> 
                                            <span>(5.0)</span>
                                        </div> 
                                    <div class="list-location d-flex">
                                        <div class="mr-1"><img src="{{ url('/assets/images/location.png') }}" alt="">2551 Vista Dr #B301 Alaska (AK) Juneau USA</div>
                                        
                                    </div>
                                    </div>
                                    <div class="row social-icon mt-2">
                                    <div class="col-md-8">
                                    <div class="social-icon">
                                        <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="mailto:" class="btn btn-outline-warning  border-dark"><i class="fa fa-envelope text-dark" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="tel:" class="btn btn-outline-warning border-dark"><i class="fa fa-phone text-dark" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="" target="_blank" class="btn btn-outline-warning border-dark"><i class="fa fa-globe text-dark" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="btn btn-outline-warning border-dark"><i class="fa fa-share-alt text-dark" aria-hidden="true"></i></a>
                                        </li>
                                        </ul>
                                    </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                                        <div class="direction text-right">
                                        <a class="text-warning text-decoration-none" href="">
                                            <!-- <img src="{{ url('assets/images/direction.png') }}" alt="">  -->
                                            View Details</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-card card shadow mb-3 p-2 w-100">
                            <div class="row no-gutter align-items-center">
                                <div class="col-md-4 d-flex align-items-stretch">                    
                                <a class="text-dark" href=""><img src="{{ url('/assets/images/placeholder.png') }}" height="150" class="card-img-top  " alt=""></a>            
                                </div>
                                <div class="col-md-8">
                                <div class="card-body p-0">
                                    <div class="list-content border-bottom px-1 pb-2">
                                    <p class="mb-0 h5"><a class="text-dark text-decoration-none" href="{{url('/single-category')}}">Best SEO Agency in Toronto</a></p>
                                    <div class="rating-star">
                                            <span class="bi bi-star-fill text-warning"></span>
                                            <span class="bi bi-star-fill text-warning"></span>
                                            <span class="bi bi-star-fill text-warning"></span>
                                            <span class="bi bi-star-fill text-warning"></span>
                                            <span class="bi bi-star-fill text-warning"></span> 
                                            <span>(5.0)</span>
                                        </div> 
                                    <div class="list-location d-flex">
                                        <div class="mr-1"><img src="{{ url('/assets/images/location.png') }}" alt="">2551 Vista Dr #B301 Alaska (AK) Juneau USA</div>
                                        
                                    </div>
                                    </div>
                                    <div class="row social-icon mt-2">
                                    <div class="col-md-8">
                                    <div class="social-icon">
                                        <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="mailto:" class="btn btn-outline-warning  border-dark"><i class="fa fa-envelope text-dark" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="tel:" class="btn btn-outline-warning border-dark"><i class="fa fa-phone text-dark" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="" target="_blank" class="btn btn-outline-warning border-dark"><i class="fa fa-globe text-dark" aria-hidden="true"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="btn btn-outline-warning border-dark"><i class="fa fa-share-alt text-dark" aria-hidden="true"></i></a>
                                        </li>
                                        </ul>
                                    </div>
                                    </div>
                                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                                        <div class="direction text-right">
                                        <a class="text-warning text-decoration-none" href="">
                                            <!-- <img src="{{ url('assets/images/direction.png') }}" alt="">  -->
                                            View Details</a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
@endsection
@extends('layouts.app')
 
@section('content')

<section class="dashboard py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 mb-3">
                <div class="card">
                     <div class="card-header  py-3 bg-white"> 
                        <h5 class="mb-0">{{ Auth::user()->name }}</h5>
                     </div> 
                     <div class="card-body text-center item-user bg-white"> 
                        <div class="profile-pic"> 
                            <div class="profile-pic-img"> 
                                <span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="online" aria-label="online"></span> 
                                <img height="100"  src="{{url('/assets/images/user-image.png')}}" class="rounded-circle" alt="user-img" style="width:100px;"> 
                            </div> 
                        </div> 
                    </div> 
                    <aside class="app-sidebar doc-sidebar my-dash"> 
                        <div class="dashboard-menu">
                             <ul class="list-group pb-1">

                                <li class="list-group-item border-top border border-0 rounded-0">
                                     <a class=" active text-dark" href="{{url('/user/dashboard')}}">
                                        <span><i class="bi bi-pencil-square"></i> Dashboard</span>
                                        <i class="angle fa fa-angle-right float-end my-1"></i>
                                    </a>
                                 </li>
                                 <li class="list-group-item border-top border border-0 rounded-0">
                                     <a class="text-dark" href="{{url('/user/add-listing')}}">
                                        <span><i class="bi bi-pencil-square"></i> Add Business</span>
                                        <i class="angle fa fa-angle-right float-end my-1"></i>
                                    </a>
                                 </li>
                                 <li class="list-group-item border-top border border-0 rounded-0">
                                    <a class="text-dark" href="{{url('/user/my-account')}}">
                                        <span><i class="bi bi-pencil-square"></i> My Profile</span>
                                        <i class="angle fa fa-angle-right float-end my-1"></i>
                                    </a>
                                 </li>  
                                 <li class="list-group-item border-top border border-0 rounded-0">
                                    <a class="text-dark" href="{{url('/user/my-listing')}}">
                                        <span><i class="bi bi-pencil-square"></i> My Business</span>
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
                        <h5 class="mb-0">My Dashboard</h5>
                    </div>
                    <div class="card-body p-3  bg-white rounded">
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


                        <div class="row mb-3">
                            <div class="col-md-4 mb-3">
                                <div class="bg-success d-flex align-items-center py-4 justify-content-center shadow border rounded">
                                    <div class="card-icon bg-light p-3 rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-briefcase" style="font-size:40px;"></i>
                                    </div>
                                    <div class="ps-3">
                                    <h6 class="text-warning h1">145</h6>
                                    <span class="text-white small pt-2 ps-1 ">No of Listing</span>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <div class="bg-primary d-flex align-items-center py-4 justify-content-center shadow border rounded">
                                    <div class="card-icon bg-light p-3 rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cart" style="font-size:40px;"></i>
                                    </div>
                                    <div class="ps-3">
                                    <h6 class="text-warning h1">145</h6>
                                    <span class="text-white small pt-2 ps-1">No of Listing</span>

                                    </div>
                                </div>
                            </div> 
                            <div class="col-md-4 mb-3">
                                <div class="bg-warning d-flex align-items-center py-1 justify-content-center shadow border rounded">
                                   <a href="{{url('/user/add-listing')}}" class="nav-link">
                                   <div class="card-icon bg-light p-3 rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-file-plus" style="font-size:40px;"></i>
                                    </div>
                                    <p class="text-white">Add Listing</p>
                                   </a>
                                </div>
                            </div>
                        </div>
                <div class="row">  
                    <div class="col-md-7">
                        <div class="mb-3 border-bottom">
                            <h4>Latest Listing</h4>
                        </div>
                        <div class="list-card card shadow mb-3 p-2 w-100">
                            <div class="row no-gutter align-items-center">
                                <div class="col-md-3">                    
                                <a class="text-dark" href=""><img src="{{ url('/assets/images/placeholder.png') }}" height="130" class="card-img-top  " alt=""></a>            
                                </div>
                                <div class="col-md-9">
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
                                        <div class="mr-1"><i class="bi bi-geo-alt text-warning"></i> 2551 Vista Dr #B301 Alaska (AK) Juneau USA</div>
                                        
                                    </div>
                                    </div>
                                    <div class="row social-icon mt-2">
                                    <div class="col-md-8">
                                    <div class="social-icon mb-md-0 mb-2 text-center text-md-start">
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
                                        <a class="text-decoration-none btn btn-outline-warning p-0 lh-1" href="">
                                        <i class="bi bi-arrow-right-short fs-1"></i></a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="list-card card shadow mb-3 p-2 w-100">
                            <div class="row no-gutter align-items-center">
                                <div class="col-md-3">                    
                                <a class="text-dark" href=""><img src="{{ url('/assets/images/placeholder.png') }}" height="130" class="card-img-top  " alt=""></a>            
                                </div>
                                <div class="col-md-9">
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
                                        <div class="mr-1"><i class="bi bi-geo-alt text-warning"></i> 2551 Vista Dr #B301 Alaska (AK) Juneau USA</div>
                                        
                                    </div>
                                    </div>
                                    <div class="row social-icon mt-2">
                                    <div class="col-md-8">
                                    <div class="social-icon mb-md-0 mb-2 text-center text-md-start">
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
                                        <a class="text-decoration-none btn btn-outline-warning p-0 lh-1" href="">
                                        <i class="bi bi-arrow-right-short fs-1"></i></a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>


                        <div class="list-card card shadow mb-3 p-2 w-100">
                            <div class="row no-gutter align-items-center">
                                <div class="col-md-3">                    
                                <a class="text-dark" href=""><img src="{{ url('/assets/images/placeholder.png') }}" height="130" class="card-img-top  " alt=""></a>            
                                </div>
                                <div class="col-md-9">
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
                                        <div class="mr-1"><i class="bi bi-geo-alt text-warning"></i> 2551 Vista Dr #B301 Alaska (AK) Juneau USA</div>
                                        
                                    </div>
                                    </div>
                                    <div class="row social-icon mt-2">
                                    <div class="col-md-8">
                                    <div class="social-icon mb-md-0 mb-2 text-center text-md-start">
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
                                        <a class="text-decoration-none btn btn-outline-warning p-0 lh-1" href="">
                                        <i class="bi bi-arrow-right-short fs-1"></i></a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <div class="mb-3 border-bottom">
                            <h4>Latest Post</h4>
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
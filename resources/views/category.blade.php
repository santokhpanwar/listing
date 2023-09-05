@extends('layouts.app')
 
@section('content')
<section class="grid-banner d-flex align-items-center">
  <div class="container">
    <h1 class="text-center text-white font-weight-bold">Business Availlable </h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center bg-transparent">
        <li class="breadcrumb-item"><a class="text-warning" href="#">Home</a></li>
        <li class="breadcrumb-item text-white">Category Name</li>
      </ol>
    </nav>
  </div>
</section>
<section class="list-wrapper py-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 pr-0 text-center">
        <img class="img-fluid sticky-top" src="{{ url('/assets/images/Side-ads.png') }}" alt="Side Ads">
      </div>
      <!-- middle-content -->
      <div class="col-md-8">
        <div class="container p-0">
          <div class="row">
            <div class="col-md-8">
              <div class="row">
                <div class="col-12 mb-3">
                  <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="sort-by">
                      <h3 class="fw-600">Category Name</h3>
                      <div class="border border-warning w-50"></div>
                    </div>
                    <div class="view-as">
                      <ul class="list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-sliders fa-lg text-dark" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="?view=list"><i class="fa fa-th-list fa-lg text-dark" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="?view=grid"><i class="fa fa-th-large fa-lg text-dark" aria-hidden="true"></i></a></li>
                      </ul>
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
                          <p class="mb-0 h5"><a class="text-dark text-decoration-none" href="">Best SEO Agency in Toronto</a></p>
                                
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
                          <p class="mb-0 h5"><a class="text-dark text-decoration-none" href="">Best SEO Agency in Toronto</a></p>
                                
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
                          <p class="mb-0 h5"><a class="text-dark text-decoration-none" href="">Best SEO Agency in Toronto</a></p>
                                
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
                          <p class="mb-0 h5"><a class="text-dark text-decoration-none" href="">Best SEO Agency in Toronto</a></p>
                                
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

                    <!-- Grid list design -->
                <!-- <div class="col-md-6 d-flex">
                  <div class="grid-card card shadow my-3 w-100 position-relative">
                   
                    <a class="text-dark p-2" href=""><img height="145" src="{{ url('/assets/images/placeholder.png') }}" class="card-img-top" alt=""></a>
                     
                      <div class="card-body p-2">
                        <div class="list-content text-center">
                          <p class="mb-0 h5"><a class="text-dark text-decoration-none" href="">List Title</a></p>
                          
                          <div class="list-location d-flex">
                            <div class="mr-1"><img src="{{ url('/assets/images/location.png') }}" alt=""></div>
                            <span> <i class="fa fa-map-marker text-warning mt-1" aria-hidden="true"></i>      </span>
                          </div>
                          <div class="social-icon mt-3 mb-4">
                            <ul class="list-inline">
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
                      </div>
                      <a href="" class="btn btn-warning text-white b-btn">Continue Reading <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                  </div>
                </div> -->
                
                <div class="col-12 my-3">
                  <img class="img-fluid" src="{{ url('/assets/images/Center-ads.jpg') }}" alt="">
                </div>
                <div class="col-12 my-3">
                  <img class="img-fluid" src="{{ url('/assets/images/Middle-ads.jpg') }}" alt="">
                </div>
                <div class="col-md-12">
                 
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="browse-category px-2 py-2 mb-3 rounded">
                <h4 class="text-dark fw-600">Browse Category</h4>
                <div class="border border-warning w-50"></div>    
             
                <div class="border scroll-category mt-3 shadow">
                  
                  <a href="" class="text-decoration-none d-block mx-2 p-2">Art and Entertanment <i class="fa fa-arrow-right float-end text-warning" aria-hidden="true"></i></a>
                  <a href="" class="text-decoration-none d-block mx-2 p-2">Business <i class="fa fa-arrow-right float-end text-warning" aria-hidden="true"></i></a>

                  <a href="" class="text-decoration-none d-block mx-2 p-2">Computer and Internet <i class="fa fa-arrow-right float-end text-warning" aria-hidden="true"></i></a>

                  <a href="" class="text-decoration-none d-block mx-2 p-2">Game <i class="fa fa-arrow-right float-end text-warning" aria-hidden="true"></i></a>

                  <a href="" class="text-decoration-none d-block mx-2 p-2">Legal <i class="fa fa-arrow-right float-end text-warning" aria-hidden="true"></i></a>

                  <a href="" class="text-decoration-none d-block mx-2 p-2">Resturant <i class="fa fa-arrow-right float-end text-warning" aria-hidden="true"></i></a>
                  <a href="" class="text-decoration-none d-block mx-2 p-2">Shopping <i class="fa fa-arrow-right float-end text-warning" aria-hidden="true"></i></a>

                  <a href="" class="text-decoration-none d-block mx-2 p-2">Shopping Store <i class="fa fa-arrow-right float-end text-warning" aria-hidden="true"></i></a>

                  <a href="" class="text-decoration-none d-block mx-2 p-2">Real Estate <i class="fa fa-arrow-right float-end text-warning" aria-hidden="true"></i></a>

                  <a href="" class="text-decoration-none d-block mx-2 p-2">Pet Service <i class="fa fa-arrow-right float-end text-warning" aria-hidden="true"></i></a>

                  <a href="" class="text-decoration-none d-block mx-2 p-2">Mobile and Repair <i class="fa fa-arrow-right float-end text-warning" aria-hidden="true"></i></a>

                  <a href="" class="text-decoration-none d-block mx-2 p-2">Hotel and Travel <i class="fa fa-arrow-right float-end text-warning" aria-hidden="true"></i></a>

                  <a href="" class="text-decoration-none d-block mx-2 p-2">Sport <i class="fa fa-arrow-right float-end text-warning" aria-hidden="true"></i></a>

                  <a href="" class="text-decoration-none d-block mx-2 p-2">Kids and Teen <i class="fa fa-arrow-right float-end text-warning" aria-hidden="true"></i></a>


               
                </div>
                
              </div>
              <div class="ads mb-3">
                <img src="{{ url('/assets/images/ads1.jpg') }}" alt="" class="img-fluid">
              </div>
              
              <div class="recent-view shadow p-3 mb-3">
                <h3 class="fw-600">Most Viewed</h3>
                <div class="border border-warning w-50"></div>    

                
                <div class="row my-3 m-0 pb-3 align-items-center">
                  <div class="col-4 p-0">
                    
                   <a class="text-dark" href=""><img class="image-fluid border border-warning" src="{{ url('/assets/images/placeholder.png') }}" width="100%" height="70px" alt=""></a>
                    
                  </div>
                  <div class="col-8 pl-2 p-0">
                    <p class="mb-0 h6"><a href="" class="text-dark text-decoration-none"></a></p>
                    <div class="rating-star">
                      
                      <span></span>
                    </div>  
                    <div class="list-number">
                      <i class="fas fa-map-marker-alt text-warning"></i>city country
                    </div>
                    <div class="list-number">
                      <i class="fas fa-phone-alt text-warning"></i> 1234567890
                    </div>
                  </div>
                </div>
                
              </div>
           

              <div class="ads">
              <img src="{{ url('/assets/images/ads2.jpg') }}" alt="" class="img-fluid">
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- middle-content end -->

      <div class="col-md-2 pl-0 text-center">
        <img class="img-fluid sticky-top" src="{{ url('/assets/images/Side-ads.png') }}" alt="Side Ads">

      </div>
    </div>
  </div>
</section>
@include('layouts.footer')
@endsection
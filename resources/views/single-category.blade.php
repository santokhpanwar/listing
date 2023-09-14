@extends('layouts.app')
 
@section('content')
<section class="grid-banner d-flex align-items-center">
<div class="container-fluid mt-5">
       <div class="col-md-8 mx-auto">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="busines-details">
              <h1 class="text-white">Best SEO Agency in Toronto</h1>
              <span class="rating-star">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star text-white"></i>
                    <i class="bi bi-star text-white"></i>
                </span>
                <span class="text-white">3.0 (6 reviews) </span>
                <a class="text-white fw-bold px-2 text-decoration-none btn-outline-warning btn border-0" href="#review">Add a Review</a>
            </div>
            <div class="cta-bu">
              <!-- <button type="button" class="btn btn-success verified"><i class="fas fa-check "></i> Verified</button> -->
                <form action="#" method="post">
                  <a href="#" id="claim-btn" type="submit" class="btn btn-warning text-white claim" data-toggle="modal" data-target="#exampleModal">Ownership Claim</a>
              </form>
            </div>
          </div>
          <div class="row single-banner-details">
            <div class="col-md-5">
            <i class="bi bi-geo-alt-fill text-warning"></i>
            <a class="text-white text-decoration-none" href="#direction"> 2551 Vista Dr #B301  Alaska (AK) Juneau USA </a>
            </div>
            <div class="col-md-3">
            <i class="bi bi-telephone-outbound text-warning"></i>
              <a class="text-white text-decoration-none" href="tel:888-702-2793"> 888-702-2793</a>
            </div>
            <div class="col-md-4">
              <div class="d-flex align-items-center gap-1">
                <i class="bi bi-envelope-fill text-warning mr-2"></i>
                <a class="text-white text-decoration-none" href="mailto:support@seorims.com">support@seorims.com</a>
              </div>
            </div>
          </div>
          
       </div>
    </div>
  </div>
</section>

<section class="list-wrapper py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 text-center d-none d-lg-block">
                    <img class="img-fluid sticky-top z-n1" src="https://bb.astagingsite.com/assets/images/Side-ads.png" alt="Side Ads">
                </div>
                <!-- middle-content -->
                <div class="col-lg-8 col-md-12">
                <div class="container">
                    <div class="row">                      
                        <div class="col-md-8"> 
                          
                          <div class="tabs mb-3">
                            <ul class="nav nav-pills nav-fill p-2 bg-warning" id="pills-tab" role="tablist">
                              <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-0 active" id="pills-overview-tab" data-bs-toggle="pill" data-bs-target="#pills-overview" type="button" role="tab" aria-controls="pills-overview" aria-selected="true">Overview</button>
                              </li>
                              <li class="nav-item d-none d-md-block" role="presentation">
                                <a class="nav-link rounded-0" id="review" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Review</a>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-0" id="pills-direction-tab" data-bs-toggle="pill" data-bs-target="#pills-direction" type="button" role="tab" aria-controls="pills-direction" aria-selected="false">Direction</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link rounded-0" id="pills-gallery-tab" data-bs-toggle="pill" data-bs-target="#pills-gallery" type="button" role="tab" aria-controls="pills-gallery" aria-selected="false" >Gallery</button>
                              </li>
                            </ul>
                            <div class="tab-content border p-2 " id="pills-tabContent">
                              <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab" tabindex="0">
                                <p>A leading social media advertising agency, AdSquad drives online eCommerce Businesses, scaling online sales, and generating leads with custom ads and expert management. Reach out to see what kind of results your business can get with AdSquad.</p>
                                <p>A leading social media advertising agency, AdSquad drives online eCommerce Businesses, scaling online sales, and generating leads with custom ads and expert management. Reach out to see what kind of results your business can get with AdSquad.</p>
                                      <div class="my-3">
                                          <img class="img-fluid" src="https://bb.astagingsite.com/assets/images/Center-ads.jpg" alt="">
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6 ">
                                              <h4 class="font-weight-bold">Contact Information</h4>
                                              <div class="contact-details">
                                                
                                              <div class="mb-3">
                                                  <span class="me-2"><img src="https://bb.astagingsite.com/assets/images/Phone-1.png" alt=""></span>
                                                  <span>615-933-1927</span>
                                              </div>
                                              <div class="mb-3 d-flex">
                                                  <span class="me-2"><img src="https://bb.astagingsite.com/assets/images/website.png" alt=""></span>
                                                  <span> https://www.adsquad.co</span>
                                              </div>
                                              <div class="mb-3 d-flex">
                                                  <span class="me-2"><img src="https://bb.astagingsite.com/assets/images/Mail2.png" alt=""></span>
                                                  <span> hello@adsquad.co</span>
                                              </div>
                                              
                                              <div class="mb-3 d-flex">
                                                  <span class="me-2"><img src="https://bb.astagingsite.com/assets/images/Location-3.png" alt=""></span>
                                                  <span>Po Box 573  Alabama (AL) Tanner USA </span>
                                              </div>
                                              <div class="mb-3 d-flex align-items-center">
                                                  <!-- <span><img src="https://bb.astagingsite.com/assets/images/Social.png" alt=""></span> -->
                                                  <ul class="list-inline mb-0 social-links">
                                                      <li class="list-inline-item "><a href="" class="btn btn-outline-warning"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                      <li class="list-inline-item "><a href="" class="btn btn-outline-warning"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                      <li class="list-inline-item "><a href="" class="btn btn-outline-warning"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                      <li class="list-inline-item "><a href="" class="btn btn-outline-warning"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                  </ul>
                                              </div>
                                              </div>
                                              <div class="social-icon mb-3">
                                                
                                              </div>
                                          </div>
                                          <div class="col-md-6">
                                              <h4 class="font-weight-bold">Open Hours</h4>
                                              <!-- <p class="text-danger f-14">Hour set on 2023-04-18 05:12:00</p> -->
                                              <div class="timing d-flex justify-content-between">                                  
                                                <div class="days">
                                                  <p><i class="fa fa-clock-o text-warning" aria-hidden="true"></i> Wednesdays</p>
                                                  <p><i class="fa fa-clock-o text-warning" aria-hidden="true"></i> Thursday</p>
                                                  <p><i class="fa fa-clock-o text-warning" aria-hidden="true"></i> Friday</p>
                                                  <p><i class="fa fa-clock-o text-warning" aria-hidden="true"></i> Saturday</p>
                                                  <em class="text-danger">New Year's Eve</em>
                                                  <p><i class="fa fa-clock-o text-warning" aria-hidden="true"></i> Sunday</p>
                                                  <p><i class="fa fa-clock-o text-warning" aria-hidden="true"></i> Monday</p>
                                                  <p><i class="fa fa-clock-o text-warning" aria-hidden="true"></i> Tuesday</p>
                                                </div>
                                                <div class="time">
                                                  <p>02:38 - 17:00</p>
                                                  <p>02:38 - 17:00</p>
                                                  <p>02:38 - 17:00</p>
                                                  <p>02:38 - 17:00</p>
                                                  <em class="text-danger">Hours might Differ</em>
                                                    <p>02:38 - 17:00</p>
                                                    <p>02:38 - 14:38</p>
                                                    <p>02:38 - 17:00</p>
                                                </div>
                                              </div>
                                          </div>
                                      </div>  

                              </div>

                              <!-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div> -->
                              <div class="tab-pane fade" id="pills-direction" role="tabpanel" aria-labelledby="pills-direction-tab" tabindex="0">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4159630.2681330154!2d-94.83727499079575!3d37.91320924445194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1694025766192!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                              </div>
                              <div class="tab-pane fade" id="pills-gallery" role="tabpanel" aria-labelledby="pills-gallery-tab" tabindex="0">
                                <div class="row">
                                  <div class="col-sm-4 mb-2">
                                    <a data-lightbox="photos" href="https://bb.astagingsite.com/storage/app/public/img/business/toronto-seo-expert.jpg">
                                      <img class="img-thumbnail" src="https://bb.astagingsite.com/storage/app/public/img/business/toronto-seo-expert.jpg" alt="">
                                    </a>
                                  </div>
                                  <div class="col-sm-4 mb-2">
                                  <a data-lightbox="photos" href="https://bb.astagingsite.com/storage/app/public/img/business/1681746790_1st-in-seo-logo.jpg">
                                    <img class="img-thumbnail" src="https://bb.astagingsite.com/storage/app/public/img/business/1681746790_1st-in-seo-logo.jpg" alt="">
                                  </a>
                                  </div>
                                  <div class="col-sm-4 mb-2">
                                    <a data-lightbox="photos" href="https://bb.astagingsite.com/storage/app/public/img/business/1681420655_club-woodside.png">
                                      <img class="img-thumbnail" src="https://bb.astagingsite.com/storage/app/public/img/business/1681420655_club-woodside.png" alt="">
                                    </a>
                                  </div>
                                  <div class="col-sm-4 mb-2">
                                    <a data-lightbox="photos" href="https://bb.astagingsite.com/storage/app/public/img/business/toronto-seo-expert.jpg">
                                      <img class="img-thumbnail" src="https://bb.astagingsite.com/storage/app/public/img/business/toronto-seo-expert.jpg" alt="">
                                    </a>
                                  </div>
                                  <div class="col-sm-4 mb-2">
                                  <a data-lightbox="photos" href="https://bb.astagingsite.com/storage/app/public/img/business/1681746790_1st-in-seo-logo.jpg">
                                    <img class="img-thumbnail" src="https://bb.astagingsite.com/storage/app/public/img/business/1681746790_1st-in-seo-logo.jpg" alt="">
                                  </a>
                                  </div>
                                  <div class="col-sm-4 mb-2">
                                    <a data-lightbox="photos" href="https://bb.astagingsite.com/storage/app/public/img/business/1681420655_club-woodside.png">
                                      <img class="img-thumbnail" src="https://bb.astagingsite.com/storage/app/public/img/business/1681420655_club-woodside.png" alt="">
                                    </a>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                          
                          
                            <div class="ads">
                                <img class="img-fluid" src="https://bb.astagingsite.com/assets/images/Middle-ads.jpg" alt="">
                            </div>
                            
                            <div class="reviews card mb-3" id="review">
                                <div class="p-4 pb-0">
                                    <div class="border-0 d-flex flex-wrap justify-content-between">
                                      <h4 class="font-weight-bold">Review <span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt text-warning"></span> ( 4.3 )</h4>
                                      <a href="https://bb.astagingsite.com/login" class="btn btn-warning text-white btn-feature m-0">Write Review</a>
                                    </div>
                                    <div class="row mt-3">
                                      <div class="col-md-12">
                                          <div class="multi-collapse collapse" id="multiCollapseExample2">
                                            <div class="card card-body">
                                                <div class="text-left">
                                                  <form action="https://bb.astagingsite.com/reviews" method="post">
                                                      <p for="review">Write a review : </p>
                                                      <textarea class="p-2 w-100" placeholder="Review" name="review" id="review" cols="55" rows="5" required=""></textarea>
                                                      <div class="star-wrapper text-secondary">
                                                        <p>Rating :</p>
                                                        <div class="rate"><input class="d-none" type="radio" id="star5" name="rate" required="" value="5"><label for="star5" title="5 stars">5 stars</label><input class="d-none" type="radio" id="star4" name="rate" required="" value="4"><label for="star4" title="4 stars">4 stars</label><input class="d-none" type="radio" id="star3" name="rate" required="" value="3"><label for="star3" title="3 stars">3 stars</label><input class="d-none" type="radio" id="star2" name="rate" required="" value="2"><label for="star2" title="2 stars">2 stars</label><input class="d-none" type="radio" id="star1" name="rate" required="" value="1"><label for="star1" title="1 stars">1 stars</label></div>
                                                      </div>
                                                      <input type="hidden" name="_id" value="14"><input type="hidden" name="_token" value="Ew9m48Y7hemB8ED0YQrNQyp6OKiwom8EWS2vfUvu"><button type="submit" class="btn btn-warning text-white pull-right">Submit</button>
                                                  </form>
                                                </div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                    <div class="review card-body">
                                      <div class="row mb-3" id="2">
                                          <div class="col-md-2 d-flex justify-content-center mb-4 mb-lg-0 text-center">
                                            <div class="review-img">
                                              <img src="https://bb.astagingsite.com/assets/images/review-img.png" class="rounded-circle img-fluid shadow-1" alt="woman avatar"></div>
                                          </div>
                                          <div class="col-md-10">
                                          <p class="text-muted mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam.</p>
                                            <div class="row">
                                                <div class="col-md-5 rating-star">
                                                  <i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star"></i></div>
                                                <div class="col-md-7 text-right"><i>⚊ Unknown</i></div>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="row mb-3" id="3">
                                          <div class="col-md-2 d-flex justify-content-center mb-4 mb-lg-0 text-center">
                                            <div class="review-img"><img src="https://bb.astagingsite.com/assets/images/review-img.png" class="rounded-circle img-fluid shadow-1" alt="woman avatar"></div>
                                          </div>
                                          <div class="col-md-10">
                                          <p class="text-muted mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam.</p>
                                            <div class="row">
                                                <div class="col-md-5 rating-star"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star"></i></div>
                                                <div class="col-md-7 text-right"><i>⚊ Biznes Buzzer</i></div>
                                            </div>
                                          </div>
                                      </div>
                                      <div class="row mb-3" id="4">
                                          <div class="col-md-2 d-flex justify-content-center mb-4 mb-lg-0 text-center">
                                            <div class="review-img"><img src="https://bb.astagingsite.com/assets/images/review-img.png" class="rounded-circle img-fluid shadow-1" alt="woman avatar"></div>
                                          </div>
                                          <div class="col-md-10">
                                            <p class="text-muted mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam.</p>
                                            <div class="row">
                                                <div class="col-md-5 rating-star"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i></div>
                                                <div class="col-md-7 text-right"><i>⚊ Biznes Buzzer</i></div>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                              </div>
                            <div class="ads">
                                <img class="img-fluid" src="https://bb.astagingsite.com/assets/images/Last-ads.jpg" alt="">
                            </div>

                        </div>


                        <div class="col-md-4 px-0">
                            <div class="ads mb-3"><img src="https://bb.astagingsite.com/assets/images/ads1.jpg" alt="ads1" class="img-fluid"></div>
                            <div class="recent-view shadow p-3 mb-3">
                                 <h3 class="fw-600">Most Viewed</h3>
                                <div class="border border-warning w-50"></div>   
                                                
                                <div class="row my-3 m-0 align-items-center">
                                  <div class="col-4 p-0">                    
                                  <a class="text-dark" href="">
                                    <img class="w-100 border border-warning" height="70" src="{{ url('/assets/images/placeholder.png') }}" alt="">
                                  </a>                    
                                  </div>
                                  <div class="col-8 ps-2 p-0">
                                    <p class="mb-0 h6"><a href="" class="text-dark text-decoration-none">Best SEO Agency</a></p>
                                     
                                    <div class="list-number">
                                      <i class="fa fa-map-marker text-warning"></i> city country
                                    </div>
                                    <div class="list-number">
                                      <i class="fa fa-phone text-warning"></i> 1234567890
                                    </div>
                                  </div>
                                </div>
                                <div class="row my-3 m-0 align-items-center">
                                  <div class="col-4 p-0">                    
                                  <a class="text-dark" href="">
                                    <img class="w-100 border border-warning" height="70" src="{{ url('/assets/images/placeholder.png') }}" alt="">
                                  </a>                    
                                  </div>
                                  <div class="col-8 ps-2 p-0">
                                    <p class="mb-0 h6"><a href="" class="text-dark text-decoration-none">Best SEO Agency</a></p>
                                     
                                    <div class="list-number">
                                      <i class="fa fa-map-marker text-warning"></i> city country
                                    </div>
                                    <div class="list-number">
                                      <i class="fa fa-phone text-warning"></i> 1234567890
                                    </div>
                                  </div>
                                </div>
                                <div class="row my-3 m-0 align-items-center">
                                  <div class="col-4 p-0">                    
                                  <a class="text-dark" href="">
                                    <img class="w-100 border border-warning" height="70" src="{{ url('/assets/images/placeholder.png') }}" alt="">
                                  </a>                    
                                  </div>
                                  <div class="col-8 ps-2 p-0">
                                    <p class="mb-0 h6"><a href="" class="text-dark text-decoration-none">Best SEO Agency</a></p>
                                     
                                    <div class="list-number">
                                      <i class="fa fa-map-marker text-warning"></i> city country
                                    </div>
                                    <div class="list-number">
                                      <i class="fa fa-phone text-warning"></i> 1234567890
                                    </div>
                                  </div>
                                </div>
                                <div class="row my-3 m-0 align-items-center">
                                  <div class="col-4 p-0">                    
                                  <a class="text-dark" href="">
                                    <img class="w-100 border border-warning" height="70" src="{{ url('/assets/images/placeholder.png') }}" alt="">
                                  </a>                    
                                  </div>
                                  <div class="col-8 ps-2 p-0">
                                    <p class="mb-0 h6"><a href="" class="text-dark text-decoration-none">Best SEO Agency</a></p>
                                     
                                    <div class="list-number">
                                      <i class="fa fa-map-marker text-warning"></i> city country
                                    </div>
                                    <div class="list-number">
                                      <i class="fa fa-phone text-warning"></i> 1234567890
                                    </div>
                                  </div>
                                </div>
                                <div class="row my-3 m-0 align-items-center">
                                  <div class="col-4 p-0">                    
                                  <a class="text-dark" href="">
                                    <img class="w-100 border border-warning" height="70" src="{{ url('/assets/images/placeholder.png') }}" alt="">
                                  </a>                    
                                  </div>
                                  <div class="col-8 ps-2 p-0">
                                    <p class="mb-0 h6"><a href="" class="text-dark text-decoration-none">Best SEO Agency</a></p>
                                     
                                    <div class="list-number">
                                      <i class="fa fa-map-marker text-warning"></i> city country
                                    </div>
                                    <div class="list-number">
                                      <i class="fa fa-phone text-warning"></i> 1234567890
                                    </div>
                                  </div>
                                </div>
                                
                              </div>

                              
                              <div class="browse-category px-2 py-2 mb-3 rounded">
                                  <h4 class="text-dark">Browse Category</h4>
                                  <div class="border border-warning w-50"></div>
                                  <div class="border scroll-category mt-3 shadow">
                                    @foreach($Categories as $Categories)                  
                                     <a href="#" class="text-decoration-none d-block mx-2 p-2">{{ $Categories->title}} <i class="fa fa-arrow-right float-end pt-1 text-warning" aria-hidden="true"></i></a>
                                    @endforeach                             
                                </div>
                            </div>
                            </div>
                            

                        </div>
                    </div>
                    </div>
                <!-- middle-content end -->

                <div class="col-md-2 text-center d-none d-lg-block">
                    <img class="img-fluid sticky-top z-n1" src="https://bb.astagingsite.com/assets/images/Side-ads.png" alt="">

                </div>
            </div>
        </div>
   </section>


@include('layouts.footer')
@endsection
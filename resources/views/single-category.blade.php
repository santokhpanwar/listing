@extends('layouts.app')
 
@section('content')
<section class="grid-banner d-flex align-items-center">
  <div class="container">
    <!-- <h1 class="text-center text-white font-weight-bold">Business Availlable </h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center bg-transparent">
        <li class="breadcrumb-item"><a class="text-warning" href="#">Home</a></li>
        <li class="breadcrumb-item text-white">Category Name</li>
      </ol>
    </nav> -->
  </div>
</section>

<section class="list-wrapper py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 text-center">
                    <img class="img-fluid sticky-top" src="https://bb.astagingsite.com/assets/images/Side-ads.png" alt="Side Ads">
                </div>
                <!-- middle-content -->
                <div class="col-md-8">
                <div class="container">
                    <div class="row">                      
                        <div class="col-md-8">                          
                            <div class="tabs mb-3">
                                <nav>
                                    <div class="nav nav-tabs nav-fill bg-warning" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link m-1 active" id="nav-home-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="nav-home" aria-selected="true">Overview</a>
                                        <a class="nav-item nav-link m-1" href="#review">Review</a>
                                        <a class="nav-item nav-link m-1" id="nav-contact-tab" data-toggle="tab" href="#direction" role="tab" aria-controls="nav-contact" aria-selected="false">Directions</a>
                                        <a class="nav-item nav-link m-1" id="nav-about-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="nav-about" aria-selected="false">Gallery</a>
                                    </div></nav>
                                    <div class="tab-content border p-3" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="nav-home-tab">
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
                                    <div class="tab-pane fade" id="direction" role="tabpanel" aria-labelledby="nav-contact-tab">
									                      <div id="googleMap" style="height:300px;" class="w-100"><div style="height: 100%; width: 100%;"><div style="overflow: hidden;"></div></div></div>
                                    </div>
                                    <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="nav-about-tab">
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
								                                <div class="p-4">
                                    <div class="border-0 d-flex justify-content-between">
                                         <h4 class="font-weight-bold">Review  <span class="fas fa-star text-warning"></span><span class="fas fa-star text-warning"></span><span class="fas fa-star text-warning"></span><span class="fas fa-star text-warning"></span><span class="fas fa-star-half-alt text-warning"></span> ( 4.3 )</h4>
                                          
                                          <a href="https://bb.astagingsite.com/login" class="btn btn-warning text-white btn-feature m-0 ">Write Review</a>
                                                                                    
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">	
                                          <div class="multi-collapse collapse" id="multiCollapseExample2" style="">
                                            <div class="card card-body">
                                              <div class="text-left">
                                                <form action="https://bb.astagingsite.com/reviews" method="post">
                                                  <p for="review">Write a review : </p>
												                                                     <textarea class="p-2 w-100" placeholder="Review" name="review" id="review" cols="55" rows="5" required=""></textarea>
                                                  <div class="star-wrapper text-secondary">
												  <p>Rating :</p>
												  													<div class="rate">
																												<input class="d-none" type="radio" id="star5" name="rate" value="5" required="">
															<label for="star5" title="5 stars">5 stars</label>
																												<input class="d-none" type="radio" id="star4" name="rate" value="4" required="">
															<label for="star4" title="4 stars">4 stars</label>
																												<input class="d-none" type="radio" id="star3" name="rate" value="3" required="">
															<label for="star3" title="3 stars">3 stars</label>
																												<input class="d-none" type="radio" id="star2" name="rate" value="2" required="">
															<label for="star2" title="2 stars">2 stars</label>
																												<input class="d-none" type="radio" id="star1" name="rate" value="1" required="">
															<label for="star1" title="1 stars">1 stars</label>
																											  </div>
                                                  </div> 
												  <input type="hidden" name="_id" value="14">
												  <input type="hidden" name="_token" value="Ew9m48Y7hemB8ED0YQrNQyp6OKiwom8EWS2vfUvu">
                                                  <button type="submit" class="btn btn-warning text-white pull-right">Submit</button>
                                                </form>
                                              </div>                              
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    <div class="review card-body"> 
																														<div class="row" id="2">
                        <div class="col-md-2 d-flex justify-content-center mb-4 mb-lg-0 text-center">
                          <div class="review-img">
                            <img src="https://bb.astagingsite.com/assets/images/review-img.png" class="rounded-circle img-fluid shadow-1" alt="woman avatar">
                          </div>                                              
                        </div>
                        <div class="col-md-10">
                          <p class="text-muted mb-2">Test</p>
												<div class="row">
												<div class="col-md-5 rating-star">
													  																													 <i class="fas fa-star text-warning"></i>
																																																									 <i class="fas fa-star text-warning"></i>
																																																									 <i class="fas fa-star text-warning"></i>
																																																									 <i class="fas fa-star text-warning"></i>
																																																									<i class="far fa-star"></i>
																																								  </div>
													 <div class="col-md-7 text-right">
														<i>⚊ Unknown</i>
													</div>
												</div>
                                            </div>
                                        </div> 
																				<div class="row" id="3">
                        <div class="col-md-2 d-flex justify-content-center mb-4 mb-lg-0 text-center">
                          <div class="review-img">
                            <img src="https://bb.astagingsite.com/assets/images/review-img.png" class="rounded-circle img-fluid shadow-1" alt="woman avatar">
                          </div>                                              
                        </div>
                        <div class="col-md-10">
                          <p class="text-muted mb-2">Test</p>
												<div class="row">
												<div class="col-md-5 rating-star">
													  																													 <i class="fas fa-star text-warning"></i>
																																																									 <i class="fas fa-star text-warning"></i>
																																																									 <i class="fas fa-star text-warning"></i>
																																																									 <i class="fas fa-star text-warning"></i>
																																																									<i class="far fa-star"></i>
																																								  </div>
													 <div class="col-md-7 text-right">
														<i>⚊ Biznes Buzzer</i>
													</div>
												</div>
                                            </div>
                                        </div> 
																				<div class="row" id="4">
                        <div class="col-md-2 d-flex justify-content-center mb-4 mb-lg-0 text-center">
                          <div class="review-img">
                            <img src="https://bb.astagingsite.com/assets/images/review-img.png" class="rounded-circle img-fluid shadow-1" alt="woman avatar">
                          </div>                                              
                        </div>
                        <div class="col-md-10">
                          <p class="text-muted mb-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente molestiae numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam.</p>
												<div class="row">
												<div class="col-md-5 rating-star">
													  																													 <i class="fas fa-star text-warning"></i>
																																																									 <i class="fas fa-star text-warning"></i>
																																																									 <i class="fas fa-star text-warning"></i>
																																																									 <i class="fas fa-star text-warning"></i>
																																																									 <i class="fas fa-star text-warning"></i>
																																									  </div>
													 <div class="col-md-7 text-right">
														<i>⚊ Biznes Buzzer</i>
													</div>
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
                            <div class="ads mb-3">
                                <img src="https://bb.astagingsite.com/assets/images/ads1.jpg" alt="ads1" class="img-fluid">
                            </div>
                                                    <div class="recent-view shadow p-3 mb-3">
                        <h4 class="">Most Viewed</h4>
                          <div class="border border-warning w-50"></div>    

                                                    <div class="row my-3 m-0 pb-3 align-items-center">
                            <div class="col-4 p-0">
                                                        <a class="text-dark" href="https://bb.astagingsite.com/article/business/tanzillo-stassin-babcock-pc"><img class="image-fluid border border-warning" src="/storage/app/public/img/business/1682528975_tanzillo-stassin-babcock-p.jpg" width="100%" height="70px" alt="Tanzillo, Stassin &amp; Babcock P.C."></a>
                                                            </div>
                            <div class="col-8 pl-2 p-0">
                                <p class="mb-0 h6"><a href="https://bb.astagingsite.com/article/business/tanzillo-stassin-babcock-pc" class="text-dark text-decoration-none">Tanzillo, Stassin &amp;...</a></p>
                              <div class="rating-star">
                                  <span class="fas fa-star text-warning"></span><span class="fas fa-star text-warning"></span><span class="fas fa-star text-warning"></span><span class="fas fa-star text-warning"></span><span class="fas fa-star text-warning"></span> 
                                  <span>(5.0)</span>
                              </div>
                              <div class="list-number">
                             <i class="fas fa-map-marker-alt text-warning"></i> Craig, USA
                              </div>
                              <div class="list-number">
                              <i class="fas fa-phone-alt text-warning"></i> 2198656262
                              </div>
                            </div>
                          </div>
                                                    <div class="row my-3 m-0 pb-3 align-items-center">
                            <div class="col-4 p-0">
                                                        <a class="text-dark" href="https://bb.astagingsite.com/article/business/main-header-main-headerfhdgh"><img class="image-fluid border border-warning" src="/storage/app/public/img/business/1682470133_kara-peak-vxhv5yydewy-unsplash.jpg" width="100%" height="70px" alt="Main Header Main Headerfhdgh"></a>
                                                            </div>
                            <div class="col-8 pl-2 p-0">
                                <p class="mb-0 h6"><a href="https://bb.astagingsite.com/article/business/main-header-main-headerfhdgh" class="text-dark text-decoration-none">Main Header Main...</a></p>
                              <div class="rating-star">
                                  <span class="fas fa-star text-warning"></span><span class="fas fa-star text-warning"></span><span class="fas fa-star text-warning"></span><span class="fas fa-star text-warning"></span><span class="fas fa-star"></span> 
                                  <span>(4.0)</span>
                              </div>
                              <div class="list-number">
                             <i class="fas fa-map-marker-alt text-warning"></i> Elba, USA
                              </div>
                              <div class="list-number">
                              <i class="fas fa-phone-alt text-warning"></i> 131213132123
                              </div>
                            </div>
                          </div>
                                                    <div class="row my-3 m-0 pb-3 align-items-center">
                            <div class="col-4 p-0">
                                                        <a class="text-dark" href="https://bb.astagingsite.com/article/business/district-7-digital"><img class="image-fluid border border-warning" src="/storage/app/public/img/business/1681770219_digital.png" width="100%" height="70px" alt="District 7 Digital"></a>
                                                            </div>
                            <div class="col-8 pl-2 p-0">
                                <p class="mb-0 h6"><a href="https://bb.astagingsite.com/article/business/district-7-digital" class="text-dark text-decoration-none">District 7 Digital</a></p>
                              <div class="rating-star">
                                  <span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span><span class="fas fa-star"></span> 
                                  <span>(0)</span>
                              </div>
                              <div class="list-number">
                             <i class="fas fa-map-marker-alt text-warning"></i> Atkins, USA
                              </div>
                              <div class="list-number">
                              <i class="fas fa-phone-alt text-warning"></i> 647-875-1077
                              </div>
                            </div>
                          </div>
                                                  </div>
                         
                        
                        <div class="browse-category px-2 py-2 mb-3 rounded">
                                <h4 class="text-dark">Browse Category</h4>
                                <div class="border border-warning w-50"></div>    
                                                          <div class="border scroll-category mt-3 shadow">
                                                               
                            <a href="art-and-entertainment" class="text-decoration-none d-block mx-2 p-2">Art and Entertainment <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="business" class="text-decoration-none d-block mx-2 p-2">Business <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="computer-and-internet" class="text-decoration-none d-block mx-2 p-2">Computer and Internet <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="digital-marketing" class="text-decoration-none d-block mx-2 p-2">Digital Marketing <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="games" class="text-decoration-none d-block mx-2 p-2">Games <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="pet-services" class="text-decoration-none d-block mx-2 p-2">Pet Services <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="mobile-phones-repair" class="text-decoration-none d-block mx-2 p-2">Mobile Phones Repair <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="news" class="text-decoration-none d-block mx-2 p-2">News <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="reference-and-education" class="text-decoration-none d-block mx-2 p-2">Reference and Education <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="sports-and-recreation" class="text-decoration-none d-block mx-2 p-2">Sports and Recreation <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="legal" class="text-decoration-none d-block mx-2 p-2">Legal <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="restaurants" class="text-decoration-none d-block mx-2 p-2">Restaurants <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="hotel-and-travel" class="text-decoration-none d-block mx-2 p-2">Hotel &amp; Travel <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="hotels" class="text-decoration-none d-block mx-2 p-2">Hotels <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="shopping" class="text-decoration-none d-block mx-2 p-2">Shopping <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="shopping-and-store" class="text-decoration-none d-block mx-2 p-2">Shopping &amp; Store <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="real-estate" class="text-decoration-none d-block mx-2 p-2">Real Estate <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="health-and-fitness" class="text-decoration-none d-block mx-2 p-2">Health and Fitness <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="home" class="text-decoration-none d-block mx-2 p-2">Home <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                               
                            <a href="kids-and-teens" class="text-decoration-none d-block mx-2 p-2">Kids and Teens <i class="fa fa-arrow-right float-right text-warning" aria-hidden="true"></i></a>
                                                      </div>                                     
                                                          
                             </div>
                        </div>

                        </div>
                    </div>
                    </div>
                <!-- middle-content end -->

                <div class="col-md-2 text-center">
                    <img class="img-fluid sticky-top" src="https://bb.astagingsite.com/assets/images/Side-ads.png" alt="">

                </div>
            </div>
        </div>
   </section>


@include('layouts.footer')
@endsection
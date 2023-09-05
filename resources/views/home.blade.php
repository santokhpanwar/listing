@extends('layouts.app')
 
@section('content')
<section class="banner d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="explore-anything text-center">
              <h1 class="text-white">Explore <span class="text-warning "><u>Anything</u></span></h1>
              <p class="text-white">All the top locations from restaurants and clubs, to galleries, famous places and more..</p>
            </div>
            <div class="search">
              <form name="search position-relative" method="get" action="{{ url('search') }}">
                <label for="find">Search</label>
                <input type="text" id="search" name="s"  class="search-input" placeholder=".... " value="{{ $str ?? ''}}" autocomplete="off">
                <label class="devider" for="near">Near</label>
                <input type="text" id="near" name="near" class="near" placeholder="Select Location" value="" autocomplete="off">
				<input type="hidden" id="latitude" name="latitude">
				<input type="hidden" id="longitude" name="longitude">
                <button id="button-addon6" type="submit" name="" class="btn btn-default submit-search rounded-pill">
                        <i class="bi bi-search text-white"></i>                        
                </button>
		        </form>
	      </div>
          </div>
        </div>
      </div>
    </section> 
<section class="category pb-5">
  <div class="container">
    <div class="slider slider-nav">
      <div class="slider-item">
        <a href="#">
              <div class="category-item ">
                <div class="category-img   rounded-circle mx-auto">
                  <img class="rounded-circle w-75" src="{{url('/assets/images/art-and-entertainment.png')}}" alt="">
                </div>
              </div> 
              <h5 class="text-center text-dark mb-0">Art and Entertainment</h5>  
            </a>
      </div>
      <div class="slider-item">
        <a href="#">
              <div class="category-item ">
                <div class="category-img   rounded-circle mx-auto">
                  <img class="rounded-circle w-75" src="{{url('/assets/images/art-and-entertainment.png')}}" alt="">
                </div>
              </div> 
              <h5 class="text-center text-dark mb-0">Art and Entertainment</h5>  
            </a>
      </div>
      <div class="slider-item">
        <a href="#">
              <div class="category-item ">
                <div class="category-img   rounded-circle mx-auto">
                  <img class="rounded-circle w-75" src="{{url('/assets/images/art-and-entertainment.png')}}" alt="">
                </div>
              </div> 
              <h5 class="text-center text-dark mb-0">Art and Entertainment</h5>  
            </a>
      </div>
      <div class="slider-item">
        <a href="#">
              <div class="category-item ">
                <div class="category-img   rounded-circle mx-auto">
                  <img class="rounded-circle w-75" src="{{url('/assets/images/art-and-entertainment.png')}}" alt="">
                </div>
              </div> 
              <h5 class="text-center text-dark mb-0">Art and Entertainment</h5>  
            </a>
      </div>
      <div class="slider-item">
        <a href="#">
              <div class="category-item ">
                <div class="category-img   rounded-circle mx-auto">
                  <img class="rounded-circle w-75" src="{{url('/assets/images/art-and-entertainment.png')}}" alt="">
                </div>
              </div> 
              <h5 class="text-center text-dark mb-0">Art and Entertainment</h5>  
            </a>
      </div>
      <div class="slider-item">
        <a href="#">
              <div class="category-item ">
                <div class="category-img   rounded-circle mx-auto">
                  <img class="rounded-circle w-75" src="{{url('/assets/images/art-and-entertainment.png')}}" alt="">
                </div>
              </div> 
              <h5 class="text-center text-dark mb-0">Art and Entertainment</h5>  
            </a>
      </div>
      <div class="slider-item">
        <a href="#">
              <div class="category-item ">
                <div class="category-img   rounded-circle mx-auto">
                  <img class="rounded-circle w-75" src="{{url('/assets/images/art-and-entertainment.png')}}" alt="">
                </div>
              </div> 
              <h5 class="text-center text-dark mb-0">Art and Entertainment</h5>  
            </a>
      </div>
      <div class="slider-item">
        <a href="#">
              <div class="category-item ">
                <div class="category-img   rounded-circle mx-auto">
                  <img class="rounded-circle w-75" src="{{url('/assets/images/art-and-entertainment.png')}}" alt="">
                </div>
              </div> 
              <h5 class="text-center text-dark mb-0">Art and Entertainment</h5>  
            </a>
      </div>
      <div class="slider-item">
        <a href="#">
              <div class="category-item ">
                <div class="category-img   rounded-circle mx-auto">
                  <img class="rounded-circle w-75" src="{{url('/assets/images/art-and-entertainment.png')}}" alt="">
                </div>
              </div> 
              <h5 class="text-center text-dark mb-0">Art and Entertainment</h5>  
            </a>
      </div>
      <div class="slider-item">
        <a href="#">
              <div class="category-item ">
                <div class="category-img   rounded-circle mx-auto">
                  <img class="rounded-circle w-75" src="{{url('/assets/images/art-and-entertainment.png')}}" alt="">
                </div>
              </div> 
              <h5 class="text-center text-dark mb-0">Art and Entertainment</h5>  
            </a>
      </div>
      <div class="slider-item">
        <a href="#">
              <div class="category-item ">
                <div class="category-img   rounded-circle mx-auto">
                  <img class="rounded-circle w-75" src="{{url('/assets/images/art-and-entertainment.png')}}" alt="">
                </div>
              </div> 
              <h5 class="text-center text-dark mb-0">Art and Entertainment</h5>  
            </a>
      </div>
      <div class="slider-item">
        <a href="#">
              <div class="category-item ">
                <div class="category-img   rounded-circle mx-auto">
                  <img class="rounded-circle w-75" src="{{url('/assets/images/art-and-entertainment.png')}}" alt="">
                </div>
              </div> 
              <h5 class="text-center text-dark mb-0">Art and Entertainment</h5>  
            </a>
      </div>
    </div>
  </div>
</section>

<section class="how-it-works py-5">
  <div class="container">
    <h2 class="see-how text-center mb-5"><span class="text-warning">See How</span> It Works</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card text-center px-4 pt-4 mb-5">
          <i><img class="mb-4"src="{{ url('/assets/images/hand.png') }}" alt="Choose a Category"></i>
          <h4 class="fw-bold">Choose a Category</h4>
            <div class="seperator mb-4"></div>
          <p class="mb-0">Before you begin to prepare your Local Business Listing Submission, it is important to select the correct category for your Business.
            <div class="number">1</div>
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center px-4 pt-4 mb-5">
          <i><img class="mb-4"src="{{ url('/assets/images/find.png') }}" alt="Choose a Category"></i>
          <h4 class="fw-bold">Find what you want</h4>
            <div class="seperator mb-4"></div>
          <p class="mb-0">Before you begin to prepare your Local Business Listing Submission, it is important to select the correct category for your Business.
            <div class="number">2</div>
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-center px-4 pt-4 mb-5">
          <i><img class="mb-4"src="{{ url('/assets/images/Explore-Amazing-Places.png') }}" alt="Choose a Category"></i>
          <h4 class="fw-bold">Explore Amazing Places</h4>
            <div class="seperator mb-4"></div>
          <p class="mb-0">Before you begin to prepare your Local Business Listing Submission, it is important to select the correct category for your Business.
            <div class="number">3</div>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>  
@include('layouts.footer')
@endsection
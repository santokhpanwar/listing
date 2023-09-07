@extends('layouts.app')
 
@section('content')
<section class="grid-banner d-flex align-items-center">
  <div class="container">
    <h1 class="text-center text-white font-weight-bold">About </h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center bg-transparent">
        <li class="breadcrumb-item"><a class="text-warning" href="#">Home</a></li>
        <li class="breadcrumb-item text-white">About</li>
      </ol>
    </nav>
  </div>
</section>


<section class="about py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="leading-normal">About Us</h3>
        <p class="leading-normal fs-16">There are many variations of passages of Lorem Ipsum available, but the majority have suffered by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
        <p class="leading-normal fs-16">It is a long established fact that a reader will be distracted by the readable of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
        <a class="btn btn-warning btn-lg mt-2 mb-5" href="javascript:void(0)">View More</a> 
      </div>
      <div class="col-md-6">
          <img src="{{url('/assets/images/placeholder.png')}}" class="img-fluid w-100 rounded" alt="">
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
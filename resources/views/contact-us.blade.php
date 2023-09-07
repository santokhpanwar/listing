@extends('layouts.app')
 
@section('content')<section class="grid-banner d-flex align-items-center">
  <div class="container">
    <h1 class="text-center text-white font-weight-bold">Contact Us </h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center bg-transparent">
        <li class="breadcrumb-item"><a class="text-warning" href="#">Home</a></li>
        <li class="breadcrumb-item text-white">Contact Us</li>
      </ol>
    </nav>
  </div>
</section>


<section class="contact-us py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="card shadow">
          <div class="card-body p-4">
            <form>
              <div class="mb-3">
                <input type="text" placeholder="Name" class="form-control">
              </div>
              <div class="mb-3">
                <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <textarea class="form-control" placeholder="Massage" name="" id="" cols="30" rows="10"></textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100">Send Massage</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('layouts.footer')
@endsection
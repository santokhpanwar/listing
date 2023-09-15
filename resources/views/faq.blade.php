@extends('layouts.app')
 
@section('content')
<section class="grid-banner d-flex align-items-center">
  <div class="container">
    <h1 class="text-center text-white font-weight-bold">FAQ </h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center bg-transparent">
        <li class="breadcrumb-item"><a class="text-warning" href="#">Home</a></li>
        <li class="breadcrumb-item text-white">FAQ</li>
      </ol>
    </nav>
  </div>
</section>

<section class="faq py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-10 mx-auto">
        <div class="accordion" id="accordionExample">
        @if($faq)
          @php $i =1; @endphp
        @foreach($faq as $faqs)
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$i}}" aria-expanded="false" aria-controls="collapseThree">
                {{ $faqs->title}}
              </button>
            </h2>
            <div id="collapse{{$i}}" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                {{ $faqs->body}}
              </div>
            </div>
          </div>
          @php $i++; @endphp
          @endforeach
          @else
            <h4 class="text-center">No Faq Available</h4>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>

@include('layouts.footer')
@endsection
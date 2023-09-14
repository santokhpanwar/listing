@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View listing') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2>{{$listing->title}}</h2>

                    <p>Published At: {{date('Y-m-d', strtotime($listing->published_at))}}</p>
                    <br>
                    <div>
                        {{$listing->body}}
                    </div>
                    @if($listing->images)
                        @foreach(json_decode($listing->images) as $image)
                            <img src="{{ asset('images/' . $image) }}" alt="listing Image">
                        @endforeach                    
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
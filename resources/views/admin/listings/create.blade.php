@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">{{ __('Create listing') }}</div>
                <div class="card-body">
                    <h1 class="my-4">Add New</h1>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <form action="/admin/listings" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">listing Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group mb-3">
                            <label for="">listing Body</label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Publish At</label>
                            <input type="date" name="published_at" class="form-control">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
                
            </div>


@include('layouts.create-form')

            
        </div>
    </div>
</div>
@endsection
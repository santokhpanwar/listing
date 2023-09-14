@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit listing') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="/admin/listings/{{$listing->id}}" method="listing">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">listing Title</label>
                            <input type="text" name="title" class="form-control" value="{{$listing->title}}">
                        </div>

                        <div class="form-group">
                            <label for="">listing Body</label>
                            <textarea name="body" id="" cols="30" rows="10" class="form-control">{{$listing->body}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Publish At</label>
                            <input type="date" name="published_at" class="form-control" value="{{ date('Y-m-d', strtotime($listing->published_at)) }}">
                        </div>

                        <div class="form-group">
                            <label for="">Images</label>
                            <input class="d-block mx-auto" type="file" id="imageInput" accept="image/*"  name="images[]" multiple>
                        </div>

                        
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
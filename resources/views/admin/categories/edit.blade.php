@extends('layouts.admin')

@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Update Category</h4>
                </div>
                <div class="card-body">
                    <form action="/admin/categories" method="POST">
                    <!-- @method('PUT') -->
                        <div class="row g-3">
                            <div class="col-md-6 {{ $errors->has('title') ? 'has-error' : '' }}">
                                <input type="text" name="title" value="{{$Categories->title}}" class="form-control" placeholder="Category Title" >
                                @if($errors->has('title'))
                                    <p class="help-block text-danger mb-0 p-2">
                                    {{ $errors->first('title') }}
                                    </p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <select name="status" value="{{ $Categories->status}}" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>

                            </div>
                            <div class="col-12">
                                <input type="file" value="{{ $Categories->image}}" name="image" class="form-control">
                            </div>
                            
                            <div class="col-md-12 text-end">
                                <button type="submit"class="btn btn-warning text-white fw-bold">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
                <a href="/admin/listings/create" class="btn btn-primary mb-2">Create listing</a> 
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Published At</th>
                            <th>Created at</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($listings as $listing)
                        <tr>
                            <td>{{ $listing->id }}</td>
                            <td>{{ $listing->title }}</td>
                            <td>{{ date('Y-m-d', strtotime($listing->published_at)) }}</td>
                            <td>{{ date('Y-m-d', strtotime($listing->created_at)) }}</td>
                            <td>
                            <a href="/admin/listings/{{$listing->id}}" class="btn btn-primary">Show</a>
                            <a href="/admin/listings/{{$listing->id}}/edit" class="btn btn-primary">Edit</a>
                            <form action="/admin/listings/{{$listing->id}}" method="listing" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
    </div>
</div>
@endsection
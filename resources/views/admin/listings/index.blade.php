@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
        <div class="d-flex flex-wrap justify-content-between">
            <h3>All Listing</h3>
        <a href="/admin/listings/create" class="btn btn-success text-white fw-bold mb-2 "><i class="fa fa-plus" area-hidden="true"></i> Create listing</a> 

        </div>
                <br>
                <!-- <table class="table table-bordered">
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
                </table> -->
                    <div class="listing-list table-responsive">
                    <table class="table table-bordered  mb-0 border-top table align-middle">
                        <thead class="table-secondary">
                            <tr>  
                                <th class="border-bottom-0">ID</th>                              
                                <th class="border-bottom-0">Title</th>
                                <th class="border-bottom-0">Category</th>
                                <th class="border-bottom-0">Published At</th>
                                <th class="border-bottom-0">Created at</th>
                                <!-- <th class="border-bottom-0">Status</th> -->
                                <th class="border-bottom-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($listings as $listing)
                            <tr>
                                <td>{{ $listing->id }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                    <img src="{{url('/assets/images/placeholder.png')}}" height="50" width="50" alt="img" class="rounded"> 
                                    <div class="list-body">
                                        <div class="card-item-desc ms-1">
                                            <a class="text-dark" href="javascript:void(0)">
                                                <p class="font-weight-semibold2 mb-0">{{ $listing->title }}</p>
                                            </a>
                                            <a href="javascript:void(0)" class="mb- 2 desc">
                                            <i class="bi bi-clock"></i> Every day 9am-10pm
                                            </a>
                                            <a href="javascript:void(0)" class="desc">
                                            <i class="bi bi-tag"></i> New York, NY 10012, US-52014
                                            </a> 
                                        </div>
                                    </div>
                                    </div>
                                </td>
                                <td class="text-center">Category</td>
                                <td class="text-center">{{ date('Y-m-d', strtotime($listing->published_at)) }}</td>
                                <td class="text-center">{{ date('Y-m-d', strtotime($listing->created_at)) }}</td>
                                <td class="text-center">  
                                    <a href="/admin/listings/{{$listing->id}}" class="btn btn-primary me-1 btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="bi bi-pencil"></i></a> 
                                    <form action="/admin/listings/{{$listing->id}}" method="listing" class="d-inline">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <button class="btn btn-danger me-1 btn-sm" type="submit" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="bi bi-trash"></i></button> 
                                    </form>
                                    <a href="/admin/listings/{{$listing->id}}" class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="bi bi-eye"></i></a> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> 
    </div>
</div>
@endsection
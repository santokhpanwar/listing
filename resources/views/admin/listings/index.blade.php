@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12"> 
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-3 border-bottom mb-3">
                <h3 class="mb-0">All Business </h3>
                <a href="/admin/listings/create" class="btn btn-success text-white btn-lg fw-bold "><i class="bi bi-plus-circle"></i> Create listing</a> 

            </div>
            <div class="card-body">
                <div class="listing-list table-responsive">
                @if($listings)

                    <table class="table table-bordered mb-3">
                        <thead class="table-secondary">
                            <tr>  
                                <th class="text-center">ID</th>                              
                                <th class="">Title</th>
                                <th class="text-center">Category</th>
                                <th class="text-center">Published At</th>
                                <th class="text-center">Created By</th>
                                <!-- <th class="">Status</th> -->
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($listings as $listing)
                            <tr>
                                <td class="text-center">{{ $listing->id }}</td>
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
                                <td class="text-center">{{ $listing->category}}</td>
                                <td class="text-center">{{ date('Y-m-d', strtotime($listing->published_at)) }}</td>
                                <td class="text-center">Admin</td>
                                <td class="text-center">  
                                    <a href="/admin/listings/{{$listing->id}}/edit" class="btn btn-primary me-1 btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="bi bi-pencil"></i></a> 
                                    <a href="/admin/listings/{{$listing->id}}" class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="bi bi-eye"></i></a> 
                                    <form action="/admin/listings/{{$listing->id}}" method="listing" class="d-inline">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <button class="btn btn-danger me-1 btn-sm" type="submit" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="bi bi-trash"></i></button> 
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else 
                            <h4 class="text-center">NO Business Available !</h4>
                            @endif
                        </tbody>
                    </table>
                    
                    <!-- <div class="pagination py-3">
                        <ul class="pagination mb-0  mx-auto">
                            <li class="page-item page-prev disabled"> <a class="page-link" href="javascript:void(0)" tabindex="-1"><i class="fa fa-angle-left" aria-hidden="true"></i></a> </li>
                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                            <li class="page-item page-next"> <a class="page-link" href="javascript:void(0)"><i class="fa fa-angle-right" aria-hidden="true"></i></a> </li>
                        </ul>
                    </div>                             -->
                </div>
            </div>
            <div class="float-end">
                {{ $listings->links() }}
            </div>
        </div> 
    </div>
</div>
@endsection
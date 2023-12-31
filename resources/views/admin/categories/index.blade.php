@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="d-flex flex-wrap justify-content-between align-items-center pb-3 mb-3 border-bottom">
                <h3 class="mb-0">All Categories </h3>
                <a href="/admin/categories/create" class="btn btn-success btn-lg text-white fw-bold "><i class="bi bi-plus-circle"></i> Create Categoris</a> 
            </div>
            <div class="card-body">
                <div class="listing-list table-responsive">
                @if($Categories)

                    <table class="table table-bordered  mb-0 border-top table align-middle">
                        <thead class="table-secondary">
                            <tr>  
                                <th class="text-center">ID</th> 
                                <th class="text-center">Image</th>                             
                                <th class="">Title</th>
                                <th class="text-center">Created at</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($Categories as $Categories)
                            <tr>
                                <td class="text-center">{{ $Categories->id }}</td>
                                <td class="text-center ">
                                    <img class="rounded" width="80" height="60" src="{{ url('/assets/images/placeholder.png')}}" alt="">
                                </td>
                                <td class="">{{ $Categories->title }}</td>
                                <td class="text-center">{{ date('Y-m-d', strtotime($Categories->published_at)) }}</td>
                                <!-- $status=  -->
                                @if($Categories->status == '1')
                                <td class="text-center text-success"><span class="badge bg-success mb-0">Active</span</td>
                                @else
                                <td class="text-center text-danger"><span class="badge bg-danger mb-0">Inactive</span></td>
                                @endif

                                
                                <td class="text-center ">
                                    <a href="/admin/categories/{{$Categories->id}}/edit" class="btn btn-primary  btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="bi bi-pencil"></i></a> 
                                    <a href="/admin/categories/show" class="btn btn-success btn-sm  m-1 me-md-0" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="bi bi-eye"></i></a> 
                                    <form action="/admin/categories/{{$Categories->id}}" method="Categories" class="d-inline">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <button class="btn btn-danger  btn-sm" type="submit" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="bi bi-trash"></i></button> 
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <h4 class="text-center">No Categories Available!</h4>
                            @endif
                        
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
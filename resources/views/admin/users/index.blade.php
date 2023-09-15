@extends('layouts.admin')  

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12"> 
            <div class="card">
                <div class="card-header">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <h3 class="mb-0">All Users </h3>
                    <!-- <a href="/admin/listings/create" class="btn btn-success text-white fw-bold "><i class="bi bi-plus-circle"></i> Create listing</a>  -->

                </div>
                </div>
                <div class="card-body">
                    <div class="listing-list table-responsive">
                        <table class="table table-bordered  mb-0 border-top table align-middle">
                            <thead class="table-secondary">
                                <tr>  
                                    <th>ID</th>                              
                                    <th>Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">User Type</th>
                                    <th class="text-center">Created at</th>
                                    <!-- <th>Status</th> -->
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>  
                            @foreach($user as $users)                          
                                <tr>
                                    <td>{{ $users->id}}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                        <img src="{{url('/assets/images/placeholder.png')}}" height="50" width="50" alt="img" class="rounded"> 
                                        <div class="list-body">
                                            <div class="card-item-desc ms-1">
                                                <a class="text-dark" href="javascript:void(0)">
                                                    <p class="font-weight-semibold2 mb-0">{{ $users->name}}</p>
                                                </a>                                                
                                            </div>
                                        </div>
                                        </div>
                                    </td>
                                    <td class="">{{ $users->email}}</td>
                                    <td class="">{{ $users->type}}</td>
                                    <td class="text-center">{{ date('Y-m-d', strtotime($users->created_at)) }}</td>
                                    <td class="text-center">  
                                        <a href="" class="btn btn-primary me-1 btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="bi bi-pencil"></i></a> 
                                        <a href="" class="btn btn-success btn-sm" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="bi bi-eye"></i></a> 
                                        <form action="" method="listing" class="d-inline">
                                            {{ csrf_field() }}
                                            @method('DELETE')
                                            <button class="btn btn-danger me-1 btn-sm" type="submit" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="bi bi-trash"></i></button> 
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection
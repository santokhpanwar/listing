@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">           
                
                <div class="card">
                    <div class="card-header">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <h3 class="mb-0">All Categories </h3>
                        <a href="/admin/listings/create" class="btn btn-success text-white fw-bold "><i class="fa fa-plus" area-hidden="true"></i> Create Categoris</a> 

                    </div>
                    </div>
                    <div class="card-body">
                        <div class="listing-list table-responsive">
                            <table class="table table-bordered  mb-0 border-top table align-middle">
                                <thead class="table-secondary">
                                    <tr>  
                                        <th class="border-bottom-0">ID</th> 
                                        <th>Image</th>                             
                                        <th class="border-bottom-0">Title</th>
                                        <th class="border-bottom-0">Published At</th>
                                        <th class="border-bottom-0">Created at</th>
                                        <th class="border-bottom-0">Status</th>
                                        <th class="border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center ">
                                        <img class="rounded" width="80" height="60" src="http://127.0.0.1:8000/assets/images/placeholder.png" alt="">
                                    </td>
                                    <td class="">Art and Entertainment</td>
                                    <td class="text-center">2023-09-08</td>
                                    <td class="text-center">2023-09-08</td>
                                    <td class="text-center">Published</td>
                                    <td class="text-center d-flex">
                                        <a href="/admin/categories/edit" class="btn btn-primary me-1 btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="bi bi-pencil"></i></a> 
                                        <a href="/admin/categories/show" class="btn btn-success btn-sm me-1" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="bi bi-eye"></i></a> 
                                        <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="bi bi-trash"></i></a> 
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center ">
                                        <img class="rounded" width="80" height="60" src="http://127.0.0.1:8000/assets/images/placeholder.png" alt="">
                                    </td>
                                    <td class="">Games</td>
                                    <td class="text-center">2023-09-08</td>
                                    <td class="text-center">2023-09-08</td>
                                    <td class="text-center">Published</td>
                                    <td class="text-center d-flex">
                                        <a href="/admin/categories/edit" class="btn btn-primary me-1 btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="bi bi-pencil"></i></a> 
                                        <a href="/admin/categories/show" class="btn btn-success btn-sm me-1" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="bi bi-eye"></i></a> 
                                        <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="bi bi-trash"></i></a> 
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
    </div>
</div>
@endsection
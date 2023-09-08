@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">           
                
                <div class="card">
                    <div class="card-header">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <h3 class="mb-0">All Categories </h3>
                        <a href="/admin/listings/create" class="btn btn-success text-white fw-bold "><i class="fa fa-plus" area-hidden="true"></i> Create listing</a> 

                    </div>
                    </div>
                    <div class="card-body">
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
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
    </div>
</div>
@endsection
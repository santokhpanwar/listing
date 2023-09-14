@extends('layouts.admin')  

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">   
            <div class="card">
                <div class="card-header">
                    <h1 class="h2 mb-0">Dashboard</h1>
                </div>
               <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body d-flex align-items-center py-4 justify-content-center rounded">
                                <div class="card-icon bg-light p-3 rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-card-list text-dark" style="font-size:40px;"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 class="text-warning h1">10</h6>
                                        <span class="text-white small pt-2 ps-1 ">All Listing</span>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{ url('/admin/listings')}}">View Details</a>
                                    <div class="small text-white"><i class="bi bi-chevron-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body d-flex align-items-center py-4 justify-content-center rounded">
                                <div class="card-icon bg-light p-3 rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-tag text-dark" style="font-size:40px;"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 class="text-warning h1">145</h6>
                                        <span class="text-white small pt-2 ps-1 ">No of Categories</span>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="{{url('/admin/categories')}}">View Details</a>
                                    <div class="small text-white"><i class="bi bi-chevron-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-info text-white mb-4">
                                <div class="card-body d-flex align-items-center py-4 justify-content-center rounded">
                                <div class="card-icon bg-light p-3 rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people text-dark" style="font-size:40px;"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 class="text-warning h1">145</h6>
                                        <span class="text-white small pt-2 ps-1 ">No of Users</span>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="bi bi-chevron-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card bg-secondary text-white mb-4">
                                <div class="card-body d-flex align-items-center py-4 justify-content-center rounded">
                                <div class="card-icon bg-light p-3 rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-briefcase text-dark" style="font-size:40px;"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 class="text-warning h1">145</h6>
                                        <span class="text-white small pt-2 ps-1 ">No of Post</span>
                                    </div>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" href="#">View Details</a>
                                    <div class="small text-white"><i class="bi bi-chevron-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>                    
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')
 
@section('content')
<section class="grid-banner d-flex align-items-center">
  <div class="container">
    <h1 class="text-center text-white font-weight-bold">My Listing</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center bg-transparent">
        <li class="breadcrumb-item"><a class="text-warning" href="#">Home</a></li>
        <li class="breadcrumb-item text-white">My Listing</li>
      </ol>
    </nav>
  </div>
</section>
<section class="dashboard py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="card">
                     <div class="card-header  py-3 bg-white"> 
                        <h5 class="mb-0">My Dashboard</h5>
                     </div> 
                     <div class="card-body text-center item-user bg-white"> 
                        <div class="profile-pic"> 
                            <div class="profile-pic-img"> 
                                <span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="online" aria-label="online"></span> 
                                <img height="100"  src="{{url('/assets/images/user-image.png')}}" class="rounded-circle" alt="user-img" style="width:100px;"> 
                            </div>
                             <a href="userprofile.html" class="text-dark">
                                <h4 class="mt-3 mb-0">{{ Auth::user()->name }}</h4>
                            </a> 
                        </div> 
                    </div> 
                    <aside class="app-sidebar doc-sidebar my-dash"> 
                        <div class="dashboard-menu">
                             <ul class="list-group pb-1">

                                <li class="list-group-item border-top border border-0 rounded-0">
                                     <a class="text-dark" href="{{url('/dashboard')}}">
                                        <span><i class="bi bi-pencil-square"></i> Dashboard</span>
                                        <i class="angle fa fa-angle-right float-end my-1"></i>
                                    </a>
                                 </li>
                                 <li class="list-group-item border-top border border-0 rounded-0">
                                     <a class="text-dark" href="{{url('/add-listing')}}">
                                        <span><i class="bi bi-pencil-square"></i> Add Listing</span>
                                        <i class="angle fa fa-angle-right float-end my-1"></i>
                                    </a>
                                 </li>
                                 <li class="list-group-item border-top border border-0 rounded-0">
                                    <a class="text-dark" href="{{url('/my-account')}}">
                                        <span><i class="bi bi-pencil-square"></i> My Profile</span>
                                        <i class="angle fa fa-angle-right float-end my-1"></i>
                                    </a>
                                 </li>  
                                 <li class="list-group-item border-top border border-0 rounded-0">
                                    <a class="text-dark active" href="{{url('/my-listing')}}">
                                        <span><i class="bi bi-pencil-square"></i> My Listing</span>
                                        <i class="angle fa fa-angle-right float-end my-1"></i>
                                    </a>
                                 </li>  
                                
                                <li class="list-group-item border-top border border-0 rounded-0"> 
                                    <a class="text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-left"></i><span class="side-menu__label ms-2">Logout</span></a> 
                                </li> 
                            </ul> 
                        </div> 
                    </aside> 
                </div>
            </div>
            <div class="col-md-9 col-sm-12">
                <div class="card">
                    <div class="card-header py-3 bg-white">
                        <h5 class="mb-0">My Listings</h5>
                    </div>
                    <div class="card-body p-3 bg-white rounded">
                        <div class="listing-list">
                            <table class="table table-bordered  mb-0 border-top">
                                <thead>
                                    <tr>                                
                                        <th class="border-bottom-0">Ads Details</th>
                                        <th class="border-bottom-0">Category</th>
                                        <th class="border-bottom-0">Status</th>
                                        <th class="border-bottom-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                            <img src="{{url('/assets/images/placeholder.png')}}" height="50" width="50" alt="img" class="rounded"> 
                                            <div class="list-body">
                                                <div class="card-item-desc ms-1">
                                                    <a class="text-dark" href="javascript:void(0)">
                                                        <p class="font-weight-semibold2 mb-0">BHK RealEstates Consultancy</p>
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
                                        <td class="text-center">RealEstate</td>
                                        <td class="text-center"> 
                                            <a class="badge bg-secondary text-center" href="javascript:void(0)">Expired</a> 
                                        </td>
                                        <td class="text-center">  
                                            <a class="btn btn-secondary me-1 btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="bi bi-pencil"></i></a> 
                                            <a class="btn btn-secondary me-1 btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="bi bi-trash"></i></a> 
                                            <a class="btn btn-secondary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="bi bi-eye"></i></a> 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                            <img src="{{url('/assets/images/placeholder.png')}}" height="50" width="50" alt="img" class="rounded"> 
                                            <div class="list-body">
                                                <div class="card-item-desc ms-1">
                                                    <a class="text-dark" href="javascript:void(0)">
                                                        <p class="font-weight-semibold2 mb-0">BHK RealEstates Consultancy</p>
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
                                        <td class="text-center">RealEstate</td>
                                        <td class="text-center"> 
                                            <a class="badge bg-secondary text-center" href="javascript:void(0)">Expired</a> 
                                        </td>
                                        <td class="text-center">  
                                            <a class="btn btn-secondary me-1 btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="bi bi-pencil"></i></a> 
                                            <a class="btn btn-secondary me-1 btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="bi bi-trash"></i></a> 
                                            <a class="btn btn-secondary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="bi bi-eye"></i></a> 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                            <img src="{{url('/assets/images/placeholder.png')}}" height="50" width="50" alt="img" class="rounded"> 
                                            <div class="list-body">
                                                <div class="card-item-desc ms-1">
                                                    <a class="text-dark" href="javascript:void(0)">
                                                        <p class="font-weight-semibold2 mb-0">BHK RealEstates Consultancy</p>
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
                                        <td class="text-center">RealEstate</td>
                                        <td class="text-center"> 
                                            <a class="badge bg-secondary text-center" href="javascript:void(0)">Expired</a> 
                                        </td>
                                        <td class="text-center">  
                                            <a class="btn btn-secondary me-1 btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="bi bi-pencil"></i></a> 
                                            <a class="btn btn-secondary me-1 btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="bi bi-trash"></i></a> 
                                            <a class="btn btn-secondary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="bi bi-eye"></i></a> 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                            <img src="{{url('/assets/images/placeholder.png')}}" height="50" width="50" alt="img" class="rounded"> 
                                            <div class="list-body">
                                                <div class="card-item-desc ms-1">
                                                    <a class="text-dark" href="javascript:void(0)">
                                                        <p class="font-weight-semibold2 mb-0">BHK RealEstates Consultancy</p>
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
                                        <td class="text-center">RealEstate</td>
                                        <td class="text-center"> 
                                            <a class="badge bg-secondary text-center" href="javascript:void(0)">Expired</a> 
                                        </td>
                                        <td class="text-center">  
                                            <a class="btn btn-secondary me-1 btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="bi bi-pencil"></i></a> 
                                            <a class="btn btn-secondary me-1 btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="bi bi-trash"></i></a> 
                                            <a class="btn btn-secondary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="bi bi-eye"></i></a> 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                            <img src="{{url('/assets/images/placeholder.png')}}" height="50" width="50" alt="img" class="rounded"> 
                                            <div class="list-body">
                                                <div class="card-item-desc ms-1">
                                                    <a class="text-dark" href="javascript:void(0)">
                                                        <p class="font-weight-semibold2 mb-0">BHK RealEstates Consultancy</p>
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
                                        <td class="text-center">RealEstate</td>
                                        <td class="text-center"> 
                                            <a class="badge bg-secondary text-center" href="javascript:void(0)">Expired</a> 
                                        </td>
                                        <td class="text-center">  
                                            <a class="btn btn-secondary me-1 btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="bi bi-pencil"></i></a> 
                                            <a class="btn btn-secondary me-1 btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="bi bi-trash"></i></a> 
                                            <a class="btn btn-secondary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="bi bi-eye"></i></a> 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                            <img src="{{url('/assets/images/placeholder.png')}}" height="50" width="50" alt="img" class="rounded"> 
                                            <div class="list-body">
                                                <div class="card-item-desc ms-1">
                                                    <a class="text-dark" href="javascript:void(0)">
                                                        <p class="font-weight-semibold2 mb-0">BHK RealEstates Consultancy</p>
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
                                        <td class="text-center">RealEstate</td>
                                        <td class="text-center"> 
                                            <a class="badge bg-secondary text-center" href="javascript:void(0)">Expired</a> 
                                        </td>
                                        <td class="text-center">  
                                            <a class="btn btn-secondary me-1 btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="bi bi-pencil"></i></a> 
                                            <a class="btn btn-secondary me-1 btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="bi bi-trash"></i></a> 
                                            <a class="btn btn-secondary btn-sm" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="bi bi-eye"></i></a> 
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="center-block text-center mt-5">
                                <div class="d-sm-flex">
                                    <h6 class="mb-4 mb-sm-0 mt-2">Showing <b>1 to 10</b> of 30 entries</h6>
                                    <ul class="pagination mb-0 ms-auto">
                                        <li class="page-item page-prev disabled"> <a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a> </li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item page-next"> <a class="page-link" href="javascript:void(0)">Next</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>                                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footer')
@endsection
@extends('layouts.app')
 
@section('content')

<section class="dashboard py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 mb-3">
                <div class="card"> 
                     <div class="card-header  py-3 bg-white"> 
                        <h5 class="mb-0">My Dashboard</h5>
                     </div> 
                     <div class="card-body text-center item-user"> 
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
                        <div class="app-dashboard-menu">
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
                                    <a class="active text-dark" href="{{url('/my-account')}}">
                                        <span><i class="bi bi-pencil-square"></i> My Profile</span>
                                        <i class="angle fa fa-angle-right float-end my-1"></i>
                                    </a>
                                 </li>  
                                 <li class="list-group-item border-top border border-0 rounded-0">
                                    <a class="text-dark" href="{{url('/my-listing')}}">
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
                        <h5 class="mb-0">My Profile</h5>
                    </div>
                    <div class="card-body p-3 bg-white rounded">
                        <div class="tabpannel">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item flex-fill text-center" role="presentation">
                                    <a class="rounded-0 nav-link active " id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Profile</a>
                                </li>
                                <li class="nav-item flex-fill text-center" role="presentation">
                                    <a class="rounded-0 nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Update Information</a>
                                </li>
                                <li class="nav-item flex-fill text-center" role="presentation">
                                    <a class="rounded-0 nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Change Password</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="profile-log-switch">
                                    <div class="media-heading">
                                        <h3 class="card-title mb-3 font-weight-semibold">Personal Details</h3>
                                    </div>
                                    <ul class="usertab-list mb-0">
                                        <li class="list-group-item"><a href="javascript:void(0)" class="text-dark"><span class="fw-bold">Location :</span> USA</a></li>
                                        <li class="list-group-item"><a href="javascript:void(0)" class="text-dark"><span class="fw-bold">Full Name :</span> Rubin Carmody</a></li>
                                        <li class="list-group-item"><a href="javascript:void(0)" class="text-dark"><span class="fw-bold">Languages :</span> English, German, Spanish.</a></li>
                                        <li class="list-group-item"><a href="javascript:void(0)" class="text-dark"><span class="fw-bold">Website :</span>Bizness.com</a></li>
                                        <li class="list-group-item"><a href="javascript:void(0)" class="text-dark"><span class="fw-bold">Email :</span> georgemestayer@bizness.com</a></li>
                                        <li class="list-group-item"><a href="javascript:void(0)" class="text-dark"><span class="fw-bold">Phone :</span> +125 254 3562 </a></li>
                                    </ul>
                                    <div class="mt-5 d-inline-block">
                                        <div class="">
                                            <div class="media-heading">
                                                <h3 class="card-title mb-3 font-weight-semibold">Biography</h3>
                                            </div>
                                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus how to pursue pleasure rationally encounter but because those who do not know how to pursue consequences that are extremely</p>
                                        </div>
                                    </div>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                <form action="">
                                <div class="row" data-select2-id="select2-data-12-eoy6"> 
                                    <div class="col-sm-6 col-md-6"> <div class="form-group"> 
                                        <label class="form-label">First Name</label> 
                                        <input type="text" class="form-control" placeholder="First Name"> 
                                    </div> 
                                </div> 
                                <div class="col-sm-6 col-md-6"> 
                                    <div class="form-group"> 
                                        <label class="form-label">Last Name</label> 
                                        <input type="text" class="form-control" placeholder="Last Name"> 
                                    </div> 
                                </div> 
                                <div class="col-sm-6 col-md-6"> 
                                    <div class="form-group"> 
                                        <label class="form-label">Email address</label> 
                                        <input type="email" class="form-control" placeholder="Email"> 
                                    </div> 
                                </div> 
                                <div class="col-sm-6 col-md-6"> 
                                    <div class="form-group"> 
                                        <label class="form-label">Phone Number</label> 
                                        <input type="number" class="form-control" placeholder="Number"> 
                                    </div> 
                                </div> 
                                <div class="col-md-12"> 
                                    <div class="form-group"> 
                                        <label class="form-label">Address</label> 
                                        <input type="text" class="form-control" placeholder="Home Address"> 
                                    </div> 
                                </div> 
                                <div class="col-sm-6 col-md-4"> 
                                    <div class="form-group"> 
                                        <label class="form-label">City</label> 
                                        <input type="text" class="form-control" placeholder="City"> 
                                    </div> 
                                </div> 
                                <div class="col-sm-6 col-md-3"> 
                                    <div class="form-group"> 
                                        <label class="form-label">Postal Code</label> 
                                        <input type="number" class="form-control" placeholder="ZIP Code"> 
                                    </div> 
                                </div> 
                                <div class="col-md-5" data-select2-id="select2-data-11-n1jm"> 
                                    <div class="form-group" data-select2-id="select2-data-10-5yh8"> 
                                        <label class="form-label">Country</label> 
                                        <select class="form-control select2-show-search border-bottom-0 w-100 select2-hidden-accessible" data-placeholder="Select" data-select2-id="select2-data-3-o0fy" tabindex="-1" aria-hidden="true"> 
                                            <optgroup label="Categories" data-select2-id="select2-data-21-ahvr"> 
                                                <option data-select2-id="select2-data-5-uoii">--Select--</option> 
                                                <option value="1" data-select2-id="select2-data-22-397u">Germany</option> 
                                                <option value="2" data-select2-id="select2-data-23-5fmb">Real Estate</option> 
                                                
                                            </optgroup> 
                                        </select> 
                                    </div> 
                                </div> 
                            <div class="col-sm-6 col-md-6"> 
                                <div class="form-group"> 
                                    <label class="form-label">Facebook</label> 
                                    <input type="text" class="form-control" placeholder="https://www.facebook.com/"> 
                                    </div> 
                                </div> 
                                <div class="col-sm-6 col-md-6"> 
                                    <div class="form-group"> 
                                        <label class="form-label">Google</label> 
                                        <input type="text" class="form-control" placeholder="https://www.google.com/"> 
                                        </div> 
                                    </div> 
                                    <div class="col-sm-6 col-md-6"> 
                                        <div class="form-group"> 
                                            <label class="form-label">Twitter</label> 
                                            <input type="text" class="form-control" placeholder="https://twitter.com/"> 
                                            </div> 
                                        </div> 
                                        <div class="col-sm-6 col-md-6"> 
                                            <div class="form-group"> 
                                                <label class="form-label">Pinterest</label> 
                                                <input type="text" class="form-control" placeholder="https://in.pinterest.com/"> 
                                            </div> 
                                            </div> 
                                            <div class="col-md-12">
                                                <div class="form-group"> 
                                                    <label class="form-label">About Me</label> 
                                                    <textarea rows="5" class="form-control" placeholder="Enter About your description" spellcheck="false"></textarea> 
                                                </div> 
                                            </div> 
                                            <div class="col-md-12"> 
                                                <div class="form-group mb-0"> 
                                                    <label class="form-label">Upload Image</label> 
                                                    <div class="form-file"> 
                                                        <input class="form-control example-file-input-custom" type="file" id="formFile" name="example-file-input-custom"> 
                                                    </div> 
                                                </div> 
                                            </div> 
                                            <div class="col-md-12 mt-3">
                                                <button type="submit" class="px-3 py-2 rounded bg-warning border-0 text-white float-end">Update Profile</button>
                                            </div>
                                        </div>
                                            </form>
                                        
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group mb-0"> 
                                            <label class="form-label">Old Password</label> 
                                        <input type="text" class="form-control" placeholder="Enter old password">
                                        </div> 
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-0"> 
                                            <label class="form-label">New Password</label> 
                                        <input type="text" class="form-control" placeholder="New password">
                                        </div> 
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-0"> 
                                            <label class="form-label">Confirm Password</label> 
                                        <input type="text" class="form-control" placeholder="Confirm password">
                                        </div> 
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <button type="submit" class="px-3 py-2 rounded bg-warning border-0 text-white float-end">Update Password</button>
                                    </div>
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
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
                                     <a class="  text-dark" href="{{url('/dashboard')}}">
                                        <span><i class="bi bi-pencil-square"></i> Dashboard</span>
                                        <i class="angle fa fa-angle-right float-end my-1"></i>
                                    </a>
                                 </li>
                                 <li class="list-group-item border-top border border-0 rounded-0">
                                     <a class="active text-dark" href="{{url('/add-listing')}}">
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
                        <h5 class="mb-0">Add Listings</h5>
                    </div>
                    <div class="card-body p-3 bg-white rounded">
                    <form id="commentForm" method="get" class="add-listing-form mb-0" novalidate="novalidate">
                        <div id="rootwizard" class="border pt-0">
                            <ul class="nav nav-pills border-bottom nav-justified d-block d-md-flex ">
                                <li class="nav-item"><a href="#first" data-bs-toggle="tab" class="nav-link font-bold rounded-0 border border-end-1 border-top-0 border-bottom-0  border-start-0  active">Overall Information</a></li>
                                <li class="nav-item"><a href="#second" data-bs-toggle="tab" class="nav-link font-bold rounded-0 border border-end-1 border-top-0 border-bottom-0 border-start-0">Location</a></li>
                                <li class="nav-item"><a href="#third" data-bs-toggle="tab" class="nav-link font-bold rounded-0 border border-end-1 border-top-0 border-bottom-0 border-start-0">Business Info</a></li>
                                <li class="nav-item"><a href="#fourth" data-bs-toggle="tab" class="nav-link font-bold rounded-0  ">Confirmation</a></li>
                            </ul>
                            <div class="tab-content mb-0 b-0">
                                <div class="tab-pane fade card-body active show" id="first">
                                    <div class="control-group form-group">
                                    <div class="form-group"> <label class="form-label text-dark">Listing Title</label> <input type="text" class="form-control required" placeholder="Add List Name" aria-required="true"> </div>
                                    </div>
                                    <div class="form-group"> 
                                        <label class="form-label text-dark">Description</label> 
                                        <textarea id="mytextarea" class="form-control" name="example-textarea-input" rows="6" placeholder="Description"></textarea> 
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label text-dark">Category</label> 
                                                <select id="select-category" class="form-control" multiple="multiple">
                                                    <option value="0" data-select2-id="select2-data-3-9yhx">Select Category</option>
                                                    <option value="1">RealEstate</option>
                                                    <option value="2">Restaurant</option>
                                                    <option value="3">Health &amp; Fitness</option>
                                                    <option value="4">Travel</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label class="form-label text-dark">Phone Number</label> 
                                            <input type="number" class="form-control required" placeholder="Phone Number" aria-required="true"> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label class="form-label text-dark">Opening Days</label> 
                                    <select id="days-multiple" class="form-control " multiple="multiple">
                                        <option value="AllDays" selected="" data-select2-id="select2-data-6-q57z">All Days</option>
                                        <option value="Sunday">Sunday</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
                                    </select>                                   
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label text-dark">Opening Time</label> 
                                            <select class="form-control ">
                                                <option value="12" data-select2-id="select2-data-23-05vf">12am</option>
                                                <option value="1">1am</option>
                                                <option value="2">2am</option>
                                                <option value="3">4am</option>
                                                <option value="4">4am</option>
                                                <option value="5">5am</option>
                                                <option value="6">6am</option>
                                                <option value="7">7am</option>
                                                <option value="8">8am</option>
                                                <option value="9">9am</option>
                                                <option value="10">10am</option>
                                                <option value="11">11am</option>
                                                <option value="13">12pm</option>
                                                <option value="14">1pm</option>
                                                <option value="15">2pm</option>
                                                <option value="16">3pm</option>
                                                <option value="17">4pm</option>
                                                <option value="18">5pm</option>
                                                <option value="19">6pm</option>
                                                <option value="20">7pm</option>
                                                <option value="21">8pm</option>
                                                <option value="22">9pm</option>
                                                <option value="23">10pm</option>
                                                <option value="24">11pm</option>
                                            </select>
                                            <!-- <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-22-a4r1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-8gzk-container" aria-controls="select2-8gzk-container"><span class="select2-selection__rendered" id="select2-8gzk-container" role="textbox" aria-readonly="true" title="12am">12am</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>  -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label text-dark">Closing Time</label> 
                                            <select class="form-control ">
                                                <option value="12" data-select2-id="select2-data-26-r49w">12am</option>
                                                <option value="1">1am</option>
                                                <option value="2">2am</option>
                                                <option value="3">4am</option>
                                                <option value="4">4am</option>
                                                <option value="5">5am</option>
                                                <option value="6">6am</option>
                                                <option value="7">7am</option>
                                                <option value="8">8am</option>
                                                <option value="9">9am</option>
                                                <option value="10">10am</option>
                                                <option value="11">11am</option>
                                                <option value="13">12pm</option>
                                                <option value="14">1pm</option>
                                                <option value="15">2pm</option>
                                                <option value="16">3pm</option>
                                                <option value="17">4pm</option>
                                                <option value="18">5pm</option>
                                                <option value="19">6pm</option>
                                                <option value="20">7pm</option>
                                                <option value="21">8pm</option>
                                                <option value="22">9pm</option>
                                                <option value="23">10pm</option>
                                                <option value="24">11pm</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label text-dark">Image Upload</label> 
                                        <div class="uploader text-center  border rounded m-0 py-4">
                                            <label for="imageInput" class="custom-file-upload">
                                                <i class="fa fa-cloud-upload fa-5x"></i>
                                            </label>
                                            <input class="d-block mx-auto" type="file" id="imageInput" accept="image/*" multiple>
                                            <div id="imagePreview"></div>
                                        </div>
                                    </div>
                                    <div class="form-group"> 
                                        <label class="form-label text-dark">Video Url</label> 
                                        <input type="text" class="form-control" placeholder="Video Url"> 
                                    </div>
                                    
                                    
                                </div>
                                <div class="tab-pane fade card-body border-top-0" id="second">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label class="form-label text-dark">Address</label> 
                                                <input type="text" class="form-control" placeholder="Add List Address"> 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label class="form-label text-dark">Address 2</label> 
                                                <input type="text" class="form-control" placeholder="Add List Address"> 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label class="form-label text-dark">Country</label> 
                                                <input type="text" class="form-control" placeholder="Add List Address"> 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label class="form-label text-dark">State</label> 
                                                <input type="text" class="form-control" placeholder="Add List Address"> 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label class="form-label text-dark">City</label> 
                                                <input type="text" class="form-control" placeholder="Add List Address"> 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group"> 
                                                <label class="form-label text-dark">Zip Code</label> 
                                                <input type="text" class="form-control" placeholder="Add List Address"> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                <div class="tab-pane fade card-body border-top-0" id="third">
                                    
                                   <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <!-- <label class="form-label">Company Established year</label>  -->
                                            <select name="user[year]" class="form-control ">
                                                <option value="">Company Established year</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>                                       
                                            </select>
                                        <!-- <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-9-9tn9" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-useryear-qg-container" aria-controls="select2-useryear-qg-container"><span class="select2-selection__rendered" id="select2-useryear-qg-container" role="textbox" aria-readonly="true" title="1989">1989</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>  -->
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <!-- <label class="form-label text-dark">Services</label>  -->
                                        <select class="form-control ">
                                            <option>Select Category</option>
                                            <option value="0">All Categories</option>
                                            <option value="1">Hotels</option>
                                            <option value="2">Restaurant</option>
                                            <option value="3">Events</option>
                                            <option value="4">Cinema</option>
                                            <option value="5">Gym</option>
                                            <option value="6">Shop &amp; Store</option>
                                            <option value="7">Tours &amp; Travels</option>
                                            <option value="8">Cafe</option>
                                            <option value="9">Mobile Store</option>
                                            <option value="10">College</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select class="form-control ">
                                                <option value="Iso Certified" selected="" data-select2-id="select2-data-19-jdnt">Iso Certified</option>
                                                <option value="Government">Government</option>
                                            </select>                                    
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <input class="form-control" type="number" placeholder="Fax">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <input class="form-control" type="number" placeholder="Toll Free Number">
                                        </div>
                                    </div>   
                                    <div class="col-md-4">
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">
                                                <div class="input-group-text w-7 p-0 border-0 bg-transparent"> <i class="fa fa-facebook tx-16 lh-0 op-6 text-center mx-auto"></i> </div>
                                            </div>
                                        <!-- input-group-text --> <input class="form-control" placeholder="Facebook URL" type="text"> 
                                        </div>
                                    </div>
                                   <div class="col-md-4">
                                    <div class="input-group mb-2">
                                        <div class="input-group-text">
                                            <div class="input-group-text w-7 p-0 border-0 bg-transparent"> <i class="fa fa-twitter tx-16 lh-0 op-6 text-center mx-auto"></i> </div>
                                        </div>
                                    <!-- input-group-text --> <input class="form-control" placeholder="Twitter URL" type="text"> 
                                    </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">
                                                <div class="input-group-text w-7 p-0 border-0 bg-transparent"> <i class="fa fa-google-plus tx-16 lh-0 op-6 text-center mx-auto"></i> </div>
                                            </div>
                                            <input class="form-control" placeholder="GooglePlus URL" type="text"> 
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-group mb-2">
                                            <div class="input-group-text">
                                                <div class="input-group-text w-7 p-0 border-0 bg-transparent"> <i class="fa fa-google-plus tx-16 lh-0 op-6 text-center mx-auto"></i> </div>
                                            </div>
                                            <input class="form-control" placeholder="GooglePlus URL" type="text"> 
                                        </div>
                                    </div>
                                   </div>
                                    <div class="input-group mb-2">
                                    <div class="input-group-text">
                                        <div class="input-group-text w-7 p-0 border-0 bg-transparent"> <i class="fa fa-map-marker tx-16 lh-0 op-6 text-center mx-auto"></i> </div>
                                    </div>
                                    <input class="form-control" placeholder="GoogleMap Location URL" type="text"> 
                                    </div>
                                   
                                   
                                </div>

                                <div class="tab-pane fade card-body border-top-0" id="fourth">
                                    <div class="form-group">
                                        <input type="checkbox" id="privacy" class="me-2">
                                        <label for="privacy">I Agree To Biznesbuzzer <a href="#" class="text-warning">Privacy & Policy</a></label>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" id="terms" class="me-2">
                                        <label for="terms">I Agree To Biznesbuzzer <a href="#" class="text-warning">Terms of Service</a></label>
                                    </div>
                                    
                                </div>
                                <ul class="list-inline wizard mb-0 mt-3 px-5 py-2 bg-light border-top">
                                    <li class="previous list-inline-item disabled"><a href="javascript:void(0)" class="btn btn-secondary mb-0">Previous</a> </li>
                                    <li class="next list-inline-item float-end"><a href="javascript:void(0)" class="btn btn-warning text-white  mb-0">Continue</a></li>
                                </ul>
                            </div>
                        </div>
                    </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .uploader {
  text-align: center;
  margin: 20px;
}

.custom-file-upload {
  border: 2px solid #ccc;
  display: inline-block;
  padding: 6px 12px;
  cursor: pointer;
  background-color: #f5f5f5;
  color: #333;
  border-radius: 4px;
  font-weight: bold;
}

.custom-file-upload:hover {
  background-color: #e5e5e5;
}

.preview-image {
  max-width: 200px;
  max-height: 200px;
  margin: 10px;
  border: 2px solid #ccc;
  border-radius: 4px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}
</style>
@include('layouts.footer')
@endsection
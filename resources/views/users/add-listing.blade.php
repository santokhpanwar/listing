@extends('layouts.app')
 
@section('content')
<section class="grid-banner d-flex align-items-center">
  <div class="container">
    <h1 class="text-center text-white font-weight-bold">Add Listing</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center bg-transparent">
        <li class="breadcrumb-item"><a class="text-warning" href="#">Home</a></li>
        <li class="breadcrumb-item text-white">Add Listing</li>
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
                                     <a class=" active text-dark" href="{{url('/dashboard')}}">
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
                    <form id="commentForm" method="get" class="form-horizontal mb-0" novalidate="novalidate">
                        <div id="rootwizard" class="border pt-0">
                            <ul class="nav nav-tabs nav-justified navtab-wizard bg-muted">
                                <li class="nav-item"><a href="#first" data-bs-toggle="tab" class="nav-link font-bold active">Select category</a></li>
                                <li class="nav-item"><a href="#second" data-bs-toggle="tab" class="nav-link font-bold">Details</a></li>
                                <li class="nav-item"><a href="#third" data-bs-toggle="tab" class="nav-link font-bold">Personal Details</a></li>
                                <li class="nav-item"><a href="#fourth" data-bs-toggle="tab" class="nav-link font-bold ">Payment</a></li>
                            </ul>
                            <div class="tab-content mb-0 b-0">
                                <div class="tab-pane fade card-body active show" id="first">
                                    <div class="control-group form-group mb-5">
                                    <div class="form-group"> <label class="form-label text-dark">Listing Title</label> <input type="text" class="form-control required" placeholder="Add List Name" aria-required="true"> </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="form-group">
                                        <label class="form-label text-dark">Category</label> 
                                        <select class="form-control form-select required select-category category select2 select2-hidden-accessible" data-select2-id="select2-data-1-4qeh" tabindex="-1" aria-hidden="true" aria-required="true">
                                            <option value="0" data-select2-id="select2-data-3-9yhx">Select Category</option>
                                            <option value="1">RealEstate</option>
                                            <option value="2">Restaurant</option>
                                            <option value="3">Health &amp; Fitness</option>
                                            <option value="4">Travel</option>
                                            <option value="5">Computer</option>
                                            <option value="6">Electronics</option>
                                            <option value="7">Jobs</option>
                                            <option value="8">Beauty &amp; Spa</option>
                                            <option value="9">Clothing</option>
                                            <option value="10">Home &amp; Furinture</option>
                                            <option value="11">Vechicles</option>
                                            <option value="12">Education</option>
                                            <option value="13">Services</option>
                                            <option value="14">Events</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-2-7521" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ia97-container" aria-controls="select2-ia97-container"><span class="select2-selection__rendered" id="select2-ia97-container" role="textbox" aria-readonly="true" title="Select Category">Select Category</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> 
                                    </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade card-body border-top-0" id="second">
                                    <div class="form-group"> <label class="form-label text-dark">Add Your Address</label> <input type="text" class="form-control" placeholder="Add List Address"> </div>
                                    <div class="form-group"> <label class="form-label text-dark">Add Phone Number</label> <input type="text" class="form-control" placeholder="Add List Phone Number"> </div>
                                    <div class="form-group">
                                    <label class="form-label text-dark">Opening Days</label> 
                                    <select class="form-control select2 select2-hidden-accessible" data-placeholder="Choose Day" multiple="" data-select2-id="select2-data-4-5l0c" tabindex="-1" aria-hidden="true">
                                        <option value="AllDays" selected="" data-select2-id="select2-data-6-q57z">All Days</option>
                                        <option value="Sunday">Sunday</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
                                    </select>
                                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-5-9f5d" style="width: 100%;">
                                        <span class="selection">
                                            <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                <ul class="select2-selection__rendered" id="select2-pkz1-container">
                                                <li class="select2-selection__choice" title="All Days" data-select2-id="select2-data-7-c9hu"><button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-pkz1-container-choice-su2u-AllDays"><span aria-hidden="true">×</span></button><span class="select2-selection__choice__display" id="select2-pkz1-container-choice-su2u-AllDays">All Days</span></li>
                                                </ul>
                                                <span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-pkz1-container" placeholder="" style="width: 0.75em;"></textarea></span>
                                            </span>
                                        </span>
                                        <span class="dropdown-wrapper" aria-hidden="true"></span>
                                    </span>
                                    </div>
                                    <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label text-dark">Opening Time</label> 
                                            <select class="form-control select2-show-search select2-hidden-accessible" data-placeholder="Choose Time" data-select2-id="select2-data-21-w1rd" tabindex="-1" aria-hidden="true">
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
                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-22-a4r1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-8gzk-container" aria-controls="select2-8gzk-container"><span class="select2-selection__rendered" id="select2-8gzk-container" role="textbox" aria-readonly="true" title="12am">12am</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> 
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label text-dark">Closing Time</label> 
                                            <select class="form-control select2-show-search select2-hidden-accessible" data-placeholder="Choose Time" data-select2-id="select2-data-24-0w51" tabindex="-1" aria-hidden="true">
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
                                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-25-ih3l" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-odkp-container" aria-controls="select2-odkp-container"><span class="select2-selection__rendered" id="select2-odkp-container" role="textbox" aria-readonly="true" title="12am">12am</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> 
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group"> <label class="form-label text-dark">Description</label> <textarea class="form-control" name="example-textarea-input" rows="6" placeholder="text here.."></textarea> </div>
                                    <div class="form-group">
                                    <label class="form-label text-dark">Image Upload</label> <input id="demo" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png" multiple="" class="ff_fileupload_hidden">
                                    <div class="ff_fileupload_wrap">
                                        <div class="ff_fileupload_dropzone_wrap"><button class="ff_fileupload_dropzone" type="button" aria-label="Browse, drag-and-drop, or paste files to upload"></button></div>
                                        <table class="ff_fileupload_uploads"></table>
                                    </div>
                                    </div>
                                    <h4 class="mt-6 mb-4">Social Media Information</h4>
                                    <div class="input-group mb-4">
                                    <div class="input-group-text">
                                        <div class="input-group-text w-7 p-0 border-0 bg-transparent"> <i class="fa fa-facebook tx-16 lh-0 op-6 text-center mx-auto"></i> </div>
                                    </div>
                                    <!-- input-group-text --> <input class="form-control" placeholder="Facebook URL" type="text"> 
                                    </div>
                                    <div class="input-group mb-4">
                                    <div class="input-group-text">
                                        <div class="input-group-text w-7 p-0 border-0 bg-transparent"> <i class="fa fa-twitter tx-16 lh-0 op-6 text-center mx-auto"></i> </div>
                                    </div>
                                    <!-- input-group-text --> <input class="form-control" placeholder="Twitter URL" type="text"> 
                                    </div>
                                    <div class="input-group mb-4">
                                    <div class="input-group-text">
                                        <div class="input-group-text w-7 p-0 border-0 bg-transparent"> <i class="fa fa-google-plus tx-16 lh-0 op-6 text-center mx-auto"></i> </div>
                                    </div>
                                    <input class="form-control" placeholder="GooglePlus URL" type="text"> 
                                    </div>
                                    <div class="input-group mb-4">
                                    <div class="input-group-text">
                                        <div class="input-group-text w-7 p-0 border-0 bg-transparent"> <i class="fa fa-map-marker tx-16 lh-0 op-6 text-center mx-auto"></i> </div>
                                    </div>
                                    <input class="form-control" placeholder="GoogleMap Location URL" type="text"> 
                                    </div>
                                    <h4 class="mt-6 mb-4">Business Info</h4>
                                    <div class="form-group">
                                    <label class="form-label">Company Established year</label> 
                                    <select name="user[year]" class="form-control select2 select2-hidden-accessible" data-select2-id="select2-data-8-0lqo" tabindex="-1" aria-hidden="true">
                                        <option value="">Year</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option selected="selected" value="1989" data-select2-id="select2-data-10-2hik">1989</option>
                                        <option value="1988">1988</option>
                                       
                                    </select>
                                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-9-9tn9" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-useryear-qg-container" aria-controls="select2-useryear-qg-container"><span class="select2-selection__rendered" id="select2-useryear-qg-container" role="textbox" aria-readonly="true" title="1989">1989</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> 
                                    </div>
                                    <div class="form-group">
                                    <label class="form-label text-dark">Services</label> 
                                    <select class="form-control select2 select2-hidden-accessible" data-placeholder="Choose Services" multiple="" data-select2-id="select2-data-11-ybep" tabindex="-1" aria-hidden="true">
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
                                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-12-cl45" style="width: 100%;">
                                        <span class="selection">
                                            <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                <ul class="select2-selection__rendered" id="select2-abzp-container"></ul>
                                                <span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-abzp-container" placeholder="Choose Services" style="width: 100%;"></textarea></span>
                                            </span>
                                        </span>
                                        <span class="dropdown-wrapper" aria-hidden="true"></span>
                                    </span>
                                    </div>
                                    <div class="form-group">
                                    <label class="form-label text-dark">Payment Methods</label> 
                                    <select class="form-control select2 select2-hidden-accessible" data-placeholder="Choose Payment" multiple="" data-select2-id="select2-data-13-ur6f" tabindex="-1" aria-hidden="true">
                                        <option value="Cash" selected="" data-select2-id="select2-data-15-m0eq">Cash</option>
                                        <option value="Net Banking">Net Banking</option>
                                        <option value="Visa">Visa</option>
                                        <option value="Master Card">Master Card</option>
                                        <option value="Discover">Discover</option>
                                        <option value="Americal Express">Americal Express</option>
                                        <option value="Online Transaction">Online Transaction</option>
                                    </select>
                                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-14-zjfr" style="width: 100%;">
                                        <span class="selection">
                                            <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                <ul class="select2-selection__rendered" id="select2-7bg3-container">
                                                <li class="select2-selection__choice" title="Cash" data-select2-id="select2-data-16-7t7f"><button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-7bg3-container-choice-82f0-Cash"><span aria-hidden="true">×</span></button><span class="select2-selection__choice__display" id="select2-7bg3-container-choice-82f0-Cash">Cash</span></li>
                                                </ul>
                                                <span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-7bg3-container" placeholder="" style="width: 0.75em;"></textarea></span>
                                            </span>
                                        </span>
                                        <span class="dropdown-wrapper" aria-hidden="true"></span>
                                    </span>
                                    </div>
                                    <div class="form-group"> <label class="form-label">Fax</label> <input type="number" class="form-control" placeholder="Fax Number"> </div>
                                    <div class="form-group"> <label class="form-label">Toll Free</label> <input type="number" class="form-control" placeholder="Toll Free Number"> </div>
                                    <div class="form-group">
                                    <label class="form-label text-dark">Certification</label> 
                                    <select class="form-control select2 select2-hidden-accessible" data-placeholder="Choose Certification" multiple="" data-select2-id="select2-data-17-k7bw" tabindex="-1" aria-hidden="true">
                                        <option value="Iso Certified" selected="" data-select2-id="select2-data-19-jdnt">Iso Certified</option>
                                        <option value="Government">Government</option>
                                    </select>
                                    <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-18-ki5t" style="width: 100%;">
                                        <span class="selection">
                                            <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                <ul class="select2-selection__rendered" id="select2-z99o-container">
                                                <li class="select2-selection__choice" title="Iso Certified" data-select2-id="select2-data-20-q1mp"><button type="button" class="select2-selection__choice__remove" tabindex="-1" title="Remove item" aria-label="Remove item" aria-describedby="select2-z99o-container-choice-5taf-Iso Certified"><span aria-hidden="true">×</span></button><span class="select2-selection__choice__display" id="select2-z99o-container-choice-5taf-Iso Certified">Iso Certified</span></li>
                                                </ul>
                                                <span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-z99o-container" placeholder="" style="width: 0.75em;"></textarea></span>
                                            </span>
                                        </span>
                                        <span class="dropdown-wrapper" aria-hidden="true"></span>
                                    </span>
                                    </div>
                                    <h4 class="mt-6 mb-3">Package</h4>
                                    <div class="control-group form-group">
                                    <label class="form-label text-dark">Ad Post Package</label> 
                                    <div class="d-md-flex ad-post-details"> <label class="custom-control custom-radio mb-2 me-4"> <input type="radio" class="custom-control-input" name="radios1" value="option1" checked=""> <span class="custom-control-label"><a class="text-muted">30 Days Free</a></span> </label> <label class="custom-control custom-radio  mb-2 me-4"> <input type="radio" class="custom-control-input" name="radios1" value="option2"> <span class="custom-control-label"><a class="text-muted">60 days / 20$</a></span> </label> <label class="custom-control custom-radio  mb-2 me-4"> <input type="radio" class="custom-control-input" name="radios1" value="option3"> <span class="custom-control-label"><a class="text-muted">6months / 50$</a></span> </label> <label class="custom-control custom-radio  mb-2"> <input type="radio" class="custom-control-input" name="radios1" value="option4"> <span class="custom-control-label"><a class="text-muted">1 year / 80$</a></span> </label> </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade card-body border-top-0" id="fourth">
                                    
                                </div>
                                <ul class="list-inline wizard mb-0 mt-3 px-5 py-2 bg-light border-top">
                                    <li class="previous list-inline-item disabled"><a href="javascript:void(0)" class="btn btn-primary mb-0">Previous</a> </li>
                                    <li class="next list-inline-item float-end"><a href="javascript:void(0)" class="btn btn-secondary  mb-0">Continue</a></li>
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
@include('layouts.footer')
@endsection
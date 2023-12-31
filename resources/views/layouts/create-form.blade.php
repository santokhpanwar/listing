<div class="">
    <!-- <div class=" py-3">
        <h5 class="mb-0">Add Listings</h5>
    </div> -->
    <div class="bg-white rounded">
        <form action="" >
            @csrf
            <div class="border pt-0 add-listing-form">
                <ul class="nav nav-pills border-bottom nav-justified d-block d-md-flex " id="myTabs">
                    <li class="nav-item">
                        <a class="nav-link font-bold rounded-0 border border-end-1 border-top-0 border-bottom-0  border-start-0  active" data-bs-toggle="tab" href="#tab1">Overall Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-bold rounded-0 border border-end-1 border-top-0 border-bottom-0  border-start-0" data-bs-toggle="tab" href="#tab2">Location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-bold rounded-0 border border-end-1 border-top-0 border-bottom-0  border-start-0" data-bs-toggle="tab" href="#tab3">Business Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-bold rounded-0" data-bs-toggle="tab" href="#tab4">confirmation</a>
                    </li>
                </ul>

                <div class="tab-content mb-0 p-3">
                    <div id="tab1" class="tab-pane fade card-body show active">
                        <div class="control-group form-group">
                            <div class="form-group"> 
                                <label class="form-label text-dark">Listing Title</label> 
                                <input type="text" name="title" class="form-control form-control-lg required" placeholder="Add List Name" aria-required="true"> </div>
                            </div>
                            <div class="form-group"> 
                                <label class="form-label text-dark">Description</label> 
                                <textarea id="mytextarea" name="body" class="form-control form-control-lg" name="example-textarea-input" rows="6" placeholder="Description"></textarea> 
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label text-dark">Category</label> 
                                        <select id="select-category" name="category[]" class="form-control form-control-lg" multiple="multiple">
                                            <!-- <option value="0" data-select2-id="select2-data-3-9yhx">Select Category</option> -->
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
                                    <input type="number" name="phone_number" class="form-control form-control-lg required" placeholder="Phone Number" aria-required="true"> 
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="form-label text-dark">Opening Days</label> 
                            <select id="days-multiple" name="weekday[]"  class="form-control form-control-lg " multiple="multiple">
                                <option value="AllDays" selected>All Days</option>
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
                                    <select id="opening-time" name="opening_time" class="form-control form-control-lg ">
                                        <option value="12">12am</option>
                                        <option value="1">1am</option>
                                        <option value="2">2am</option>
                                        <option value="3">4am</option>
                                        <option value="4">4am</option>
                                        <option value="5">5am</option>
                                        <option value="6">6am</option>
                                        <option value="7">7am</option>
                                        <option value="8">8am</option>
                                        <option value="9" selected="">9am</option>
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
                                    <select id="closing-time" name="closing_time" class="form-control form-control-lg ">
                                        <option value="12">12am</option>
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
                                        <option value="18" selected="">5pm</option>
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
                                <input class="d-none mx-auto" type="file" name="image" id="imageInput" accept="image/*" multiple>
                                <div id="imagePreview"></div>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label class="form-label text-dark">Video Url</label> 
                            <input type="text" name="video_url" class="form-control form-control-lg" placeholder="Video Url"> 
                        </div>                        
                    </div>
                    <div id="tab2" class="tab-pane fade card-body border-top-0">
                    <div class="row">
                            <div class="col-md-4">
                                <div class="form-group"> 
                                    <label class="form-label text-dark">Address</label> 
                                    <input type="text" name="address" class="form-control form-control-lg" placeholder="Add List Address"> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group"> 
                                    <label class="form-label text-dark">Address 2</label> 
                                    <input type="text" name="address2" class="form-control form-control-lg" placeholder="Add List Address"> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group"> 
                                    <label class="form-label text-dark">Country</label> 
                                    <input type="text" name="country" class="form-control form-control-lg" placeholder="Add List Address"> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group"> 
                                    <label class="form-label text-dark">State</label> 
                                    <input type="text" name="state" class="form-control form-control-lg" placeholder="Add List Address"> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group"> 
                                    <label class="form-label text-dark">City</label> 
                                    <input type="text" name="city" class="form-control form-control-lg" placeholder="Add List Address"> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group"> 
                                    <label class="form-label text-dark">Zip Code</label> 
                                    <input type="text" name="zip_code" class="form-control form-control-lg" placeholder="Add List Address"> 
                                </div>
                            </div>
                            <div class="col-sm-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1917595.022299442!2d-96.45101198654778!3d38.937381741359026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1693953951490!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>                        
                    </div>
                    <div id="tab3" class="tab-pane fade card-body border-top-0">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select id="established" name="estb_year" class="form-control form-control-lg">
                                        <option value="">Company Established year</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>                                       
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <!-- <label class="form-label text-dark">Services</label>  -->
                                    <select id="service" name="service" class="form-control form-control-lg ">
                                        <option>Service</option>
                                        <option value="0">All Categories</option>
                                        <option value="1">Hotels</option>
                                        <option value="2">Restaurant</option>
                                        <option value="3">Events</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="iso_certified" class="form-control form-control-lg ">
                                        <option value="Iso Certified" selected>Iso Certified</option>
                                        <option value="Government">Government</option>
                                    </select>                                    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <input class="form-control form-control-lg" type="text" name="fax" placeholder="Fax">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <input class="form-control form-control-lg" type="text" name="toll_free_number" placeholder="Toll Free Number">
                                </div>
                            </div>   
                            <div class="col-md-4">
                                <div class="input-group mb-2">
                                    <div class="input-group-text">
                                        <div class="input-group-text w-7 p-0 border-0 bg-transparent"> <i class="fa fa-facebook tx-16 lh-0 op-6 text-center mx-auto"></i> </div>
                                    </div>
                                <input class="form-control form-control-lg" name="facebook_url" placeholder="Facebook URL" type="text"> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group mb-2">
                                    <div class="input-group-text">
                                        <div class="input-group-text w-7 p-0 border-0 bg-transparent"> <i class="fa fa-twitter tx-16 lh-0 op-6 text-center mx-auto"></i> </div>
                                    </div>
                                <input class="form-control form-control-lg" name="twitter_url" placeholder="Twitter URL" type="text"> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group mb-2">
                                    <div class="input-group-text">
                                        <div class="input-group-text w-7 p-0 border-0 bg-transparent"> <i class="fa fa-linkedin tx-16 lh-0 op-6 text-center mx-auto"></i> </div>
                                    </div>
                                    <input class="form-control form-control-lg" name="linkedin_url" placeholder="Linkedin URL" type="text"> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group mb-2">
                                    <div class="input-group-text">
                                        <div class="input-group-text w-7 p-0 border-0 bg-transparent"> <i class="fa fa-instagram tx-16 lh-0 op-6 text-center mx-auto"></i> </div>
                                    </div>
                                    <input class="form-control form-control-lg" name="instagram_url" placeholder="Instagram URL" type="text"> 
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <div id="tab4" class="tab-pane fade card-body border-top-0">
                        <div class="form-group">
                            <input type="checkbox" name="privacy" id="privacy" class="me-2" checked>
                            <label for="privacy">I Agree To Biznesbuzzer <a href="#" class="text-warning">Privacy & Policy</a></label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="terms" id="terms" class="me-2" checked>
                            <label for="terms">I Agree To Biznesbuzzer <a href="#" class="text-warning">Terms of Service</a></label>
                        </div>
                        <!-- <div class="form-group">
                            <button type="submit" class="btn btn-light">Submit</button>
                        </div> -->
                        
                    </div>
                </div>

                <div class="mt-3">
                    <ul class="list-inline wizard mb-0 mt-3 px-5 py-2 bg-light border-top">
                        <li class="previous list-inline-item disabled"><button id="prevBtn" class="btn btn-secondary mb-0">Prev</button> </li>
                        <li class="next list-inline-item float-end"><button id="nextBtn" class="btn btn-warning text-white  mb-0">next</button></li>
                        <li class="next list-inline-item float-end"><button id="submitBtn" type="submit" class="btn btn-warning text-white  mb-0">Submit</button></li>
                    </ul>                    
                </div>
            </div>
        </form>
    </div>
</div>
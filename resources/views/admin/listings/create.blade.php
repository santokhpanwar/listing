@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <form action="/admin/listings" method="post">
                    @csrf  
                    <div class="card-header"><h4>Add New Listing</h4></div>
                        <div class="card-body">
                        <div class="card mb-3">
                            <div class="card-header bg-white">Overall Information</div>
                            <div class="card-body bg-white">
                                <!-- <h1 class="my-4">Add New</h1> -->
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <!-- @php print_r ($errors); @endphp -->
                                <form action="/admin/listings" method="post">
                                    @csrf                        
                                    <div class="form-group mb-3 {{ $errors->has('title') ? 'has-error' : '' }}"> 
                                        <label class="form-label text-dark">Listing Title</label> 
                                        <input type="text" name="title" class="form-control required" placeholder="List Name" aria-required="true">
                                        @if($errors->has('title'))
                                            <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                            {{ $errors->first('title') }}
                                            </p>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3 {{ $errors->has('body') ? 'has-error' : '' }}"> 
                                        <label class="form-label text-dark">Description</label> 
                                        <textarea id="mytextareaadmin" class="form-control" name="body" rows="10" placeholder="Description"></textarea> 
                                        @if($errors->has('body'))
                                        <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                            {{ $errors->first('body') }}

                                            </p>
                                        @endif
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                                                <label class="form-label text-dark">Category</label> 
                                                <select id="" name="category[]" class="form-control select" multiple="multiple">
                                                    <option value="1">RealEstate</option>
                                                    <option value="2">Restaurant</option>
                                                    <option value="3">Health &amp; Fitness</option>
                                                    <option value="4">Travel</option>
                                                </select>
                                                @if($errors->has('category'))
                                                    <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                                    {{ $errors->first('category') }}
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                                            <label class="form-label text-dark">Phone Number</label> 
                                            <input type="text" name="phone_number" class="form-control" placeholder="Phone number" aria-required="true"> 
                                            @if($errors->has('phone_number'))
                                                <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                                {{ $errors->first('phone_number') }}
                                                </p>
                                            @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 {{ $errors->has('weekday') ? 'has-error' : '' }}">
                                        <label class="form-label text-dark">Opening Days</label> 
                                        <select id="days-multiple-admin" name="weekday[]" class="form-control " multiple="multiple">
                                            <option value="AllDays" selected="" data-select2-id="select2-data-6-q57z">All Days</option>
                                            <option value="Sunday">Sunday</option>
                                            <option value="Monday">Monday</option>
                                            <option value="Tuesday">Tuesday</option>
                                            <option value="Wednesday">Wednesday</option>
                                            <option value="Thursday">Thursday</option>
                                            <option value="Friday">Friday</option>
                                            <option value="Saturday">Saturday</option>
                                        </select>
                                        @if($errors->has('weekday'))
                                            <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                            {{ $errors->first('weekday') }}
                                            </p>
                                        @endif                                   
                                    </div>                                    
                                    <div class="row ">
                                        <div class="col-sm-6">
                                            <div class="form-group mb-3 {{ $errors->has('opening_time') ? 'has-error' : '' }}">
                                                <label class="form-label text-dark">Opening Time</label> 
                                                <select id="opening-time-admin" name="opening_time" class="form-control ">
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
                                                @if($errors->has('opening_time'))
                                                    <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                                    {{ $errors->first('opening_time') }}
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group mb-3 {{ $errors->has('closing_time') ? 'has-error' : '' }}">
                                                <label class="form-label text-dark">Closing Time</label> 
                                                <select id="closing-time" name="closing_time" class="form-control ">
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
                                                @if($errors->has('closing_time'))
                                                    <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                                    {{ $errors->first('closing_time') }}
                                                    </p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header py-3 bg-white">
                                            <h5 class="mb-0">Gallery and Video</h5>
                                        </div>
                                        <div class="card-body p-3 bg-white rounded">
                                            <div class=" pt-0 add-listing-form">
                                            <div class="control-group form-group">
                                                <div class="form-group mb-3 {{ $errors->has('image') ? 'has-error' : '' }}">
                                                    <label class="form-label text-dark">Gallery Images</label> 
                                                    <div class="uploader text-center  border rounded m-0 py-4">
                                                            <label for="imageInput" class="custom-file-upload">
                                                                <i class="fa fa-cloud-upload fa-5x"></i>
                                                            </label>
                                                            <input class="d-block mx-auto" name="image" type="file" id="imageInput" accept="image/*" multiple>
                                                            <div id="imagePreview"></div>
                                                        </div>
                                                        @if($errors->has('image'))
                                                            <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                                            {{ $errors->first('image') }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                    <div class="form-group mb-3 {{ $errors->has('video_url') ? 'has-error' : '' }}"> 
                                                        <label class="form-label text-dark">Video Url</label> 
                                                        <input type="text" name="video_url" class="form-control" placeholder="Video URL"> 
                                                        @if($errors->has('video_url'))
                                                            <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                                            {{ $errors->first('video_url') }}
                                                            </p>
                                                        @endif
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-header py-3 bg-white">
                                            <h5 class="mb-0">Location</h5>
                                        </div>
                                        <div class="card-body p-3 bg-white rounded">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group mb-3 {{ $errors->has('address') ? 'has-error' : '' }}"> 
                                                        <label class="form-label text-dark">Address</label> 
                                                        <input type="text" name="address" class="form-control" placeholder=" Address"> 
                                                        @if($errors->has('address'))
                                                            <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                                            {{ $errors->first('address') }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group mb-3 {{ $errors->has('address2') ? 'has-error' : '' }}"> 
                                                        <label class="form-label text-dark">Address 2</label> 
                                                        <input type="text" name="address2" class="form-control" placeholder=" Address"> 
                                                        @if($errors->has('address2'))
                                                            <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                                            {{ $errors->first('address2') }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group mb-3 {{ $errors->has('country') ? 'has-error' : '' }}"> 
                                                        <label class="form-label text-dark">Country</label> 
                                                        <input type="text" name="country" class="form-control" placeholder="Country"> 
                                                        @if($errors->has('country'))
                                                            <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                                            {{ $errors->first('country') }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group mb-3 {{ $errors->has('state') ? 'has-error' : '' }}"> 
                                                        <label class="form-label text-dark">State</label> 
                                                        <input type="text" name="state" class="form-control" placeholder="State"> 
                                                        @if($errors->has('state'))
                                                            <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                                            {{ $errors->first('state') }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group mb-3 {{ $errors->has('city') ? 'has-error' : '' }}"> 
                                                        <label class="form-label text-dark">City</label> 
                                                        <input type="text" name="city" class="form-control" placeholder="City"> 
                                                        @if($errors->has('city'))
                                                            <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                                            {{ $errors->first('city') }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group mb-3 {{ $errors->has('zip_code') ? 'has-error' : '' }}"> 
                                                        <label class="form-label text-dark">Zip Code</label> 
                                                        <input type="text" name="zip_code" class="form-control" placeholder="Zip Code"> 
                                                        @if($errors->has('zip_code'))
                                                            <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                                            {{ $errors->first('zip_code') }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1917595.022299442!2d-96.45101198654778!3d38.937381741359026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1693953951490!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-header py-3 bg-white">
                                            <h5 class="mb-0">Business Info</h5>
                                        </div>
                                          
                                        <div class="card-body p-3 bg-white rounded">
                                            <div class="row">
                                                <div class="col-md-4 mb-2">
                                                    <div class="form-group mb-3 {{ $errors->has('estb_year') ? 'has-error' : '' }}">
                                                        <select id="established" name="estb_year" class="form-control">
                                                            <option value="">Company Established year</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>                                       
                                                        </select>
                                                        @if($errors->has('estb_year'))
                                                            <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                                            {{ $errors->first('estb_year') }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-2 {{ $errors->has('service') ? 'has-error' : '' }}">
                                                    <div class="form-group mb-3">
                                                        <!-- <label class="form-label text-dark">Services</label>  -->
                                                        <select id="service" name="service" class="form-control ">
                                                            <option value="">Service</option>
                                                            <option value="0">All Categories</option>
                                                            <option value="1">Hotels</option>
                                                            <option value="2">Restaurant</option>
                                                            <option value="3">Events</option>
                                                        </select>
                                                        @if($errors->has('service'))
                                                            <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                                            {{ $errors->first('service') }}
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-2 {{ $errors->has('iso_certified') ? 'has-error' : '' }}">
                                                    <div class="form-group mb-3">
                                                        <select class="form-control" name="iso_certified">
                                                            <option value="Iso Certified" >ISO Certified</option>
                                                            <option value="Government">Government</option>
                                                        </select>  
                                                        @if($errors->has('iso_certified'))
                                                            <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                                            {{ $errors->first('iso_certified') }}
                                                            </p>
                                                        @endif                                  
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3 {{ $errors->has('fax_number') ? 'has-error' : '' }}">
                                                    <input class="form-control" name="fax_number" type="text" placeholder="Fax">
                                                    @if($errors->has('fax_number'))
                                                        <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                                        {{ $errors->first('fax_number') }}
                                                        </p>
                                                    @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3 {{ $errors->has('toll_free_number') ? 'has-error' : '' }}">
                                                    <input class="form-control" name="toll_free_number" type="text" placeholder="Toll Free Number">
                                                    @if($errors->has('toll_free_number'))
                                                        <p class="help-block bg-danger rounded text-white mt-2 p-2">
                                                        {{ $errors->first('toll_free_number') }}
                                                        </p>
                                                    @endif
                                                    </div>
                                                </div>  
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-header py-3 bg-white">
                                            <h5 class="mb-0">Social Media</h5>
                                        </div>
                                        <div class="card-body p-3 bg-white rounded">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3 {{ $errors->has('facebook_url') ? 'has-error' : '' }}">
                                                        <div class="input-group-text">
                                                            <div class="input-group-text w-7 p-0 border-0 bg-transparent"> <i class="fa fa-facebook tx-16 lh-0 op-6 text-center mx-auto"></i> </div>
                                                        </div>
                                                        <input class="form-control" name="facebook_url" placeholder="Facebook URL" type="text">                                                    
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3 {{ $errors->has('twitter_url') ? 'has-error' : '' }}">
                                                        <div class="input-group-text">
                                                            <div class="input-group-text w-7 p-0 border-0 bg-transparent"> <i class="fa fa-twitter tx-16 lh-0 op-6 text-center mx-auto"></i> </div>
                                                        </div>
                                                    <input class="form-control" name="twitter_url" placeholder="Twitter URL" type="text"> 
                                                </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3 {{ $errors->has('linkedin_url') ? 'has-error' : '' }}">
                                                        <div class="input-group-text">
                                                            <div class="input-group-text w-7 p-0 border-0 bg-transparent"> <i class="fa fa-linkedin tx-16 lh-0 op-6 text-center mx-auto"></i> </div>
                                                        </div>
                                                        <input class="form-control" name="linkedin_url" placeholder="Linkedin URL" type="text"> 
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input-group mb-3 {{ $errors->has('instagram_url') ? 'has-error' : '' }}">
                                                        <div class="input-group-text">
                                                            <div class="input-group-text w-7 p-0 border-0 bg-transparent"> <i class="fa fa-instagram tx-16 lh-0 op-6 text-center mx-auto"></i> </div>
                                                        </div>
                                                        <input class="form-control" name="instagram_url" placeholder="Instagram URL" type="text"> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                <label class="form-label text-dark">Status</label> 

                                                    <select name="status" id="" class="form-control">
                                                        <option value="0">Inactive</option>
                                                        <option value="1">Active</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Publish At</label>
                                                        <input type="date" name="published_at" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-header py-3 bg-white">
                                            <h5 class="mb-0">Confirmation</h5>
                                        </div>
                                        <div class="card-body p-3 bg-white rounded">
                                            <div class="form-group">
                                                <input type="checkbox" id="privacy" class="me-2" checked>
                                                <label for="privacy">I Agree To Biznesbuzzer <a href="#" class="text-warning">Privacy & Policy</a></label>
                                            </div>
                                            <div class="form-group">
                                                <input type="checkbox" id="terms" class="me-2" checked>
                                                <label for="terms">I Agree To Biznesbuzzer <a href="#" class="text-warning">Terms of Service</a></label>
                                            </div>                                            
                                        </div>
                                    </div> 
                                                                       
                                </div>
                                <div class="card-footer">
                                    <div class="form-group text-end">
                                        <button type="submit" class="btn btn-warning text-white">Submit</button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </form> 
            </div>            
        </div>
    </div>
</div>
@endsection
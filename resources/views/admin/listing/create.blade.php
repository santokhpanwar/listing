@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11 px-4">
            
                <h1 class="my-4">Add New Listing</h1>
                <h4> <i class="bi bi-folder-fill"> </i> Overall Information</h4>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form id="signUpForm"  action="/admin/listing" method="listing">
                        <!-- start step indicators -->
                        <div class="form-header d-flex mb-4">
                            <span class="stepIndicator">Account Setup</span>
                            <span class="stepIndicator">Social Profiles</span>
                            <span class="stepIndicator">Personal Details</span>
                        </div>
                        <!-- end step indicators -->
                    
                        <!-- step one -->
                        <div class="step">
                         <div class="row">
                            <div class="col-md-12 py-3">
                                <div class="form-group">
                                    <input type="text" placeholder="Listing Title" name="name" class="form-control py-3">
                                </div>
                            </div>
                            <div class="col-md-6 py-3">
                                <div class="form-group">
                                    <select placeholder="Business Categories" id="Categories"  class="form-control py-3">
                                        <option value="1">Art and Entertainment</option>
                                        <option value="2">Business</option>
                                        <option value="3">Computer and Internet</option>
                                        <option value="4">Digital Marketing</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 py-3">
                                <div class="form-group">
                                    <input type="text" placeholder="Phone Number" name="number" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 py-3">
                                <div class="form-group">
                                <textarea id="premiumskinsandicons-bootstrap"></textarea>
                                </div>
                            </div>
                         </div>
                            
                        </div>
                    
                        <!-- step two -->
                        <div class="step">
                            <p class="text-center mb-4">Your presence on the social network</p>
                            <div class="mb-3">
                                <input type="text" placeholder="Linked In" oninput="this.className = ''" name="linkedin">
                            </div>
                            <div class="mb-3">
                                <input type="text" placeholder="Twitter" oninput="this.className = ''" name="twitter">
                            </div>
                            <div class="mb-3">
                                <input type="text" placeholder="Facebook" oninput="this.className = ''" name="facebook">
                            </div>
                        </div>
                    
                        <!-- step three -->
                        <div class="step">
                            <p class="text-center mb-4">We will never sell it</p>
                            <div class="mb-3">
                                <input type="text" placeholder="Full name" oninput="this.className = ''" name="fullname">
                            </div>
                            <div class="mb-3">
                                <input type="text" placeholder="Mobile" oninput="this.className = ''" name="mobile">
                            </div>
                            <div class="mb-3">
                                <input type="text" placeholder="Address" oninput="this.className = ''" name="address">
                            </div>
                        </div>
                    
                        <!-- start previous / next buttons -->
                        <div class="form-footer d-flex">
                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                        <!-- end previous / next buttons -->
                    </form>
                   
                    
                </div>
            
        </div>
    </div>
</div>
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        
        function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("step");
          x[n].style.display = "block";
          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
          } else {
            document.getElementById("nextBtn").innerHTML = "Next";
          }
          //... and run a function that will display the correct step indicator:
          fixStepIndicator(n)
        }
        
        function nextPrev(n) {
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("step");
          // Exit the function if any field in the current tab is invalid:
          if (n == 1 && !validateForm()) return false;
          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("signUpForm").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
        }
        
        function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("step");
          y = x[currentTab].getElementsByTagName("input");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              y[i].className += " invalid";
              // and set the current valid status to false
              valid = false;
            }
          }
          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }
        
        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("stepIndicator");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }
        
</script>
@endsection
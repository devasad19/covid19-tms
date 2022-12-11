@extends('backend.app.backend_index')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Covid19-Testing</h1>
                    <form name="newtesting" method="post">
                      <div class="row">

                        <div class="offset-md-2 col-lg-8">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                </div>
                                <div class="card-body">
                            <div class="form-group">
                            <label>Full Name</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname"  placeholder="Enter your full name..." pattern="[A-Za-z ]+" title="letters only" required="true">
                                        </div>
                            <div class="form-group">
                            <label>Father's Name</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname"  placeholder="Enter your fathar's name..." pattern="[A-Za-z ]+" title="letters only" required="true">
                                        </div>
                                        <div class="form-group">
                                             <label>Mobile Number</label>
                                  <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Please enter your mobile number" pattern="[0-9]{10}" title="10 numeric characters only" required="true" onBlur="mobileAvailability()">
                                                <span id="mobile-availability-status" style="font-size:12px;"></span>
                                        </div>
                                        <div class="form-group">
                                             <label>Date Of Birth</label>
                                            <input type="date" class="form-control" id="dob" name="dob" required="true">
                                        </div>
                                        <div class="form-group">
                                               <label>National ID</label>
                                            <input type="text" class="form-control" id="govtissuedid" name="govtissuedid" placeholder="Enter NID" required="true">
                                        </div>
                                        <div class="form-group">
                                              <label>Birth Certificate Number</label>
                                            <input type="text" class="form-control" id="govtidnumber" name="govtidnumber" placeholder="Enter birth certificate number" required="true">
                                        </div>
                          

                                        <div class="form-group">
                                              <label>Division</label>
                                              <select class="form-control" id="state" name="state" required="true">
                                            <option value="">--select division--</option> 
                                            <option value="Barishal">Barishal</option>    
                                            <option value="Chattogram">Chattogram</option>    
                                            <option value="Dhaka">Dhaka</option>    
                                            <option value="Khulna">Khulna</option>    
                                            <option value="Rajshahi">Rajshahi</option>    
                                            <option value="Rangpur">Rangpur</option>    
                                            <option value="Mymensingh">Mymensingh</option>    
                                            <option value="Sylhet">Sylhet</option>    
                                              </select>
                                        </div>



                                        <div class="form-group">
                                              <label>Address</label>
                                            <textarea class="form-control" id="address" name="address" required="true" placeholder="Enter your full addres here"></textarea>
                                        </div>
                                    

                            <div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">                           
                             </div>

                                </div>
                            </div>

                        </div>

                         

                    </div>
</form>

                </div>
                <!-- /.container-fluid -->
@endsection


@section('scripts')
   

@endsection







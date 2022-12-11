@extends('backend.app.backend_index')

@section('content')
                    <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Covid19-Testing | Already Registeres Users</h1>

                    <form method="post">
                      <div class="row">

                        <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                          
                                <div class="card-body">
                                    <div class="form-group">
                                             <label>Registered Mobile Number</label>
                                            <input type="text" class="form-control" id="regmobilenumber" name="regmobilenumber" placeholder="Please enter your registered mobile number" pattern="[0-9]{10}" title="10 numeric characters only" required="true" maxlength="10">
                                        </div>
                                    <div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-user btn-block" name="search" value="Search">                           
                             </div>

                                    </div>
                                </div>
                            </div>
                        </div>
</form>

<hr />
 
<h3 align="center" style="color:red">Resulst againt mobile number '01720121044'</h3>
<hr />
 
<form name="newtesting" method="post">
  <div class="row">

                        <div class="col-lg-6">

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                </div>
                                <div class="card-body">
                        <div class="form-group">
                            <label>Full Name</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname"  value="" readonly="true">
                                        </div>
                                        <div class="form-group">
                                             <label>Mobile Number</label>
                                            <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" value="" readonly="true">
                                        </div>
                                        <div class="form-group">
                                             <label>DOB (yyyy-mm-dd)</label>
                                            <input type="text" class="form-control" id="dob" name="dob" readonly="true" value="">
                                        </div>
                                        <div class="form-group">
                                               <label>Any Govt Issued ID</label>
                                            <input type="text" class="form-control" id="govtissuedid" name="govtissuedid" value="" readonly="true">
                                        </div>
                                        <div class="form-group">
                                              <label>Govt Issued ID Number</label>
                                            <input type="text" class="form-control" id="govtidnumber" name="govtidnumber" value="" readonly="true">
                                        </div>
                          

                               <div class="form-group">
                                              <label>Address</label>
                                            <textarea class="form-control" id="address" name="address" readonly="true"></textarea>
                                        </div>
 <div class="form-group">
                                              <label>State</label>
                                      <input type="text" class="form-control" id="state" name="state" value="" readonly="true">
                                        </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">

                           <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Testing Information</h6>
                                </div>
                                <div class="card-body">
                             <div class="form-group">
                                              <label>Test Type</label>
                                              <select class="form-control" id="testtype" name="testtype" required="true">
                                            <option value="">Select</option> 
                                            <option value="Antigen">Antigen</option>  
                                            <option value="RT-PCR">RT-PCR</option>   
                                              </select>
                                        </div>

                                                      <div class="form-group">
                                            <label>Time Slot for Test</label>
                                 <input type="datetime-local" class="form-control" id="birthdaytime" name="birthdaytime" class="form-control">                                        
                             </div>
                       <div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-user btn-block" name="submit">                           
                             </div>

                                </div>
                            </div>
                       

                        </div>

                    </div>
</form>
 
<h4 align="center" style="color:red;">No record found</h4>
 

                </div>
                <!-- /.container-fluid -->
@endsection


@section('scripts')
   

@endsection







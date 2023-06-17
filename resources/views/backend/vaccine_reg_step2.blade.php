@extends('backend.app.backend_index')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Covid19-Testing Registration Form</h1>
             
                      <div class="row">
 
 
                        <div class="offset-md-2 col-lg-8">
        @include('backend.includes.alerts')

                    <form method="POST" action="{{ route('user.userVaccineRegister') }}">
                        @csrf

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                </div>
                                <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                            <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" readonly style="color: black;">
                                        </div>
                            <div class="form-group">
                            <label>Mother's Name</label>
                                            <input type="text" class="form-control" id="" name="mothersname"  placeholder="Enter your full name..." title="letters only" required="true">
                                        </div>
                            <div class="form-group">
                            <label>Father's Name</label>
                                            <input type="text" class="form-control" id="fullname" name="fathersname"  placeholder="Enter your fathar's name..." title="letters only" required="true">
                                        </div>
                                        <div class="form-group">
                                             <label>Mobile Number</label>
                                  <input type="text" class="form-control" id="mobilenumber" name="phone" placeholder="Please enter your mobile number" required="true" >
                                                
                                        </div>
                                        <div class="form-group">
                                             <label>Date Of Birth</label>
                                            <input type="text" class="form-control" value="{{$nid->dob}}" name="dob" readonly style="color: black;">
                                        </div>
                                        @if($nid->type == 'nid')
                                        <div class="form-group">
                                               <label>National ID</label>
                                            <input type="text" class="form-control" id="govtissuedid" name="nid" value="{{$nid->nid}}" readonly style="color: black;">
                                        </div>
                                        @else
                                        <div class="form-group">
                                              <label>Birth Certificate Number</label>
                                            <input type="text" class="form-control" id="govtidnumber" name="bc_id" value="{{$nid->nid}}" readonly style="color: black;">
                                        </div>
                                        @endif

                                        <div class="form-group">
                                              <label>Division</label>
                                              <select class="form-control" id="state" name="division" required="true">
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
                                 <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>                           
                             </div>

                                </div>
                            </div>
                            </form>
                        </div>

                         

                    </div>


                </div>
                <!-- /.container-fluid -->
@endsection


@section('scripts')
   

@endsection







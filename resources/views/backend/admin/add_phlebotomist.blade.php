@extends('backend.app.backend_index')

@section('content')

 
 
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Add Staff</h1>
					 
					  <div class="row">

                        <div class="col-lg-8">

        @include('backend.includes.alerts')
                    <form method="POST" action="{{ route('admin.storePhlebotomist') }}">
                        @csrf
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Personal Information</h6>
                                </div>
                                <div class="card-body">
     						 

                        	<div class="form-group">
                            <label>Staf Type</label>
                                  <select class="form-control" name="type" required="true">
	                                <option value="">--select phlebotomist--</option> 
	                                <option value="phlebotomist">Phlebotomist</option>  
	                                <option value="lab_assistent">Lab assistent</option> 
	                                <option value="specialist_dr">Specialist Doctor</option> 
                                  </select>
                                </div>
                        	<div class="form-group">
                            <label>Full Name</label>
                                    <input type="text" class="form-control" name="name"  placeholder="Enter your full name..."  required="true">
                                </div>

                                <div class="form-group">
                                     <label>Mobile Number</label>
                          <input type="text" class="form-control" i name="phone" placeholder="Please enter your mobile number" required="true" >
                                  
                                </div>
                                <div class="form-group">
                                     <label>Email</label>
                          <input type="text" class="form-control" name="email" placeholder="Please enter email"  required="true" >
                                  
                                </div>
                                <div class="form-group">
                                     <label>Password</label>
                          <input type="text" class="form-control" name="password" placeholder="Please enter email"  required="true" >
                                  
                                </div>
                        

        						<div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">                           
                             </div>                                        

                                </div>
                            </div>
                        </form>
                        </div>

               

                    </div>
 

                </div>
                <!-- /.container-fluid -->
 
 
@endsection

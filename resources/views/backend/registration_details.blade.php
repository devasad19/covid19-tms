@extends('backend.app.backend_index')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Registration Details</h1>
             
                      <div class="row">
 
 
                        <div class="offset-md-2 col-lg-8">
           <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Patient Information</h6>
                                </div>
                                <div class="card-body">
   
                                     <table class="table details_table table-bordered"  width="100%" cellspacing="0">
                                        <tr>
                                        <th>Patient ID</th> 
                                        <td style="font-size: 22px">#{{$nid->pid}}</td>
                                        </tr>
                                        <tr>
                                        <th>Full Name</th> 
                                        <td>{{Auth::user()->name}}</td>
                                        </tr>
                                        <tr>
                                        <th>Father's Name</th> 
                                        <td>{{ $patient->mothers_name }}</td>
                                        </tr>
                                        <tr>
                                        <th>Mother's Name</th> 
                                        <td>{{ $patient->fathers_name }}</td>
                                        </tr>

                                         <tr>
                                        <th>Mobile Number</th> 
                                        <td>{{$patient->phone}}</td>
                                        </tr>

                                         <tr>
                                        <th>DOB (Date of Birth)</th> 
                                        <td>{{ date('d F Y', strtotime($nid->dob)) }}</td>
                                        </tr>

                                         <tr>
                                        <th>@if($nid->type == 'nid') National ID @else Birth Certificate Number @endif</th> 
                                        <td>{{$nid->nid}}</td>
                                        </tr>
 

                                         <tr>
                                        <th>Address</th> 
                                        <td>{{ $patient->address }}</td>
                                        </tr>

                                         <tr>
                                        <th>Division</th> 
                                        <td>{{ $patient->division }}</td>
                                        </tr>

                                         
                                     </table>

        
                                    
                                </div>
                            </div>
                        </div>

                         

                    </div>


                </div>
                <!-- /.container-fluid -->
@endsection


@section('scripts')
   

@endsection







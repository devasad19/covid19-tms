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
                                @if(!isset($patient->mothers_name))
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-danger">Patient Not Registration Yet.</h6>
                                </div>
                                @else
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
                                         <tr>
                                        <th>Status</th> 
                                        <td>
                                            @if($patient->status == 1)
                                                <span class="badge badge-warning" style="font-size: 17px">Pending</span> 
                                             @else 
                                             <span class="badge badge-success" style="font-size: 17px">Active</span> 
                                         @endif
                                     </td>
                                        </tr>
                                     </table>
                                </div>
                                @endif
                            </div>
                        </div>

                         

                    </div>


                </div>
                <!-- /.container-fluid -->
@endsection


@section('scripts')
   

@endsection







@extends('backend.app.backend_index')

@section('content')


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">New Test Requests</h1>
    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">New Test Requests</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Patient No.</th>
                                            <th>Patient Name</th>
                                            <th>Mobile No.</th>
                                            <th>Test Type</th>
                                            <th>Time Slot</th>
                                            <th>Reg. Date</th>
                                            <th>Assign</th>
                                        </tr>
                                    </thead>
                                      
                                    <tbody>
	            						@foreach($newPatients as $patient)
	                                        <tr>
	                                            <td>{{$i++}}</td>
	                                            <td>@if(isset($patient->user->nid->pid)){{ $patient->user->nid->pid }}@endif</td>
	                                            <td>{{ $patient->user->name }}</td>
	                                            <td>{{ $patient->phone }}</td>
	                                            <td>--</td>
	                                            <td>--</td>
	                                            <td>{{ $patient->created_at->format('Y-m-d') }}</td>
	                                             
	                                            <td>
	                                            	@if(isset($patient->vaccineRegister))
					                                <button class="btn btn-secondary btn-sm">Assign To<br>Phlebotomist</button> 
					                                @else
					                                <a href="" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-sm">Assign To<br>Phlebotomist</a> 

					                                @endif
					                            </td>
	                                        </tr>


							            <!-- Pop-up Modal to display image URL -->
							            <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel">
							              <div class="modal-dialog" role="document">
							                <div class="modal-content">
							                  <div class="modal-header">
							                     <h5>Assign To Phlebotomist</h5>
							                  </div>
							                  <div class="modal-body">
							                     
						                    <form method="POST" action="{{ route('admin.assingToPhlebotomist') }}">
						                        @csrf
						                        <input type="hidden" name="patient_id" value="{{$patient->id}}">
						                        <input type="hidden" name="type" value="phlebotomist">
								                 <div class="ffdsfp">
								                     <div class="form-group">
								                          <select class="form-control" name="staff_id" required="true">
								                            <option value="">--select phlebotomist--</option> 
								                            @foreach($phlebotomists as $phlebotomist)
								                            <option value="{{ $phlebotomist->id }}">{{ $phlebotomist->name}}</option>  
								                            @endforeach
								                          </select>
								                    </div>
								                </div>
										        <div class="form-group">
								                     <button type="submit" class="btn btn-primary btn-user">Assing</button>                           
								                 </div> 
							                 </form> 
							                  </div>
							                </div>
							              </div>
							            </div>
									<!-- Pop-up Modal to display image URL -->



	                                    @endforeach
	
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
 






@endsection

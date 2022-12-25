@extends('backend.app.backend_index')

@section('content')


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Assigned Plhelbotomist List</h1>
    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Assigned Plhelbotomist List</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Current Desk</th>
                                            <th>Designation</th>
                                            <th>Patient ID.</th>
                                            <th>Patient Name</th>
                                            <th>Mobile No.</th>
                                            <th>Reg. Date</th>
                                            <th>Report Status</th>
                                            <th class="text-center">Operation</th>
                                            <th>Action</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                      
                                    <tbody>
	            						@foreach($allPatients as $patient)
	            					 		@if($patient->step == 'report_done')
	                                        <tr>
	                                            <td>{{$i++}}</td>
	                                            <td>{{ $patient->user->name }}</td>
	                                            <td>{{ $patient->user->type }}</td>
	                                            <td>{{ $patient->vaccineRegister->user->nid->pid }}</td>
	                                            <td>{{ $patient->vaccineRegister->user->name }}</td>
	                                             
	                                            <td>{{ $patient->user->phone }}</td>
	                                            <td>{{ $patient->user->created_at->format('Y-m-d') }}</td>
	                                            <td>
	                                            	<span class="badge badge-primary">Completed</span>
 
							                    	@if($patient->report_file != null)
	                                            		<button data-toggle="modal" data-target="#myModal2" class="btn btn-sm btn-primary btn-user">Show Report</button>
							                    	@endif
  
	                                            </td>
	                                              
							                    <form method="POST" action="{{ route('user.reportStatusUpdate') }}">
							                        @csrf
							                        <input type="hidden" name="id" value="{{$patient->id}}">
		                                            <td class="text-center">
									                     <div class="form-group">
									                          <select class="form-control" name="status" required="true">
									                            <option value="">--select report status--</option> 

									                            <option @if($patient->report == 'pending') selected @endif value="pending">Pending</option>  
									                            <option @if($patient->report == 'accepted') selected @endif value="accepted">Accepted</option>  
									                             
									                          </select>
									                    </div>
		                                            <td><button type="submit" class="btn btn-primary btn-user">Update</button></td>
		                                        </form>
							                    
	                                            <td>
	                                            	@if($patient->report == 'accepted')
	                                            	<span class="badge badge-primary">Accepted</span>
	                                            	@else
	                                            	<span class="badge badge-secondary">Pending</span>
	                                            	@endif
	                                            </td>
							                     
	                                        </tr>
							                    @endif

 


	            <!-- Pop-up Modal to display image URL -->
		            <div class="modal fade" id="myModal2" role="dialog" aria-labelledby="myModalLabel">
	              <div class="modal-dialog" role="document">
	                <div class="modal-content" style="width: 850px">
	                  <div class="modal-header">
	                     <h5>Patient Report</h5>
	                  </div>
	                  <div class="modal-body">
	                      <iframe id="inlineFrameExample" title="Inline Frame Example" width="800" height="800" src="{{ url('uploads/reports', $patient->report_file) }}">
						</iframe>
                     		
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

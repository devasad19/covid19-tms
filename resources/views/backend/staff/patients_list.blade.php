@extends('backend.app.backend_index')

@section('content')


                <!-- Begin Page Content -->
                <div class="container-fluid">

        @include('backend.includes.alerts')
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
                                            <th class="text-center">Operation</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                      
                                    <tbody>
	            						@foreach($allPatients as $patient)
	            							<?php $ttype = str_replace('_', ' ', $patient->user->type); ?>

	                                        <tr>
	                                            <td>{{$i++}}</td>
	                                            <td>{{ $patient->user->name }}</td>

	                                            <td>{{ ucwords($ttype) }}</td>

	                                            <td>{{ $patient->vaccineRegister->user->nid->pid }}</td>
	                                            <td>{{ $patient->vaccineRegister->user->name }}</td>
	                                             
	                                            <td>{{ $patient->user->phone }}</td>
	                                            <td>{{ $patient->user->created_at->format('Y-m-d') }}</td>
	                                             
         										@if(Auth::user()->type == 'phlebotomist')
							                    <form method="POST" action="{{ route('user.phlebotomistStatusUpdate') }}">
							                        @csrf
							                        <input type="hidden" name="id" value="{{$patient->vaccineRegister->user_id}}">
							                        <input type="hidden" name="pid" value="{{$patient->id}}">
							                        <input type="hidden" name="type" value="Phlebotomist">
		                                            <td class="text-center">
									                     <div class="form-group">
									                          <select class="form-control" name="status" required="true">
									                            <option value="">--select step--</option> 

									                            <option @if($patient->step == 'on_the_way') selected @endif value="on_the_way">On The Way For Sample Collection</option>  
									                            <option @if($patient->step == 'sample_collected') selected @endif value="sample_collected">Sample Collected</option>  
									                            <option @if($patient->step == 'sent_to_lab') selected @endif value="sent_to_lab">Sent To Lab</option>  
									                          </select>
									                    </div>
		                                             </td>
		                                             <td>
		                                             	@if($patient->step == 'sent_to_lab')
		                                            	 
		                                            		<a href="#" class="btn btn-secondary btn-user">Update</a>
		                                            		@else
		                                            		<button type="submit" class="btn btn-primary btn-user">Update</button>
		                                            	   @endif
		                                            </td>
		                                        </form>
							                    @else
							                    <form method="POST" action="{{ route('user.phlebotomistStatusUpdate') }}">
							                        @csrf
							                        <input type="hidden" name="id" value="{{$patient->vaccineRegister->user_id}}">
							                        <input type="hidden" name="pid" value="{{$patient->id}}">
							                        <input type="hidden" name="type" value="Specialist Dr">
		                                            <td class="text-center">
									                     <div class="form-group">
									                          <select class="form-control" name="status" required="true">
									                            <option value="">--select step--</option> 
  
									                            <option @if($patient->step == 'report_done') selected @endif value="report_done">Report Done</option>  
									                             
									                          </select>
									                    </div>
		                                             
		                                             </td>
		                                             <td>
		                                            	@if($patient->step == 'report_done' && Auth::user()->type == 'specialist_dr')
			                                            	@if($patient->report_file == null)
			                                            		<a href="#" data-toggle="modal" data-target="#myModal3"  class="btn btn-success btn-user">Upload Report</a>
			                                            	@else
			                                            		<a href="#" class="btn btn-secondary btn-user">Upload Report</a>
			                                            	@endif
		                                            	@else
		                                            		<button type="submit" class="btn btn-primary btn-user">Update</button>
		                                            	@endif
		                                            </td>
		                                        </form>
		                                        @endif
	                                        </tr>




							            <!-- Pop-up Modal to display image URL -->
							            <div class="modal fade" id="myModal3" role="dialog" aria-labelledby="myModalLabel">
							              <div class="modal-dialog" role="document">
							                <div class="modal-content">
							                  <div class="modal-header">
							                     <h5>Upload Report File</h5>
							                  </div>
							                  <div class="modal-body">
							                     
						                    <form method="POST" action="{{ route('staff.uploadReportFile') }}" enctype="multipart/form-data">
						                        @csrf
						                        <input type="hidden" name="id" value="{{$patient->id}}">
								                 <div class="ffdsfp">
								                     <div class="form-group">
								                          <select class="form-control" name="cvd_status" required="true">
								                            <option value="">--covid status--</option> 

								                            <option value="1">Positive</option>  
								                            <option value="0">Negative</option>  
								                             
								                          </select>
								                    </div>
								                </div>
								                 <div class="ffdsfp">
								                     <div class="form-group">
								                          <input type="file" name="report_file" class="form-control" style="height: 44px">
								                    </div>
								                </div>
										        <div class="form-group">
								                     <button type="submit" class="btn btn-primary btn-user">Upload</button>                           
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

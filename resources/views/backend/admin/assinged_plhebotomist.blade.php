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
                                            <th class="text-center">Status</th>
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
							                        <input type="hidden" name="id" value="{{$patient->id}}">
		                                            <td class="text-center">
									                     <div class="form-group">
									                          <select class="form-control" name="status" required="true">
									                            <option value="">--select step--</option> 

									                            <option @if($patient->step == 'on_the_way') selected @endif value="on_the_way">On The Way For Sample Collection</option>  
									                            <option @if($patient->step == 'sample_collected') selected @endif value="sample_collected">Sample Collected</option>  
									                             
									                          </select>
									                    </div>
		                                            <td><button type="submit" class="btn btn-primary btn-user">Update</button></td>
		                                        </form>
							                    @else
	                                            <td class="text-center">
							                    	@if($patient->step == 'on_the_way')
							                    		<span class="badge badge-primary">On The Way For Sample Collection</span>
							                    	@elseif($patient->step == 'sample_collected')
							                    		<span class="badge badge-primary">Sample Collected</span>
							                    	@elseif($patient->step == 'sent_to_lab')
							                    		<span class="badge badge-primary">Sent To Lab</span>
							                    	@else
							                    		<span class="badge badge-secondary">Pending</span>
							                    	@endif
					                            </td>
	                                            <td>
							                    	@if($patient->step == 'sent_to_lab')
	                                            		<button data-toggle="modal" data-target="#myModal2" class="btn btn-primary btn-user">Assign To Specialist</button>
							                    	@else
	                                            		<button class="btn btn-secondary btn-user">Assign To Specialist</button>
							                    	@endif
	                                            </td>
							                    @endif
	                                        </tr>




							            <!-- Pop-up Modal to display image URL -->
							            <div class="modal fade" id="myModal2" role="dialog" aria-labelledby="myModalLabel">
							              <div class="modal-dialog" role="document">
							                <div class="modal-content">
							                  <div class="modal-header">
							                     <h5>Assign To Specialist </h5>
							                  </div>
							                  <div class="modal-body">
							                     
						                    <form method="POST" action="{{ route('admin.assingToPhlebotomist') }}">
						                        @csrf
						                        <input type="hidden" name="patient_id" value="{{$patient->id}}">
						                        <input type="hidden" name="type" value="specialist_dr">
								                 <div class="ffdsfp">
								                     <div class="form-group">
								                          <select class="form-control" name="staff_id" required="true">
								                            <option value="">--select phlebotomist--</option> 
								                            @foreach($specialist_drs as $phlebotomist)
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

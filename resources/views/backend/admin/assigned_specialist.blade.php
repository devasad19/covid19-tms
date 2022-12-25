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
                                            <!-- <th>Report</th> -->
                                        </tr>
                                    </thead>
                                      
                                    <tbody>
	            						@foreach($allPatients as $patient)
	            					 
	                                        <tr>
	                                            <td>{{$i++}}</td>
	                                            <td>{{ $patient->user->name }}</td>
	                                            <td>{{ $patient->user->type }}</td>
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
							                    	@if($patient->step == 'report_done')
							                    		<span class="badge badge-primary">Report Done</span>
							                    	@else
							                    		<span class="badge badge-secondary">Pending</span>
							                    	@endif
					                            </td>
							                    @endif
	                                        </tr>


	                                    @endforeach
	
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
 






@endsection

@extends('backend.app.backend_index')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Manage Phlebotomist</h1>
    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Phlebotomist Information</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Name</th>
                                            <th>Staff Type</th>
                                            <th>Email</th>
                                            <th>Mobile No.</th>
                                             <th>Reg. Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
									 
									 <?php $i = 1 ?>
									 @foreach($phlebotomists as $phlebotomist)

                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{ $phlebotomist->name }}</td>
                                            <td>
                                            	@if($phlebotomist->type == 'phlebotomist')
                                            		Phlebotomist
                                            	@else
                                            		Specialist Doctor
                                            	@endif

                                            </td>


                                            <td>{{ $phlebotomist->email }}</td>
                                            <td>{{ $phlebotomist->phone }}</td>
                                             <td>{{ $phlebotomist->created_at->format('Y-m-d') }}</td>
                                            <td>
                                            	@if($phlebotomist->status == 1)
                                            		<span class="badge badge-primary">Active</span>
                                            	@else
                                            		<span class="badge badge-secondary">Inactive</span>
                                            	@endif
                                            </td>
                                            <td>

                                <a href=""><i class="fas fa-edit" style="color:blue"></i></a> |

                                <a href="" onclick="return confirm('Do you really want to delete this record?');"><i class="fa fa-trash" aria-hidden="true" style="color:red" title="Delete this record"></i></a></td>
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
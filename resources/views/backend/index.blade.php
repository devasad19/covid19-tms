@extends('backend.app.backend_index')

@section('content')

         <!-- Begin Page Content -->
        <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
 
                        <!-- Total Tests-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">


                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                             Total Tests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_test }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-virus fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                        <!-- Assigned test-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                              Total Assigned</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_assigned }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                        <!-- On the way for sample collection-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"> On the way for sample collection
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $total_on_the_way }}</div>
                                                </div>
                                                <div class="col">
                                                 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-motorcycle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

                        <!-- Sample Collected -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                               Sample Collected</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_sample_collected }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-prescription-bottle fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

            <!-- Sent to Lab -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                              Sample Sent to Lab</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_sent_to_lab }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-microscope fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
        <!-- Report Delivered-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Report Delivered
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $total_report_done }}</div>
                                                </div>
                                                <div class="col">
                                                 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>

            <!-- Total Registered Patients-->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">


                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                             Total Registered Phlebotomist</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_phlebotomist }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

            <!-- Total Registered Phlebotomist-->
           
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                   
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                              Total Registered Specialist Doctor</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_specialist_dr }}</div>
                                        </div>

                                        <div class="col-auto"> 
                                            <i class="fas fa-user-nurse fa-2x text-gray-300"></i>
                                        </div> 
                                    </div>
                                </div>
                                 
                            </div>
                        </div>
                 
                    </div>

                    <!-- Content Row -->
        </div>

@endsection
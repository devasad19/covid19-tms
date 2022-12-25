@extends('backend.app.backend_index')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">User Test Track</h1>
             
                      <div class="row">
 
                        <div class="offset-md-1 col-lg-10">
                            
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary" align="center">Test Tracking History</h6>
                                </div>
                                <div class="card-body">
                                     
                                     <table class="table table-bordered"  width="100%" cellspacing="0">
                                    <tr>
                                        <th>Remark</th>
                                        <th>Status</th>
                                        <th>Remark Date</th>
                                        <th>Remark By</th>

                                        @foreach($testTracks as $testTrack)

                                        <?php 
                                            $user = App\Models\User::find($testTrack->staff_id);
                                        ?>

                                        </tr>
                                            <tr>
                                            <td>{{ $testTrack->remark }}</td> 
                                            <td>{{ $testTrack->status }}</td>
                                            <td>{{ $testTrack->created_at->format('d F Y') }}</td>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        @endforeach
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







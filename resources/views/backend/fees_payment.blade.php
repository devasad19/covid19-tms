@extends('backend.app.backend_index')

@section('content')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Fees Payment Form</h1>
             
                      <div class="row">
 
 
                        <div class="offset-md-2 col-lg-8">
        @include('backend.includes.alerts')

                    <form method="POST" action="{{ route('user.userVaccineRegister') }}">
                        @csrf

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary d-inline-block">Payment Information</h6>

                                    <button class="btn btn-sm btn-warning float-right d-inline-block">Not Paid</button>

                                </div>
                                <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                            <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" readonly style="color: black;">
                                        </div>
                            <div class="form-group">
                            <label>Patient ID</label>
                                            <input type="text" class="form-control" value="{{ Auth::user()->nid->pid }}" readonly>
                                        </div>
                            <div class="form-group">
                            <label>Fees Amount (TK)</label>
                                            <input type="text" class="form-control" value="2000" readonly>
                                        </div>
                                         
                                        <div class="form-group">
                                              <label>Payment Method</label>
                                              <select class="form-control" id="state" name="division" required="true">
                                            <option value="">--select method--</option> 
                                            <option value="bKash">BKash</option>    
                                            <option value="roket">Roket</option>    
                                            <option value="dbbl">DBBL</option>    
                                            <option value="nagat">Nagat</option>    
                                              </select>
                                        </div>

                                        <div class="form-group">
                                             <label>Mobile Number</label>
                                            <input type="text" class="form-control" placeholder="Enter mobile number" style="color: black;">
                                        </div>

                                        <div class="form-group">
                                             <label>Transaction ID</label>
                                            <input type="text" class="form-control" placeholder="Enter TrxID" style="color: black;">
                                        </div>


                            <div class="form-group">
                                 <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>                           
                             </div>

                                </div>
                            </div>
                            </form>
                        </div>

                         

                    </div>


                </div>
                <!-- /.container-fluid -->
@endsection


@section('scripts')
   

@endsection







@extends('backend.app.backend_index')

@section('content')
                    <form method="POST" action="{{ route('user.vaccineregi1St') }}">
                        @csrf

                <div class="container-fluid">

        @include('backend.includes.alerts')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Registration Process</h1>
                     
                      <div class="row">


                        <div class="col-lg-5">

                           <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Registration By</h6>
                                </div>
                                <div class="card-body">
                             <div class="form-group">
                                  <select class="form-control" id="regi_type_select" name="testtype" required="true">
                                <option value="">Select</option> 
                                <option value="nid">National ID</option>  
                                <option value="bc">Birth Certificate</option> 
                                  </select>
                            </div>
 
                                </div>
                            </div>
                       
                        </div>


                        <div class="col-lg-6">
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Verify Information</h6>
                                </div>
                                <div class="card-body">
                                        <div class="form-group" id="nid_section">
                                               <label>National ID</label>
                                            <input type="text" class="form-control" id="" name="nid" placeholder="enter NID">
                                        </div>
                                        <div class="form-group" id="bc_section">
                                               <label>Birth Certificate</label>
                                            <input type="text" class="form-control" id="" name="bc" placeholder="enter birth certificate"  >
                                        </div>
                                        <div class="form-group">
                                             <label>Date Of Birth</label>
                                            <input type="date" class="form-control" id="dob" name="dob" required="true">
                                        </div>
                                         
                                     <div class="form-group">
                                        <input type="submit" class="btn btn-primary btn-user" value="Verify" name="submit">                           
                                 </div>
                                </div>
                            </div>

                        </div>


                    </div>


                </div>
                        </form>
@endsection


@section('scripts')
    <script>
        $(document).ready(function(){
            $('#bc_section').css('display', 'none')

            $('#regi_type_select').on('change', function(){
                var vall = $(this).val()

                if(vall == 'bc'){

                    $('#nid_section').css('display', 'none')
                    $('#bc_section').css('display', 'block')
                }else{

                    $('#bc_section').css('display', 'none')
                    $('#nid_section').css('display', 'block')
                }
            })
        })
    </script>

@endsection







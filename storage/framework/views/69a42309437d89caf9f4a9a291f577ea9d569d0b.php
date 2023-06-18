<?php $__env->startSection('content'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Fees Payment Form</h1>
             
                      <div class="row">
 
 
                        <div class="offset-md-2 col-lg-8">
        <?php echo $__env->make('backend.includes.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <form method="POST" action="<?php echo e(route('user.userStoreFeePayment')); ?>">
                        <?php echo csrf_field(); ?>

                        <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary d-inline-block">Payment Information</h6>

                                    <?php if(isset($patient->status) && $patient->status == 1): ?>
                                    <button class="btn btn-sm btn-warning float-right d-inline-block">Not Paid</button>
                                    <?php else: ?>
                                    <button class="btn btn-sm btn-success float-right d-inline-block">Paid</button>
                                    <?php endif; ?>
                                </div>
                                <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                            <input type="text" class="form-control" name="name" value="<?php echo e(Auth::user()->name); ?>" readonly style="color: black;">
                                        </div>
                            <div class="form-group">
                            <label>Patient ID</label>
                                            <input type="text" class="form-control" value="<?php echo e(Auth::user()->nid->pid); ?>" readonly>
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
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
   

<?php $__env->stopSection(); ?>







<?php echo $__env->make('backend.app.backend_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/covid19-tms/resources/views/backend/fees_payment.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">User Report Download</h1>
             
                      <div class="row">
 
                        <div class="offset-md-1 col-lg-10">
                            
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary" >Report Download</h6>
                                </div>
                                <div class="card-body">
                                     <h4>
                                     	Download Patient Test Report :
                                        

                                     	<?php if(isset($patient->report_file) && $patient->report_file != null): ?>
											<a href="<?php echo e(route('user.downloadTestReport', $patient->id)); ?>" class="d-none ml-5 d-sm-inline-block btn btn-sm btn-primary shadow-sm">
											<i class="fas fa-download fa-sm text-white-50"></i> Download</a>
										<?php else: ?>
											<a href="#" class="d-none ml-5 d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
											<i class="fas fa-download fa-sm text-white-50"></i> Download</a>

										<?php endif; ?>

                                     </h4>
                                                 
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
   

<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.app.backend_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/covid19-tms/resources/views/backend/user_report_download.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>

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

                                        <?php $__currentLoopData = $testTracks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testTrack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <?php 
                                            $user = App\Models\User::find($testTrack->staff_id);
                                        ?>

                                        </tr>
                                            <tr>
                                            <td><?php echo e($testTrack->remark); ?></td> 
                                            <td><?php echo e($testTrack->status); ?></td>
                                            <td><?php echo e($testTrack->created_at->format('d F Y')); ?></td>
                                            <td><?php echo e($user->name); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                                 
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
   

<?php $__env->stopSection(); ?>







<?php echo $__env->make('backend.app.backend_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/covid19-tms/resources/views/backend/user_test_track.blade.php ENDPATH**/ ?>
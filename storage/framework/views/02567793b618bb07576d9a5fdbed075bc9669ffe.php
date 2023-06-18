<?php $__env->startSection('content'); ?>

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
									 <?php $__currentLoopData = $phlebotomists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phlebotomist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                            <td><?php echo e($i++); ?></td>
                                            <td><?php echo e($phlebotomist->name); ?></td>
                                            <td>
                                            	<?php if($phlebotomist->type == 'phlebotomist'): ?>
                                            		Phlebotomist
                                            	<?php else: ?>
                                            		Specialist Doctor
                                            	<?php endif; ?>

                                            </td>


                                            <td><?php echo e($phlebotomist->email); ?></td>
                                            <td><?php echo e($phlebotomist->phone); ?></td>
                                             <td><?php echo e($phlebotomist->created_at->format('Y-m-d')); ?></td>
                                            <td>
                                            	<?php if($phlebotomist->status == 1): ?>
                                            		<span class="badge badge-primary">Active</span>
                                            	<?php else: ?>
                                            		<span class="badge badge-secondary">Inactive</span>
                                            	<?php endif; ?>
                                            </td>
                                            <td>

                                <a href=""><i class="fas fa-edit" style="color:blue"></i></a> |

                                <a href="" onclick="return confirm('Do you really want to delete this record?');"><i class="fa fa-trash" aria-hidden="true" style="color:red" title="Delete this record"></i></a></td>
                                        </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->


 <?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.app.backend_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/covid19-tms/resources/views/backend/admin/staff_list.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>


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
	            						<?php $__currentLoopData = $allPatients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	            					  <?php $ttype = str_replace('_', ' ', $patient->user->type); ?>
	                                        <tr>
	                                            <td><?php echo e($i++); ?></td>
	                                            <td><?php echo e($patient->user->name); ?></td>
	                                            <td><?php echo e(ucwords($ttype)); ?></td>
	                                            <td><?php echo e($patient->vaccineRegister->user->nid->pid); ?></td>
	                                            <td><?php echo e($patient->vaccineRegister->user->name); ?></td>
	                                             
	                                            <td><?php echo e($patient->user->phone); ?></td>
	                                            <td><?php echo e($patient->user->created_at->format('Y-m-d')); ?></td>
	                                             
         										<?php if(Auth::user()->type == 'phlebotomist'): ?>
							                    <form method="POST" action="<?php echo e(route('user.phlebotomistStatusUpdate')); ?>">
							                        <?php echo csrf_field(); ?>
							                        <input type="hidden" name="id" value="<?php echo e($patient->id); ?>">
		                                            <td class="text-center">
									                     <div class="form-group">
									                          <select class="form-control" name="status" required="true">
									                            <option value="">--select step--</option> 

									                            <option <?php if($patient->step == 'on_the_way'): ?> selected <?php endif; ?> value="on_the_way">On The Way For Sample Collection</option>  
									                            <option <?php if($patient->step == 'sample_collected'): ?> selected <?php endif; ?> value="sample_collected">Sample Collected</option>  
									                             
									                          </select>
									                    </div>
		                                            <td><button type="submit" class="btn btn-primary btn-user">Update</button></td>
		                                        </form>
							                    <?php else: ?>
	                                            <td class="text-center">
							                    	<?php if($patient->step == 'report_done'): ?>
							                    		<span class="badge badge-primary">Report Done</span>
							                    	<?php else: ?>
							                    		<span class="badge badge-secondary">Pending</span>
							                    	<?php endif; ?>
					                            </td>
							                    <?php endif; ?>
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

<?php echo $__env->make('backend.app.backend_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/covid19-tms/resources/views/backend/admin/assigned_specialist.blade.php ENDPATH**/ ?>
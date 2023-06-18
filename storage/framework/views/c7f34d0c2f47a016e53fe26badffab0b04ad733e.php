<?php $__env->startSection('content'); ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">New Test Requests</h1>
    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">New Test Requests</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Patient No.</th>
                                            <th>Patient Name</th>
                                            <th>Mobile No.</th>
                                            <th>Test Type</th>
                                            <th>Time Slot</th>
                                            <th>Reg. Date</th>
                                            <th>Assign</th>
                                        </tr>
                                    </thead>
                                      
                                    <tbody>
	            						<?php $__currentLoopData = $newPatients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                                        <tr>
	                                            <td><?php echo e($i++); ?></td>
	                                            <td><?php if(isset($patient->user->nid->pid)): ?><?php echo e($patient->user->nid->pid); ?><?php endif; ?></td>
	                                            <td><?php echo e($patient->user->name); ?></td>
	                                            <td><?php echo e($patient->phone); ?></td>
	                                            <td>--</td>
	                                            <td>--</td>
	                                            <td><?php echo e($patient->created_at->format('Y-m-d')); ?></td>
	                                             
	                                            <td>
	                                            	<?php if(isset($patient->vaccineRegister)): ?>
					                                <button class="btn btn-secondary btn-sm">Assign To<br>Phlebotomist</button> 
					                                <?php else: ?>
					                                <a href="" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-sm">Assign To<br>Phlebotomist</a> 

					                                <?php endif; ?>
					                            </td>
	                                        </tr>


							            <!-- Pop-up Modal to display image URL -->
							            <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel">
							              <div class="modal-dialog" role="document">
							                <div class="modal-content">
							                  <div class="modal-header">
							                     <h5>Assign To Phlebotomist</h5>
							                  </div>
							                  <div class="modal-body">
							                     
						                    <form method="POST" action="<?php echo e(route('admin.assingToPhlebotomist')); ?>">
						                        <?php echo csrf_field(); ?>
						                        <input type="hidden" name="patient_id" value="<?php echo e($patient->id); ?>">
						                        <input type="hidden" name="type" value="phlebotomist">
								                 <div class="ffdsfp">
								                     <div class="form-group">
								                          <select class="form-control" name="staff_id" required="true">
								                            <option value="">--select phlebotomist--</option> 
								                            <?php $__currentLoopData = $phlebotomists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phlebotomist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								                            <option value="<?php echo e($phlebotomist->id); ?>"><?php echo e($phlebotomist->name); ?></option>  
								                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								                          </select>
								                    </div>
								                </div>
										        <div class="form-group">
								                     <button type="submit" class="btn btn-primary btn-user">Assing</button>                           
								                 </div> 
							                 </form> 
							                  </div>
							                </div>
							              </div>
							            </div>
									<!-- Pop-up Modal to display image URL -->



	                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
 






<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.app.backend_index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/covid19-tms/resources/views/backend/admin/new_patients.blade.php ENDPATH**/ ?>
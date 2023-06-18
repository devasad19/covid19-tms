        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-virus"></i>
                </div>
                <div class="sidebar-brand-text mx-3">COVID19-TMS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
 

 
         <?php if(Auth::user()->type == 'admin'): ?>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Staf Management</span>
                </a>
                <div id="collapseOne" class="collapse <?php echo e(request()->is('admin/add-phlebotomist') || request()->is('admin/manage-staff')? 'show': ''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?php echo e(request()->is('admin/add-phlebotomist')? 'activeli': ''); ?>" href="<?php echo e(route('admin.addPhlebotomist')); ?>">Add New Staff</a>
                         <a class="collapse-item <?php echo e(request()->is('admin/manage-staff')? 'activeli': ''); ?>" href="<?php echo e(route('admin.manageStaff')); ?>">Manage Staff's</a>
                    </div>
                </div>
            </li>


     <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-virus"></i>
                    <span>Testing</span>
                </a>
                <div id="collapseTwo" class="collapse <?php echo e(request()->is('admin/new-patients') || request()->is('admin/assinged-plhebotomist') || request()->is('admin/assinged-specialist') || request()->is('admin/report-deliveriable') ? 'show': ''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?php echo e(request()->is('admin/new-patients')? 'activeli': ''); ?> " href="<?php echo e(route('admin.new_patients_list')); ?>">New Patients List</a>
                        <a class="collapse-item <?php echo e(request()->is('admin/assinged-plhebotomist')? 'activeli': ''); ?> " href="<?php echo e(route('admin.assingedPlhebotomist')); ?>">Assigned Plhebotomist</a>
                        <a class="collapse-item <?php echo e(request()->is('admin/assinged-specialist')? 'activeli': ''); ?> " href="<?php echo e(route('admin.assingedSpecialist')); ?>">Assigned Specialist</a>
                        <a class="collapse-item <?php echo e(request()->is('admin/report-deliveriable')? 'activeli': ''); ?> " href="<?php echo e(route('admin.reportDeliveriableList')); ?>">Report Deliveriable List</a>
                    </div>
                </div>
            </li>
   <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Report</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#">B/w Dates Report</a>
                         <a class="collapse-item" href="#">Search Report</a>
                        </div>
                </div>
            </li>
            <?php endif; ?>
        
         <?php if(Auth::user()->type == 'phlebotomist'): ?>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-virus"></i>
                    <span>Manage Test</span>
                </a>
                <div id="collapseTwo" class="collapse <?php echo e(request()->is('plhebotomist/patient-list')? 'show': ''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?php echo e(request()->is('plhebotomist/patient-list')? 'activeli': ''); ?>" href="<?php echo e(route('plhebotomist.plhebotomistPatienList')); ?>">My Patients List</a>
                         
                    </div>
                </div>
            </li>
         <?php endif; ?>

        
         <?php if(Auth::user()->type == 'specialist_dr'): ?>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-virus"></i>
                    <span>Manage Test</span>
                </a>
                <div id="collapseTwo" class="collapse <?php echo e(request()->is('plhebotomist/patient-list')? 'show': ''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?php echo e(request()->is('plhebotomist/patient-list')? 'activeli': ''); ?>" href="<?php echo e(route('specialist.specialistPatienList')); ?>">My Patients List</a>
                    </div>
                </div>
            </li>
         <?php endif; ?>


         <?php if(Auth::user()->type == 'patient'): ?>
 
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                COVID19 Testing
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2"
                    aria-expanded="true" aria-controls="collapseTwo2">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Vaccine Registration</span>
                </a>
                <div id="collapseTwo2" class="collapse <?php echo e(request()->is('user/vaccine-registration') || request()->is('user/show-details')? 'show': ''); ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner ">
                        <a class="collapse-item <?php echo e(request()->is('user/vaccine-registration')? 'activeli': ''); ?>" href="<?php echo e(route('user.vaccineReg')); ?>">New User Registration</a>
                        <a class="collapse-item <?php echo e(request()->is('user/show-details')? 'activeli': ''); ?>" href="<?php echo e(route('user.showRegDetails')); ?>">Show Registration Details</a>
                        <!-- <a class="collapse-item" href="<?php echo e(route('user.vaccineRegistered')); ?>">Already Registered User</a> -->
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e(request()->is('user/fees-payment')? 'activeli2': ''); ?>" href="<?php echo e(route('user.userFeePayment')); ?>">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Payment Fees</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e(request()->is('user/test-track')? 'activeli2': ''); ?>" href="<?php echo e(route('user.userTestHistory')); ?>">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Test Tracking History</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo e(request()->is('user/report-download')? 'activeli2': ''); ?>" href="<?php echo e(route('user.getReportDownload')); ?>">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Download Report</span></a>
            </li>
         <?php endif; ?>
             

   

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar --><?php /**PATH /opt/lampp/htdocs/covid19-tms/resources/views/backend/includes/sidebar.blade.php ENDPATH**/ ?>
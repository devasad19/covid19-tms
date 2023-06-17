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
 

 
         @if(Auth::user()->type == 'admin')

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Staf Management</span>
                </a>
                <div id="collapseOne" class="collapse {{ request()->is('admin/add-phlebotomist') || request()->is('admin/manage-staff')? 'show': '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/add-phlebotomist')? 'activeli': '' }}" href="{{ route('admin.addPhlebotomist') }}">Add New Staff</a>
                         <a class="collapse-item {{ request()->is('admin/manage-staff')? 'activeli': '' }}" href="{{ route('admin.manageStaff') }}">Manage Staff's</a>
                    </div>
                </div>
            </li>


     <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-virus"></i>
                    <span>Testing</span>
                </a>
                <div id="collapseTwo" class="collapse {{ request()->is('admin/new-patients') || request()->is('admin/assinged-plhebotomist') || request()->is('admin/assinged-specialist') || request()->is('admin/report-deliveriable') ? 'show': '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('admin/new-patients')? 'activeli': '' }} " href="{{ route('admin.new_patients_list') }}">New Patients List</a>
                        <a class="collapse-item {{ request()->is('admin/assinged-plhebotomist')? 'activeli': '' }} " href="{{ route('admin.assingedPlhebotomist') }}">Assigned Plhebotomist</a>
                        <a class="collapse-item {{ request()->is('admin/assinged-specialist')? 'activeli': '' }} " href="{{ route('admin.assingedSpecialist') }}">Assigned Specialist</a>
                        <a class="collapse-item {{ request()->is('admin/report-deliveriable')? 'activeli': '' }} " href="{{ route('admin.reportDeliveriableList') }}">Report Deliveriable List</a>
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
                        <a class="collapse-item" href="bwdates-report-ds.php">B/w Dates Report</a>
                         <a class="collapse-item" href="search-report.php">Search Report</a>
                        </div>
                </div>
            </li>
            @endif
        
         @if(Auth::user()->type == 'phlebotomist')

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-virus"></i>
                    <span>Manage Test</span>
                </a>
                <div id="collapseTwo" class="collapse {{ request()->is('plhebotomist/patient-list')? 'show': '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('plhebotomist/patient-list')? 'activeli': '' }}" href="{{ route('plhebotomist.plhebotomistPatienList') }}">My Patients List</a>
                         
                    </div>
                </div>
            </li>
         @endif

        
         @if(Auth::user()->type == 'specialist_dr')

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-virus"></i>
                    <span>Manage Test</span>
                </a>
                <div id="collapseTwo" class="collapse {{ request()->is('plhebotomist/patient-list')? 'show': '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->is('plhebotomist/patient-list')? 'activeli': '' }}" href="{{ route('plhebotomist.plhebotomistPatienList') }}">My Patients List</a>
                    </div>
                </div>
            </li>
         @endif


         @if(Auth::user()->type == 'patient')
 
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
                <div id="collapseTwo2" class="collapse {{ request()->is('user/vaccine-registration') || request()->is('user/show-details')? 'show': '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner ">
                        <a class="collapse-item {{ request()->is('user/vaccine-registration')? 'activeli': '' }}" href="{{ route('user.vaccineReg') }}">New User Registration</a>
                        <a class="collapse-item {{ request()->is('user/show-details')? 'activeli': '' }}" href="{{ route('user.showRegDetails') }}">Show Registration Details</a>
                        <!-- <a class="collapse-item" href="{{ route('user.vaccineRegistered') }}">Already Registered User</a> -->
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('user/fees-payment')? 'activeli2': '' }}" href="{{ route('user.userFeePayment') }}">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Payment Fees</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('user/test-track')? 'activeli2': '' }}" href="{{ route('user.userTestHistory') }}">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Test Tracking History</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('user/report-download')? 'activeli2': '' }}" href="{{ route('user.getReportDownload') }}">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Download Report</span></a>
            </li>
         @endif
             

   

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->
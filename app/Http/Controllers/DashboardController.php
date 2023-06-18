<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserNid;
use App\Models\VaccineRegister;
use App\Models\User;
use App\Models\ReportTrack;
use App\Models\PatientAssign;
use App\Models\CovidStatus;
use Auth;
use Hash;
use Response;

class DashboardController extends Controller
{
    
    public function index(){

        $total_test = VaccineRegister::get()->count();
        $total_assigned = PatientAssign::get()->count();
        $total_on_the_way = PatientAssign::where('step', 'on_the_way')->get()->count();
        $total_sample_collected = PatientAssign::where('step', 'sample_collected')->get()->count();
        $total_sent_to_lab = PatientAssign::where('step', 'sent_to_lab')->get()->count();
        $total_report_done = PatientAssign::where('step', 'report_done')->get()->count();
        $total_phlebotomist = User::where('type', 'phlebotomist')->get()->count();
        $total_specialist_dr = User::where('type', 'specialist_dr')->get()->count();
     
 
        return view('backend.index', compact('total_test', 'total_assigned', 'total_on_the_way', 'total_sample_collected', 'total_sent_to_lab', 'total_report_done', 'total_phlebotomist', 'total_specialist_dr'));

    }
    
    public function vaccineReg(){
        return view('backend.vaccine_reg');
    }

    public function vaccineRegStep2($id){

        $nid = UserNid::find($id);
        return view('backend.vaccine_reg_step2', compact('nid'));
    }

    public function showRegDetails(){

        $nid = UserNid::find(Auth::user()->id);
        $patient = VaccineRegister::where('user_id',Auth::user()->id)->first();
   
        return view('backend.registration_details', compact('nid', 'patient'));
    }

    public function userTestHistory(){
        $testTracks = ReportTrack::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->get();
   
        return view('backend.user_test_track', compact('testTracks'));
    }

    public function getReportDownload(){
        $pUser = VaccineRegister::where('user_id', Auth::user()->id)->first();
        $patient = null;
        if($pUser != null){
            $patient = PatientAssign::where(['vaccine_register_id' => $pUser->id, 'report' => 'accepted'])->first();
        }
        return view('backend.user_report_download', compact('patient'));
    }

    public function downloadTestReport($id){
 
        $patient = PatientAssign::find($id);

        $file_path = public_path('uploads/reports/'.$patient->report_file);

         $headers = array(
          'Content-Type: application/pdf',
        );

        return Response::download($file_path, 'tms_test_report.pdf', $headers);
    }


    public function vaccineRegistered(){
        return view('backend.vaccine_registered');
    }
    public function userFeePayment(){
        $patient = VaccineRegister::where('user_id', Auth::user()->id)->first();

        return view('backend.fees_payment', compact('patient'));
    }

    public function userStoreFeePayment(Request $request){
        $patient = VaccineRegister::where('user_id', $request->user_id)->update([
            'status' => 2
        ]);

         return back()->with('success', 'User Payment successfully completed');
    }



    public function addPhlebotomist(){

        return view('backend.admin.add_phlebotomist');
    }


    public function vaccineregi1St(Request $request){
 
 
        if($request->testtype == 'nid'){
            if(strlen($request->nid) == 8 || strlen($request->nid) == 14){

                $nid = UserNid::where('nid', $request->nid)->where('status', 2)->first();

                if($nid == null){
                    $nid = UserNid::create([
                        'nid' => $request->nid,
                        'dob' => $request->dob,
                        'pid' => rand(10000000, 99999999),
                        'type' => 'nid',
                        'user_id' => Auth::user()->id,
                        'status' => 1
                    ]);

                    // return view('backend.vaccine_reg_step2', compact('nid'));
                    return redirect()->route('user.vaccineRegStep2', $nid->id);

                }else{
                    return view('backend.vaccine_reg_step2', compact('nid'));
                    // return back()->with('error', 'National ID already exists');
                }
            }else{
                return back()->with('error', 'Invalid National ID');
            }
         }else{

            if(strlen($request->bc) == 16){
                $bc = UserNid::where('nid', $request->bc)->first();

                if($bc == null){
                   $bc = UserNid::create([
                        'nid' => $request->bc,
                        'dob' => $request->dob,
                        'pid' => rand(10000000, 99999999),
                        'type' => 'bc',
                        'user_id' => Auth::user()->id,
                        'status' => 1
                    ]);
 
                    return redirect()->route('user.vaccineRegStep2', $bc->id);

                }else{
                    return back()->with('error', 'Birth certificate ID already exists');
                }

            }else{
                return back()->with('error', 'Invalid Birth certificate ID');
            }
         }
    }



    public function userVaccineRegister(Request $request){
        VaccineRegister::create([
            'user_id' => $request->user_id,
            'mothers_name' => $request->mothersname,
            'fathers_name' =>  $request->fathersname,
            'phone' =>  $request->phone,
            'division' =>  $request->division,
            'address' =>  $request->address,
            'status' =>  1,
        ]);

        return back()->with('success', 'Vaccice registration successfully completed');
 
    }


    public function storePhlebotomist(Request $request){
        
        User::create([
            'type' => $request->type,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 1,
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'Staff added successfully');
 
    }




    public function adminNewPatientsList(Request $request){ 
 
        $newPatients = VaccineRegister::where('status', 1)->orderBy('created_at', 'DESC')->get();

        $phlebotomists = User::where('type', 'phlebotomist')->get();

        $i = 1;
        return view('backend.admin.new_patients', compact('newPatients', 'phlebotomists','i'));
    }



    public function manageStaff(Request $request){ 
 
        $phlebotomists = User::where('type', 'phlebotomist')->orWhere('type', 'specialist_dr')->get();


        return view('backend.admin.staff_list', compact('phlebotomists'));
    }



    public function assingedPlhebotomist(Request $request){ 
 
        $allPatients = PatientAssign::where('type', 'phlebotomist')->get();
        $specialist_drs = User::where('type', 'specialist_dr')->get();

        $i = 1;
        return view('backend.admin.assinged_plhebotomist', compact('allPatients', 'specialist_drs','i'));
    }


    public function assingToPhlebotomist(Request $request){
      
        PatientAssign::create([
            'vaccine_register_id' => $request->vr_id,
            'user_id' => $request->staff_id,
            'type' => $request->type,
            'step' => null,
            'status' => 1,
        ]);

        return back()->with('success', 'Patient sent to staff successfully');
 
    }







    public function assingedSpecialist(Request $request){ 
 
        $allPatients = PatientAssign::where('type', 'specialist_dr')->get();
        $specialist_drs = User::where('type', 'specialist_dr')->get();

        $i = 1;
        return view('backend.admin.assigned_specialist', compact('allPatients', 'specialist_drs','i'));
    }


    public function reportDeliveriableList(Request $request){ 
 
        $allPatients = PatientAssign::where('type', 'specialist_dr')->get();
        $specialist_drs = User::where('type', 'specialist_dr')->get();

        $i = 1;
        return view('backend.admin.report_deliverible_list', compact('allPatients', 'specialist_drs','i'));
    }


    public function plhebotomistPatienList(Request $request){ 
 
        $allPatients = PatientAssign::where('user_id', Auth::user()->id)->get();
        $specialist_drs = User::where('type', 'specialist_dr')->get();

        $i = 1;
        return view('backend.staff.patients_list', compact('allPatients', 'specialist_drs','i'));
    }


    public function specialistPatienList(Request $request){ 
 
        $allPatients = PatientAssign::where('user_id', Auth::user()->id)->get();
        $specialist_drs = User::where('type', 'specialist_dr')->get();

        $i = 1;
        return view('backend.staff.patients_list', compact('allPatients', 'specialist_drs','i'));
    }



    public function phlebotomistStatusUpdate(Request $request){ 
  
        $assignPatient = PatientAssign::find($request->pid);

        if($request->status == 'on_the_way'){
            $status = 'On the Way for Collection';
            $remark = 'On the way for sample collection';

        }elseif($request->status == 'sample_collected'){
            $status = 'Sample Collected';
            $remark = 'Sample collected successfully';

        }elseif($request->status == 'sent_to_lab'){
            $status = 'Sent to Lab';
            $remark = 'Sample sent to lab';

        }elseif($request->status == 'report_done'){
            $status = 'Report completed';
            $remark = 'Report completed successfully';

        }

        ReportTrack::create([
            'user_id' => $request->id,
            'staff_id' => $assignPatient->user_id,
            'status' => $status,
            'remark' => $remark,
        ]);
 
        PatientAssign::where('id', $request->pid)->update([
            'step' => $request->status,
        ]);

        return back()->with('success', 'Your work step updated successfully');
    }


    public function reportStatusUpdate(Request $request){ 

        $assignPatient = PatientAssign::find($request->id);

        if($request->status == 'accepted'){
            $status = 'Deliverble accepted';
            $remark = 'Report Uploaded for deliverble to patient';

        }else{
            $status = 'Deliverble panding';
            $remark = 'Report pending';
        }

        ReportTrack::create([
            'user_id' => $assignPatient->vaccine_register_id,
            'staff_id' => $assignPatient->user_id,
            'status' => $status,
            'remark' => $remark,
        ]);


        PatientAssign::where('id', $request->id)->update([
            'report' => $request->status,
        ]);

        return back()->with('success', 'Your work step updated successfully');
    }



    public function uploadReportFile(Request $request){ 

        $request->validate([
            'report_file' => 'required',
        ]);

        $fileName = time().'.'.$request->report_file->extension();  
        $request->report_file->move(public_path('uploads/reports'), $fileName);
 
 
        $patient = PatientAssign::where('id', $request->id)->update([
            'report_file' => $fileName,
        ]);

        CovidStatus::create([
            'patient_id' => $request->id,
            'status' => $request->cvd_status,
        ]);



        return back()->with('success', 'Patient Report Uploaded successfully');
    }



    public function uploadCollectedSample(Request $request){ 

        $request->validate([
            'sample_file' => 'required',
        ]);

        $fileName = time().'.'.$request->sample_file->extension();  
        $request->sample_file->move(public_path('uploads/collected-sample'), $fileName);
 
 
        $patient = PatientAssign::where('id', $request->id)->update([
            'sample_file' => $fileName,
        ]);

        return back()->with('success', 'Patient Report Uploaded successfully');
    }









}

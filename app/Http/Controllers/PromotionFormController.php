<?php

namespace App\Http\Controllers;

use App\Helpers\ImageUpload;
use App\Models\PartAAcademicQualification;
use App\Models\PartAExperienceRecord;
use App\Models\PartAGeneralInfo;
use App\Models\PartAMphilPhdRecord;
use App\Models\PartARefresherProgramAttended;
use App\Models\PartAServiceInLnmuFrom;
use App\Models\PromotionApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PromotionFormController extends Controller
{

   public $user;
   public function step1()
   {
         $user=Auth::guard('promotion_app_user')->user();
        return view('promotionform.step1',compact('user'));
   }
   public function step1_store(Request $req)
   {
       $this->user=Auth::guard('promotion_app_user')->user();
       $req->validate(['profile_pic'=>'nullable|image|max:100']);
       $image='';
       $promotion=PromotionApplication::updateOrCreate([
         'promotion_application_users_id'=>Auth::guard('promotion_app_user')->user()->id,
       ],[
         'promotion_application_users_id'=>Auth::guard('promotion_app_user')->user()->id,
         'promotion_level'=>$req->levels,
         'name'=>$req->first_name.' '.$req->last_name,
         'department'=>$req->department,
         'college'=>$req->college_name,
         'notification_reference_no'=>$req->advertisement_no,
         'notification_reference_date'=>$req->date,
         'date_of_appointment'=>$req->date_of_appointment,
         'date_of_confirmation'=>$req->date_of_confirmation,
         'assessment_promotion_from'=>$req->assessment_period_for_promotion_from,
         'assessment_promotion_to'=>$req->assessment_period_for_promotion_to,
         'promotion_notification_no'=>$req->last_promotion_notification_no,
         'promotion_notification_date'=>$req->date_of_last_promotion,
         'grade_annual_performance'=>$req->grade_performance,
         'total_academic_research_scores'=>$req->research_score
       ]);
       if($promotion){
         $req->hasFile('profile_pic')?$promotion->update(['profile_image'=>ImageUpload::simpleUpload('promotion_user/Profile',$req->profile_pic,Auth::guard('promotion_app_user')->user()->email)]):'';
         $promotion->wasRecentlyCreated?Auth::guard('promotion_app_user')->user()->increment('step'):'';
         Alert::success('Previous Step Save Successfully');
         return redirect()->route('promotion-form.step-'.Auth::guard('promotion_app_user')->user()->step+1);
       }
       Alert::error('This Form Cant Save right Now');
       return redirect()->route('promotion-form.step-'.Auth::guard('promotion_app_user')->user()->step+1);
   }
   public function step2()
   {
      $user=Auth::guard('promotion_app_user')->user();
      return view('promotionform.step2',compact('user'));
   }
   public function step2_store(Request $req)
   {
     $data= $req->except(['_token','next']);
     $data['promotion_application_users_id']=Auth::guard('promotion_app_user')->user()->id;
     $dt=PartAGeneralInfo::updateOrCreate(['promotion_application_users_id'=>Auth::guard('promotion_app_user')->user()->id],$data);
     if($dt){
         $dt->wasRecentlyCreated?Auth::guard('promotion_app_user')->user()->increment('step'):'';
         Alert::success('Previous Step Save Successfully');
     }
     else
     {
      Alert::error('This Form Cant Save right Now');
     }
     return redirect()->route('promotion-form.step-'.Auth::guard('promotion_app_user')->user()->step+1);
   }
   public function step3()
   {
      $user=Auth::guard('promotion_app_user')->user();
      return view('promotionform.step3',compact('user'));
   }
   public function step3_store(Request $req)
   {
      $r=PartAAcademicQualification::saveinfo($req);
      if($r){
          Alert::success('Previous Step Save Successfully');
      }
      return redirect()->route('promotion-form.step-'.Auth::guard('promotion_app_user')->user()->step+1);
   }
   public function step4()
   {
      $user=Auth::guard('promotion_app_user')->user();
      return view('promotionform.step4',compact('user'));
   }

   public function step4_store(Request $req)
   {
      $data=$req->only(['ug_pg_in_years','ug_pg_from','ug_pg_to','mphil_phd_in_years','mphil_phd_from','mphil_phd_to','years_spent_in_mphil','years_spent_in_phd','years_of_guiding_completed','years_of_guiding_registered','years_of_guiding_phd','papers_published_international_journals','papers_published_national_journals','papers_published_state_level_journals','papers_published_total','conferences_seminars_international_attended','conferences_seminars_national_attended','conferences_seminars__state_level_attended','conferences_seminars_total_attended','conferences_seminars_international_papers_presented',
   'conferences_seminars_national_papers_presented','conferences_seminars__state_level_papers_presented','conferences_seminars_total_papers_presented',
'awards_prizes_honours_recognitions','specialization_in_the_subject_discipline','']);
$data['promotion_application_users_id']=Auth::guard('promotion_app_user')->user()->id;
      $dt=PartAExperienceRecord::updateOrCreate(['promotion_application_users_id'=>Auth::guard('promotion_app_user')->user()->id],$data);
      if($dt){
         $dt->wasRecentlyCreated?Auth::guard('promotion_app_user')->user()->increment('step'):'';
         PartAMphilPhdRecord::where(['promotion_application_users_id'=>Auth::guard('promotion_app_user')->user()->id])->delete();
         foreach($req->type as $k=>$t)
         {
            $r=PartAMphilPhdRecord::create([
               'promotion_application_users_id'=>Auth::guard('promotion_app_user')->user()->id,
               'type'=>$req->type[$k]??'',
               'period_of_from'=>$req->period_of_from[$k]??'',
               'period_of_to'=>$req->period_of_to[$k]??'',
               'name_of_institute_university'=>$req->name_of_institute_university[$k]??'',
               'research_topic'=>$req->research_topic[$k]??'',
               'date_of_notification_result_conferring_the_degree'=>$req->date_of_notification_result_conferring_the_degree[$k]??'',
               'encl_no'=>$req->encl_no[$k]??''
            ]);
         }
         Alert::success('Previous Step Save Successfully');
     }
     else
     {
      Alert::error('This Form Cant Save right Now');
     }
     return redirect()->route('promotion-form.step-'.Auth::guard('promotion_app_user')->user()->step+1);
   
   }
   public function step5()
   {
      
      $user=Auth::guard('promotion_app_user')->user();
      return view('promotionform.step5',compact('user'));
   }
   public function step5_store(Request $req)
   {
      
     $data=$req->only(['vision_to_the_department','contribution_to_the_department','future_academic_development_plan','other_relevant_information']);
     PartAExperienceRecord::updateOrCreate(['promotion_application_users_id'=>Auth::guard('promotion_app_user')->user()->id],$data);
     PartARefresherProgramAttended::where(['promotion_application_users_id'=>Auth::guard('promotion_app_user')->user()->id,])->delete();
      foreach($req->type as $k=>$type){
         $file=$req->hasFile('file['.$k.']')?ImageUpload::simpleUpload('certificate',$req->file[$k],Auth::guard('promotion_app_user')->user()->id):'';
         $r=PartARefresherProgramAttended::create([
            'promotion_application_users_id'=>Auth::guard('promotion_app_user')->user()->id,
            'type'=>$req->type[$k]??'',
            'particulars'=>$req->particulars[$k]??'',
            'place'=>$req->place[$k]??'',
            'duration_from'=>$req->duration_from[$k]??'',
            'duration_to'=>$req->duration_to[$k]??'',
            'sponsoring_agency'=>$req->sponsoring_agency[$k]??'',
            'encl_no'=>$req->encl_no[$k]??''
         ]);
         if($r){
            $req->hasFile('file['.$k.']')?$r->update(['file'=>$file]):'';
         }
      }
      Alert::success('Previous Data Save ');
     return redirect()->back();
   }
}

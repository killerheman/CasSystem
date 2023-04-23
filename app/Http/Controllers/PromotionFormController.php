<?php

namespace App\Http\Controllers;

use App\Helpers\ImageUpload;
use App\Models\PartAAcademicQualification;
use App\Models\PartAGeneralInfo;
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
      return view('promotionform.step3');
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
      return view('promotionform.step4');
   }
   public function step5()
   {
      return view('promotionform.step5');
   }
}

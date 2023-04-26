<?php

namespace App\Models;

use App\Helpers\ImageUpload;
use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PartAAcademicQualification extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public function getClassWithAttribute()
    {
       return $this['class_with_%'];
    }
    public static function saveinfo(Request $req)
    {
        $d=PartAAcademicQualification::where(['promotion_application_users_id'=>Auth::guard('promotion_app_user')->user()->id])->exists();
        try{
            
            PartAAcademicQualification::where(['promotion_application_users_id'=>Auth::guard('promotion_app_user')->user()->id])->delete();
                foreach($req->qualifications as $k=>$qualification){
                   $qualification= PartAAcademicQualification::create([
                    'promotion_application_users_id'=>Auth::guard('promotion_app_user')->user()->id,
                    'qualifications'=>$req->qualifications[$k]??'',
                    'college_university'=>$req->college_university[$k]??'',
                    'session'=>$req->session[$k]??'',
                    'year_of_passing'=>$req->year_of_passing[$k],
                    'marks_obtained_out_of_or_cgpa_grade'=>$req->marks_obtained_out_of_or_cgpa_grade[$k],
                    'class_with_%'=>$req->class_with[$k], 
                    ]);
                    if($qualification){
                        if($req->hasFile('file')){
                            isset($req->file[$k])?$qualification->update(['file'=>ImageUpload::simpleUpload('certificate',$req->file[$k],'q-'.Auth::guard('promotion_app_user')->user()->id)]):'';
                        }
                    }
                }

                // RECORD OF ACADEMIC SERVICE PRIOR TO JOINING LNMU
                PartAAcademicServicePrior::where(['promotion_application_users_id'=>Auth::guard('promotion_app_user')->user()->id])->delete();
                foreach($req->institution as $k=>$qualification){
                   $lnmu= PartAAcademicServicePrior::create([
                        'promotion_application_users_id'=>Auth::guard('promotion_app_user')->user()->id,
                       'institution'=>$req->institution[$k]??'',
                        'designation'=>$req->designation[$k]??'',
                        'nature_of_appointment'=>$req->nature_of_appointment[$k]??'',
                       'nature_of_duties'=> $req->nature_of_duties[$k]??'',
                       'pay_scale_pay_band_and_agp'=> $req->pay_scale_pay_band_and_agp[$k]??'',
                       'duration_from'=> $req->duration_from[$k]??'',
                        'duration_to'=>$req->duration_to[$k]??'',
                        'experience_year'=>$req->experience_year[$k]??'',
                       'experience_months'=> $req->experience_months[$k]??'',
                       'minimum_qualification_for_the_post'=> $req->minimum_qualification_for_the_post[$k]??'',
                        'highest_degree_obtained'=>$req->highest_degree_obtained[$k]??'',
                       'encl_no'=> $req->encl_no[$k]??'',
                        'remark'=>$req->remark[$k]??''
                    ]);
                    if($lnmu){
                        if($req->hasFile('service_file')){
                            isset($req->service_file[$k])?$lnmu->update(['file'=>ImageUpload::simpleUpload('certificate',$req->service_file[$k],'sf-'.Auth::guard('promotion_app_user')->user()->id)]):'';
                        }
                    }
                }

                // RECORD OF SERVICE IN LNMU FROM THE DATE OF JOINING AS A REGULAR TEACHER:
                PartAServiceInLnmuFrom::where(['promotion_application_users_id'=>Auth::guard('promotion_app_user')->user()->id])->delete();
                foreach($req->level as $k=>$level){
                  $d=  PartAServiceInLnmuFrom::create([
                        'promotion_application_users_id'=>Auth::guard('promotion_app_user')->user()->id,
                        'level'=>$req->level[$k]??''??'',
                        'designation'=>$req->lnmu_designation[$k]??'',
                        'pay_scale_and_agp'=>$req->pay_scale_and_agp[$k]??'',
                        'duration_from'=>$req->step3_duration_from[$k]??'',
                        'duration_to'=>$req->step3c_duration_to[$k]??'',
                        'experience_year'=>$req->step3c_experience_year[$k]??'',
                        'experience_months'=>$req->step3c_experience_months[$k]??'',
                        'encl_no'=>$req->lnmu_encl_no[$k]??'',
                        'remarks'=>$req->remarks[$k]??''
                    ]);
                    if($d){
                        if($req->hasFile('step3c_experience_file')){
                            isset($req->step3c_experience_file[$k])?$d->update(['file'=>ImageUpload::simpleUpload('certificate',$req->step3c_experience_file[$k],'ex-'.Auth::guard('promotion_app_user')->user()->id)]):'';
                        }
                    }
                }

                Auth::guard('promotion_app_user')->user()->step==2?Auth::guard('promotion_app_user')->user()->increment('step'):'';
                return true;
            }
            catch(Exception $ex){
                Log::info('qualification error '.json_encode($ex->getMessage()));
                return false;
            }
        }
}

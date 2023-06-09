<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class PromotionApplicationUser extends  Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded=[];

    public function step1()
    {
       return $this->hasOne(PromotionApplication::class,'promotion_application_users_id');
    }
    public function step2()
    {
       return $this->hasOne(PartAGeneralInfo::class,'promotion_application_users_id');
    }

    public function step3_a()
    {
        return $this->hasMany(PartAAcademicQualification::class,'promotion_application_users_id');
    }
    public function step3_b()
    {
        return $this->hasMany(PartAAcademicServicePrior::class,'promotion_application_users_id');
    }
    public function step3_c()
    {
        return $this->hasMany(PartAServiceInLnmuFrom::class,'promotion_application_users_id');
    }
    public function step4()
    {
        return $this->hasOne(PartAExperienceRecord::class,'promotion_application_users_id');
    }
    public function step4_phdrecord()
    {
        return $this->hasMany(PartAMphilPhdRecord::class,'promotion_application_users_id');
    }
    public function step5()
    {
       return $this->hasMany(PartARefresherProgramAttended::class,'promotion_application_users_id');
    }
    public function step6()
    {
       return $this->hasMany(PromotionApplicationPartB::class,'promotion_application_id');
    }
    public function step6_b()
    {
       return $this->hasMany(PromotionApplicationPartBInvolvement::class,'promotion_application_user_id');
    }
    public function step6_c()
    {
       return $this->hasMany(AcademicResearchScoreResearchPaper::class,'promotion_application_user_id');
    }
    public function step7()
    {
       return $this->hasMany(AcademicResearchScorePublication::class,'promotion_application_user_id');
    }
    public function step7_b()
    {
       return $this->hasMany(AcademinResearchScoreIctMediated::class,'promotion_application_user_id');
    }
    public function step8()
    {
        return $this->hasMany(AcademinResearchScoreGuidance::class,'promotion_application_user_id');
    }
    public function step8_b()
    {
        return $this->hasMany(AcademinResearchScoreProject::class,'promotion_application_user_id');
    }

    public function step9()
    {
       return $this->hasMany(AcademinResearchScorePatentsAndPolicyDoc::class,'promotion_application_user_id');
    }
    public function step9_b()
    {
       return $this->hasMany(AcademinResearchScoreAwardsFellowship::class,'promotion_application_user_id');
    }
    public function step9_c()
    {
       return $this->hasMany(AcademinResearchScoreInvitedLecture::class,'promotion_application_user_id');
    }
    public function step10()
    {
      return $this->hasMany(AcademinResearchScoreSummaryClaimed::class,'promotion_application_user_id');
    }
}

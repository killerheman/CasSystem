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
   
}

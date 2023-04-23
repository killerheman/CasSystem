<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PromotionApplication extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    public function getFirstNameAttribute()
    {
       return explode(' ',$this->name)[0];
    }
    public function getLastNameAttribute()
    {
       return explode(' ',$this->name)[1];
    }
}

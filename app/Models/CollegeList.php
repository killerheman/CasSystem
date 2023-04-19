<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeList extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function NaacReport()
    {
       return $this->hasOne(NaacStatusReport::class,'college_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NaacStatusReport extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function college(){
        return $this->belongsTo(CollegeList::class,'college_id');
    }
}

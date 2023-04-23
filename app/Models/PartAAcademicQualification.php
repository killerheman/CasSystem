<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PartAAcademicQualification extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    public static function saveinfo(Request $req)
    {
       foreach($req->qualifications as $k=>$qualification){
        PartAAcademicQualification::create([
        'promotion_application_users_id'=>Auth::guard('promotion_app_user')->user()->id,
        'qualifications'=>$req->qualifications[$k]??'',
        'college_university'=>$req->college_university[$k]??'',
        'session'=>$req->session[$k]??'',
        'year_of_passing'=>$req->year_of_passing[$k],
        'marks_obtained_out_of_or_cgpa_grade'=>$req->marks_obtained_out_of_or_cgpa_grade[$k],
        'class_with_%'=>$req->class_with[$k], 
        ]);
       }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademinResearchScoreGuidance extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function getThesisAttribute()
    {
       return $this['title_of_the_dissertation/thesis'];
    }
}

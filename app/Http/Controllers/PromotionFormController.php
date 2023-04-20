<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionFormController extends Controller
{
   public function step1()
   {
        return view('promotionform.step1');
   }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreviewPromotionController extends Controller
{
    public function preview()
    {
        $user = Auth::guard('promotion_app_user')->user();
        if(isset($user)){
            $users =  Auth::guard('promotion_app_user')->user();
            // dd($users->step1->promotion_level );
            return view('preview', compact('users'));
        }
        else{
            return redirect()->route('promotion-form.user-login')->with('toast_error', 'Please login to preview');
        }
    }
}

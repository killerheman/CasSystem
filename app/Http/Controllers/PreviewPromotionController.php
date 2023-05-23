<?php

namespace App\Http\Controllers;

use App\Models\PromotionApplicationUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class PreviewPromotionController extends Controller
{
    public function preview()
    {
        $user = Auth::guard('promotion_app_user')->user();
        if(isset($user)){
            $users =  Auth::guard('promotion_app_user')->user();
            $user=$users;
            // dd($users->step1->promotion_level );
            return view('preview', compact('users','user'));
        }
        else{
            return redirect()->route('promotion-form.user-login')->with('toast_error', 'Please login to preview');
        }
    }

    public function preview_check($id)
    {
        $cid=Crypt::decrypt($id);
        return $cid;
        $user=PromotionApplicationUser::find($cid);
        $users=$user;
        return view('preview', compact('users','user'));
    }
}

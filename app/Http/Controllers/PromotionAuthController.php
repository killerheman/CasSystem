<?php

namespace App\Http\Controllers;

use App\Mail\PromotionUserOtpMail;
use App\Models\PromotionApplication;
use App\Models\PromotionApplicationUser;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class PromotionAuthController extends Controller
{
   public function user_login()
   {
        return view('promotionform.login');
   }

   public function user_login_otp_send(Request $req)
   {
        $req->validate([
            'email'=>'required|email'
        ]);
        try{
            // $isUserExist = PromotionApplicationUser::where('email', $req->email)->where('is_final_submit', 1)->first();
            // if($isUserExist){
                $res= PromotionApplicationUser::updateOrCreate(['email'=>$req->email],[
                    'email'=>$req->email,
                    'otp'=>rand(0000,9999),
                    'otp_expire_at'=>Carbon::now()->addMinutes(15)
                ]);
                if($res){
                    Mail::to($res->email)->send(new PromotionUserOtpMail($res));
                    return 1;
                }
                else{
                    return 0;
                }
            // }
            // else{
            //     return 2;
            // }
    }
    catch(Exception $ex){
        return $ex->getMessage();
    }
   }

   public function user_login_otp_verify(Request $req)
   {
        $req->validate([
            'email'=>'required|email|exists:promotion_application_users,email',
            'otp'=>'required|exists:promotion_application_users,otp'
        ]);

        $user=PromotionApplicationUser::where('email',$req->email)->whereDate('otp_expire_at',Carbon::now())->whereTime('otp_expire_at','>=',Carbon::now())->where('otp',$req->otp)->first();
        if($user){
            Auth::guard('promotion_app_user')->loginUsingId($user->id);
            if(Auth::guard('promotion_app_user')->user()->is_final_submit==true){
                Alert::success('Your form was submitted successfully. Please take Print');
                return redirect()->route('promotion-form.preview');
            }
            Alert::warning('Please Check Your all documents from doc button and make sure that all are uploaded. If it is missing kindly upload it  again');
            return redirect()->route('promotion-form.step-'.$user->step+1);
        }
        else
        {
            Alert::warning('OTP Expire');
            return route('promotion-form.user-login');
        }
   }
}

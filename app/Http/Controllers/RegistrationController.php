<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('promotion_registration');
    }
    public function step2()
    {
        return view('step2');
    }
    public function step3()
    {
        return view('step3');
    }

    public function step4()
    {
        return view('step4');
    }
}

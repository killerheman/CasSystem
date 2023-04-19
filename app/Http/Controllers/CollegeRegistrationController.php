<?php

namespace App\Http\Controllers;

use App\Mail\CollegeNaacFilling;
use App\Models\CollegeList;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use RealRashid\SweetAlert\Facades\Alert;

class CollegeRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate([
        'college_name'=>'required',
        'college_email'=>'required|email'
      ]);

      try{
      $college=CollegeList::firstOrCreate(['email'=>$request->college_email],[
        'email'=>$request->college_email,
        'name'=>$request->college_name
      ]);
     $url=URL::temporarySignedRoute('naac-filling.index',now()->addMinutes(30),['user'=>Crypt::encrypt($college->id)]);
     Mail::to($college->email)->send(new CollegeNaacFilling($url));
     Alert::success('Link send on your email kindly procceed for next step');
     
    }
    catch(Exception $ex){
        Alert::warning($ex->getMessage());

    }
    return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

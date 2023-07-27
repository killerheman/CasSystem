<?php

namespace App\Http\Controllers;

use App\Exports\NaacStatus;
use App\Mail\CollegeNaacFilling;
use App\Models\CollegeList;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\NaacStatusReport;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

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
      NaacStatusReport::updateOrCreate(['college_id'=>$college->id],['aished_id'=>$request->aishe_code]);

     $url=URL::temporarySignedRoute('naac-filling.index',now()->addMinutes(30),['user'=>Crypt::encrypt($college->id)]);
     $otp=rand(1111,9999);
     $request->session()->put('college-'.$college->id, $otp);
     Session::put('route-link',$url);
     Mail::to($college->email)->send(new CollegeNaacFilling($url,$otp));
     Alert::success('Link send on your email kindly procceed for next step Or Enter OTP');
     
    }
    catch(Exception $ex){
        Alert::warning($ex->getMessage());

    }
    return redirect()->back()->with(['college_id'=>$college->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $req,string $id)
    {
        $req->validate([
            'otp'=>'required|integer',
            'college_id'=>'required|exists:college_lists,id'
        ]);

        if(Session::has('college-'.$req->college_id) and Session::get('college-'.$req->college_id)==$req->otp){
            $link=Session::get('route-link');
            Session::flush();
            return redirect($link);
            
        }
        else{
            Session::flush();
            Alert::error('Invalid Or Expired OTP given');
            return redirect()->back();
        }
        
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

    public function download_excel(){
        return Excel::download(new NaacStatus(),'report.xlsx');        

    }
}

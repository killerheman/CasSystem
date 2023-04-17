<?php

namespace App\Http\Controllers;

use App\Models\CollegeList;
use App\Models\NaacStatusReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use RealRashid\SweetAlert\Facades\Alert;

class NAACController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->hasValidSignature()){
            $naac='';
            $collegedetail=CollegeList::find(Crypt::decrypt($request->user));
            return view('naac_status',['user'=>$request->user,'college'=>$collegedetail]);
            }
            else
            {
                abort(403);
            }
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
      
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        
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
       $naac=NaacStatusReport::updateOrCreate(['college_id'=>Crypt::decrypt($id)],[
        'district'=>$request->district,
        'college_type'=>$request->college_type,
        'aished_id'=>$request->aished_id,
        'academic_level'=>$request->academic_level,
        'address'=>$request->address,
        'accrediation_status'=>$request->accrediation_status,
        'last_accredetion'=>$request->last_accredition_date,
        'accredetion_upto'=>$request->accredition_upto,
        'grade'=>$request->grade,
        'cgpa'=>$request->cgpa,
        'praposed_date_of_pending_aqar'=>$request->proposed_aqar_date,
        'aqar_submition_upto'=>$request->aqar_submitted_upto,
        'praposed_date_of_pending_iiqa'=>$request->iiqa,
        'ssr_status'=>$request->ssr_staus,
        'remark'=>$request->remark,
        'accept'=>$request->accept
       ]);
       if($naac){
            $naac->update(['is_complete'=>true]);
            Alert::success('Naac Status Submitted Successfully');
       }
       else{
        Alert::warning('Report Submition Fail please Try Again');
       }
       return redirect()->route('college-register.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

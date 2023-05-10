<?php

namespace App\Http\Controllers;

use App\Helpers\ImageUpload;
use App\Models\AcademicResearchScorePublication;
use App\Models\AcademicResearchScoreResearchPaper;
use App\Models\AcademinResearchScoreAwardsFellowship;
use App\Models\AcademinResearchScoreGuidance;
use App\Models\AcademinResearchScoreIctMediated;
use App\Models\AcademinResearchScoreInvitedLecture;
use App\Models\AcademinResearchScorePatentsAndPolicyDoc;
use App\Models\AcademinResearchScoreProject;
use App\Models\AcademinResearchScoreSummaryClaimed;
use App\Models\PartAAcademicQualification;
use App\Models\PartAExperienceRecord;
use App\Models\PartAGeneralInfo;
use App\Models\PartAMphilPhdRecord;
use App\Models\PartARefresherProgramAttended;
use App\Models\PartAServiceInLnmuFrom;
use App\Models\PromotionApplication;
use App\Models\PromotionApplicationPartB;
use App\Models\PromotionApplicationPartBInvolvement;
use App\Models\PromotionApplicationUser;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PromotionFormController extends Controller
{

    public $user;
    public function step1()
    {
        $user = Auth::guard('promotion_app_user')->user();
        return view('promotionform.step1', compact('user'));
    }
    public function step1_store(Request $req)
    {

        $this->user = Auth::guard('promotion_app_user')->user();
        $req->validate(['profile_pic' => 'nullable|image|max:100']);
        $image = '';
        $promotion = PromotionApplication::updateOrCreate([
            'promotion_application_users_id' => Auth::guard('promotion_app_user')->user()->id,
        ], [
            'promotion_application_users_id' => Auth::guard('promotion_app_user')->user()->id,
            'promotion_level' => $req->levels,
            'name' => $req->first_name . ' ' .$req->middle_name.' '. $req->last_name,
            'f_name'=>$req->first_name,
            'm_name'=>$req->middle_name,
            'l_name'=>$req->last_name,
            'department' => $req->department,
            'college' => $req->college_name,
            'notification_reference_no' => $req->advertisement_no,
            'notification_reference_date' => $req->date,
            'date_of_appointment' => $req->date_of_appointment,
            'date_of_confirmation' => $req->date_of_confirmation,
            'notificatio_date_last_promotion'=>$req->last_promotion_notification_date,
            'assessment_promotion_from' => $req->assessment_period_for_promotion_from,
            'assessment_promotion_to' => $req->assessment_period_for_promotion_to,
            'promotion_notification_no' => $req->last_promotion_notification_no,
            'promotion_notification_date' => $req->date_of_last_promotion,
            'grade_annual_performance' => $req->grade_performance,
            'total_academic_research_scores' => $req->research_score
        ]);
        if ($promotion) {
            $req->hasFile('profile_pic') ? $promotion->update(['profile_image' => ImageUpload::simpleUpload('promotion_user/Profile', $req->profile_pic, Auth::guard('promotion_app_user')->user()->email)]) : '';
            $promotion->wasRecentlyCreated ? Auth::guard('promotion_app_user')->user()->increment('step') : '';
            Alert::success('Previous Step Save Successfully');
            return redirect()->route('promotion-form.step-' . Auth::guard('promotion_app_user')->user()->step + 1);
        }
        Alert::error('This Form Cant Save right Now');
        return redirect()->route('promotion-form.step-' . Auth::guard('promotion_app_user')->user()->step + 1);
    }
    public function step2()
    {
        $user = Auth::guard('promotion_app_user')->user();
        return view('promotionform.step2', compact('user'));
    }
    public function step2_store(Request $req)
    {
        $data = $req->except(['_token', 'next','submit']);
        $data['promotion_application_users_id'] = Auth::guard('promotion_app_user')->user()->id;
        $dt = PartAGeneralInfo::updateOrCreate(['promotion_application_users_id' => Auth::guard('promotion_app_user')->user()->id], $data);
        if ($dt) {
            Auth::guard('promotion_app_user')->user()->step==1 ? Auth::guard('promotion_app_user')->user()->increment('step') : '';
            Alert::success('Previous Step Save Successfully');
        } else {
            Alert::error('This Form Cant Save right Now');
        }
        return redirect()->route('promotion-form.step-' . Auth::guard('promotion_app_user')->user()->step + 1);
    }
    public function step3()
    {
        $user = Auth::guard('promotion_app_user')->user();
        return view('promotionform.step3', compact('user'));
    }
    public function step3_store(Request $req)
    {
        // dd($req->service_file[1]);
        $r = PartAAcademicQualification::saveinfo($req);
        if ($r) {
            Alert::success('Previous Step Save Successfully');
        }
        return redirect()->route('promotion-form.step-' . Auth::guard('promotion_app_user')->user()->step + 1);
    }
    public function step4()
    {
        $user = Auth::guard('promotion_app_user')->user();
        return view('promotionform.step4', compact('user'));
    }

    public function step4_store(Request $req)
    {
        $req->validate([
            'teaching_file'=>'max:100',
            'research_file'=>'max:100',
            'research_b'=>'array',
            'research_b.*'=>'max:100',
            'pd_file'=>'max:100',
            'paper_file'=>'max:100',
            'conference_international'=>'max:100',
            'conference_national'=>'max:100',
            'conference_state'=>'max:100',
        ]);
        // $data = $req->only([
        //     'ug_pg_in_years', 'ug_pg_from', 'ug_pg_to', 'mphil_phd_in_years', 'mphil_phd_from', 'mphil_phd_to', 'years_spent_in_mphil', 'years_spent_in_phd', 'years_of_guiding_phd', 'years_of_guiding_completed', 'years_of_guiding_registered', 'years_of_guiding_phd', 'papers_published_international_journals', 'papers_published_national_journals', 'papers_published_state_level_journals', 'papers_published_total', 'conferences_seminars_international_attended', 'conferences_seminars_national_attended', 'conferences_seminars__state_level_attended', 'conferences_seminars_total_attended', 'conferences_seminars_international_papers_presented',
        //     'conferences_seminars_national_papers_presented', 'conferences_seminars__state_level_papers_presented', 'conferences_seminars_total_papers_presented',
        //     'awards_prizes_honours_recognitions', 'specialization_in_the_subject_discipline', ''
        // ]);
        $data['promotion_application_users_id'] = Auth::guard('promotion_app_user')->user()->id;
        $dt = PartAExperienceRecord::updateOrCreate(['promotion_application_users_id' => Auth::guard('promotion_app_user')->user()->id], [
            'ug_pg_in_years'=>$req->ug_pg_in_years??'',
            'ug_pg_from'=>$req->ug_pg_from??'',
            'ug_pg_to'=>$req->ug_pg_to??'',
            'mphil_phd_in_years'=>$req->mphil_phd_in_years??'',
            'mphil_phd_from'=>$req->mphil_phd_from??'',
            'mphil_phd_to'=>$req->mphil_phd_to??'',
            'years_spent_in_mphil'=>$req->years_spent_in_mphil??'',
            'years_spent_in_phd'=>$req->years_spent_in_phd??'',
            'years_of_guiding_phd'=>$req->years_of_guiding_phd??'',
            'years_of_guiding_completed'=>$req->years_of_guiding_completed??'',
            'years_of_guiding_registered'=>$req->years_of_guiding_registered??'',
             'papers_published_international_journals'=>$req->papers_published_international_journals??'',
             'papers_published_national_journals'=>$req->papers_published_national_journals??'',
             'papers_published_state_level_journals'=>$req->papers_published_state_level_journals??'',
             'papers_published_total'=>$req->papers_published_total??'',
             'conferences_seminars_international_attended'=>$req->conferences_seminars_international_attended??'',
             'conferences_seminars_national_attended'=>$req->conferences_seminars_national_attended??'',
             'conferences_seminars__state_level_attended'=>$req->conferences_seminars__state_level_attended??'',
             'conferences_seminars_total_attended'=>$req->conferences_seminars_total_attended??'',
             'conferences_seminars_international_papers_presented'=>$req->conferences_seminars_international_papers_presented??'',
            'conferences_seminars_national_papers_presented'=>$req->conferences_seminars_national_papers_presented??'',
             'conferences_seminars__state_level_papers_presented'=>$req->conferences_seminars__state_level_papers_presented??'',
             'conferences_seminars_total_papers_presented'=>$req->conferences_seminars_total_papers_presented??'',
            'awards_prizes_honours_recognitions'=>$req->awards_prizes_honours_recognitions??'',
             'specialization_in_the_subject_discipline'=>$req->specialization_in_the_subject_discipline??'',
        ]);
        $files=[];
        if($req->hasFile('teaching_file')){
            $files['teaching_file']=ImageUpload::simpleUpload('certificate',$req->teaching_file,'teach-'.Auth::guard('promotion_app_user')->user()->id)??'';
        }
        if($req->hasFile('research_file')){
            $files['research_file']=ImageUpload::simpleUpload('certificate',$req->research_file,'research-'.Auth::guard('promotion_app_user')->user()->id)??'';
        }
        if($req->hasFile('pd_file')){
            $files['pd_file']=ImageUpload::simpleUpload('certificate',$req->pd_file,'pd-'.Auth::guard('promotion_app_user')->user()->id)??'';
        }
        if($req->hasFile('paper_file')){
            $files['paper_file']=ImageUpload::simpleUpload('certificate',$req->paper_file,'paper-'.Auth::guard('promotion_app_user')->user()->id)??'';
        }
        if($req->hasFile('conference_international')){
            $files['conference_international']=ImageUpload::simpleUpload('certificate',$req->conference_international,'co-int-'.Auth::guard('promotion_app_user')->user()->id)??'';
        }
        if($req->hasFile('conference_national')){
            $files['conference_national']=ImageUpload::simpleUpload('certificate',$req->conference_national,'co-nat-'.Auth::guard('promotion_app_user')->user()->id)??'';
        }
        if($req->hasFile('conference_state')){
            $files['conference_state']=ImageUpload::simpleUpload('certificate',$req->conference_state,'co-st-'.Auth::guard('promotion_app_user')->user()->id)??'';
        }
        $dt->update(['file'=>json_encode($files)]);
        if ($dt) {
            Auth::guard('promotion_app_user')->user()->step == 3 ? Auth::guard('promotion_app_user')->user()->increment('step') : '';
            PartAMphilPhdRecord::where(['promotion_application_users_id' => Auth::guard('promotion_app_user')->user()->id])->delete();
            if(isset($req->type)){
            foreach ($req->type as $k => $t) {
                $r = PartAMphilPhdRecord::create([
                    'promotion_application_users_id' => Auth::guard('promotion_app_user')->user()->id,
                    'type' => $req->type[$k] ?? '',
                    'period_of_from' => $req->period_of_from[$k] ?? '',
                    'period_of_to' => $req->period_of_to[$k] ?? '',
                    'name_of_institute_university' => $req->name_of_institute_university[$k] ?? '',
                    'research_topic' => $req->research_topic[$k] ?? '',
                    'date_of_notification_result_conferring_the_degree' => $req->date_of_notification_result_conferring_the_degree[$k] ?? '',
                    'encl_no' => $req->encl_no[$k] ?? ''
                ]);
                if($req->hasFile('research_b')){
                    isset($req->research_b[$k])?$f=ImageUpload::simpleUpload('certificate',$req->research_b[$k],'doc-'.Auth::guard('promotion_app_user')->user()->id):'';
                    $r->update(['file'=>$f]);
                }
            }
        }
            Alert::success('Previous Step Save Successfully');
        } else {
            Alert::error('This Form Cant Save right Now');
        }
        return redirect()->route('promotion-form.step-' . Auth::guard('promotion_app_user')->user()->step + 1);
    }
    public function step5()
    {

        $user = Auth::guard('promotion_app_user')->user();
        return view('promotionform.step5', compact('user'));
    }
    public function step5_store(Request $req)
    {
        $req->validate([
            'file' => 'array',
            'file.*' => 'max:100'
        ]);
        $data = $req->only(['vision_to_the_department', 'contribution_to_the_department', 'future_academic_development_plan', 'other_relevant_information']);
        $dt = PartAExperienceRecord::updateOrCreate(['promotion_application_users_id' => Auth::guard('promotion_app_user')->user()->id], $data);
        Auth::guard('promotion_app_user')->user()->step == 4 ? Auth::guard('promotion_app_user')->user()->increment('step') : '';
        $r = PartARefresherProgramAttended::where(['promotion_application_users_id' => Auth::guard('promotion_app_user')->user()->id])->delete();
        foreach ($req->type as $k => $type) {
            $r = PartARefresherProgramAttended::create([
                'promotion_application_users_id' => Auth::guard('promotion_app_user')->user()->id,
                'type' => $req->type[$k] ?? '',
                'particulars' => $req->particulars[$k] ?? '',
                'place' => $req->place[$k] ?? '',
                'duration_from' => $req->duration_from[$k] ?? '',
                'duration_to' => $req->duration_to[$k] ?? '',
                'sponsoring_agency' => $req->sponsoring_agency[$k] ?? '',
                'encl_no' => $req->encl_no[$k] ?? ''
            ]);
            if ($r) {
                if ($req->hasFile('file')) {
                    $req->file[$k] ? $file = ImageUpload::simpleUpload('certificate', $req->file[$k], Auth::guard('promotion_app_user')->user()->id) : '';
                    $req->file[$k] ? $r->update(['file' => $file]) : '';
                }
            }
        }
        Alert::success('Previous Data Save ');
        return redirect()->route('promotion-form.step-' . Auth::guard('promotion_app_user')->user()->step + 1);
    }

    //Part B
    public function step6()
    {

        $user = Auth::guard('promotion_app_user')->user();
        return view('promotionform.step6', compact('user'));
    }

    public function step6_store(Request $req)
    {
        $req->validate([
            'activity_file' => 'array',
            'activity_file.*' => 'max:100',
            'involment_file' => 'array',
            'involment_file.*' => 'max:100',
            'research_file' => 'max:100'
        ]);
        try {
            PromotionApplicationPartB::where('promotion_application_id', Auth::guard('promotion_app_user')->user()->id)->delete();
            foreach ($req->acadmicYears as $k => $v) {
                $d = PromotionApplicationPartB::create([
                    'promotion_application_id' => Auth::guard('promotion_app_user')->user()->id,
                    'A1_academic_year' => $req->acadmicYears[$k] ?? '',
                    'A1_semester' => $req->semester[$k] ?? '',
                    'teaching' => $req->teaching[$k] ?? '',
                    'varified_by_the_committee' => $req->committee[$k] ?? '',
                    'claimed_by_the_candidate' => $req->claimed_candidate[$k] ?? '',
                    'number_of_classes_tought' => $req->classes_Taught[$k] ?? '',
                    'total_classes_assigned' => $req->class_Assigned[$k] ?? '',
                    'remark_ks' => $req->remarks[$k] ?? '',
                    'encl_no' => $req->enclNo[$k]
                ]);
                if ($d) {
                    if ($req->hasFile('activity_file')) {
                        isset($req->activity_file[$k]) ? $file = ImageUpload::simpleUpload('certificate', $req->activity_file[$k], Auth::guard('promotion_app_user')->user()->id . '-act-') : '';
                       isset($req->activity_file[$k]) ? $d->update(['A1_file' => $file]) : '';
                    }
                }
            }
            PromotionApplicationPartBInvolvement::where('promotion_application_user_id', Auth::guard('promotion_app_user')->user()->id)->delete();
            foreach ($req->acadmicYear_b as $k => $v) {
                $d1 = PromotionApplicationPartBInvolvement::create([
                    'promotion_application_user_id' => Auth::guard('promotion_app_user')->user()->id,
                    'academic_year' => $req->acadmicYear_b[$k] ?? '',
                    'semester' => $req->semester_b[$k] ?? '',
                    'activity' => $req->activity[$k] ?? '',
                    'claimed_by_candidate' => $req->claimed_candidate_b[$k] ?? '',
                    'verify_by_committee' => $req->committee_b[$k] ?? '',
                    'remark' => $req->remarks_b[$k] ?? '',
                    'encl_no' => $req->enclNo_b[$k] ?? '',

                ]);
                if ($d1) {
                    if ($req->hasFile('involment_file')) {
                        isset($req->involment_file[$k]) ? $file = ImageUpload::simpleUpload('certificate', $req->activity_file[$k], Auth::guard('promotion_app_user')->user()->id . '-inv-') : '';
                       isset($req->involment_file[$k]) ? $d1->update(['file' => $file]) : '';
                    }
                }
            }

            AcademicResearchScoreResearchPaper::where('promotion_application_user_id', Auth::guard('promotion_app_user')->user()->id)->delete();
                $d2 = AcademicResearchScoreResearchPaper::create([
                    'promotion_application_user_id' => Auth::guard('promotion_app_user')->user()->id,
                    'title_research_chapter' => $req->research_paper ?? '',
                    'name_journal' => $req->name_journal ?? '',
                    'vol_pp_no_year' => $req->vol_pp_year?? '',
                    'impact_factor' => $req->impact_factor?? '',
                    'no_authors' => $req->name_authors?? '',
                    'type_authorship' =>  '',
                    'sr_in_ugc' => '',
                    'claimed_score' => '',
                    'varified_by_committee' =>'',
                    'encl_no' => '',
                    'co_author'=>$req->name_authors=='multiple'?json_encode($req->co_auth):json_encode([])

                ]);
                if ($d2) {
                    if ($req->hasFile('research_file')) {
                        isset($req->research_file) ? $file = ImageUpload::simpleUpload('certificate', $req->research_file, Auth::guard('promotion_app_user')->user()->id . '-res-') : '';
                        isset($req->research_file) ? $d2->update(['file' => $file]) : '';
                    }
            }
            Auth::guard('promotion_app_user')->user()->step == 5 ? Auth::guard('promotion_app_user')->user()->increment('step') : '';
            Alert::success('Previous Data Save ');
        } catch (Exception $ex) {
            Alert::error($ex->getMessage());
        }
        return redirect()->route('promotion-form.step-' . Auth::guard('promotion_app_user')->user()->step + 1);
    }
    public function step7()
    {
        $user = Auth::guard('promotion_app_user')->user();
        $step7 = $user->step7->whereIn('type', [1, 2, 3, 4, 5]);
        $step7_a = AcademicResearchScorePublication::where('promotion_application_user_id', $user->id)->whereIn('type', [6, 7])->get();
        return view('promotionform.step7', compact('user', 'step7', 'step7_a'));
    }

    public function step7_store(Request $req)
    {
        $req->validate([
            'book_file' => 'array',
            'book_file.*' => 'max:100',
            'ict_file' => 'array',
            'ict_file.*' => 'max:100'
        ]);

        AcademicResearchScorePublication::where('promotion_application_user_id', Auth::guard('promotion_app_user')->user()->id)->delete();
        foreach ($req->type as $k => $t) {
            $d = AcademicResearchScorePublication::create([
                'promotion_application_user_id' => Auth::guard('promotion_app_user')->user()->id,
                'title' => $req->title[$k] ?? '',
                'type' => $req->type[$k] ?? '',
                'auth' => $req->author[$k] ?? '',
                'co_author' => $req->co_auther[$k] ?? '',
                'publisher_month_year' => $req->publish_date[$k] ?? '',
                'publisher' => $req->publisher[$k] ?? '',
                'isbn_issn' => $req->isbn[$k] ?? '',
                'claimed_score' => $req->book_claimed_Score[$k] ?? '',
                'verify_by_committee' => $req->iqac_score[$k] ?? '',
                'encl_no' => $req->book_encl_no[$k] ?? ''
            ]);
            if ($d) {
                if ($req->hasFile('book_file')) {
                    isset($req->book_file[$k]) ? $file = ImageUpload::simpleUpload('book', $req->book_file[$k], Auth::guard('promotion_app_user')->user()->id) : '';
                    isset($req->book_file[$k]) ? $d->update(['file' => $file]) : '';
                }
            }
        }

        AcademinResearchScoreIctMediated::where('promotion_application_user_id', Auth::guard('promotion_app_user')->user()->id)->delete();
        foreach ($req->ict_type as $k => $ict) {
            $d1 = AcademinResearchScoreIctMediated::create([
                'promotion_application_user_id' => Auth::guard('promotion_app_user')->user()->id,
                'type' => $req->ict_type[$k],
                'activity' => $req->ict_activity[$k] ?? '',
                'claimed_score' => $req->ict_claimed_score[$k] ?? '',
                'verify_by_committee' => $req->ict_committee[$k] ?? '',
                'encl_no' => $req->ict_encl_no[$k] ?? ''
            ]);
            if ($d1) {
                if ($req->hasFile('ict_file')) {
                    isset($req->ict_file[$k]) ? $file = ImageUpload::simpleUpload('ict', $req->ict_file[$k], Auth::guard('promotion_app_user')->user()->id) : '';
                    isset($req->ict_file[$k]) ? $d1->update(['file' => $file]) : '';
                }
            }
        }
        Auth::guard('promotion_app_user')->user()->step == 6 ? Auth::guard('promotion_app_user')->user()->increment('step') : '';
        Alert::success('Previous Data Save Successfully');
        return redirect()->route('promotion-form.step-' . Auth::guard('promotion_app_user')->user()->step + 1);
    }
    public function step8()
    {

        $user = Auth::guard('promotion_app_user')->user();
        $phd = AcademinResearchScoreGuidance::where('type', 'phd')->where('promotion_application_user_id', $user->id)->get();
        $mphil = AcademinResearchScoreGuidance::where('type', 'mphil')->where('promotion_application_user_id', $user->id)->get();
        return view('promotionform.step8', compact('user', 'phd', 'mphil'));
    }
    public function step8_store(Request $req)
    {
        $req->validate([
            'file' => 'array',
            'file.*' => 'max:100',
            'file_b' => 'array',
            'file_b.*' => 'max:100',
            'research_file' => 'array',
            'research_file.*' => 'max:100'
        ]);
        AcademinResearchScoreGuidance::where('promotion_application_user_id', Auth::guard('promotion_app_user')->user()->id)->where('type', 'phd')->delete();
        foreach ($req->Name_of_the_Scholar as $k => $v) {
            $d = AcademinResearchScoreGuidance::create([
                'promotion_application_user_id' => Auth::guard('promotion_app_user')->user()->id,
                'name_of_the_scholar' => $req->Name_of_the_Scholar[$k] ?? '',
                'title_of_the_dissertation/thesis' => $req->Title_of_the_Thesis[$k] ?? '',
                'type' => 'phd',
                'awarded_thesis_submitted' => $req->Awarded_Thesis_submitted[$k] ?? '',
                'university' => $req->University[$k],
                'month_and_year' => $req->Month_and_Year[$k],
                'claimed_score' => $req->Claimed_Score[$k],
                'verify_by_committee' => $req->Verified_by_the_Committee[$k],
                'encl_no' => $req->encl_no[$k],

            ]);
            if ($d) {
                if ($req->hasFile('file')) {
                    isset($req->file[$k]) ? $files = ImageUpload::simpleUpload('projects', $req->file[$k], Auth::guard('promotion_app_user')->user()->id) : '';
                    isset($req->file[$k]) ? $d->update(['file' => $files]) : '';
                }
            }
        }
        AcademinResearchScoreGuidance::where('promotion_application_user_id', Auth::guard('promotion_app_user')->user()->id)->where('type', 'mphil')->delete();
        foreach ($req->Name_of_the_Scholar_b as $k => $v) {
            $d = AcademinResearchScoreGuidance::create([
                'promotion_application_user_id' => Auth::guard('promotion_app_user')->user()->id,
                'name_of_the_scholar' => $req->Name_of_the_Scholar_b[$k] ?? '',
                'title_of_the_dissertation/thesis' => $req->Title_of_the_Thesis_b[$k] ?? '',
                'type' => 'mphil',
                'awarded_thesis_submitted' => $req->Awarded_Thesis_submitted[$k] ?? '',
                'mphil_phd' => $req->M_Phil_P_G_b[$k],
                'university' => $req->University_b[$k],
                'month_and_year' => $req->Month_and_Year_b[$k],
                'claimed_score' => $req->Claimed_Score_b[$k],
                'verify_by_committee' => $req->Verified_by_the_Committee_b[$k],
                'encl_no' => $req->encl_no_b[$k],

            ]);
            if ($d) {
                if ($req->hasFile('file_b')) {
                    isset($req->file_b[$k]) ? $files = ImageUpload::simpleUpload('book', $req->file_b[$k], Auth::guard('promotion_app_user')->user()->id) : '';
                    isset($req->file_b[$k]) ? $d->update(['file' => $files]) : '';
                }
            }
        }

        AcademinResearchScoreProject::where('promotion_application_user_id', Auth::guard('promotion_app_user')->user()->id)->delete();
        foreach ($req->project as $k => $v) {
            $d = AcademinResearchScoreProject::create([
                'promotion_application_user_id' => Auth::guard('promotion_app_user')->user()->id,
                'type' => $req->project[$k],
                'name_of_pi_and_co_pi' => $req->Names_of_Pand_co_PI[$k],
                'title_of_the_project' => $req->Title_of_the_Project[$k],
                'funding_agency' => $req->Funding_Agency[$k],
                'grant_sanctioned_or_component' => $req->Grant_Sanctioned[$k],
                'duration_from' => $req->Duration_from[$k],
                'duration_to' => $req->Duration_to[$k],
                'agency_to_it_is_offered' => '',
                'claimed_score' => $req->Claimed_Score[$k],
                'verify_by_committee' => $req->Verified_by_the_Committee_project[$k],
                'encl_no' => $req->encl_no_project[$k]
            ]);
            if ($d) {
                if ($req->hasFile('research_file')) {
                    isset($req->research_file[$k]) ? $files = ImageUpload::simpleUpload('book', $req->research_file[$k], Auth::guard('promotion_app_user')->user()->id) : '';
                    isset($req->research_file[$k]) ? $d->update(['file' => $files]) : '';
                }
            }
        }
        Auth::guard('promotion_app_user')->user()->step == 7 ? Auth::guard('promotion_app_user')->user()->increment('step') : '';
        Alert::success('Previous Data Save Successfully');
        return redirect()->route('promotion-form.step-' . Auth::guard('promotion_app_user')->user()->step + 1);
    }
    public function step9()
    {
        $user = Auth::guard('promotion_app_user')->user();
        $patents = AcademinResearchScorePatentsAndPolicyDoc::where('promotion_application_user_id', Auth::guard('promotion_app_user')->user()->id)->where('type', 'patent')->get();
        $policies = AcademinResearchScorePatentsAndPolicyDoc::where('promotion_application_user_id', Auth::guard('promotion_app_user')->user()->id)->where('type', 'policy')->get();
        return view('promotionform.step9', compact('patents', 'policies', 'user'));
    }
    public function step9_store(Request $req)
    {
        $req->validate([
            'patent_file' => 'array',
            'patent_file.*' => 'max:100',
            'file_b' => 'array',
            'file_b.*' => 'max:100',
            'award_file_b' => 'array',
            'award_file_b.*' => 'max:100',
            'inv_file' => 'array',
            'inv_file.*' => 'max:100'
        ]);
        AcademinResearchScorePatentsAndPolicyDoc::where('promotion_application_user_id', Auth::guard('promotion_app_user')->user()->id)->where('type', 'patent')->delete();
        foreach ($req->details_of_patents_or_policy_document as $k => $g) {
            $d = AcademinResearchScorePatentsAndPolicyDoc::create([
                'promotion_application_user_id' => Auth::guard('promotion_app_user')->user()->id,
                'details_of_patents_or_policy_document' => $req->details_of_patents_or_policy_document[$k] ?? '',
                'international_national_state' => $req->international_national_state[$k] ?? '',
                'year' => $req->year[$k] ?? '',
                'claimed_score' => $req->claimed_score[$k] ?? '',
                'verify_by_committee' => $req->verify_by_committee[$k] ?? '',
                'type' => 'patent',
                'encl_no' => $req->encl_no[$k] ?? ''
            ]);
            if ($d) {
                if ($req->hasFile('patent_file')) {
                    isset($req->patent_file[$k]) ? $files = ImageUpload::simpleUpload('book', $req->patent_file[$k], Auth::guard('promotion_app_user')->user()->id) : '';
                    isset($req->patent_file[$k]) ? $d->update(['file' => $files]) : '';
                }
            }
        }
        AcademinResearchScorePatentsAndPolicyDoc::where('promotion_application_user_id', Auth::guard('promotion_app_user')->user()->id)->where('type', 'policy')->delete();
        foreach ($req->details_of_patents_or_policy_document as $k => $g) {
            $d = AcademinResearchScorePatentsAndPolicyDoc::create([
                'promotion_application_user_id' => Auth::guard('promotion_app_user')->user()->id,
                'details_of_patents_or_policy_document' => $req->details_of_patents_or_policy_document_b[$k] ?? '',
                'international_national_state' => $req->international_national_state_b[$k] ?? '',
                'year' => $req->year_b[$k] ?? '',
                'claimed_score' => $req->claimed_score_b[$k] ?? '',
                'verify_by_committee' => $req->verify_by_committee_b[$k] ?? '',
                'type' => 'policy',
                'encl_no' => $req->encl_no_b[$k] ?? ''
            ]);
            if ($d) {
                if ($req->hasFile('file_b')) {
                    isset($req->file_b[$k]) ? $files = ImageUpload::simpleUpload('book', $req->file_b[$k], Auth::guard('promotion_app_user')->user()->id) : '';
                    isset($req->file_b[$k]) ? $d->update(['file' => $files]) : '';
                }
            }
        }
        AcademinResearchScoreAwardsFellowship::where('promotion_application_user_id', Auth::guard('promotion_app_user')->user()->id)->delete();
        foreach ($req->name_of_the_award_followship as $k => $w) {
            $d = AcademinResearchScoreAwardsFellowship::create([
                'promotion_application_user_id' => Auth::guard('promotion_app_user')->user()->id,
                'name_of_the_award_followship' => $req->name_of_the_award_followship[$k],
                'awarding_institute_organization' => $req->awarding_institute_organization[$k],
                'international_national_state' => $req->international_national_state[$k],
                'date_awarded' => $req->date_awarded[$k],
                'claimed_score' => $req->claimed_score[$k],
                'verify_by_committee' => $req->verify_by_committee[$k],
                'encl_no' => $req->encl_no[$k],
            ]);

            if ($d) {
                if ($req->hasFile('award_file_b')) {
                    isset($req->award_file_b[$k]) ? $files = ImageUpload::simpleUpload('book', $req->award_file_b[$k], Auth::guard('promotion_app_user')->user()->id) : '';
                    isset($req->award_file_b[$k]) ? $d->update(['file' => $files]) : '';
                }
            }
        }

        AcademinResearchScoreInvitedLecture::where('promotion_application_user_id', Auth::guard('promotion_app_user')->user()->id)->delete();
        foreach ($req->inv_title as $k => $v) {
            $d = AcademinResearchScoreInvitedLecture::create([
                'promotion_application_user_id' => Auth::guard('promotion_app_user')->user()->id,
                'name_of_the_event' => $req->name_of_the_event[$k],
                'title' => $req->inv_title[$k],
                'invited_or_al_poster' => $req->invited_or_al_poster[$k],
                'international_national_state' => $req->international_national_state[$k],
                'organiser_institute' => $req->organiser_institute[$k],
                'claimed_score' => $req->inv_claimed_score[$k],
                'duration' => $req->duration[$k],
                'verify_by_committee' => $req->inv_verify_by_committee[$k],
                'encl_no' => $req->inv_encl_no[$k]
            ]);
            if ($d) {
                if ($req->hasFile('inv_file')) {
                    isset($req->inv_file[$k]) ? $files = ImageUpload::simpleUpload('book', $req->inv_file[$k], Auth::guard('promotion_app_user')->user()->id) : '';
                    isset($req->inv_file[$k]) ? $d->update(['file' => $files]) : '';
                }
            }
        }

        Auth::guard('promotion_app_user')->user()->step == 8 ? Auth::guard('promotion_app_user')->user()->increment('step') : '';
        Alert::success('Previous Data Save Successfully');
        return redirect()->route('promotion-form.step-' . Auth::guard('promotion_app_user')->user()->step + 1);
    }
    public function step10()
    {
        $user = Auth::guard('promotion_app_user')->user();
        return view('promotionform.step10',compact('user'));
    }

    public function step10_store(Request $request)
    {
        //         dd($request->all());
        if ($request->hasFile('applicant_signature')) {
            if (isset($request->claimed_score)) {

                $d = AcademinResearchScoreSummaryClaimed::updateOrCreate([
                    'promotion_application_user_id' => Auth::guard('promotion_app_user')->user()->id,
                ], [
                    'promotion_application_user_id' => Auth::guard('promotion_app_user')->user()->id,
                    'assessment_period_from' => $request->assessment_period_from,
                    'assessment_period_to' => $request->assessment_period_to,
                    'entire_assessment_period_from' => $request->entire_assessment_period_from,
                    'entire_assessment_period_to' => $request->entire_assessment_period_to,
                    'claimed_score' => json_encode($request->claimed_score),
                    'total_claimed_score' => array_sum($request->claimed_score)
                ]);
                $request->applicant_signature ? $file = ImageUpload::simpleUpload('signature', $request->applicant_signature, Auth::guard('promotion_app_user')->user()->id . '-sign-') : '';
                $request->applicant_signature ? $d->update(['applicant_sign' => $file]) : '';
                Alert::success('Form Filling Success. Please Check Preview');
                return redirect()->route('promotion-form.preview');
                return redirect('/')->with('toast_success', 'Promotion Form Submitted Successfully');
            } else {
                return redirect()->back()->with('toast_error', 'please add some claimed score');
            }
        } else {
            return redirect()->back()->with('toast_error', 'please upload applicant signature');
        }
    }
}

@extends('layout.teacher_promotion')
@section('progress-width','20%')
@section('content')
<fieldset>
    <form action="{{ route('promotion-form.step-2-store') }}" method="post">
        @csrf
    <div class="form-card">
        <div class="row">
            <div class="col-7">
                <h2 class="fs-title">GENERAL INFORMATION :</h2>
            </div>
            <div class="col-5">
                <h2 class="steps">Step 2 - 10</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label class="fieldlabels">Name (in Block Letters): </label> <input
                    type="text" name="name" placeholder="Name" value="{{ $user->step1->name }}" readonly/>
            </div>
            <div class="col-3">
                <label class="fieldlabels">Gender: </label>
                <select class="form-control" name="gender">
                    <option value="" disabled selected>--Select Gender--</option>
                    <option value="m" @selected($user->step2->gender??''=='m')  >Male</option>
                    <option value="f"  @selected($user->step2->gender??''=='f')>Female</option>
                    <option value="o"  @selected($user->step2->gender??''=='o')>Other</option>
                </select>
            </div>
            <div class="col-3">
                <label class="fieldlabels">Category: </label>
                <select class="form-control" name="category">
                    <option value="" disabled selected>--Select Category--</option>
                    <option value="sc" @selected($user->step2->category??''=='sc')>SC</option>
                    <option value="st" @selected($user->step2->category??''=='st')>ST</option>
                    <option value="ebc" @selected($user->step2->category??''=='ebc')>EBC</option>
                    <option value="bc" @selected($user->step2->category??''=='bc')>BC</option>
                    <option value="ews" @selected($user->step2->category??''=='ews')>EWS</option>
                    <option value="general" @selected($user->step2->category??''=='general')>General</option>
                </select>
            </div>

        </div>
        <div class="row">
            <div class="col-6">
                <label class="fieldlabels">Father's Name (in Block Letters): </label> <input
                    type="text" name="father_name" value="{{ $user->step2->father_name??'' }}" placeholder="Name" />
            </div>
            <div class="col-6">
                <label class="fieldlabels">Mother's Name (in Block Letters): </label> <input
                    type="text" name="mother_name" value="{{ $user->step2->mother_name??'' }}" placeholder="mother_Name" />
            </div>

        </div>
        <div class="row">
            <div class="col-3">
                <label class="fieldlabels">Date of birth: </label>
                <input type="date" name="date_of_birth" value="{{ $user->step2->date_of_birth??'' }}"/>
            </div>
            <div class="col-3">
                <label class="fieldlabels">Nationality: </label>
                <select class="form-control" name="nationality">
                    <option value="" selected disabled>--Select Nationality--</option>
                    <option value="indian" @selected($user->step2->nationality??''=='indian')>Indian</option>
                    <option value="other"  @selected($user->step2->nationality??''=='other') >Other</option>
                </select>
            </div>
            <div class="col-3">
                <label class="fieldlabels">Current Designation: </label>
                <input type="text" name="current_designation" value="{{ $user->step2->current_designation??'' }}"  />
            </div>
            <div class="col-3">
                <label class="fieldlabels">Current Pay Scale & Grade Pay: </label>
                <input type="text" name="current_pay_scale" value="{{ $user->step2->current_pay_scale??'' }}" />
            </div>
            {{-- <div class="col-2">
                <label class="fieldlabels">Date of Confirmation: </label>
                <input type="date" name="name"  />
            </div> --}}
            {{-- <div class="col-2">
                <label class="fieldlabels">Mobile Number: </label>
                <input type="number" name="mobile_number" value="{{ $user->step2->mobile_number??'' }}" />
            </div> --}}
            {{-- <div class="col-2">
                <label class="fieldlabels">E-Mail ID: </label>
                <input type="email" name="name"  />
            </div> --}}

        </div>
        <div class="row">
            <div class="col-3">
                <label class="fieldlabels">Date of Confirmation: </label>
                <input type="date" name="date_of_confirmation" value="{{ $user->step2->date_of_confirmation??'' }}" />
            </div>
            <div class="col-3">
                <label class="fieldlabels">Date of Last Promotion: </label>
                <input type="date" name="date_of_last_promotion" value="{{ $user->step2->date_of_last_promotion??'' }}" />
            </div>
            <div class="col-3">
                <label class="fieldlabels">Date of Eligibility for Promotion: </label>
                <input type="date" name="date_of_eligibility_for_promotion"  value="{{ $user->step2->date_of_eligibility_for_promotion??'' }}"/>
            </div>
            <div class="col-3">
                <label class="fieldlabels">Position, Stage and Grade Pay applied for: </label>
                <input type="text" name="applied_for_position" value="{{ $user->step2->applied_for_position??'' }}" />
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label class="fieldlabels">Date of Initial Appointment and Present Stage with
                    Pay Scale at LNMU: </label>
                <input type="text" name="present_stage" value="{{ $user->step2->present_stage??'' }}"/>
            </div>
            <div class="col-3">
                <label class="fieldlabels">Mobile Number: </label>
                <input type="text"name="mobile_number" value="{{ $user->step2->mobile_number??'' }}"/>
            </div>
            <div class="col-3">
                <label class="fieldlabels">Email ID: </label>
                <input type="text" name="email_id" value="{{ $user->email??'' }}" readonly/>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label class="fieldlabels">Address for Correspondence (with Pin Code): </label>
                <textarea placeholder="Address" name="address_for_correspondence">{{ $user->step2->address_for_correspondence??'' }} </textarea>
            </div>
            <div class="col-6">
                <label class="fieldlabels">Permanent Address (with Pin Code): </label>
                <textarea placeholder="Permanent Address" name="permanent_address">{{ $user->step2->permanent_address??'' }} </textarea>

            </div>
        </div>
    </div> <input type="submit" name="next" class="next action-button" value="Next" />
    <input type="button" name="previous" class="previous action-button-previous"
        value="Previous" />
    </form>
</fieldset>
@endsection
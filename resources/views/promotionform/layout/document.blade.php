
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<button class="btn btn-danger " style="position:fixed;
bottom:50vh;
right:10px;"  title="View your all document" id="docmodalbtn2">View-Doc</button>

<a class="btn btn-primary " style="position:fixed;
bottom:40vh;
right:10px;"  title="upload your  document" href="{{ route('promotion-form.document-upload') }}" target="_blank">Upload-Doc</a>


<div class="modal fade" id="dcmodal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your Uploaded Documents</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                        <h6>Application Information</h6>
                        @isset($user->step1->profile_image)
                        <a href="{{ asset('storage/'.$user->step1->profile_image) }}" target="_blank">{{ $user->step1->profile_image }}</a>
                        @endisset
                        </p>
                        <p>
                        <h6>ACADEMIC QUALIFICATIONS</h6>
                        <ul>
                            @if ($user->step3_a)
                                @foreach ($user->step3_a as $file)
                                    <li><a href="{{ asset('storage/'.$file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                                @endforeach
                            @endif
                        </ul>
                        <h6>RECORD OF ACADEMIC SERVICE PRIOR TO JOINING LNMU</h6>
                        <ul>
                            @if ($user->step3_b)
                                @foreach ($user->step3_b as $file)
                                    <li><a href="{{ asset('storage/'. $file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                                @endforeach
                            @endif
                        </ul>
                        <h6>RECORD OF SERVICE IN LNMU FROM THE DATE OF JOINING AS A REGULAR TEACHER</h6>
                        <ul>
                            @if ($user->step3_c)
                                @foreach ($user->step3_c as $file)
                                    <li><a href="{{ asset('storage/'.$file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                                @endforeach
                            @endif
                        </ul>
                        </p>
                        <p>
                        <h6>TEACHING EXPERIENCE <span class="text-danger">(UG/PG)</span> / RESEARCH EXPERIENCE
                            (including M.Phil/Ph.D Duration) / Conferences/Seminars/Workshops</h6>
                        <ul>
                            @if ($user->step4 && json_decode($user->step4->file))
                                @foreach (json_decode($user->step4->file) as $file)
                                    <li><a href="{{ asset('storage/'.$file) }}" target="_blank">{!! $file??'<span class="text-danger">N/A</span>' !!}</a></li>
                                @endforeach
                            @endif
                        </ul>
                        <h6>Ph.D and M.phil</h6>
                        <ul>
                            @if ($user->step4)
                                @foreach ($user->step4_phdrecord as $file)
                                    <li><a href="{{ asset('storage/'.$file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                                @endforeach
                            @endif
                        </ul>
                        </p>
                        <p>
                        <h6>ANY OTHER TRAINING PROGRAM/SUMMER SCHOOL / WORKSHOPS/ QIP/ FIP ETC ATTENDED</h6>
                        <ul>
                            @if ($user->step5)
                                @foreach ($user->step5 as $file)
                                    <li><a href="{{ asset('storage/'.$file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                                @endforeach
                            @endif
                        </ul>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <h6>TEACHING, INVOLVEMENT IN THE UNIVERSITY STUDENTS RELATED ACTIVITIES/ RESEARCH ACTIVITIES</h6>
                            <ul>
                                @if ($user->step6)
                                    @foreach ($user->step6 as $file)
                                        <li><a href="{{ asset('storage/'.$file->A1_file) }}" target="_blank">{!! $file->A1_file??'<span class="text-danger">N/A</span>' !!}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                            <h6>INVOLVEMENT IN THE UNIVERSITY STUDENTS RELATED ACTIVITIES / RESEARCH ACTIVITIES</h6>
                            <ul>
                                @if ($user->step6_b)
                                    @foreach ($user->step6_b as $file)
                                        <li><a href="{{ asset('storage/'.$file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                            <h6>RESEARCH PAPERS IN PEER-REVIEWED OR UGC-LISTED JOURNALS</h6>
                            <ul>
                                @if ($user->step6_c)
                                    @foreach ($user->step6_c as $file)
                                        <li><a href="{{ asset('storage/'.$file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                            </p>
                            <p>
                                <h6>PUBLICATIONS (other than Research papers)</h6>
                                <ul>
                                    @if ($user->step7)
                                        @foreach ($user->step7 as $file)
                                            <li><a href="{{ asset('storage/'. $file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                                <h6>CREATION OF ICT MEDIATED TEACHING LEARNING PEDAGOGY AND CONTENT AND DEVELOPMENT OF NEW AND INNOVATIVE COURSES AND CURRICULA</h6>
                                <ul>
                                    @if ($user->step7_b)
                                        @foreach ($user->step7_b as $file)
                                            <li><a href="{{ asset('storage/'. $file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </p>
                            <p>
                                <h6>RESEARCH GUIDANCE - Ph.D. awarded / Thesis submitted <b> AND </b>M.Phil./P.G. Dissertation Supervised</h6>
                                <ul>
                                    @if ($user->step8)
                                        @foreach ($user->step8 as $file)
                                            <li><a href="{{ asset('storage/'. $file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                                <h6>RESEARCH PROJECTS COMPLETED</h6>
                                <ul>
                                    @if ($user->step8_b)
                                        @foreach ($user->step8_b as $file)
                                            <li><a href="{{ asset('storage/'. $file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </p>
                            <p>
                                <h6>PATENTS <b> AND </b> Policy Documents</h6>
                                <ul>
                                    @if ($user->step9)
                                        @foreach ($user->step9 as $file)
                                            <li><a href="{{ asset('storage/'. $file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </p>
                            <p>
                                <h6>Award and Fellowship</h6>
                                <ul>
                                    @if ($user->step9_b)
                                        @foreach ($user->step9_b as $file)
                                            <li><a href="{{ asset('storage/'. $file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </p>
                            <p>
                                <h6>NVITED LECTURES / RESOURCE PERSON/ PAPER PRESENTATION IN SEMINARS/ CONFERENCES/FULL PAPER IN CONFERENCE PROCEEDINGS</h6>
                                <ul>
                                    @if ($user->step9_c)
                                        @foreach ($user->step9_c as $file)
                                            <li><a href="{{ asset('storage/'. $file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </p>
                            <p>
                                <h6>Confirmation Letter</h6>
                                <ul>
                                    @if ($user->step10)
                                        @foreach ($user->step10 as $file)
                                            <li><a href="{{ asset('storage/'. $file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </p>
                            <h6>Signature</h6>
                            @isset($user->step10[0])
                            <img src="{{ asset('storage/'.$user->step10[0]->applicant_sign) }}" alt="" style="max-height:80px;max-width:350px">
                            @endisset
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>


@extends('promotionform.layout.master')

@section('content-area')
<div class="container">
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
            <ol>
                @if ($user->step3_a)
                    @foreach ($user->step3_a as $file)
                    
                    @if($file->file==NULL || $file->file=='')
                    <li>
                    <form action="{{route('promotion-form.document-store')}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <input type="hidden" name="classname" value="PartAAcademicQualification">
                        <input type="hidden" name="table_id" value="{{$file->id}}">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="file" placeholder="Upload Your Document" aria-label="Upload This Document" aria-describedby="button-addon2" required>
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Upload</button>
                      </div>
                    </form>
                </li>
                    @else
                    <li><a href="{{ asset('storage/'.$file->file) }}" target="_blank">{!! $file->file??'N/A' !!}</a></li>
                    @endif
                    @endforeach
                @endif                                          
            </ol>
            <h6>RECORD OF ACADEMIC SERVICE PRIOR TO JOINING LNMU</h6>
            <ul>
                @if ($user->step3_b)
                    @foreach ($user->step3_b as $file)
                    @if($file->file=='' || $file->file==NULL)
                    <form action="{{route('promotion-form.document-store')}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <input type="hidden" name="classname" value="PartAAcademicServicePrior">
                        <input type="hidden" name="table_id" value="{{$file->id}}">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="file" placeholder="Upload Your Document" aria-label="Upload This Document" aria-describedby="button-addon2" required>
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Upload</button>
                    </div>
                    </form>
                    @else
                        <li><a href="{{ asset('storage/'. $file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                    @endif
                        @endforeach
                @endif
            </ul>
            <h6>RECORD OF SERVICE IN LNMU FROM THE DATE OF JOINING AS A REGULAR TEACHER</h6>
            <ul>
                @if ($user->step3_c)
                    @foreach ($user->step3_c as $file)
                    @if($file->file==NULL || $file->file=='')
                    <form action="{{route('promotion-form.document-store')}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <input type="hidden" name="classname" value="PartAServiceInLnmuFrom">
                        <input type="hidden" name="table_id" value="{{$file->id}}">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="file" placeholder="Upload Your Document" aria-label="Upload This Document" aria-describedby="button-addon2" required>
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Upload</button>
                      </div>
                    </form>
                    @else
                        <li><a href="{{ asset('storage/'.$file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                    @endif
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
                        @if($file->file==NULL || $file->file=='')
                                <li>
                                <form action="{{route('promotion-form.document-store')}}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <input type="hidden" name="classname" value="PromotionApplicationPartBInvolvement">
                                    <input type="hidden" name="table_id" value="{{$file->id}}">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="file" placeholder="Upload Your Document" aria-label="Upload This Document" aria-describedby="button-addon2" required>
                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Upload</button>
                                </div>
                                </form>
                            </li>
                        @else
                            <li><a href="{{ asset('storage/'.$file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                        @endif    
                    @endforeach
                    @endif
                </ul>
                <h6>RESEARCH PAPERS IN PEER-REVIEWED OR UGC-LISTED JOURNALS</h6>
                <ul>
                    @if ($user->step6_c)
                        @foreach ($user->step6_c as $file)
                        @if($file->file==NULL || $file->file=='')
                                <li>
                                <form action="{{route('promotion-form.document-store')}}" method="post" enctype="multipart/form-data" >
                                    @csrf
                                    <input type="hidden" name="classname" value="AcademicResearchScoreResearchPaper">
                                    <input type="hidden" name="table_id" value="{{$file->id}}">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="file" placeholder="Upload Your Document" aria-label="Upload This Document" aria-describedby="button-addon2" required>
                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Upload</button>
                                </div>
                                </form>
                            </li>
                        @else
                            <li><a href="{{ asset('storage/'.$file->file) }}" target="_blank">{!! $file->file??'<span class="text-danger">N/A</span>' !!}</a></li>
                        @endif
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
        </div>
    </div>
</div>
@endsection
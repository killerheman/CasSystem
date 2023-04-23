<div id="msform">
    <!-- progressbar -->
    <ul id="progressbar">
        <li class="{{ $activeClass >= 1 ? 'active' : '' }}" id="account"><strong>Account</strong></li>
        <li class="{{ $activeClass >= 2 ? 'active' : '' }}" id="personal"><strong>Personal</strong></li>
        <li class="{{ $activeClass >= 3 ? 'active' : '' }}" id="personal1"><strong>Qualifications</strong></li>
        <li class="{{ $activeClass >= 4 ? 'active' : '' }}" id="personal2"><strong>Experience</strong></li>
        <li class="{{ $activeClass >= 5 ? 'active' : '' }}" id="personal3"><strong>Training</strong></li>
        <li class="{{ $activeClass >= 6 ? 'active' : '' }}" id="personal4"><strong>Teaching</strong></li>
        <li class="{{ $activeClass >= 7 ? 'active' : '' }}" id="personal5"><strong>Publications</strong></li>
        <li class="{{ $activeClass >= 8 ? 'active' : '' }}" id="personal6"><strong>Projects</strong></li>
        <li class="{{ $activeClass >= 9 ? 'active' : '' }}" id="personal7"><strong>Awards</strong></li>
        <li class="{{ $activeClass >= 10 ? 'active' : '' }}" id="confirm"><strong>Finish</strong></li>
    </ul>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
            aria-valuemin="0" aria-valuemax="100" style="width:{{ $activeClass*10 }}%"></div>
    </div> <br> <!-- fieldsets -->
    <fieldset>
        @yield('content')
    </fieldset>
</div>

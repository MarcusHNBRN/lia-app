@auth
@include('nav.header')
@else
@include('nav.headerIndex')
@endauth

<link rel="stylesheet" href="{{ asset('css/registration.css') }}" />
<div class="backButton" style="margin-left: 8%; margin-top:10px"> <a href="/"> <img src="/svgs/leftArrow.svg" alt="back"> </a> </div>

<div class="choice-container">
    <h2 class="desktop-h2"> Skapa konto </h2>
    <div class="button-container">
        <p class="title"> Skapa konto som
        <p>
        <div class="buttons">
            <button href="student" class="buttonFont" onclick="showStudentForm()"> Elev</button>
            <button href="company" class="buttonFont" onclick="showCompanyForm()"> Företag</button>
        </div>
    </div>
</div>

<div id="student-form" class="registration-form">
    @include('registration.student')
</div>

<div id="company-form" class="registration-form">
    @include('registration.company')
</div>

<script>
    function showStudentForm() {
        document.getElementById('student-form').style.display = 'block';
        document.getElementById('company-form').style.display = 'none';
    }

    function showCompanyForm() {
        document.getElementById('student-form').style.display = 'none';
        document.getElementById('company-form').style.display = 'block';
    }

    window.addEventListener('DOMContentLoaded', function() {
        document.getElementById('company-form').style.display = 'none';
    });
</script>

@include('nav.footer')
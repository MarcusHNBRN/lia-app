@include('nav.header')
<link rel="stylesheet" href="{{ asset('css/registration.css') }}" />
<h1> Skapa konto </h1>
<div class="choice-container">
    <div class="button-container">
        <p class="title"> Skapa konto som
        <p>
        <div class="buttons">
            <button href="student" onclick="showStudentForm()"> Elev</button>
            <button href="company" onclick="showCompanyForm()"> Företag</button>
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
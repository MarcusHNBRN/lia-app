@include('nav.header')
<link rel="stylesheet" href="{{ asset('css/registration.css') }}" />

<a href="#" onclick="showStudentForm()">Student Registration</a>
<a href="#" onclick="showCompanyForm()">Company Registration</a>


<div id="student-form" class="registration-form">
    @include('registration.student')
</div>
</div>

<div id="company-form" class="registration-form">
    @include('registration.company')
</div>
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
</script>
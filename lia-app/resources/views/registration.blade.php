<button onclick="toggleForm('student')">Student Registration</button>
<button onclick="toggleForm('company')">Company Registration</button>

<div id="student-form" class="registration-form">
    @include('registration.student')
</div>

<div id="company-form" class="registration-form">
    @include('registration.company')
</div>

<script>
    function toggleForm(formType) {
        const studentForm = document.getElementById('student-form');
        const companyForm = document.getElementById('company-form');

        if (formType === 'student') {
            studentForm.style.display = 'block';
            companyForm.style.display = 'none';
        } else if (formType === 'company') {
            studentForm.style.display = 'none';
            companyForm.style.display = 'block';
        }
    }
</script>
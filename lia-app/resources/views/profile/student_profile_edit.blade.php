@include('nav.header')
<link rel="stylesheet" href="{{ asset('css/registration.css') }}" />
<form method="POST" action="{{ route('student.profile.update', ['id' => $student->id]) }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PUT">




    <div class="form-container">

        <div class="card-container">
            <div class="file-container">
                <p class="file-title"> Profile Picture </p>
                <input type="file" id="profile-picture-input" name="profile_picture" onchange="updateFileName('profile-picture-input')">
                <label for="profile-picture-input" class="buttonFont" id="file-label">Choose File</label>
            </div>
        </div>

        <div class="input-container">
            <p class="input-title"> För och efternamn * </p>
            <input type="text" name="studentName" placeholder="Ex. Johan Larsson" value="{{ $student->studentName }}" required>
        </div>
        <div class="input-container">
            <p class="input-title"> Email * </p>
            <input type="email" name="email" placeholder="Email" value="{{ $student->email }}" required>
        </div>

        <div class="input-container">
            <p class="input-title"> Telefonnummer * </p>
            <input type="tel" name="phone" placeholder="Telefonnummer" value="{{ $student->phone }}" required>
        </div>
        <div class="card-container">
            <p class="title"> Klass
            <p>
            <div class="radio-button-container">
                <label class="study-button">
                    <input type="radio" name="study" value="WU" required>
                    <span class="buttonFont">WU</span>
                </label>
                <label class="study-button">
                    <input type="radio" name="study" value="DD" required>
                    <span class="buttonFont">DD</span>
            </div>
        </div>

        <div class="input-container">
            <p class="input-title"> Kort beskrivning om dig själv </p>
            <textarea name="about" placeholder="Kort beskrivning om dig själv"> {{ $studentInfo->about }}</textarea>
        </div>
        <div class="input-container">
            <p class="input-title"> Länk till din Linkdin </p>
            <input type="url" name="linkedin" placeholder="Länk till din Linkdin" value="{{ $studentInfo->linkedin }}">
        </div>
        <div class="input-container">
            <p class="input-title"> Länk till din portfolio </p>
            <input type="url" name="portfolio" placeholder="Länk till din portfolio" value="{{ $studentInfo->portfolio }}">
        </div>
        <div class="input-container">
            <p class="input-title"> Arbetserfarenhet </p>
            <textarea name="work" placeholder="Kort beskrivning om dig själv">{{ $studentInfo->work }}</textarea>
        </div>
        <div class="input-container">
            <p class="input-title"> Utbildning </p>
            <textarea name="education" placeholder="Kort beskrivning om dig själv">{{ $studentInfo->education }}</textarea>
        </div>

        <div class="input-container">
            <p class="input-title"> Färdigheter </p>
            <textarea name="skills" placeholder="Kort beskrivning om dig själv">{{ $studentInfo->skills }}</textarea>
        </div>

        <div class="input-container">
            <p class="input-title"> Intressen </p>
            <textarea name="interests" placeholder="Kort beskrivning om dig själv">{{ $studentInfo->interests }}</textarea>
        </div>

        <div class="card-container">
            <div class="file-container">
                <div class="file-title">
                    <p class="body2"> Ladda upp ditt CV </p>
                </div>
                <input type="file" id="cv-file-input" name="CV" onchange="updateFileName('cv-file-input')">
                <label for="cv-file-input" class="buttonFont" id="file-label">Choose File</label>
            </div>
        </div>

        <button type="submit">Update</button>
    </div>
</form>

<script src="{{ asset('js/registration.js') }}"></script>

@include('nav.footer')
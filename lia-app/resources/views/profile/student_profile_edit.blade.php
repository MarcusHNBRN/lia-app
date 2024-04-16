@include('nav.header')
<link rel="stylesheet" href="{{ asset('css/registration.css') }}" />
<main class="main-registration">
    <div class="edit-container">
        <a href="{{ route('student.profile', ['id' => Auth::guard('student')->user()->id]) }}"> <img src="/svgs/leftArrow.svg" alt="back"></a>
    </div>
    <form method="POST" action="{{ route('student.profile.update', ['id' => $student->id]) }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PUT">




        <div class="form-container">

            <div class="card-container">
                <div class="file-container">
                    <div class="file-title">
                        <p class="body1"> Profilbild </p>
                    </div>
                    <input type="file" id="profile-picture-input" name="profile_picture" onchange="updateFileName('profile-picture-input')">
                    <label for="profile-picture-input" class="buttonFont" id="file-label">Ladda Upp</label>
                </div>
            </div>

            <div class="input-container">
                <p class="body1"> För och efternamn * </p>
                <input type="text" name="studentName" placeholder="Ex. Johan Larsson" value="{{ $student->studentName }}" required>
            </div>
            <div class="input-container">
                <p class="body1"> Email * </p>
                <input type="email" name="email" placeholder="Email" value="{{ $student->email }}" required>
            </div>

            <div class="input-container">
                <p class="body1"> Telefonnummer * </p>
                <input type="tel" name="phone" placeholder="Telefonnummer" value="{{ $student->phone }}" required>
            </div>
            <div class="card-container">
                <p class="body1" id="title"> Klass
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
                <p class="body1"> Kort beskrivning om dig själv </p>
                <textarea name="about" placeholder="Kort beskrivning om dig själv"> {{ $studentInfo->about }}</textarea>
            </div>
            <div class="input-container">
                <p class="body1"> Länk till din Linkdin </p>
                <input type="url" name="linkedin" placeholder="Länk till din Linkdin" value="{{ $studentInfo->linkedin }}">
            </div>
            <div class="input-container">
                <p class="body1"> Länk till din portfolio </p>
                <input type="url" name="portfolio" placeholder="Länk till din portfolio" value="{{ $studentInfo->portfolio }}">
            </div>
            <div class="input-container">
                <p class="body1"> Arbetserfarenhet </p>
                <input type="text" name="work" placeholder="Arbetserfarenhet" value="{{ $studentInfo->work }}">
            </div>
            <div class="input-container">
                <p class="body1"> Utbildning </p>
                <input type="textarea" name="education" placeholder="Utbildning" value="{{ $studentInfo->education }}">
            </div>

            <div class="input-container">
                <p class="body1"> Färdigheter </p>
                <input type="text" name="skills" placeholder="Färdigheter" value="{{ $studentInfo->skills }}">
            </div>

            <div class="input-container">
                <p class="body1"> Intressen </p>
                <input type="text" name="interests" placeholder="Intressen" value="{{ $studentInfo->interests }}">
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

            <button class="register" type="submit">
                <p class="body1">spara redigering</p>
            </button>
        </div>
    </form>
</main>

<script src="{{ asset('js/registration.js') }}"></script>

@include('nav.footer')
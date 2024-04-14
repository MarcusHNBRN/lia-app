<link rel="stylesheet" href="{{ asset('css/registration.css') }}" />
<form method="POST" action="{{ route('student.profile.update', ['id' => $student->id]) }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PUT">




    <div class="form-container">

        <div class="input-container">
            <p class="input-title"> Profile Picture </p>
            <input type="file" name="profile_picture">
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
        <div class=" button-container">
            <p class="title"> Klass
            <p>
            <div class="radio-button-container">
                <label class="radio-button">
                    <input type="radio" name="study" value="WU" required>
                    <span>WU</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="study" value="DD" required>
                    <span>DD</span>
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

        <div class="input-container">
            <p class="input-title"> CV </p>
            <input type="file" name="cv" value="{{ $studentInfo->cv }}">
        </div>

        <button type="submit">Update</button>
    </div>
</form>
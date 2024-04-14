<link rel="stylesheet" href="{{ asset('css/registration.css') }}" />
<form method="POST" action="{{ route('registration.student.submit') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-container">
        <div class="input-container">
            <p class="input-title"> För och efternamn * </p>
            <input type="text" name="studentName" placeholder="Ex. Johan Larsson" required>
        </div>
        <div class="input-container">
            <p class="input-title"> Email * </p>
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-container">
            <p class="input-title"> Telefonnummer * </p>
            <input type="tel" name="phone" placeholder="Telefonnummer" required>
        </div>
        <div class="card-container">
            <p class="title"> Klass
            <p>
            <div class="radio-button-container">
                <label class="study-button">
                    <input type="radio" name="study" value="WU" required>
                    <span>WU</span>
                </label>
                <label class="study-button">
                    <input type="radio" name="study" value="DD" required>
                    <span>DD</span>
            </div>
        </div>

        <div class="input-container">
            <p class="input-title"> Kort beskrivning om dig själv </p>
            <textarea name="about" placeholder="Kort beskrivning om dig själv"></textarea>
        </div>
        <div class="input-container">
            <p class="input-title"> Länk till din Linkdin </p>
            <input type="url" name="linkedin" placeholder="Länk till din Linkdin">
        </div>
        <div class="input-container">
            <p class="input-title"> Länk till din portfolio </p>
            <input type="url" name="portfolio" placeholder="Länk till din portfolio">
        </div>
        <div class="input-container">
            <p class="input-title"> Arbetserfarenhet </p>
            <textarea name="work" placeholder="Kort beskrivning om dig själv"></textarea>
        </div>
        <div class="input-container">
            <p class="input-title"> Utbildning </p>
            <textarea name="education" placeholder="Kort beskrivning om dig själv"></textarea>
        </div>

        <div class="input-container">
            <p class="input-title"> Färdigheter </p>
            <input type="text" name="skills">
        </div>

        <div class="input-container">
            <p class="input-title"> Intressen </p>
            <input type="text" name="interests">
        </div>



        <div class="card-container">
            <div class="file-container">
                <p class="file-title"> Ladda up dit cv </p>
                <input type="file" id="cv-file-input" name="CV" onchange="updateFileName('cv-file-input')">
                <label for="cv-file-input" id="file-label">Choose File</label>
            </div>
        </div>

        <div class="card-container">
            <div class="file-container">
                <p class="file-title"> Profile Picture </p>
                <input type="file" id="profile-picture-input" name="profile_picture" onchange="updateFileName('profile-picture-input')">
                <label for="profile-picture-input" id="file-label">Choose File</label>
            </div>
        </div>

        <div class="input-container">
            <p class="input-title"> Lösenord </p>
            <input type="password" name="password" placeholder="Lösenord" required>

        </div>
        <div class="input-container">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
        </div>



        <button type="submit">Register</button>
    </div>
</form>

<script src="{{ asset('js/registration.js') }}"></script>
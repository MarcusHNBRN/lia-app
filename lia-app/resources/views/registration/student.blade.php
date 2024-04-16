<link rel="stylesheet" href="{{ asset('css/registration.css') }}" />

<form method="POST" action="{{ route('registration.student.submit') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-container">
        <div class="input-container">
            <p class="body1"> För och efternamn * </p>
            <input type="text" name="studentName" placeholder="Ex. Johan Larsson" required>
        </div>
        <div class="input-container">
            <p class="body1"> Email * </p>
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-container">
            <p class="body1"> Telefonnummer * </p>
            <input type="tel" name="phone" placeholder="Telefonnummer" required>
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
            <p class="body1" class="desktop-h5-bold"> Kort beskrivning om dig själv </p>
            <textarea name="about" placeholder="Kort beskrivning om dig själv"></textarea>
        </div>
        <div class="input-container">
            <p class="body1"> Länk till din Linkdin </p>
            <input type="url" name="linkedin" placeholder="Länk till din Linkdin">
        </div>
        <div class="input-container">
            <p class="body1"> Länk till din portfolio </p>
            <input type="url" name="portfolio" placeholder="Länk till din portfolio">
        </div>
        <div class="input-container">
            <p class="body1"> Arbetserfarenhet </p>
            <input type="text" name="work" placeholder="Skriv in arbetserfarenhet separerade med kommatecken (,)">
        </div>
        <div class="input-container">
            <p class="body1"> Utbildning </p>
            <input type="text" name="education" placeholder="Skriv in utbildning separerade med kommatecken (,)">
        </div>

        <div class="input-container">
            <p class="body1"> Färdigheter </p>
            <input type="text" placeholder="Skriv in färdigheter separerade med kommatecken (,)" name="skills">
        </div>

        <div class="input-container">
            <p class="body1"> Intressen </p>
            <input type="text" placeholder="Skriv in intressen separerade med kommatecken (,)" name="interests">
        </div>



        <div class="card-container">
            <div class="file-container">
                <div class="file-title">
                    <p class="body1"> CV </p>
                </div>
                <input type="file" id="cv-file-input" name="CV" onchange="updateFileName('cv-file-input')">
                <label for="cv-file-input" class="buttonFont" id="file-label">Ladda upp</label>
            </div>
        </div>

        <div class="card-container">
            <div class="file-container">
                <div class="file-title">
                    <p class="body1"> Profilbild </p>
                </div>
                <input type="file" id="profile-picture-input" name="profile_picture" onchange="updateFileName('profile-picture-input')">
                <label for="profile-picture-input" class="buttonFont" id="file-label">Ladda upp</label>
            </div>
        </div>

        <div class="input-container">
            <p class="body1"> Lösenord </p>
            <input type="password" name="password" placeholder="Lösenord" required>

        </div>
        <div class="input-container">
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
        </div>



        <button class="register" type="submit">
            <p class="body1">skapa konto</p>
        </button>
    </div>
</form>

<script src="{{ asset('js/registration.js') }}"></script>
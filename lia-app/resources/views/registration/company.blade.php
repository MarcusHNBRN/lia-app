<link rel="stylesheet" href="{{ asset('css/registration.css') }}" />

<form method="POST" action="{{ route('registration.company.submit') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-container">
        <div class="input-container">
            <p class="body1"> Företagets Namn * </p>
            <input type="text" name="companyName" placeholder="Företags Namn" required>
        </div>
        <div class="input-container">
            <p class="body1"> Företags Email * </p>
            <input type="email" name="email" placeholder="Företags Email" required>
        </div>
        <div class="input-container">
            <p class="body1"> Företagets Kontaktperson * </p>
            <input type="text" name="contactPerson" placeholder="Kontakt Person" required>
        </div>
        <div class="input-container">
            <p class="body1"> Telefonnummer </p>
            <input type="tel" name="phone" placeholder="Phone Number">
        </div>
        <div class="input-container">
            <p class="body1"> Beskrivning om företaget </p>
            <textarea name="description" placeholder="Kort beskrivning om företaget" required></textarea>
        </div>

        <div class="card-container">
            <p class="body1" id="title"> Bransch </p>
            <div class="industry-container">
                <label class="industry-button">
                    <input type="radio" name="industry" value="Bilindustrin" required>
                    <span class="buttonFont">Bilindustrin</span>
                </label>

                <label class="industry-button">
                    <input type="radio" name="industry" value="Media och Kommunikation" required>
                    <span class="buttonFont">Media och Kommunikation</span>
                </label>
                <label class="industry-button">
                    <input type="radio" name="industry" value="Film och TV-Produktion" required>
                    <span class="buttonFont">Film och TV-Produktion</span>
                </label>
                <label class="industry-button">
                    <input type="radio" name="industry" value="Annat" required>
                    <span class="buttonFont">Annat</span>
                </label>
            </div>
        </div>
        <div class="card-container">
            <p class="body1" id="title"> Antal anställda </p>
            <div class="radio-button-container">
                <label class="employees-button">
                    <input type="radio" name="employees" value="1-20" required>
                    <span class="buttonFont">1-20</span>
                </label>
                <label class="employees-button">
                    <input type="radio" name="employees" value="20-100" required>
                    <span class="buttonFont">20-100</span>
                </label>
                <label class="employees-button">
                    <input type="radio" name="employees" value="100+" required>
                    <span class="buttonFont">100+</span>
                </label>
            </div>
        </div>
        <div class="card-container">
            <p class="body1" id="title"> Vilket språk används i huvudsak på företaget? </p>
            <div class="radio-button-container">
                <label class="language-button">
                    <input type="radio" name="language" value="english" required>
                    <span class="buttonFont">Engelska</span>
                </label>
                <label class="language-button">
                    <input type="radio" name="language" value="swedish" required>
                    <span class="buttonFont">Svenska</span>
                </label>
            </div>
        </div>


        <div class="input-container">
            <p class="body1"> Länk till företagets Linkdin </p>
            <input type="url" name="linkedin" placeholder="https://exempel.se/">
        </div>

        <div class="input-container">
            <p class="body1"> länk till företagets hemsida </p>
            <input type="url" name="homepage" placeholder="https://exempel.se/">
        </div>

        <div class="card-container">
            <div class="file-container">
                <p class="file-title"> Profile Picture </p>
                <input type="file" id="profile-picture-company-input" name="profile_picture" onchange="updateFileName('profile-picture-company-input')">
                <label for="profile-picture-company-input" class="buttonFont" id="file-label">Choose File</label>
            </div>
        </div>

        <!--------selma--------->
        <div class="title-container">
            <h5> Lägg upp Lia-annons! </h5>
        </div>

        <div class="input-container">
            <p class="body1"> Annonstitel *</p>
            <input type="text" name="title" placeholder="Titel" required>
        </div>

        <div class="card-container">
            <p class="body1" id="title"> Klass </p>
            <div class="radio-button-container">
                <label class="language-button">
                    <input type="radio" name="study" value="WU" required>
                    <span class="buttonFont">Webbutvecklare</span>
                </label>
                <label class="language-button">
                    <input type="radio" name="study" value="DD " required>
                    <span class="buttonFont">Digital Designer</span>
                </label>
            </div>
        </div>

        <div class="input-container">
            <p class="body1"> Beskrivning *</p>
            <input type="text" name="description" placeholder="Beskriv uppdraget" required>
        </div>

        <div class="input-container">
            <p class="body1"> Arbetsuppgifter *</p>
            <input type="text" name="yourJob" placeholder="Beskriv elevens arbetsuppgifter" required>
        </div>

        <div class="input-container">
            <p class="body1"> Vad erbjuder ni? </p>
            <input type="text" name="offer" placeholder="Beskriv arbetsplats, möjligheter etc" required>
        </div>

        <div class="input-container">
            <p class="body1"> Vad söker ni? </p>
            <input type="text" name="lookingFor" placeholder="T.ex kompetenser, erfarenhet etc" required>
        </div>
        <div class="card-container">
            <div class="input-container">
                <p class="body1" id="title">Antal platser</p>
                <div class="availableSpots">
                    <select name="availableSpots" id="availableSpots" class="center-select">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                </div>
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
    </div>
</form>

<script src="{{ asset('js/registration.js') }}"></script>
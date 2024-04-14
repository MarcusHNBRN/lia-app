<link rel="stylesheet" href="{{ asset('css/registration.css') }}" />
<form method="POST" action="{{ route('registration.company.submit') }}">
    @csrf
    <div class="form-container">
        <div class="input-container">
            <p class="input-title"> Företagets Namn * </p>
            <input type="text" name="companyName" placeholder="Företags Namn" required>
        </div>
        <div class="input-container">
            <p class="input-title"> Företags Email * </p>
            <input type="email" name="email" placeholder="Företags Email" required>
        </div>
        <div class="input-container">
            <p class="input-title"> Företagets Kontaktperson * </p>
            <input type="text" name="contactPerson" placeholder="Kontakt Person" required>
        </div>
        <div class="input-container">
            <p class="input-title"> Telefonnummer </p>
            <input type="tel" name="phone" placeholder="Phone Number">
        </div>
        <div class="input-container">
            <p class="input-title"> Beskrivning om företaget </p>
            <textarea name="description" placeholder="Description" required></textarea>
        </div>

        <div class="button-container">
            <p class="title"> Klass
            <p>
            <div class="radio-button-container">
                <label class="radio-button">
                    <input type="radio" name="industry" value="Bilindustrin" required>
                    <span>Bilindustrin</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="industry" value="Media och Kommunikation" required>
                    <span>Media och Kommunikation</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="industry" value="Film och TV-Produktion" required>
                    <span>Film och TV-Produktion</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="industry" value="Annat" required>
                    <span>Annat</span>
                </label>
            </div>
        </div>
        <div class="button-container">
            <p class="title"> Klass
            <p>
            <div class="radio-button-container">
                <label class="radio-button">
                    <input type="radio" name="employees" value="1-20" required>
                    <span>1-20</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="employees" value="20-100" required>
                    <span>20-100</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="employees" value="100+" required>
                    <span>100+</span>
                </label>
            </div>
        </div>

        <div class="button-container">
            <p class="title"> Klass
            <p>
            <div class="radio-button-container">
                <label class="radio-button">
                    <input type="radio" name="language" value="english" required>
                    <span>Engelska</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="language" value="swedish" required>
                    <span>Svenska</span>
                </label>
            </div>
        </div>

        <div class="input-container">
            <p class="input-title"> Länk till företagets Linkdin </p>
            <input type="url" name="linkedin" placeholder="Länk till din Linkdin">
        </div>

        <div class="input-container">
            <p class="input-title"> länk till företagets hemsida </p>
            <input type="url" name="homepage" placeholder="Länk till din hemsida">
        </div>

        <div class="input-container">
            <p class="input-title"> Profile Picture </p>
            <input type="file" name="profile_picture">
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
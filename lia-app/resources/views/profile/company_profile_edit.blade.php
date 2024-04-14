<link rel="stylesheet" href="{{ asset('css/registration.css') }}" />
<form method="POST" action="{{ route('company.profile.update', ['id' => $company->id]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-container">

        <div class="card-container">
            <div class="file-container">
                <p class="file-title"> Profile Picture </p>
                <input type="file" id="profile-picture-input" name="profile_picture" onchange="updateFileName('profile-picture-input')">
                <label for="profile-picture-input" id="file-label">Choose File</label>
            </div>
        </div>

        <div class="input-container">
            <p class="input-title"> Company Name * </p>
            <input type="text" name="companyName" placeholder="Company Name" value="{{ $company->companyName }}" required>
        </div>
        <div class="input-container">
            <p class="input-title"> Email * </p>
            <input type="email" name="email" placeholder="Email" value="{{ $company->email }}" required>
        </div>

        <div class="input-container">
            <p class="input-title"> Contact Person * </p>
            <input type="text" name="contactPerson" placeholder="Contact Person" value="{{ $company->contactPerson }}" required>
        </div>
        <div class="input-container">
            <p class="input-title"> Phone Number </p>
            <input type="tel" name="phone" placeholder="Phone Number" value="{{ $company->phone }}">
        </div>
        <div class="input-container">
            <p class="input-title"> Description * </p>
            <textarea name="description" placeholder="Description" required>{{ $company->description }}</textarea>
        </div>

        <div class="button-container">
            <p class="title"> Klass
            <p>
            <div class="radio-button-container">
                <label class="radio-button">
                    <input type="radio" name="industry" value="Bilindustrin" {{ $company->industry == 'Bilindustrin' ? 'checked' : '' }}>
                    <span>Bilindustrin</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="industry" value="Media och Kommunikation" {{ $company->industry == 'Media och Kommunikation' ? 'checked' : '' }}>
                    <span>Media och Kommunikation</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="industry" value="Film och TV-Produktion" {{ $company->industry == 'Film och TV-Produktion' ? 'checked' : '' }}>
                    <span>Film och TV-Produktion</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="industry" value="Annat" {{ $company->industry == 'Annat' ? 'checked' : '' }}>
                    <span>Annat</span>
                </label>
            </div>
        </div>
        <div class="button-container">
            <p class="title"> Klass
            <p>
            <div class="radio-button-container">
                <label class="radio-button">
                    <input type="radio" name="employees" value="1-20" {{ $company->employees == '1-20' ? 'checked' : '' }}>
                    <span>1-20</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="employees" value="20-100" {{ $company->employees == '20-100' ? 'checked' : '' }}>
                    <span>20-100</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="employees" value="100+" {{ $company->employees == '100+' ? 'checked' : '' }}>
                    <span>100+</span>
                </label>
            </div>
        </div>

        <div class="button-container">
            <p class="title"> Klass
            <p>
            <div class="radio-button-container">
                <label class="radio-button">
                    <input type="radio" name="language" value="english" {{ $company->language == 'english' ? 'checked' : '' }}>
                    <span>Engelska</span>
                </label>
                <label class="radio-button">
                    <input type="radio" name="language" value="swedish" {{ $company->language == 'swedish' ? 'checked' : '' }}>
                    <span>Svenska</span>
                </label>
            </div>
        </div>

        <div class="input-container">
            <p class="input-title"> Länk till företagets Linkdin </p>
            <input type="url" name="linkedin" placeholder="Länk till din Linkdin" value="{{ $company->linkedin }}">
        </div>

        <div class="input-container">
            <p class="input-title"> länk till företagets hemsida </p>
            <input type="url" name="homepage" placeholder="Länk till din hemsida" value="{{ $company->homepage }}">
        </div>
        <button type="submit">Update</button>
    </div>
</form>

<script src="{{ asset('js/registration.js') }}"></script>
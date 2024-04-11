<form method="POST" action="{{ route('registration.student.submit') }}">
    @csrf

    <input type="text" name="studentName" placeholder="För och efternamn" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="tel" name="phone" placeholder="Telefonnummer" required>
    <input type="radio" name="study" value="WU" required>
    <input type="radio" name="study" value="DD" required>
    <textarea name="about" placeholder="Kort beskrivning om dig själv" required></textarea>
    <input type="url" name="linkedin" placeholder="Länk till din Linkdin">
    <input type="url" name="portfolio" placeholder="Länk till din portfolio">
    <input type="text" name="work" placeholder="Arbetserfarenthet">
    <input type="text" name="education" placeholder="Utbildning">
    <input type="text" name="interests" placeholder="intressen">
    <input type="text" name="skills" placeholder="Färdigheter">
    <input type="text" name="city" placeholder="stad">
    <input type="password" name="password" placeholder="Lösenord" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

    <button type="submit">Register</button>
</form>
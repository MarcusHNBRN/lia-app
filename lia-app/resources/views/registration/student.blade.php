<form method="POST" action="{{ route('registration.submit') }}">
    @csrf

    <input type="text" name="studentName" placeholder="För och efternamn" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="tel" name="phone" placeholder="Telefonnummer" required>
    <select name="class" required>
        <option value="WU">WU</option>
        <option value="DD">DD</option>
    </select>
    <input type="url" name="linkedin" placeholder="Länk till din Linkdin">
    <input type="url" name="portfolio" placeholder="Länk till din portfolio">
    <input type="text" name="skills" placeholder="Arbetserfarenthet">
    <input type="password" name="password" placeholder="Lösenord" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

    <button type="submit">Register</button>
</form>
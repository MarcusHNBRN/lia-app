<form method="POST" action="{{ route('registration.company.submit') }}">
    @csrf

    <input type="text" name="companyName" placeholder="Företags Namn" required>
    <input type="email" name="companyEmail" placeholder="Företags Email" required>
    <input type="text" name="contactPerson" placeholder="Kontakt Person" required>
    <input type="tel" name="phone" placeholder="Phone Number">
    <textarea name="description" placeholder="Description" required></textarea>
    <select name="industry" required>
        <option value="Bilindustrin">Bilindustrin</option>
        <option value="Media och Kommunikation">Media och Kommunikation</option>
        <option value="Film och TV-Produktion">Film och TV-Produktion</option>
        <option value="Annat">Annat</option>
    </select>
    <select name="employees" required>
        <option value="1-20">1-20</option>
        <option value="20-100">20-100</option>
        <option value="100+">100+</option>
    </select>
    <select name="language" required>
        <option value="Egelska">Engelska</option>
        <option value="Svenska">Svenska</option>
    </select>
    <input type="url" name="linkedin" placeholder="Länk till din Linkdin">
    <input type="url" name="homepage" placeholder="Länk till din hemsida">
    <input type="password" name="password" placeholder="Lösenord" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>


    <button type="submit">Register</button>
</form>
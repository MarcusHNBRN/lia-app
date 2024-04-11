<form method="POST" action="{{ route('registration.submit') }}">
    @csrf

    <input type="text" name="companyName" placeholder="Företags Namn" required>
    <input type="email" name="companyEmail" placeholder="Företags Email" required>
    <input type="text" name="contactPerson" placeholder="Kontakt Person" required>
    <input type="tel" name="phone" placeholder="Phone Number">
    <textarea name="description" placeholder="Description" required></textarea>
    <input type="text" name="address" placeholder="Address" required>
    <select name="class" required>
        <option value="WU">WU</option>
        <option value="DD">DD</option>
    </select>
    <input type="number" name="availableSpots" placeholder="Available Spots" required>
    <input type="email" name="email" placeholder="Contact Email" required>
    <input type="password" name="password" placeholder="Lösenord" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>


    <button type="submit">Register</button>
</form>
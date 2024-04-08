<form method="POST" action="{{ route('registration.submit') }}">
    @csrf

    <input type="text" name="companyName" placeholder="Company Name" required>
    <input type="email" name="companyEmail" placeholder="Company Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
    <textarea name="description" placeholder="Description" required></textarea>
    <input type="text" name="address" placeholder="Address" required>
    <select name="class" required>
        <option value="WU">WU</option>
        <option value="DD">DD</option>
    </select>
    <input type="number" name="availableSpots" placeholder="Available Spots" required>
    <input type="email" name="email" placeholder="Contact Email" required>
    <input type="tel" name="phone" placeholder="Phone Number">

    <button type="submit">Register</button>
</form>
<div>
    <form action="{{ route('registration.submit') }}" method="post">
        @csrf

        <label form="name"> Name </label>
        <input name="name" id="name" type="text" />

        <label form="email"> Email </label>
        <input name="email" id="email" type="email" />

        <label form="password"> Password </label>
        <input name="password" id="password" type="password" />

        <button type="submit"> Register </button>
    </form>
</div>
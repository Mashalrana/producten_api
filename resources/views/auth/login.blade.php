<!-- resources/views/auth/login.blade.php -->

<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus />
    </div>

    <!-- Password -->
    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required autocomplete="current-password" />
    </div>

    <!-- Remember Me -->
    <div>
        <input type="checkbox" id="remember_me" name="remember">
        <label for="remember_me">Remember me</label>
    </div>

    <div>
        <button type="submit">
            Log in
        </button>
    </div>
</form>

<form method="POST" action="{{ route('post-login') }}">
    @csrf

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        @error('email')
            <span role="alert">{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
        @error('password')
            <span role="alert">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit">Login</button>
</form>

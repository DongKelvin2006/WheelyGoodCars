<!DOCTYPE html>
<html>
<head>
    <title>Registreren</title>
</head>
<body>
    <h1>Registratie</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label>Naam</label>
            <input type="text" name="name" value="{{ old('name') }}" required autofocus>
            @error('name') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
            @error('email') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Wachtwoord</label>
            <input type="password" name="password" required>
            @error('password') <span>{{ $message }}</span> @enderror
        </div>

        <div>
            <label>Bevestig wachtwoord</label>
            <input type="password" name="password_confirmation" required>
        </div>

        <button type="submit">Registreren</button>
    </form>
</body>
</html>

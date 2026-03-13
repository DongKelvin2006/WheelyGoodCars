<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-gray-100">
    <header>
        <x-layouts.nav></x-layouts.nav>
    </header>

    <main class="flex-1 flex items-center justify-center">
        <div class="w-full max-w-md bg-white p-6 rounded-lg shadow border mt-6">
            <h1 class="text-2xl font-semibold mb-6 text-center">Login</h1>

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black"
                    >
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Wachtwoord</label>
                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black"
                    >
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center gap-2">
                    <input type="checkbox" name="remember" class="border border-gray-300 rounded">
                    <label class="text-sm">Onthoud mij</label>
                </div>

                <button
                    type="submit"
                    class="w-full bg-black text-white py-2 rounded hover:bg-gray-800 transition"
                >
                    Login
                </button>
            </form>

            <p class="mt-4 text-sm text-center">
                <a href="{{ route('password.request') }}" class="underline">Wachtwoord vergeten?</a>
            </p>
        </div>
    </main>
</body>
</html>

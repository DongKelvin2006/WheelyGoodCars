<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registreren</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-gray-100">
    <!-- Navigation -->
    <header>
        <x-layouts.nav></x-layouts.nav>
    </header>

    <!-- Main content -->
    <main class="flex-1 flex items-center justify-center">
        <div class="w-full max-w-md bg-white p-6 rounded-lg shadow border mt-6">
            <h1 class="text-2xl font-semibold mb-6 text-center">Registreren</h1>

            <form method="POST" action="{{ route('register') }}" class="space-y-4">
                @csrf

                <div>
                    <label class="block text-sm font-medium mb-1">Naam</label>
                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        autofocus
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black"
                    >
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
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

                <div>
                    <label class="block text-sm font-medium mb-1">Bevestig wachtwoord</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        required
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-black"
                    >
                </div>

                <button
                    type="submit"
                    class="w-full bg-black text-white py-2 rounded hover:bg-gray-800 transition"
                >
                    Registreren
                </button>
            </form>
        </div>
    </main>
</body>
</html>

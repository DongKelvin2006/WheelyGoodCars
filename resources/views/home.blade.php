<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18]">

    <header class="sticky top-0 z-50 w-full border-b border-[#19140035] dark:border-[#3E3E3A] bg-[#FDFDFC] dark:bg-[#0a0a0a]">
        <x-layouts.nav />
    </header>

    <main class="flex-1 flex flex-col items-center justify-start p-6 lg:p-8 space-y-6 w-full max-w-5xl mx-auto">

        <!-- Big Top Card -->
        <div class="w-full bg-white dark:bg-[#1a1a1a] p-8 rounded-lg shadow border border-[#19140035] dark:border-[#3E3E3A] flex items-center justify-center text-xl font-semibold">
            Top Card (static content)
        </div>

        <!-- Dynamic Deals Grid -->
        <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($cars as $car)
                <div class="bg-white dark:bg-[#1a1a1a] p-6 rounded-lg shadow border border-[#19140035] dark:border-[#3E3E3A] flex flex-col items-start">
                    <!-- Car title -->
                    <h2 class="text-lg font-semibold mb-1">{{ $car->make }} {{ $car->model }} ({{ $car->production_year }})</h2>

                    <!-- License plate -->
                    <p class="text-sm text-gray-600 dark:text-gray-400">License Plate: {{ $car->license_plate }}</p>

                    <!-- Mileage -->
                    <p class="text-sm text-gray-600 dark:text-gray-400">Mileage: {{ $car->mileage }} km</p>

                    <!-- Color -->
                    <p class="text-sm text-gray-600 dark:text-gray-400">Color: {{ $car->color }}</p>

                    <!-- Price -->
                    <span class="mt-2 text-xl font-bold text-[#1b1b18] dark:text-[#EDEDEC]">${{ $car->price }}</span>
                </div>
            @endforeach
        </div>

    </main>

</body>
</html>

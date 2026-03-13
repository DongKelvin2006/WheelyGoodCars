<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Car</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18]">

<header class="sticky top-0 z-50 w-full border-b border-[#19140035] dark:border-[#3E3E3A] bg-[#FDFDFC] dark:bg-[#0a0a0a]">
    <x-layouts.nav />
</header>

<main class="flex-1 flex items-center justify-center p-6 lg:p-12">

    <div class="w-full max-w-2xl bg-white dark:bg-[#1a1a1a] p-10 rounded-2xl shadow-lg border border-[#19140035] dark:border-[#3E3E3A]">

        <h1 class="text-3xl font-bold mb-8 text-center text-[#1b1b18] dark:text-[#EDEDEC]">
            Create New Car
        </h1>

        <form method="POST" action="{{ route('cars.store') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf


            <div>
                <label class="block text-sm font-medium mb-2">License Plate</label>
                <input type="text" name="license_plate" placeholder="ABC-1234"
                    class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-[#121212] dark:text-white transition">
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-2">Make</label>
                    <input type="text" name="make" placeholder="Toyota"
                        class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-[#121212] dark:text-white transition">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">Model</label>
                    <input type="text" name="model" placeholder="Corolla"
                        class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-[#121212] dark:text-white transition">
                </div>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-2">Price ($)</label>
                    <input type="number" step="0.01" name="price" placeholder="15000"
                        class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-[#121212] dark:text-white transition">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">Mileage (km)</label>
                    <input type="number" name="mileage" placeholder="50000"
                        class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-[#121212] dark:text-white transition">
                </div>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-2">Seats</label>
                    <input type="number" name="seats" placeholder="5"
                        class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-[#121212] dark:text-white transition">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">Doors</label>
                    <input type="number" name="doors" placeholder="4"
                        class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-[#121212] dark:text-white transition">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">Year</label>
                    <input type="number" name="production_year" placeholder="2020"
                        class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-[#121212] dark:text-white transition">
                </div>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium mb-2">Weight (kg)</label>
                    <input type="number" name="weight" placeholder="1500"
                        class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-[#121212] dark:text-white transition">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">Color</label>
                    <input type="text" name="color" placeholder="Red"
                        class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-[#121212] dark:text-white transition">
                </div>
            </div>


            <div>
                <label class="block text-sm font-medium mb-2">Car Image</label>
                <input type="file" name="image" class="w-full border border-gray-300 dark:border-gray-600 rounded-lg p-2 dark:bg-[#121212] dark:text-white">
            </div>


            <button type="submit"
                class="w-full bg-blue-600 text-white py-3 rounded-xl font-semibold hover:bg-blue-700 transition shadow-md">
                Create Car
            </button>
        </form>

    </div>

</main>

</body>
</html>

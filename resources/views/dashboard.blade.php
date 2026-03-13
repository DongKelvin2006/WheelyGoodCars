<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18]">

<header class="sticky top-0 z-50 w-full border-b border-[#19140035] dark:border-[#3E3E3A] bg-[#FDFDFC] dark:bg-[#0a0a0a]">
    <x-layouts.nav />
</header>

<main class="flex-1 flex items-start justify-center p-6 lg:p-8">

    <!-- Flex container for the two cards -->
    <div class="flex flex-col md:flex-row md:space-x-6 w-full max-w-5xl">

        <!-- Card 1 -->
        <div class="flex-1 bg-white dark:bg-[#1a1a1a] p-8 rounded-lg shadow border border-[#19140035] dark:border-[#3E3E3A] mb-6 md:mb-0">
            <h1 class="text-2xl font-semibold mb-6 text-center text-[#1b1b18] dark:text-[#EDEDEC]">
                User Info
            </h1>

            <div class="space-y-4">
                <div class="flex justify-between border-b pb-2 border-gray-200 dark:border-gray-700">
                    <span class="font-medium">User ID</span>
                    <span>{{ Auth::user()->id }}</span>
                </div>

                <div class="flex justify-between border-b pb-2 border-gray-200 dark:border-gray-700">
                    <span class="font-medium">Name</span>
                    <span>{{ Auth::user()->name }}</span>
                </div>

                <div class="flex justify-between border-b pb-2 border-gray-200 dark:border-gray-700">
                    <span class="font-medium">Email</span>
                    <span>{{ Auth::user()->email }}</span>
                </div>

                <div class="flex justify-between border-b pb-2 border-gray-200 dark:border-gray-700">
                    <span class="font-medium">Account Created</span>
                    <span>{{ Auth::user()->created_at->format('d M Y') }}</span>
                </div>
                <div class="flex justify-between border-b pb-2 border-gray-200 dark:border-gray-700">
                    <span class="font-medium">User Role</span>
                    <span>{{ Auth::user()->role ?? 'User' }}</span>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="flex-1 bg-white dark:bg-[#1a1a1a] p-8 rounded-lg shadow border border-[#19140035] dark:border-[#3E3E3A]">
            <h1 class="text-2xl font-semibold mb-6 text-center text-[#1b1b18] dark:text-[#EDEDEC]">
                Other Info
            </h1>

            <div class="space-y-4">
            </div>
        </div>

    </div>

</main>

</body>
</html>

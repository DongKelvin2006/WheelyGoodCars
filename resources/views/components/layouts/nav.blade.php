<div>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 min-h-screen flex-col">
        <header class="sticky top-0 z-50 w-full bg-[#FDFDFC] dark:bg-[#0a0a0a] border-b border-[#19140035] dark:border-[#3E3E3A']">
            @if (Route::has('login'))
                <nav class="flex items-center justify-between max-w-4xl mx-auto py-4 px-4 lg:px-0">

                    <a href="{{ url('/') }}" class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#1b1b18] dark:text-[#EDEDEC]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 13l2-3h14l2 3M5 10V6h14v4M5 10v4a2 2 0 002 2h10a2 2 0 002-2v-4M5 14h14M7 18a2 2 0 11-4 0 2 2 0 014 0zm14 0a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </a>

                    <div class="flex items-center gap-4">

                        @auth
                        <!-- JS-free dropdown -->
                        <div class="relative group">
                            <button
                                class="inline-flex items-center px-5 py-1.5 dark:text-[#EDEDEC] border border-[#19140035]
                                       hover:border-[#1915014a] text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b]
                                       rounded-sm text-sm leading-normal focus:outline-none">
                                {{ Auth::user()->name }}
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <div
                                class="absolute right-0 mt-2 w-40 bg-white dark:bg-[#0a0a0a] border border-[#19140035]
                                       dark:border-[#3E3E3A] rounded-sm shadow-lg opacity-0 invisible
                                       group-focus-within:opacity-100 group-focus-within:visible
                                       transition-all duration-150 z-50">
                                <a href="{{ url('/dashboard') }}" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-[#1a1a1a]">
                                    Dashboard
                                </a>

                                <a href="{{ url('/my-cars') }}" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-[#1a1a1a]">
                                    My Cars
                                </a>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full text-left px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-[#1a1a1a]">
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>

                        @else
                            <a href="{{ route('login') }}"
                               class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                   class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border border-[#19140035] hover:border-[#1915014a] text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                    Register
                                </a>
                            @endif
                        @endauth

                    </div>
                </nav>
            @endif
        </header>
    </body>
</div>

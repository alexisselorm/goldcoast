<x-guest-layout>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    </head>

    <body class="antialiased bg-[#f5f5f5]">


        @if (Route::has('login'))
            <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                @auth
                @else
                    <a href="{{ route('login') }}" class="text-white text-m dark:text-gray-500 ">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-white text-m dark:text-gray-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif




        <!-- hero section -->
        <x-hero-card />
        {{-- End of hero section --}}

        <div class="mx-auto mt-4 bg-gray-600 max-w-7xl sm:px-6 lg:px-8">
            <div class="text-center text-white">
                <div class="grid gap-2 p-4 md:grid-cols-3">
                    {{-- <div class="p-4 bg-blue-500 md:col-span-3">1</div> --}}
                    {{-- Put foreach here --}}
                    <div class="p-4 bg-red-500">
                        2
                    </div>
                    {{-- End foreach here --}}
                    <div class="p-4 bg-yellow-500">3</div>
                    <div class="p-4 bg-green-500">4</div>

                </div>
            </div>
        </div>
        {{-- Second --}}
        <div class="mx-auto bg-gray-800 max-w-7xl sm:px-6 lg:px-8">
            <div class="text-center text-white">
                <div class="grid gap-2 p-4 md:grid-cols-3">
                    <div class="p-4 bg-blue-500 md:col-span-3">1</div>
                    <div class="p-4 bg-red-500">2 </div>
                    <div class="p-4 bg-yellow-500">3</div>
                    <div class="p-4 bg-green-500">4</div>
                    <div class="p-4 bg-orange-500">5</div>
                    <div class="p-4 bg-pink-500">6</div>
                    <div class="p-4 bg-purple-500">7</div>
                    <div class="p-4 bg-zinc-500">8</div>
                    <div class="p-4 bg-sky-400">9</div>
                    <div class="p-4 bg-lime-400">9</div>
                </div>
            </div>
        </div>

        {{-- Follow us --}}
        <div class="mx-auto bg-gray-800 max-w-7xl sm:px-6 lg:px-8">
            <div class="text-center text-white">
                <div class="grid gap-2 p-4 md:grid-cols-3">
                    <div class="p-4 bg-blue-500 md:col-span-3">
                        1
                    </div>
                </div>
            </div>
        </div>
        {{-- Newsletter --}}
        <x-newsletter />
        {{-- End of Newsletter --}}

        {{-- Footer --}}
    </body>
</x-guest-layout>

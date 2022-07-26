<x-guest-layout>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    </head>

    <body class="antialiased bg-[#f5f5f5]">


        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                @else
                    <a href="{{ route('login') }}" class="text-m text-white dark:text-gray-500 ">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-m text-white dark:text-gray-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="">
            @include('layouts.users.navigation')
        </div>

        {{-- News Card --}}

        {{-- End of News Card --}}
        </div>
    </body>
</x-guest-layout>

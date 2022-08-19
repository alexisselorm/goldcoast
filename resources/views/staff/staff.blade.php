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

        {{-- Cards --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-gray-200">
            <div class="text-center text-start">
                {{-- Heading --}}
                <div class="text-4xl font-extrabold text-start p-4 md:col-span-4">
                    GoldCoast FC Staff</div>
            </div>
            {{-- Players section --}}
            @foreach ($positions as $position)
                <div class="grid gap-2 p-4 md:grid-cols-4">
                    <div class="space-y-8 text-4xl font-extrabold text-start p-4 md:col-span-4">
                        <hr />
                        {{ $position->name }}
                    </div>
                    @foreach ($position->staff as $single_staff)
                        {{-- <div class="bg-red-500 p-4">2 </div> --}}
                        <div class="player-container bg-white">
                            <a class="player hasImage no-underline hover:underline"
                                href="/players/{{ $single_staff->slug }}">
                                <div class="image-container overflow-hidden border-t-2 border-orange-500 ">

                                    <img class="transition  ease-in-out bg-gray-200 delay-150 hover:-translate-y-1 hover:scale-105 duration-[2500ms]"
                                        src="{{ $single_staff->picture }}">

                                </div>
                                <div class="single_staff-panel match-height" style="height: 112.562px;">
                                    <h3 class="single_staff-name">
                                        <span class="text-xl font-semibold">{{ $single_staff->fname }}</span><br>
                                        <span
                                            class="font-semibold text-2xl text-gray-700">{{ $single_staff->lname }}</span>
                                    </h3>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            @endforeach
        </div>
        </div>
    </body>
</x-guest-layout>

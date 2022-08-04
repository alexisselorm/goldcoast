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

        {{-- Cards --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            <div class="text-center text-start">
                {{-- Heading --}}
                <div class="text-4xl font-extrabold text-start p-4 md:col-span-4">
                    GoldCoast FC Team Staff</div>
            </div>
            {{-- Players section --}}
            @foreach ($positions as $position)
                <div class="grid gap-2 p-4 md:grid-cols-4">
                    <div class="text-4xl font-extrabold text-start p-4 md:col-span-4">
                        <hr />
                        {{ $position->name }}
                    </div>
                    @foreach ($position->staff as $single_staff)
                        {{-- <div class="bg-red-500 p-4">2 </div> --}}
                        <div class="player-container">
                            <a class="player hasImage no-underline hover:underline"
                                href="/players/{{ $single_staff->fname }}">
                                <div class="image-container ">

                                    <img class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-[2500ms] ..."
                                        src="https://www.itfc.co.uk/api/image/cropandgreyscale/e5005c58-be2a-4cf5-b0b9-5a2b62e742d5/?preset=square&greyscale=false">

                                </div>
                                <div class="player-panel match-height" style="height: 112.562px;">
                                    <h3 class="player-name">
                                        {{-- <span class="text-2xl ">{{ $player->player_number }}</span><br> --}}
                                        <span class="text-xl font-semibold">{{ $single_staff->fname }}</span><br>
                                        <span
                                            class="font-semibold text-3xl text-gray-700">{{ $single_staff->lname }}</span>
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

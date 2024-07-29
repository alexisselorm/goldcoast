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

        {{-- Cards --}}
        <div class="mx-auto bg-gray-200 max-w-7xl sm:px-6 lg:px-8">
            <div class="text-center">
                {{-- Heading --}}
                <div class="p-4 text-4xl font-extrabold text-start md:col-span-4">
                    GoldCoast FC First Team</div>
            </div>
            {{-- Players section --}}
            @foreach ($positions as $position)
                <div class="grid gap-2 p-4 md:grid-cols-4">
                    <div class="p-4 space-y-8 text-4xl font-extrabold text-start md:col-span-4">
                        <hr />
                        {{ $position->name }}
                    </div>
                    @foreach ($position->players as $player)
                        {{-- <div class="p-4 bg-red-500">2 </div> --}}
                        <div class="bg-white player-container">
                            <a class="no-underline player hasImage hover:underline" href="/players/{{ $player->slug }}">
                                <div class="overflow-hidden border-t-2 border-orange-500 image-container ">

                                    <img class="transition  ease-in-out bg-gray-200 delay-150 hover:-translate-y-1 hover:scale-105 duration-[2500ms]"
                                        {{-- src="{{ $player->picture }}" --}}
                                        src="https://a.espncdn.com/combiner/i?img=/i/headshots/soccer/players/full/11001.png&w=350&h=254">

                                </div>
                                <div class="player-panel match-height" style="height: 112.562px;">
                                    <h3 class="player-name">
                                        <span class="text-2xl ">{{ $player->player_number }}</span><br>
                                        <span class="text-xl font-semibold">{{ $player->fname }}</span><br>
                                        <span class="text-2xl font-semibold text-gray-700">{{ $player->lname }}</span>
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

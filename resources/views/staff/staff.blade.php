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
                                        {{-- src="{{ $single_staff->picture }}" --}}
                                        src="data:image/jpeg;base64,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">

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

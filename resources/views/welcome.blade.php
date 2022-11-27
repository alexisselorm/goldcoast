<x-guest-layout>

    @if (Route::has('login'))
        <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
            @auth
            @else
                <a href="{{ route('login') }}" class="text-white text-m dark:text-white ">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-white text-m dark:text-white">Register</a>
                @endif
            @endauth
        </div>
    @endif




    <!-- hero section -->
    <x-hero-card :news="$news" />
    {{-- End of hero section --}}

    <x-section-container>
        {{-- <div class="p-4 bg-blue-500 md:col-span-3">1</div> --}}
        {{-- Put foreach here --}}
        @foreach ($extranews->skip(4) as $extra_news)
            <div class="p-4">
                <x-extra-news-card :singlenews="$extra_news" />
            </div>
        @endforeach

        {{-- End foreach here --}}
    </x-section-container>
    {{-- Second --}}

    {{-- Next Fixture --}}
    <x-section-container>
        @unless(!$fixture)
            @php
                if ($fixture->isHome) {
                    $home = 'GoldCoast FC';
                    $away = $fixture->opponent->name;
                    $stadium = 'Bravide Arena';
                } else {
                    $home = $fixture->opponent->name;
                    $away = 'GoldCoast FC';
                    $stadium = $fixture->opponent->stadium;
                }

            @endphp
            <span class="text-black">Fixtures</span>
            <div class="p-8 bg-gray-200 md:col-span-3 flex justify-around items-center text-center align-center"
                onclick="location.href='{{ route('fixtures') }}'">

                {{-- HOME TEAM --}}
                <div>
                    <img class="w-26 h-26 rounded-full"
                        src="https://randomuser.me/api/portraits/men/{{ env('TEAM_ID') }}.jpg" />
                </div>
                <div>
                    {{ $home }}
                </div>

                <div class="flex-col">
                    <div class=" mb-2">{{ $fixture->competition->name }} logo here</div>
                    <div class=" text-xs mb-2">VS</div>
                    <div class=" mt-4">
                        {{ Carbon\Carbon::parse($fixture->gametime)->format('l jS F Y, H:i') }}
                    </div>
                    <div class="">{{ $stadium }}</div>
                </div>
                {{-- AWAY MATCH --}}

                <div>
                    {{ $away }}
                </div>

                <div>
                    <img class="w-26 h-26 rounded-full"
                        src="https://randomuser.me/api/portraits/men/{{ $fixture->opponent->id }}.jpg" />
                </div>
            @else
                <div>
                    <p>No fixtures yet!</p>
                </div>
            @endunless
        </div>
    </x-section-container>

    {{-- Another section . Maybe Shop?? --}}
    <x-section-container>
        <span class="text-black">SHOP</span>
        <div class="p-8 bg-blue-500 md:col-span-3 items-center text-center justify-center">SHOP HERE. USE AN
            EXTERNAL LINK TO HANDLE POSTING AND BUYING. MAYBE AN API?</div>
    </x-section-container>

    {{-- <x-section-container>
        <span class="text-dark">Fixtures</span>
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
    </x-section-container> --}}
    {{-- Newsletter --}}
    <x-newsletter />
    {{-- End of Newsletter --}}

</x-guest-layout>

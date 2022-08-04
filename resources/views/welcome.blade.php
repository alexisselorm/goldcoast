<x-guest-layout>

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
    <x-hero-card :news="$news" />
    {{-- End of hero section --}}

    <x-section-container>
        {{-- <div class="p-4 bg-blue-500 md:col-span-3">1</div> --}}
        {{-- Put foreach here --}}
        @foreach ($extranews->skip(4) as $new)
            <div class="p-4 bg-red-500">
                {{ $new->title }}
            </div>
        @endforeach

        {{-- End foreach here --}}
    </x-section-container>
    {{-- Second --}}

    <x-section-container>
        Fixtures
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
    </x-section-container>

    {{-- Newsletter --}}
    <x-newsletter />
    {{-- End of Newsletter --}}

</x-guest-layout>

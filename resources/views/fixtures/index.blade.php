<x-guest-layout>


    <x-section-container>
        {{-- {{ dd($fixturesByMonth) }} --}}
        <x-next-fixture :latest_fixture="$latest_fixture" />

        @foreach ($fixturesByMonth as $monthlyfixtures)
            {{-- {{ dd($monthlyfixtures) }} --}}

            <div class="px-4 font-semibold text-lg text-gray-500 md:col-span-3">
                {{ strtoupper(Carbon\Carbon::parse($monthlyfixtures[0]->gametime)->format('F Y')) }}
                <hr class="mt-3">
            </div>
            @foreach ($monthlyfixtures as $fixture)
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
                <div class="p-6">
                    <div class="">
                        {{Carbon\Carbon::parse($fixture->gametime)->format('d F')}} - {{ $stadium }}
                    </div>
                    <div>
                        {{ $home }}
                    </div>
                </div>
                <div class="p-4 items-center text-center">
                    <div class="invisible">
                        Here
                    </div>
                    <div class="flex items-center justify-center align-center">
                        <div>Home Logo</div>
                        <div class="px-3 mx-2 bg-gray-100 rounded text-gray-800">
                            {{ substr($fixture->gametime, 11, -3) }}</div>
                        <div>Away Logo</div>
                    </div>

                </div>
                <div class="p-4 items-end justify-end  text-end">
                    <div class="invisible">
                        Here
                    </div>
                    <div>
                        {{ $away }}
                    </div>
                </div>
            @endforeach
        @endforeach

    </x-section-container>


</x-guest-layout>

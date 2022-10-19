<x-guest-layout>


    <x-section-container>(
        {{-- {{ dd($fixturesByMonth) }} --}}
        <x-next-fixture :latest_fixture="$latest_fixture" />

        @foreach($fixturesByMonth as $monthlyfixtures)
{{-- {{ dd($monthlyfixtures) }} --}}

        <div class="px-4  text-gray-500 md:col-span-3">
            {{ Carbon\Carbon::parse($monthlyfixtures[0]->gametime)->format('F') }} 2022
            <hr class="mt-1">
        </div>
        <div class="px-4 md:col-span-3">
            <div class="mb-3">
                <hr class="mt-1">
                @foreach($monthlyfixtures as $fixture)
                {{$fixture->competition->name}} - Date
            </div>
            <div class="p-4 my-1 flex flex-wrap justify-between">
                <div>
                    Home team logo
                </div>
                <div class="flex flex-wrap">
                    <div>Ajax</div>
                    <div class="px-3 mx-2 bg-gray-100 rounded txt-gray-800">19:45</div>
                    <div>Liverpool</div>
                </div>

                <div>
                    Away team logo
                </div>
            </div>
            @endforeach
        </div>
        @endforeach

    </x-section-container>

</x-guest-layout>

@props(['latest_fixture'])
<div class="p-4  md:col-span-3 md:row-span-4">
    {{-- <span class="text-dark">Fixtures</span> --}}
    <div class="text-gray-600">

        @php
            if ($latest_fixture->isHome) {
                $home = 'GoldCoast FC';
                $away = $latest_fixture->opponent->name;
                $stadium = 'Bravide Arena';
            } else {
                $home = $latest_fixture->opponent->name;
                $away = 'GoldCoast FC';
                $stadium = $latest_fixture->opponent->stadium;
            }

        @endphp
        NEXT MATCH
        <hr>
    </div>
    <div class="flex flex-wrap justify-between mb-12">
        <div>

            <div class="font-bold"> {{ $latest_fixture->competition->name }}</div>
            <div>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="inline-block w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                    </svg>
                    <span class="text-sm text-gray-700"> {{ $latest_fixture->gametime }}</span>
                </span>

                <span class="text-sm text-gray-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="inline-block w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                    <span>
                        {{ $stadium }}
                    </span>

                </span>
            </div>
        </div>
        {{-- Television --}}
        {{-- <div class="mr-4">
            Cnal+
        </div> --}}
    </div>
    <div class="flex flex-wrap justify-between">
        <div class="my-12">
            <div> {{ $home }}</div>
            <div class="mt-6">{{ $away }}</div>
        </div>

        <div>
            <div class="flex items-center">



            </div>
            <div class="p-2 m-2 "> <span class="bg-gray-100 p-1 w-6 h-6 rounded-full">40</span> <span
                    class="mx-2">Days</span></div>
            <div class="p-2 m-2"><span class="bg-gray-100 p-1 w-6 h-6 rounded-full">40</span> <span
                    class="mx-2">Hours</span>
            </div>
            <div class="p-2 m-2"><span class="rounded-full bg-gray-100 p-1 w-6 h-6">30</span> <span
                    class="mx-2">Min</span>
            </div>
            <div class="p-2 m-2"><span class="bg-gray-100 p-1 w-6 h-6 rounded-full">19</span> <span
                    class="mx-2">Sec</span>
            </div>
        </div>
    </div>
</div>

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




        <!-- hero section -->
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="bg-black relative overflow-hidden mb-[40px] -mx-[40px] block">
                <div class="h-auto pr-[25%] w-full overflow-hidden float-left box-border">
                    <a href="#" class="w-full h-full relative block border-none">
                        <div class="w-full h-0 pb-[56%] overflow-hidden box-border">
                            <img class="w-full block relative z-0 max-w-full h-auto"
                                src="https://www.crawleytownfc.com/contentassets/35de16efbc4a4d83bceb020fd62b20d5/220704_jsb_crawley_spain_1802.jpg/Large">
                        </div>
                        <div class="absolute w-full top-0 bottom-0 z-10 box-border"
                            style="background:linear-gradient(to bottom,transparent 0%,rgba(0,0,0,.5) 80%,#000 100%);">
                        </div>
                        <div class="absolute w-full bottom-0 text-white p-[40px] z-10">
                            <div class="detail-block">
                                <div class="max-w-[1000px] overflow-hidden box-border">
                                    <span class="block text-[0.78em] leading-[1.5em] box-border">Club News</span>
                                    <h2 class="text-[2em] block leading-[1.17em] font-[600] mt-0">COREY ADDAI JOINS
                                        BETSY’S
                                        REDS
                                    </h2>
                                    <span class="mt-[5px] text-[0.67em] leading-[1.67em]">16 Hours ago</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="p-0 w-[25%] absolute top-0 right-0 box-border" style="height: 604.797px;">
                    <div class="box-border">
                        <div class="first">
                            <a href="#" class="w-full h-full relative block border-none">
                                <div class="w-full h-0 pb-[56%] overflow-hidden box-border">
                                    <img class="block z-0 relative max-w-full w-full h-auto"
                                        src="https://www.crawleytownfc.com/contentassets/7d554778ab28481c9fd5bcfdacc3c016/0_southern-cranes_1590a33e.jpeg/Large">
                                </div>
                                <div class="absolute w-full top-0 bottom-0 z-10 box-border"
                                    style="background: linear-gradient(to bottom,transparent 0%,rgba(0,0,0,.5) 80%,#000 100%);">
                                </div>
                                <div class="absolute w-full bottom-0 text-white p-[20px] z-10">
                                    <div class="max-w-[1000px] overflow-hidden box-border">
                                        <h2
                                            class="text-[1em] mb-0 border-b-transparent inline leading-[1.17em] font-[600] box-border">
                                            SOUTHERN
                                            CRANES &amp; ACCESS BACK BETSY &amp; THE BOYS FOR
                                            THE 2022/23
                                            SEASON!</h2>
                                        <span class="mt-[5px] block text-[.67em] leading-[1.57em]">23 Hours ago</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="second">
                            <a href="#" class="w-full h-full relative block border-none">
                                <div class="w-full h-0 pb-[56%] overflow-hidden box-border">
                                    <img class="block z-0 relative max-w-full w-full h-auto"
                                        src="https://www.crawleytownfc.com/contentassets/7d554778ab28481c9fd5bcfdacc3c016/0_southern-cranes_1590a33e.jpeg/Large">
                                </div>
                                <div class="absolute w-full top-0 bottom-0 z-10 box-border"
                                    style="background: linear-gradient(to bottom,transparent 0%,rgba(0,0,0,.5) 80%,#000 100%);">
                                </div>
                                <div class="absolute w-full bottom-0 text-white p-[20px] z-10">
                                    <div class="max-w-[1000px] overflow-hidden box-border">
                                        <h2
                                            class="text-[1em] mb-0 border-b-transparent inline leading-[1.17em] font-[600] box-border">
                                            SOUTHERN
                                            CRANES &amp; ACCESS BACK BETSY &amp; THE BOYS FOR
                                            THE 2022/23
                                            SEASON!</h2>
                                        <span class="mt-[5px] block text-[.67em] leading-[1.57em]">23 Hours ago</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="third">
                            <a href="#" class="w-full h-full relative block border-none">
                                <div class="w-full h-0 pb-[56%] overflow-hidden box-border">
                                    <img class="block z-0 relative max-w-full w-full h-auto"
                                        src="https://www.crawleytownfc.com/contentassets/7d554778ab28481c9fd5bcfdacc3c016/0_southern-cranes_1590a33e.jpeg/Large">
                                </div>
                                <div class="absolute w-full top-0 bottom-0 z-10 box-border"
                                    style="background: linear-gradient(to bottom,transparent 0%,rgba(0,0,0,.5) 80%,#000 100%);">
                                </div>
                                <div class="absolute w-full bottom-0 text-white p-[20px] z-10">
                                    <div class="max-w-[1000px] overflow-hidden box-border">
                                        <h2
                                            class="text-[1em] mb-0 border-b-transparent inline leading-[1.17em] font-[600] box-border">
                                            SOUTHERN
                                            CRANES &amp; ACCESS BACK BETSY &amp; THE BOYS FOR
                                            THE 2022/23
                                            SEASON!</h2>
                                        <span class="mt-[5px] block text-[.67em] leading-[1.57em]">23 Hours ago</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </section>

        </div>
        {{-- News area --}}
        <!-- component -->
        <hr />
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-gray-600 mt-4">
            <div class="text-center text-white">
                <div class="grid gap-2 p-4 md:grid-cols-3">
                    {{-- <div class="bg-blue-500 p-4 md:col-span-3">1</div> --}}
                    {{-- Put foreach here --}}
                    <div class="bg-red-500 p-4">
                        2
                    </div>
                    {{-- End foreach here --}}
                    <div class="bg-yellow-500 p-4">3</div>
                    <div class="bg-green-500 p-4">4</div>

                </div>
            </div>
        </div>
        {{-- Second --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-gray-800">
            <div class="text-center text-white">
                <div class="grid gap-2 p-4 md:grid-cols-3">
                    <div class="bg-blue-500 p-4 md:col-span-3">1</div>
                    <div class="bg-red-500 p-4">2 </div>
                    <div class="bg-yellow-500 p-4">3</div>
                    <div class="bg-green-500 p-4">4</div>
                    <div class="bg-orange-500 p-4">5</div>
                    <div class="bg-pink-500 p-4">6</div>
                    <div class="bg-purple-500 p-4">7</div>
                    <div class="bg-zinc-500 p-4">8</div>
                    <div class="bg-sky-400 p-4">9</div>
                    <div class="bg-lime-400 p-4">9</div>
                </div>
            </div>
        </div>

        {{-- Newsletter --}}
        <x-newsletter/>
        {{-- End of Newsletter --}}

        {{-- Footer --}}
    </body>
</x-guest-layout>

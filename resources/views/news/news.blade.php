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

        {{-- News Card --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 bg-gray-800">
            <div class="text-center text-white">
                <div class="grid gap-2 p-4 md:grid-cols-4">
                    {{-- Beginning of card --}}
                    <div class="col-sm-3 col-xs-12 article-container">
                        <a class="article  hasImage"
                            href="/news/2022/july/kieran-mckenna-on-towns-pre-season-victory-over-southend/">
                            <div class="image-container">
                                <img src="https://www.itfc.co.uk/siteassets/image/202223/pre-season-games/southend-united-h/kieran-mckenna-southend-h.jpg/Medium"
                                    alt="">
                            </div>
                            <div class="article-panel match-height" style="height: 187px;">

                                <div class="news-detail-wrap">
                                    <span class="category detail">Interviews</span>
                                    <h3 class="h5">KIERAN ON SOUTHEND SUCCESS</h3>
                                    <span class="date detail">1 Hour ago</span>
                                    <br>
                                    <p class="synopsis">Boss' thoughts on final pre-season outing</p>
                                </div>
                            </div>
                            <p class="button-container">
                                <span class="btn btn-primary arrow">Read full article</span>
                            </p>
                        </a>
                    </div>
                    {{-- End of card --}}
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
        {{-- End of News Card --}}
        </div>
    </body>
</x-guest-layout>

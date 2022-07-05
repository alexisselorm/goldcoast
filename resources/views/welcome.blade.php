<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



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
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
        @endauth
    </div>
    @endif

    <header class="h-[140px] relative z-50 block box-border">
        <div class="h-[140px] bg-orange-600 text-white bg-no-repeat bg-left-top bg-contain fixed z-[999] top-0 w-full "
            style="background-image:url(https://www.crawleytownfc.com/siteassets/header-an…ooter/efl_watermark_logos_cropped_crawleytown.png)">
            <div class="pt-[20px] px-0 pb-[22px] mx-auto max-w-[1440px]">
                <div class="px-[40px]">
                    <div class="-mx-[20px] flex justify-between items-center">
                        <div class="h-[90px] flex items-center">
                            <div class="w-[90px] h-[90px] max-w-full mt-0 mx-auto bg-contain bg-no-repeat bg-center"
                                style="background-image: url(https://www.crawleytownfc.com/static/css/teams/badges/png/crawleytown.png);">
                            </div>
                            <h1 class="m-0 text-[1.34em] tracking-wide font-[800] pl-[20px] leading-[1.125em]">
                                Crawley Town Football
                                Club</h1>
                        </div>
                        <div>
                            <a href="#">home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

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
                                <h2 class="text-[2em] block leading-[1.17em] font-[600] mt-0">COREY ADDAI JOINS BETSY’S
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

    <!-- i swaer to god -->
    <div class="py-12">
        <section class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 gap-4 ">
                <div class="article-container">
                    <a class="relative block bg-white border-t-orange-600 h-full" href="#">
                        <div class="w-full h-0 pb-[56%] overflow-hidden">
                            <img src="https://www.crawleytownfc.com/contentassets/57e18455ee9d457ba435467c61461c84/p1350526-1.jpg/Medium"
                                alt="" class="max-w-full w-full h-auto">
                        </div>
                        <div class="p-[20px] pb-[60px] relative">
                            <div class="overflow-hidden pb-[3px]">
                                <span class="block text-[.67em] leading-[1.67em]">Club News</span>
                                <h3 class="text-[1em] leading-[1.67em] font-[600] inline ">FIRST INTERVIEW | JAMES
                                    BALAGIZI</h3>
                                <span class="absolute left-[20px] bottom-0 text-[.67em] leading-[1.67em]">1 July
                                    2022</span>
                                <br>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>

    {{-- Newsletter --}}
    <footer class="bg-gray-200 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
        <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
        <h5 class="text-3xl">Stay in touch with the latest posts</h5>
        <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

        <div class="mt-10">
            <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                <form method="POST" action="newsletter" class="lg:flex text-sm">
                    @csrf
                    <div class="lg:py-3 lg:px-5 flex items-center">
                        <label for="email" class="hidden lg:inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </label>

                        <input id="email" name="email" type="text" placeholder="Your email address"
                            class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        @error('email')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit"
                        class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </footer>
</body>

</html>
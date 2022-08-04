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

    {{-- News Card --}}
    <div class="mx-auto max-w-7xl sm:px-1 lg:px-1">
        <div class="text-start text-white">
            <div class="grid gap-2 p-4 md:grid-cols-3">
                {{-- Beginning of card --}}
                @foreach ($news as $singlenews)
                    <div class="relative bg-blend-darken">
     <a href="/news/2022/august/ipswich-town-u21-and-u18-fixtures/" class="news-grid-article hasImage">
         <img class="reponsive-placeholder"
             src="{{ $singlenews->thumbnail }}">
             <div class="absolute w-full top-0 bottom-0 z-10 box-border"
             style="background:linear-gradient(to bottom,transparent 0%,rgba(0,0,0,.5) 80%,#000 100%);">
         </div>
         <div class="absolute bottom-3 left-2 z-10">
             <span class="small">Fixture News</span>
             <h2 class="text-2xl font-bold">{{ strtoupper($singlenews->title) }}</h2>
             <span class="">{{ $singlenews->created_at->diffForHumans() }}</span>
         </div>
     </a>
 </div>
                @endforeach
                {{-- End of card --}}
            </div>
            Page {{ $news->currentPage() }}
        </div>
    {{ $news->links() }}
    </div>
    {{-- End of News Card --}}
    </div>
</x-guest-layout>

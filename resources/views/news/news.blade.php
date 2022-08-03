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
    <div class="mx-auto bg-gray-800 max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center text-white">
            <div class="grid gap-2 p-4 md:grid-cols-4">
                {{-- Beginning of card --}}
                @foreach ($news as $single_news)
                    <div class="col-sm-3 col-xs-12 article-container">
                        <a class="article hasImage" href="news/{{ $single_news->slug }}">
                            <div class="image-container">
                                <img src="{{ $single_news->thumbnail }}" alt="">
                            </div>
                            <div class="article-panel match-height" style="height: 187px;">

                                <div class="news-detail-wrap">
                                    <span class="category detail">Interviews</span>
                                    <h3 class="h5">{{ $single_news->title }}</h3>
                                    <span class="date detail">{{ $single_news->created_at->diffForHumans() }}</span>
                                    <br>
                                    <p class="synopsis">{!! \Illuminate\Support\Str::limit($single_news->body, 50) !!}</p>
                                </div>
                            </div>
                            <p class="button-container">
                                <span class="btn btn-primary arrow">Read full article</span>
                            </p>
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

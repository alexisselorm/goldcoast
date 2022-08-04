@props(['news'])
<div class="mx-auto  max-w-7xl sm:px-1 lg:px-1">
    <div class="text-white text-start">
        <div class="grid gap-2 p-4 md:grid-cols-4 md:grid-rows-3">
            <x-featured-news-card :singlenews="$news[0]" />
            {{-- Extra news --}}
            @foreach ($news->skip(1) as $extra_news)
                <x-extra-news-card :singlenews="$extra_news" />
            @endforeach

            {{-- End of extra news --}}

        </div>
    </div>
</div>

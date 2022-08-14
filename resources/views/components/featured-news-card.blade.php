{{-- Jumbo div --}}
@props(['singlenews'])
<div
    class="relative transition ease-in-out bg-gray-200 delay-150 hover:-translate-y-1 hover:scale-101.5 duration-[1000ms] md:col-span-3 md:row-span-3">
    {{-- Major news card --}}
    <a href="/news/{{ $singlenews->slug }}">
        <div>
            <img src="{{ $singlenews->thumbnail }}">

        </div>
        <div class="absolute w-full top-0 bottom-0 z-10 box-border"
            style="background:linear-gradient(to bottom,transparent 0%,rgba(0,0,0,.5) 80%,#000 100%);">
        </div>

        <div class="absolute z-10 text-white bottom-5 left-5">
            <span class="block text-[1em] leading-[1.5em] box-border">{{ $singlenews->category->name }}</span>
            <h2 class="text-[2em] block leading-[1.17em] font-[600] mt-0">{{ strtoupper($singlenews->title) }}</h2>
            <span class="mt-[5px] text-[0.78em] leading-[1.67em]">{{ $singlenews->created_at->diffForHumans() }}</span>
        </div>
    </a>
    {{-- End of news --}}
</div>
{{-- End of jumbo card --}}

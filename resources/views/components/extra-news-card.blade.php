 @props(['singlenews'])
 {{-- Extra news cards --}}
 <div class="relative overflow-hidden">
     <a href="/news/{{ $singlenews->slug }}" class="group">
         <div
             class="transition ease-in-out bg-gray-200 delay-250 group-hover:-translate-y-1 group-hover:scale-110 duration-[1500ms]">
             <img src="{{ $singlenews->thumbnail }}">
         </div>
         <div class="absolute w-full top-0 bottom-0 z-10 box-border"
             style="background:linear-gradient(to bottom,transparent 0%,rgba(0,0,0,.5) 80%,#000 100%);">
         </div>
         <div class="absolute bottom-3 left-2 z-10">
             <span class="small">{{ $singlenews->category->name }}</span>
             <h2 class="text-2xl font-bold">{{ strtoupper($singlenews->title) }}</h2>
             <span class="">{{ $singlenews->created_at->diffForHumans() }}</span>
         </div>
     </a>
 </div>
 {{-- End of extra news --}}

 @props(['singlenews'])
 {{-- Extra news cards --}}
 <div class="relative bg-blend-darken">
     <a href="/news/{{ $singlenews->slug }}">
         <img class="reponsive-placeholder" src="{{ $singlenews->thumbnail }}">
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
 {{-- End of extra news --}}

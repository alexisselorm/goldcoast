 @props(['singlenews'])
 {{-- Extra news cards --}}
 <div class="relative bg-blend-darken">
     <a href="/news/2022/august/ipswich-town-u21-and-u18-fixtures/" class="news-grid-article hasImage">
         <img class="reponsive-placeholder"
             src="https://images.unsplash.com/photo-1505748641491-f7ee2fd6fb4d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGZvb3RiYWxsZXJ8ZW58MHx8MHx8&auto=format">
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

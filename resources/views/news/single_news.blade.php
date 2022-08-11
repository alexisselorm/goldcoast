<x-guest-layout>

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-start text-[1.2em]">
            <div class="grid gap-2 p-4 md:grid-cols-6 md:grid-rows-1">
                <div class="p-4 md:col-start-2 md:col-span-4">
                    {!! $single_news->body !!}
                </div>
                <div class="p-4 md:col-start-2 md:col-span-4">
                    <div id="disqus_thread"></div>

                    <script>
                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                        /*
                        var disqus_config = function() {
                            this.page.url =
                            {{ env('APP_URL') . '/news/' . $single_news->slug }}
                            // Replace PAGE_URL with your page's canonical URL variable
                            this.page.identifier =
                            PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                            var d = document,
                                s = d.createElement('script');
                            s.src = 'https://goldcoastfc-1.disqus.com/embed.js';
                            s.setAttribute('data-timestamp', +new Date());
                            (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                            powered by
                            Disqus.</a></noscript>
                    <hr />

                </div>
            </div>
        </div>
    </div>



    {{-- End of replies --}}
</x-guest-layout>

<x-guest-layout>

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="dark:text-white text-start">
            <div class="grid gap-2 p-4 md:grid-cols-4 md:grid-rows-3">
                <div class="p-4 md:col-span-3">
                    {!! $single_news->body !!}
                </div>
                <div class="p-4 md:col-span-3">
                    <div id="disqus_thread"></div>
                    <script>
                        /**
                         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
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
                    {{-- Reply section --}}

                    {{-- View Comment --}}
                    {{-- <h4>Display Comments</h4>
                    @include('partials._comment_replies', [
                        'comments' => $single_news->comments,
                        'news_id' => $single_news->id,
                    ]) --}}

                    {{-- Add Comments --}}
                    <hr />
                    {{-- <h4>Add comment</h4>
                    <form method="post" action="{{ route('comment.add') }}">
                        @csrf
                        <div class="form-group">
                            <x-input type="text" name="comment_body" class="form-control" />
                            <x-input type="hidden" name="news_id" value={{ $single_news->id }} />

                        </div>

                        <div class="form-group">
                            <x-button type="submit" class="btn btn-warning" value="Add Comment">Comment</x-button>
                        </div>

                    </form> --}}
                </div>
            </div>
        </div>
    </div>



    {{-- End of replies --}}
</x-guest-layout>

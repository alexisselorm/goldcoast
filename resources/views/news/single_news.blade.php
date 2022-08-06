<x-guest-layout>

    <div class="mx-auto bg-gray-800 max-w-7xl sm:px-6 lg:px-8">
        <div class="text-white text-start">
            <div class="grid gap-2 p-4 md:grid-cols-4 md:grid-rows-3">
                <div class="p-4 md:col-span-3">
                    {!! $single_news->body !!}
                </div>
                    <div class="p-4 md:col-span-3">
        {{-- Reply section --}}

        {{-- View Comment --}}
        <h4>Display Comments</h4>
        @include('partials._comment_replies', [
            'comments' => $single_news->comments,
            'news_id' => $single_news->id,
        ])

        {{-- Add Comments --}}
        <hr />

        <h4>Add comment</h4>
        <form method="post" action="{{ route('comment.add') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="comment_body" class="form-control" />
                <input type="hidden" name="news_id" value={{ $single_news->id }} />
                {{-- {{dd($single_news->id)}} --}}
            </div>

            <div class="form-group">
                <x-button type="submit" class="btn btn-warning" value="Add Comment" >Comment</x-button>
            </div>

        </form>
    </div>
            </div>
        </div>
    </div>
    
            
           
    {{-- End of replies --}}
</x-guest-layout>

<x-guest-layout>


    {!! $single_news->body !!}


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
            <input type="submit" class="btn btn-warning" value="Add Comment" />
        </div>
    </form>
    {{-- End of replies --}}
</x-guest-layout>

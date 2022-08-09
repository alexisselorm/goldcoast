@foreach ($comments as $comment)
    <div class="display-comment">
        <strong>{{ $comment->user->name }}</strong>
        <p>{{ $comment->body }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('reply') }}">
            @csrf
            <div class="form-group">
                <x-input type="text" name="comment_body" class="form-control" />
                <x-input type="hidden" name="news_id" value="{{ $single_news->id }}" />
                <x-input type="hidden" name="comment_id" value="{{ $comment->id }}" />
            </div>
            <div class="form-group">
                <x-button type="submit" class="btn btn-warning" value="Reply">Reply</x-button>
            </div>
        </form>
        @include('partials._comment_replies', ['comments' => $comment->replies])
    </div>
@endforeach


<!-- Comment 1 end -->

{{-- End --}}

{{-- Style --}}
<style>
    .display-comment .display-comment {
        margin-left: 40px;
    }
</style>

{{-- The JS --}}
<script>
    document.addEventListener(
        "click",
        function(event) {
            var target = event.target;
            var replyForm;
            if (target.matches("[data-toggle='reply-form']")) {
                replyForm = document.getElementById(target.getAttribute("data-target"));
                replyForm.classList.toggle("d-none");
            }
        },
        false
    );
</script>

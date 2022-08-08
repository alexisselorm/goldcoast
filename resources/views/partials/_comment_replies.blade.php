{{-- @foreach ($comments as $comment)
<div class="display-comment">
    <strong>{{ $comment->user->name }}</strong>
    <p>{{ $comment->body }}</p>
    <a href="" id="reply"></a>
    <form method="post" action="{{ route('reply') }}">
        @csrf
        <div class="form-group">
            <input type="text" name="comment_body" class="form-control" />
            <input type="hidden" name="news_id" value="{{ $single_news->id }}" />
            <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-warning" value="Reply" />
        </div>
    </form>
    @include('partials._comment_replies', ['comments' => $comment->replies])
</div>
@endforeach --}}

{{-- Comments --}}
<!-- Comment 1 start -->

<details open class="relative m-5 auto" id="comment-1">
    <a href="#comment-1" class="comment-border-link">
        <span class="sr-only">Jump to comment-1</span>
    </a>
    <summary>
        <div class="flex text-sm items-center h-12">
            <div class="comment-voting display-none">

            </div>
            <div class="ml-2.5 text-gray-600 font-semibold">
                <p class="text-gray-600 font-bold">someguy14</p>
                <p class="m-0">
                    4 days ago
                </p>
            </div>
        </div>
    </summary>

    <div class="py-5 pl-7 dark:text-white text-black">
        <p>
            This is really great! I fully agree with what you wrote, and this is sure to help me out in the future.
            Thank you for posting this.
        </p>
        <x-button data-toggle="reply-form" data-target="comment-1-reply-form">Reply</x-button>

        <!-- Reply form start -->
        <form method="POST" action="{{ route('reply') }}" class="reply-form d-none" id="comment-1-reply-form">
            @csrf
            <textarea placeholder="Reply to comment" rows="2"></textarea>
            <x-button type="submit">Submit</x-button>
            <x-button type="x-button" data-toggle="reply-form" data-target="comment-1-reply-form">Cancel</x-button>
        </form>
        <!-- Reply form end -->
    </div>

    <div class="ml-5">
        <!-- Comment 2 start -->
        <details open class="relative m-5 auto" id="comment-2">
            <a href="#comment-2" class="comment-border-link">
                <span class="sr-only">Jump to comment-2</span>
            </a>
            <summary>
                <div class="flex text-sm items-center h-12">

                    <div class="ml-2.5 text-gray-600 font-semibold">
                        <p class="text-gray-600 font-bold">randomperson81</p>
                        <p class="m-0">
                            3 days ago
                        </p>
                    </div>
                </div>
            </summary>

            <div class="py-5 pl-7 dark:text-white text-black">
                <p>
                    Took the words right out of my mouth!
                </p>
                <x-button data-toggle="reply-form" data-target="comment-2-reply-form">Reply</x-button>

                <!-- Reply form start -->
                <form method="POST" action="{{ route('reply') }}" class="reply-form d-none" id="comment-2-reply-form">
                    @csrf
                    <textarea placeholder="Reply to comment" rows="4"></textarea>
                    <x-button type="submit">Submit</x-button>
                    <x-button data-toggle="reply-form" data-target="comment-2-reply-form">Cancel</x-button>
                </form>
                <!-- Reply form end -->
            </div>
        </details>
        <!-- Comment 2 end -->

        <a href="#load-more" class="text-black">Load more replies</a>
    </div>
</details>
<!-- Comment 1 end -->

{{-- End --}}

{{-- Style --}}
<style>
    .sr-only {
        position: absolute;
        left: -10000px;
        top: auto;
        width: 1px;
        height: 1px;
        overflow: hidden;
    }



    .replies {
        margin-left: 20px;
    }

    /* Adjustments for the comment border links */

    .comment-border-link {
        display: block;
        position: absolute;
        top: 50px;
        left: 0;
        width: 12px;
        height: calc(100% - 50px);
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        background-color: rgba(0, 0, 0, 0.1);
        background-clip: padding-box;
    }

    /* Adjustments for toggleable comments */

    details.comment summary {
        position: relative;
        list-style: none;
        cursor: pointer;
    }

    details.comment summary::-webkit-details-marker {
        display: none;
    }

    details.comment:not([open]) .comment-heading {
        border-bottom: 1px solid rgba(0, 0, 0, 0.2);
    }

    .comment-heading::after {
        display: inline-block;
        position: absolute;
        right: 5px;
        align-self: center;
        font-size: 12px;
        color: rgba(0, 0, 0, 0.55);
    }


    /* Adjustment for Internet Explorer */

    @media screen and (-ms-high-contrast: active),
    (-ms-high-contrast: none) {

        /* Resets cursor, and removes prompt text on Internet Explorer */
        .comment-heading {
            cursor: default;
        }

        details.comment[open] .comment-heading::after,
        details.comment:not([open]) .comment-heading::after {
            content: " ";
        }
    }

    /* Styling the reply to comment form */

    .reply-form textarea {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        font-size: 16px;
        width: 100%;
        max-width: 100%;
        margin-top: 15px;

    }

    .d-none {
        display: none;
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

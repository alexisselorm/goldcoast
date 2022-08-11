<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\News;

class CommentController extends Controller
{
    public function store(Comment $comment)
    {
        // dd(request()->get('news_id'));
        $comment->body = request()->get('comment_body');
        $comment->user()->associate(request()->user());
        $news = News::find(request()->get('news_id'));
        $news->comments()->save($comment);

        return back();
    }

    public function reply(Comment $reply)
    {
        $reply = new Comment();
        $reply->body = request()->get('comment_body');
        $reply->user()->associate(request()->user());
        $reply->parent_id = request()->get('comment_id');
        $news = News::find(request()->get('news_id'));

        $news->comments()->save($reply);

        return back();
    }
}

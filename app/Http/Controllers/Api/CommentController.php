<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Laravelista\Comments\Comment;
use Laravelista\Comments\Commentable;

class CommentController extends Controller
{
    use Commentable;

    public function showComment(Post $post): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $post->comments;
    }

    public function storeComment(Request $request, Post $post)
    {
        $comment = new Comment;
        $comment->commenter()->associate(auth()->user());
        $comment->commentable()->associate($post);
        $comment->comment = $request->body;
        $comment->guest_name = $request->name;
        $comment->approved = true;
        $comment->save();

        return $comment;
    }
}

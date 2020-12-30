<?php

namespace App\Http\Controllers;

class CommentController extends Controller
{ 
    public function showcomments($postId, $commentId)
    {
        return 'Comment: ' . $commentId . ' from post: ' . $postId;
    }

    public function showpost($postId)
    {
        return 'Post: ' . $postId;
    }

}
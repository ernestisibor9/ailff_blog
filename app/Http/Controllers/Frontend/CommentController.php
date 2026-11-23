<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function storeComment(Request $request)
    {

        $request->validate([
            // 'blogcat_id' => 'required|integer|exists:categories,id',
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);

        Comment::insert([
            'post_id' => $request->post_id,
            'name' => $request->name,
            'email' => $request->email,
            'comment' => $request->comment,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Your comment has been submitted and is awaiting approval',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    //
    // Fetch approved comments for a post
    public function showComments($postId)
    {
        $post = Post::findOrFail($postId);

        // Get only approved comments
        $comments = Comment::where('post_id', $postId)
                            ->where('approved', 1) // Only fetch approved comments
                            ->latest()
                            ->get();

        return response()->json($comments);
    }
}

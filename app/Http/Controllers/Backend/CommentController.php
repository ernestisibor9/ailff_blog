<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
        /**
     * Display comments for the admin panel (pending & approved).
     */
    public function Index()
    {
        $comments = Comment::latest()->get();
        return view('admin.backend.comment.comment_all', compact('comments'));
    }

        /**
     * Approve a comment.
     */
    public function approve($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->approved = true;
        $comment->save();

        $notification = array(
            'message' => 'Comment approved successfully',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    /**
     * Delete a comment.
     */
    public function delete($id)
    {
        Comment::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Comment deleted successfully',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }
}

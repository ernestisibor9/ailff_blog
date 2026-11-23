<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MultiPhoto;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showIndexPost()
    {
        $posts = Post::latest()->limit(2)->get();
        return view('frontend.home.blog', compact('posts'));
    }
    //
    public function PostDetails($id, $slug)
    {
        $multiImage = MultiPhoto::where('post_id', $id)->get();
        // Retrieve post details by ID and Slug to ensure correct match
        $postDetails = Post::where('id', $id)
            ->where('post_slug', $slug)
            ->first();

        // Check if post exists
        if (!$postDetails) {
            abort(404); // Return 404 page if not found
        }

        // Retrieve the post's category ID
        $category_id = $postDetails->cat_id;

        // Fetch related posts (exclude current post)
        $recommendedPosts = Post::where('id', '!=', $id) // Exclude the current post
            ->latest()
            ->limit(2) // Get 4 recommended posts
            ->get();

        $bcategory = Category::latest()->get();
        $post = Post::latest()->limit(4)->get();

        return view('frontend.post.post_details', compact('bcategory', 'postDetails', 'recommendedPosts', 'multiImage', 'post'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function Index()
    {
        $posts = Post::latest()->limit(4)->get();
        return view('frontend.index', compact('posts'));
    }
    // Advert
    public function Advert()
    {
        return view('frontend.advert.ads');
    }
    // About
    public function About()
    {
        return view('frontend.about');
    }
    // Gallery
    public function Gallery()
    {
        return view('frontend.gallery');
    }
    // Contact
    public function Contact()
    {
        return view('frontend.contact');
    }
    // Sponsors
    public function Sponsors(){
        return view('frontend.sponsors');
    }
    // Blog
    public function Blog(){
        return view('frontend.blog');
    }
}

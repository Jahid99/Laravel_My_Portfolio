<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\WorkCategory;

use App\Works;

use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $work_categories = WorkCategory::all();
        $works = Works::all();
        $posts = Post::orderBy('created_at', 'desc')->take(5)->get();
        return view('welcome')->withWorkCategories($work_categories)->withWorks($works)->withPosts($posts);
    }
    public function hm()
    {
       return view('home');
    }
}

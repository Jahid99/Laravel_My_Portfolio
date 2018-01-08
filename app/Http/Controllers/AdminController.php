<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

class AdminController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
    	 $posts = Post::orderBy('id', 'desc')->paginate(10);
         return view('admin.index')->withPosts($posts);
    }
}

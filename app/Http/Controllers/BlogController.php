<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

use Illuminate\Support\Facades\Input;

class BlogController extends Controller
{
    public function getIndex() {
        $posts = Post::orderBy('id', 'desc')->paginate(4);
        $categories = Category::all();
        return view('blog.index')->withPosts($posts)->withCategories($categories);

    }

    public function singleCategoryPost($slug) {

        $category = Category::where('slug', '=', $slug)->first();
        $posts = $category->posts()->paginate(4);
        $categories = Category::all();
        return view('blog.index')->withPosts($posts)->withCategories($categories);

    }


	public function getSingle($slug) {
    	$post = Post::where('slug', '=', $slug)->first();
        $categories = Category::all();
    	return view('blog.single')->withPost($post)->withCategories($categories);
    }
	
}

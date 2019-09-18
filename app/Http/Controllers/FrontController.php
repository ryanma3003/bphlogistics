<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog_post;
use App\Blog_categories;
use App\Blog_post_tag;
use App\Blog_tag;
use App\Galeri;
use App\Filter_galeri;
use Carbon\Carbon;
use Illuminate\Support\Str;

class FrontController extends Controller
{
    public function index ()
    {
    	$blog_post_list = Blog_post::where('created_at', '<=', Carbon::now())
    	->orderBy('created_at', 'desc')
    	->paginate(3);
    	$galeri_list = Galeri::all();
    	return view('front.home.body', compact('blog_post_list', 'galeri_list'));
    }

    public function blog ()
    {
    	$blog_post_list = Blog_post::where('created_at', '<=', Carbon::now())
    	->orderBy('created_at', 'desc')
    	->paginate(config('blog.post_per_page'));
    	return view('front.blog.blog', compact('blog_post_list', 'blog_categories_list', 'blog_tag_list'));
    }

    public function showPost ($slug)
    {
    	$blog_post = Blog_post::where('slug', $slug)->first();
    	$jumlah_blog_post = Blog_post::where('created_at', '<=', Carbon::now())
        ->orderBy('created_at', 'desc')
        ->paginate(3);
    	if(!$blog_post)
    	{
    		return redirect('post/')->withErrors('Requested page not found');
    	}
    	return view('front.blog.post', compact('blog_post_list', 'blog_categories_list', 'blog_tag_list', 'jumlah_blog_post'))->with('blog_post', $blog_post);
    }

}

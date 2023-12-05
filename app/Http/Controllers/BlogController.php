<?php

namespace App\Http\Controllers;

use App\Models\NewsPost;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $perPages = 4;
    public function home(): View
    {

        return view('blog.home', [
            'posts' => NewsPost::publish()->latest()->paginate($this->perPages)
        ]);
    }
    public function showPostDetail($slug)
    {
        $post = NewsPost::with(['categories'])->where('slug', $slug)->first();
        if (!$post) {
            return redirect()->route('blog.home');
        }
        $postsByCategories = NewsPost::publish()->whereHas('categories', function ($query) use ($post, $slug) {
            return $query->where('slug', $post->categories->first()->slug);
        })->where('slug', 'NOT LIKE', $slug)->latest()->limit(4)->get();
        return view('blog.post-detail', [
            'post' => $post,
            'postsByCategories' => $postsByCategories
        ]);
    }
}

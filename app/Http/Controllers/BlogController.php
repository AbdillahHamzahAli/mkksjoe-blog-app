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
}

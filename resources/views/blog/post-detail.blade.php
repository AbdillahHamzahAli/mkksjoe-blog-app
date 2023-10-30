@extends('layouts.blog')

@section('title')
    {{ $post->title }}
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('blog_detail', $post->title) }}
@endsection

@section('content')
    <div class="p-4 w-full">
        <header class="font-bold">
            <h1 class=" text-2xl my-2">{{ $post->title }}</h1>
            <span class="text-xs text-gray-400">
                <i class="fa-regular fa-clock"></i>
                {{ \Carbon\Carbon::parse($post->updated_at)->format('d M Y') }}
            </span>
        </header>

        <div class="mt-4 prose max-w-none lg:prose-xl articlebody">
            {!! $post->content !!}
        </div>

    </div>
@endsection

@section('right-side')
    <div class="min-w-full  bg-white border-t-2 border-primary mb-4 p-4 shadow-md">
        <h4 class="text-2xl font-bold text-slate-700">Categories Terkait</h4>
        <ul class="list-disc px-4">
            @foreach ($post->categories as $category)
                <li class="hover:underline hover:text-primary duration-300"> <a
                        href="{{ route('blog.posts.category', ['slug' => $category->slug]) }}">
                        {{ $category->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="min-w-full  bg-white border-t-2 border-primary mb-4 p-4 shadow-md">
        <h4 class="text-2xl font-bold text-slate-700">Post Terkait</h4>
        <ul class="list-disc px-4">
            @foreach ($posts as $post)
                <li class="hover:underline hover:text-primary duration-300"> <a
                        href="{{ route('blog.post.detail', ['slug' => $post->slug]) }}">
                        {{ $post->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

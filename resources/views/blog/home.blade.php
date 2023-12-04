@extends('layouts.blog')

@section('title')
    {{ __('blog.title.home') }}
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('blog_home') }}
@endsection

@section('newsmatic')
    <x-newsmatic />
@endsection

@section('content')
    <div class="p-4">
        @foreach ($posts as $post)
            <article class="w-full flex flex-col md:flex-row justify-around mb-4">
                <div class=" grow-0 shrink basis-full md:basis-1/4 relative flex justify-center">
                    <!-- thumbnail:start -->
                    @if (file_exists(public_path($post->thumbnail)))
                        <img src="{{ asset($post->thumbnail) }}" alt="{{ $post->title }}"
                            class="object-cover w-full md:w-52 h-28 md:h-40">
                    @else
                        <img src="http://placehold.it/700x400" alt="{{ $post->title }}"
                            class="object-cover w-full md:w-52 md:h-40 h-28">
                    @endif
                    <!-- thumbnail:end -->
                    <h4 class="bg-mygreen absolute top-0 left-0 p-1 text-white font-bold "> BLOG </h4>
                </div>
                <div class="grow-0 shrink basis-full md:basis-3/4 md:pl-4 pt-4 grid content-between">
                    <div class="mb-4">
                        <h1 class="font-bold text-xl">{{ $post->title }}</h1>
                        <p>
                            {{ Str::limit($post->description, 180, '...') }}
                        </p>
                    </div>

                    <a class="text-xs font-bold hover:text-mygreen group" href="">Read More <i
                            class="fa-solid fa-arrow-right group-hover:translate-x-2 duration-300"></i> </a>
                </div>
            </article>
        @endforeach
        @if ($posts->hasPages())
            <div class="container pb-10">
                <div class="w-full flex justify-end px-4">
                    {{ $posts->links('vendor.pagination.simple-tailwind') }}
                </div>
            </div>
        @endif

    </div>
@endsection

@extends('layouts.blog')

@section('title')
    {{ $post->title }}
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('blog_detail', $post->title) }}
@endsection

@section('right-side')
    <x-side-category :category="$post->categories" />
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

        <div class="mt-4 prose md:prose-lg lg:prose-xl articlebody">
            {!! $post->content !!}
        </div>



    </div>
@endsection

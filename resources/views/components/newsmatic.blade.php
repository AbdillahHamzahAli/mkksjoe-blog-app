<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
    <a href="{{ route('blog.post.detail', ['slug' => $posts[0]->slug]) }}" class="group shadow-sm">
        <div class="relative w-full flex min-h-96 ">
            <img class="object-cover brightness-50 group-hover:brightness-100 group-hover:saturate-150 transition duration-300"
                src="{{ $posts[0]->thumbnail }}" alt="{{ $posts[0]->title }}">
            <div class="p-4 absolute text-white bottom-0 left-0 ">
                <h1 class="font-bold text-3xl ">{{ $posts[0]->title }}</h1>
                <p>{{ Str::limit($posts[0]->description, 180, '...') }}</p>
            </div>
        </div>
    </a>
    <div class="md:grid grid-cols-2 grid-rows-2 w-full gap-4 hidden">
        @foreach ($posts as $key => $post)
            @if ($key >= 1)
                <a href="{{ route('blog.post.detail', ['slug' => $post->slug]) }}" class="group ">
                    <div class="relative flex shadow-sm h-full">
                        {{-- Thumbnail --}}
                        @if (file_exists(public_path($post->thumbnail)))
                            <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}"
                                class="object-cover brightness-50 group-hover:brightness-100 group-hover:saturate-150 transition duration-300 min-h-full">
                        @else
                            <img src="http://placehold.it/700x400" alt="{{ $post->title }}"
                                class="object-cover brightness-50 group-hover:brightness-100 group-hover:saturate-150 transition duration-300 min-h-full">
                        @endif
                        {{-- Thumbnail --}}
                        <h1 class="absolute bottom-0 p-4 text-white text-xs font-bold">{{ $post->title }}</h1>
                    </div>
                </a>
            @endif
        @endforeach
    </div>
</div>

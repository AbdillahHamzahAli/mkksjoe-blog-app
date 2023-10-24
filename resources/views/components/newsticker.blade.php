<div class="bg-slate-100 pt-4 w-full">
    <div class="container">
        <div class="  bg-white shadow-md">
            <div class="p-2 h-full flex items-center">
                <div class="py-6 bg-[#1b8415] px-4 text-center">
                    <i class="fa-solid fa-bolt text-white hidden md:inline"></i>
                    <h1 class="text-white font-bold text-xl">HEADLINES</h1>
                </div>
                <div class="bg-slate-50 grow md:my-2 overflow-hidden">
                    <ul class="p-2 md:p-4 flex flex-row items-center whitespace-nowrap news-ticker">
                        @foreach ($posts as $post)
                            <li class="mx-2">
                                <a href="{{ route('blog.post.detail', ['slug' => $post->slug]) }}">
                                    <h4 class="font-medium">{{ $post->title }}</h4>
                                    <p class="text-slate-300">{{ date_format($post->updated_at, 'Y/m/d') }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="py-6 bg-[#1b8415] px-4 text-center hidden md:inline">
                    <i class="fa-solid fa-bolt text-white hidden md:inline"></i>
                    <h1 class="text-white font-bold text-xl">HEADLINES</h1>
                </div>
            </div>
        </div>
    </div>
</div>

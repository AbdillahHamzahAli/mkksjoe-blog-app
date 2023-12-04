<div class="min-w-full  bg-white border-t-2 border-mygreen mb-4 p-4 shadow-md">
    <h4 class="text-2xl font-bold text-slate-700">Categories</h4>
    <ul class="list-disc px-4">
        @foreach ($categories as $category)
            <li class="hover:underline hover:text-mygreen duration-300"> <a href="">
                    {{ $category->title }}
                </a>
            </li>
        @endforeach
    </ul>
</div>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @stack('css-internal')
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- icons -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen flex flex-col">
    @include('layouts._blog.navbar')
    <x-newsticker />
    <div class="bg-mygray ">
        <div class="container">
            @yield('breadcrumbs')
            @yield('newsmatic')
        </div>
    </div>


    <section class="w-full bg-mygray pb-4">
        <div class="container">
            <div class="flex flex-col lg:flex-row px-0 w-full">
                <div
                    class=" grow-0 mb-4 shrink basis-full lg:basis-2/3 bg-white min-h-screen border-t-2 border-mygreen shadow-md">
                    @yield('content')
                </div>
                <div class="grow-0 shrink basis-full lg:basis-1/3 lg:ml-4">
                    <ul class="flex flex-col w-full">
                        @yield('right-side')
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class=" flex-grow">
    </div> --}}
    @include('layouts._blog.footer')
    <!-- jquery -->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.6.0.min.js') }}"></script>

    @stack('javascript-internal')

</body>

</html>

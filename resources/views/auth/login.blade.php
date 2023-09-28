@extends('layouts.auth')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow rounded-2xl md:flex-row md:space-y-0">
            <!-- left side -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="flex flex-col justify-center p-8 md:p-14">
                    <span class="mb-3 text-4xl font-bold">{{ __('Login') }}</span>
                    <span class="font-light text-gray-400 mb-8">
                        Welcome back! Please enter your details
                    </span>
                    <div class="py-4">
                        <span class="mb-2 text-md">{{ __('Email Address') }}</span>
                        <input type="email"
                            class=" w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
                            name="email" id="email" value="{{ old('email') }}" required />
                    </div>
                    <div class="py-4">
                        <span class="mb-2 text-md">{{ __('Password') }}</span>
                        <input type="password" name="password" id="pass" required
                            class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" />
                    </div>
                    <button type="submit"
                        class="w-full bg-[#1c8415] text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-[#1c8415] hover:border hover:border-[#1c8415]">
                        Login
                    </button>
                    {{-- <div class="text-center text-gray-400">
                        Dont'have an account?
                        <span class="font-bold text-black">Sign up for free</span>
                    </div> --}}
                </div>
            </form>
            <!-- {/* right side */} -->

            <div class="relative">
                <img src="{{ asset('assets/img/ringin-contong.jpeg') }}" alt="img"
                    class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover" />
                <!-- text on image  -->
                <div
                    class="absolute hidden bottom-10 right-6 p-6 bg-white bg-opacity-30 backdrop-blur-sm rounded drop-shadow-lg md:block">
                    <span class="text-white text-xl">MKKS SMA Swasta Kabupaten Jombang
                    </span>
                </div>
            </div>
        </div>
    </div>
@endsection

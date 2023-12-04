<div>
    <img class="w-full"
        src="https://mkks-smasjo.my.id/wp-content/uploads/2023/08/cropped-Blue-and-White-Simple-Business-Email-Header.png"
        alt="image">
    <header>
        <div class="w-full bg-mygreen">
            <div class="container">
                <div class="flex py-1 justify-center md:justify-between items-center">
                    <div class=" hidden p-2 md:flex text-white font-medium text-sm ">
                        <span id="jam-tanggal" class="font-medium"></span>
                    </div>
                    <div class="p-2 text-white font-medium text-sm">
                        <span>MKKS</span>
                        <span class="ml-2">SMANJO</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full bg-white">
            <div class="container">
                <div class="flex flex-col md:flex-row  md:py-8 items-center border-b-[1px] border-[#1b8415]">
                    <div class="grow-0 shrink basis-1/4 p-2 flex text-gray-700 font-medium">
                        <a href="" class="px-2">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="" class="px-2">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                    <div class="grow-0 text-center shrink basis-1/2  p-2 md:flex justify-center text-sky-600 ">
                        <span>Selamat datang di website MKKS SMA Swasta Kabupaten Jombang
                        </span>
                    </div>
                    <div class="grow-0 shrink basis-1/4  justify-end p-2 md:flex  font-medium text-gray-700">
                        <a href="" class="hover:text-mygreen">
                            <span><i class="bi bi-newspaper"></i> News Letter</span>
                        </a>
                        <a href="" class="hover:text-mygreen">
                            <span class="ml-2"> <i class="bi bi-lightning-fill"></i> Random News</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav id="navbar-container" class="z-10 w-full bg-white py-2 md:py-0">
        <div class="w-full container flex flex-col">
            <div class="flex px-4 items-center">
                <div class="grow-0 shrink basis-1/4 cursor-pointer" onclick="navbarToogle()">
                    <i id="open" class="bi bi-list  text-2xl md:hidden"></i>
                    <i id="close" class="hidden bi bi-x-lg text-2xl md:hidden"></i>
                    <span class="text-mygreen ">MENU</span>
                </div>
                <div class="grow-0 shrink basis-1/2 text-sm">
                    <ul class="hidden bg-white justify-center px-2 md:flex relative cursor-pointer">
                        <li class="group flex flex-col">
                            <p class="flex md:inline-flex py-2 px-4 items-center hover:text-mygreen font-bold">
                                <span>{{ trans('blog.menu.profile') }}
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-4 h-4" height="1em"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                                </svg>
                            </p>
                            <ul id="lang-dropdown"
                                class="z-10 group-hover:inline-block hidden child transition duration-300 md:absolute top-full px-2 bg-white md:shadow-lg md:rounded-b">
                                <li class="border-b-2 border-gray-400">
                                    <a href=""
                                        class="flex md:inline-flex p-3 items-center hover:text-mygreen  font-bold">STRUKTUR
                                        PENGURUS</a>
                                </li>
                                <li class="border-b-2 border-gray-400">
                                    <a href=""
                                        class="flex md:inline-flex p-3 items-center hover:text-mygreen  font-bold">TUGAS
                                        POKOK & FUNGSI</a>
                                </li>
                                <li>
                                    <a href=""
                                        class="flex md:inline-flex p-3 items-center hover:text-mygreen  font-bold">DATA
                                        ANGGOTA</a>
                                </li>
                            </ul>
                        </li>
                        <li class="group flex flex-col">
                            <p class="flex md:inline-flex py-2 px-4 items-center hover:text-mygreen  font-bold">
                                <span>INFORMASI
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-4 h-4" height="1em"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                                </svg>

                            </p>
                            <ul id="lang-dropdown"
                                class="z-10 group-hover:inline-block hidden child transition duration-300 md:absolute top-full px-2 bg-white md:shadow-lg md:rounded-b">
                                <li class="border-b-2 border-gray-400">
                                    <a href="/"
                                        class="flex md:inline-flex p-3 items-center hover:text-mygreen  font-bold">BERITA</a>
                                </li>
                                <li class="border-b-2 border-gray-400">
                                    <a href=""
                                        class="flex md:inline-flex p-3 items-center hover:text-mygreen  font-bold">PENGUMUMAN</a>
                                </li>
                                <li>
                                    <a href=""
                                        class="flex md:inline-flex p-3 items-center hover:text-mygreen  font-bold">AGENDA</a>
                                </li>
                            </ul>
                        </li>
                        <li class="group flex flex-col">
                            <p class="flex md:inline-flex py-2 px-4 items-center hover:text-mygreen  font-bold">
                                <span>GALERI
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-4 h-4" height="1em"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                                </svg>

                            </p>
                            <ul id="lang-dropdown"
                                class="z-10 group-hover:inline-block hidden child transition duration-300 md:absolute top-full px-2 bg-white md:shadow-lg md:rounded-b">
                                <li class="border-b-2 border-gray-400">
                                    <a href=""
                                        class="flex md:inline-flex p-3 items-center hover:text-mygreen  font-bold">FOTO</a>
                                </li>
                                <li>
                                    <a href=""
                                        class="flex md:inline-flex p-3 items-center hover:text-mygreen  font-bold">VIDEO</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=""
                                class="flex md:inline-flex py-2 px-4 items-center hover:text-mygreen  font-bold">DOWNLOAD</a>
                        </li>
                    </ul>
                </div>
                <div class="grow-0 shrink basis-1/4 flex justify-end relative">
                    <i id="search-icon" onclick="searchToggle()" class="bi bi-search text-2xl cursor-pointer"></i>
                    <div id="search-form"
                        class="hidden absolute top-10 right-0 bg-white px-2 py-3 z-50 border-t-4 border-mygreen ">
                        <form action="" method="GET" class=" flex items-center justify-between gap-4">
                            <input class="p-2 bg-white border-2 rounded-s-sm focus:outline-none " name="keyword"
                                value="{{ request()->get('keyword') }}" type="search" id="search"
                                placeholder="Search ...">
                            <button type="submit" class="rounded text-white p-2 bg-mygreen">SEARCH</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="navbar z-10 flex hidden md:hidden">
                <ul class="bg-white w-full justify-center px-2 md:flex relative ">
                    <li class="group flex flex-col">
                        <p class="flex md:inline-flex p-4 items-center hover:text-mygreen font-bold">
                            <span>{{ __('blog.menu.profile') }}
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-4 h-4" height="1em"
                                viewBox="0 0 512 512">
                                <path
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>
                        </p>
                        <ul id="lang-dropdown"
                            class="group-hover:inline-block hidden child transition duration-300 md:absolute top-full px-2 bg-white md:shadow-lg md:rounded-b">
                            <li class="border-b-2 border-gray-400">
                                <a href=""
                                    class="flex md:inline-flex p-3 items-center hover:text-[#1b8415]  font-bold">STRUKTUR
                                    PENGURUS</a>
                            </li>
                            <li class="border-b-2 border-gray-400">
                                <a href=""
                                    class="flex md:inline-flex p-3 items-center hover:text-[#1b8415]  font-bold">TUGAS
                                    POKOK & FUNGSI</a>
                            </li>
                            <li>
                                <a href=""
                                    class="flex md:inline-flex p-3 items-center hover:text-[#1b8415]  font-bold">DATA
                                    ANGGOTA</a>
                            </li>
                        </ul>
                    </li>
                    <li class="group flex flex-col">
                        <p class="flex md:inline-flex p-4 items-center hover:text-[#1b8415]  font-bold">
                            <span>INFORMASI
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-4 h-4" height="1em"
                                viewBox="0 0 512 512">
                                <path
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>

                        </p>
                        <ul id="lang-dropdown"
                            class="group-hover:inline-block hidden child transition duration-300 md:absolute top-full px-2 bg-white md:shadow-lg md:rounded-b">
                            <li class="border-b-2 border-gray-400">
                                <a href="/"
                                    class="flex md:inline-flex p-3 items-center hover:text-[#1b8415]  font-bold">BERITA</a>
                            </li>
                            <li class="border-b-2 border-gray-400">
                                <a href=""
                                    class="flex md:inline-flex p-3 items-center hover:text-[#1b8415]  font-bold">PENGUMUMAN</a>
                            </li>
                            <li>
                                <a href=""
                                    class="flex md:inline-flex p-3 items-center hover:text-[#1b8415]  font-bold">AGENDA</a>
                            </li>
                        </ul>
                    </li>
                    <li class="group flex flex-col">
                        <p class="flex md:inline-flex p-4 items-center hover:text-[#1b8415]  font-bold">
                            <span>GALERI
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 w-4 h-4" height="1em"
                                viewBox="0 0 512 512">
                                <path
                                    d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                            </svg>

                        </p>
                        <ul id="lang-dropdown"
                            class="group-hover:inline-block hidden child transition duration-300 md:absolute top-full px-2 bg-white md:shadow-lg md:rounded-b">
                            <li class="border-b-2 border-gray-400">
                                <a href=""
                                    class="flex md:inline-flex p-3 items-center hover:text-[#1b8415]  font-bold">FOTO</a>
                            </li>
                            <li>
                                <a href=""
                                    class="flex md:inline-flex p-3 items-center hover:text-[#1b8415]  font-bold">VIDEO</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=""
                            class="flex md:inline-flex p-4 items-center hover:text-[#1b8415]  font-bold">DOWNLOAD</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
@push('javascript-internal')
    <script>
        function updateJamTanggal() {
            const now = new Date();
            const jamTanggal = now.toLocaleString('id-ID', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });
            document.getElementById('jam-tanggal').textContent = jamTanggal;
        }
        // Perbarui setiap 1 detik
        setInterval(updateJamTanggal, 1000);
        // Panggil untuk pertama kali
        updateJamTanggal();

        function navbarToogle() {
            const navbarUi = document.querySelector('.navbar');
            const icClose = document.getElementById("close");
            const icOpen = document.getElementById("open");
            navbarUi.classList.toggle("hidden");
            icClose.classList.toggle("hidden");
            icOpen.classList.toggle("hidden");
        }

        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('#navbar-container');
            if (window.scrollY > 500) {
                navbar.style.position = 'fixed';
                navbar.style.top = '0';

            } else {
                navbar.style.position = 'static';
            }
        });

        function searchToggle() {
            document.getElementById('search-form').classList.toggle('hidden');
        }
    </script>
@endpush

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <title>Portfolio</title>
    <style>
        #menu-toggle:checked+#menu {
            display: block;
        }

        #dropdown-toggle:checked+#dropdown {
            display: block;
        }
    </style>


</head>

<body class="flex flex-col min-h-screen bg-sky-100">
    <x-header />
    <main class="mx-8">
        <form class="mt-8 px-6" type="get">
            <div class="flex lg:w-1/2 md:w-3/4">
                {{-- <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your
                Email</label> --}}
                <label for="kategori"></label>
                <select id="kategori"
                    class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600">
                    <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    {{-- <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"> --}}
                    {{-- <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button"> --}}
                    <option selected class="text-left">
                        All Categories</option>
                    <option value="rpl" class="text-left">
                        Rekayasa Perangkat Lunak
                    </option>
                    <option value="sig" class="text-left">
                        Sistem Informasi Geografis
                    </option>
                    <option value="dm" class="text-left">
                        Data Mining
                    </option>
                    <option value="jaringan" class="text-left">
                        Jaringan
                    </option>
                    {{-- </ul> --}}
                    {{-- </div> --}}
                </select>
                <div class="relative w-full">
                    <input type="search" id="search-dropdown"
                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                        placeholder="Search here.." required>
                    <button type="submit"
                        class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>


        {{-- card di dalam div ni --}}
        <div class="mx-auto lg:mx-0 flex flex-wrap mb-14">

        <a href="">
                <div class="bg-white rounded-lg drop-shadow-lg w-80 pt-4 pb-2 mx-6 mt-8">
                <div class="wil_img">
                <img src="https://i.pinimg.com/564x/09/c6/a4/09c6a4a798f885e5b6b3add822e94732.jpg">
                </div>
                    <h1 class="text-center font-bold mb-4">Author : Wilda Fahera</h1>
                    <p class="mx-6 text-center">"Sistem Pendukung Keputusan Penilaian Kesehatan tanah Dengan Metode
                        Simple
                        Additive
                        Weighting"</p>
                    <div class="flex mx-12 mt-6">
                        <p class="bg-pink-200 rounded-full w-4 h-4 my-auto mr-1"></p>
                        <p class="font-bold">GIS1</p>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="bg-white rounded-lg drop-shadow-lg w-80 pt-4 pb-2 mx-6 mt-8">
                <div class="wil_img">
                <img src="https://i.pinimg.com/564x/03/50/70/0350706d4cf5af4cfcf282f13425fd72.jpg">
                </div>
                    <h1 class="text-center font-bold mb-4">Author : Wilda Fahera</h1>
                    <p class="mx-6 text-center">"Sistem Pendukung Keputusan Penilaian Kesehatan tanah Dengan Metode
                        Simple
                        Additive
                        Weighting"</p>
                    <div class="flex mx-12 mt-6">
                        <p class="bg-pink-200 rounded-full w-4 h-4 my-auto mr-1"></p>
                        <p class="font-bold">GIS2</p>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="bg-white rounded-lg drop-shadow-lg w-80 pt-4 pb-2 mx-6 mt-8">
                <div class="wil_img">
                <div class="wil_img">
                <img src="https://i.pinimg.com/564x/f6/31/5a/f6315a7a4e064927dda8f39fa412ba5c.jpg">
                </div>
                </div>
                    <h1 class="text-center font-bold mb-4">Author : Wilda Fahera</h1>
                    <p class="mx-6 text-center">"Sistem Pendukung Keputusan Penilaian Kesehatan tanah Dengan Metode
                        Simple
                        Additive
                        Weighting wfaisbies iefuiehsfiu iufhiuehf9o iweufhiuehsu"</p>
                    <div class="flex mx-12 mt-6">
                        <p class="bg-pink-200 rounded-full w-4 h-4 my-auto mr-1"></p>
                        <p class="font-bold">GIS3</p>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="bg-white rounded-lg drop-shadow-lg w-80 pt-4 pb-2 mx-6 mt-8">
                <div class="wil_img">
                <img src="https://i.pinimg.com/564x/6a/9f/78/6a9f7827ba8404c83254ab9a285a0897.jpg">
                </div>
                    <h1 class="text-center font-bold mb-4">Author : Wilda Fahera</h1>
                    <p class="mx-6 text-center">"Sistem Pendukung Keputusan Penilaian Kesehatan tanah Dengan Metode
                        Simple
                        Additive
                        Weighting"</p>
                    <div class="flex mx-12 mt-6">
                        <p class="bg-pink-200 rounded-full w-4 h-4 my-auto mr-1"></p>
                        <p class="font-bold">GIS4</p>
                    </div>
                </div>
            </a>

            <a href="">
                <div class="bg-white rounded-lg drop-shadow-lg w-80 pt-4 pb-2 mx-6 mt-8">
                <img src="https://i.pinimg.com/564x/3a/97/c6/3a97c6eafd2d0e626a40a005048eddfd.jpg">
                    <h1 class="text-center font-bold mb-4">Author : Wilda Fahera</h1>
                    <p class="mx-6 text-center">"Sistem Pendukung Keputusan Penilaian Kesehatan tanah Dengan Metode
                        Simple
                        Additive
                        Weighting"</p>
                    <div class="flex mx-12 mt-6">
                        <p class="bg-pink-200 rounded-full w-4 h-4 my-auto mr-1"></p>
                        <p class="font-bold">GIS5</p>
                    </div>
                </div>
            </a>

           
        </div>

    </main>
    <x-footer />

</body>


</html>
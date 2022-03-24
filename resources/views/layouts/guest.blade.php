<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <style>
        html{scroll-behavior:smooth}
    </style>

    <header class="w-[92%] bg-white mx-auto rounded-br-[2rem] rounded-[2rem] mt-12">
        <div class="h-24 flex justify-between items-center">
            <div class="flex m-2">
                <a href="{{ asset ('/') }}"> 
                <img src="images/61972.png" alt="HOMEPAGE" class="w-20 h-20 m-6">
                </a>
            </div>
            <div class="flex m-2">
                <div class="m-6">
                    <a href="#scrollToContact" class="rounded-full text-2xl bg-blue-500 hover:bg-blue-400 text-white font-bold text-lg py-2 px-6 border-b-4 border-blue-700 hover:border-blue-500 rounded w-46 h-24"> contact</a>
                </div>
                <div class="m-6">
                    <a href="#scrollToProjects" class="rounded-full text-2xl bg-blue-500 hover:bg-blue-400 text-white font-bold text-lg py-2 px-6 border-b-4 border-blue-700 hover:border-blue-500 rounded w-46 h-24"> projects</a>
                </div>
                <div class="m-6">
                    <a href=" {{ asset ('/login') }} " class="rounded-full text-2xl bg-blue-500 hover:bg-blue-400 text-white font-bold text-lg py-2 px-6 border-b-4 border-blue-700 hover:border-blue-500 rounded w-46 h-24">login</a>
                </div>
            </div>
        </div>
    </header>


    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>

    <footer class="w-[92%] bg-white mx-auto rounded-br-[2rem] rounded-[2rem] my-12">
        <div class="h-24">
            <div>
                <div>
                    <div class="flex justify-center align-center space-x-4">
                <a href="https://www.linkedin.com/in/david-vos-452699221/" target="_blank" class="p-[10px]">
                    <svg class="h-12 w-12 text-black"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                        <rect x="2" y="9" width="4" height="12" />
                        <circle cx="4" cy="4" r="2" />
                    </svg>
                </a>
                <div class="flex p-[10px]">
                    <a href=" {{ asset ('/') }}"> 
                        <img src="images/61972.png" alt="mijn mooie hoofd" class="w-12 h-12">
                    </a>
                </div>
                <a href="https://github.com/Wazeback" target="_blank" class="p-[10px]">
                    <svg class="h-12 w-12 text-black"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">
                        <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
                    </svg>
                </a>
            </div>
                </div>
                <div class="flex justify-center">
                    <a href="{{ asset ('/contact') }}" class="underline text-blue-600 decoration-indigo-500">contact me</a>
                </div>
            </div>
        </div>
    </footer>
</html>

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

    <header class="w-[92%] bg-white mx-auto rounded-br-[2rem] rounded-[2rem] mt-12">
        <div class="h-24 flex justify-between items-center">
            <div class="flex m-2">
                <a href=" {{ asset ('/contact') }}"> 
                <img src="images/61972.png" alt="mijn mooie hoofd" class="w-20 h-20 m-6">
                </a>
            </div>
            <div class="flex m-2">
                <div class="m-4">
                    <a href=" {{ asset ('/contact') }} " class="rounded-full text-2xl bg-blue-500 hover:bg-blue-400 text-white font-bold text-lg py-4 px-8 border-b-8 border-blue-700 hover:border-blue-500 rounded w-46 h-24"> contact</a>
                </div>
                <div class="m-4">
                    <a href=" {{ asset ('/projects') }} " class="rounded-full text-2xl bg-blue-500 hover:bg-blue-400 text-white font-bold text-lg py-4 px-8 border-b-8 border-blue-700 hover:border-blue-500 rounded w-46 h-24"> projects</a>
                </div>
                <div class="m-4">
                    <a href=" {{ asset ('/login') }} " class="rounded-full text-2xl bg-blue-500 hover:bg-blue-400 text-white font-bold text-lg py-4 px-8 border-b-8 border-blue-700 hover:border-blue-500 rounded w-46 h-24">login</a>
                </div>
            </div>
        </div>
    </header>


    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>

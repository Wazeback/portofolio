<!DOCTYPE html>
<html lang="en" class="overflow-x-scroll snap-x scrollbar-thin scrollbar-thumb-white  scrollbar-track-indigo-500">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About me</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body class="w-[100%] bg-indigo-500">
<x-guest-layout>
    <div class="flex flex-col">
        <div class="h-[100%] md:h-[100vh] justify-center items-center flex ">
            <div class="flex w-[92%] h-[92%] bg-white rounded-[4rem] flex-col md:flex-row">
                <div class="w-[80%] md:w-1/6 flex justify-center self-center md:items-center flex-col pl-6">
                    <a href="#scrollToContact" class="w-full pt-[10%] mt-[30%] text-center text-2xl bg-blue-500 hover:bg-blue-400 text-white font-bold text-lg py-4 px-8 border-b-8 border-blue-700 hover:border-blue-500 rounded mg:w-46 h-24">
                        Contact me
                    </a>
                    <div class="md:pt-24 ">
                        Als je vragen heb over iets kan je via email contact opnemen met mij door op de knop hierboven te klikken. Als je vragen of toevegingen heb aan mijn github projecten stuur mij dan via github een bericht. Je kan mij altijd gewoon een leuk bericht sturen als je gewoon even wil praten met iemand.
                    </div>
                </div>


                <div class="hidden md:block border-2 w-0 h-[85%] m-12"></div>

                <div class="flex w-full md:w-2/6 self-center md:justify-center flex-col">
                    <div>
                        <h1 class="font-bold text-center leading-tight text-6xl md:text-8xl mt-8 md:mt-24 md:mt-0 mb-2 text-blue-600">David Vos</h1>
                        <h1 class="font-exralight text-center leading-tight text-2xl mt-0 mb-2 text-blue-600">/Wazeback</h1>
                    </div>
                    <div class="flex w-full pt-6 ">
                        <div class="p-2">
                            Mijn specialitieten zijn HTML, CSS en PHP. Ook kan ken ik de basis van python. Hiernaast heb ik meerdere kleine <a class="underline text-blue-600 decoration-indigo-500" href="#scrollToProjects">projecten</a> gemaakt in programeertalen zoals P5.js, java, c++ & c.
                        </div>
                        <div class="p-2 md:mb-2 mb-[10%]">
                            Een groot deel van mijn projecten staan op deze website. als je de code door wil lezen en meer informatie wil hebben over de projecten zelf kan je altijd mijn <a class="underline text-blue-600 decoration-indigo-500" href="https://github.com/Wazeback">github.</a>
                        </div>
                    </div>
                </div>
                <div class="w-2/5 h-full flex justify-center items-center">
                    <img src="images/IMG_8055-2.jpg" alt="mijn mooie hoofd" class="hidden md:block rounded-full w-[90%] h-[90%]" >
                        </div>
                    <div>
                </div>
            </div>
        </div>


        <div id="scrollToProjects" class="h-[100vh] justify-center items-center flex">
            <div class="flex w-[92%] h-[92%] bg-white rounded-[4rem] flex-center flex flex-col">
                <div class="flex justify-center">
                    <h1 class="font-bold leading-tight text-6xl md:text-8xl mt-0 mb-2 text-blue-600">PROJECTS</h1>
                </div>

                <div class="flex justify-center">
                    <div class="w-[90%] h-2 bg-slate-300"></div>
                </div>

                <div class="flex self-center w-[80%] h-[80%]">
                    <div class="flex flex-col md:flex-row md:overflow-x-scroll overflow-y-scroll  snap-x w-[100%] h-[80%] mt-24 scrollbar-thin scrollbar-thumb-blue-700 scrollbar-track-blue-300 scrollbar-thumb-rounded-full scrollbar-track-rounded-full">
                        @foreach($projects as $project)
                            <div class="w-full md:w-[30%] h-[100%] px-0 md:px-4 flex-shrink-0 mx-0 md:mx-10 snap-end snap-start">
                                <div class="w-full h-1/2 bg-black">
                                    <img class="h-full w-full" src="{{ asset( 'storage/' . $project->picture ) }}" alt="">a
                                </div>
                                {{ $project->language->name }}
                                <div class="text-2xl flex justify-center text-blue font-bold text-lg py-[3%]">
                                    {{ $project -> title }}
                                    @if ($project->progress == 1)
                                        <div class="mx-4 bg-green-400 text-center rounded-lg">Done</div>
                                    @else
                                        <div class="mx-4 bg-red-400 text-center rounded-lg">in progress</div>
                                    @endif
                                </div>
                                <div>{{ $project -> description }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div id="scrollToContact" class="h-[100%] md:h-[100%]  justify-center items-center flex">
            <div class="flex w-[92%] h-[92%] bg-white rounded-[4rem] flex-center flex flex-col">
                <div class="flex justify-center">
                    <h1 class="font-bold leading-tight text-center text-6xl md:text-8xl mt-0 mb-2 text-blue-600">CONTACT ME</h1>
                </div>

                <div class="flex justify-center">
                    <div class="w-[90%] h-2 bg-slate-300"></div>
                </div>

                <form enctype="multipart/form-data" action="{{ route('mails.store')}}" method="POST">
                    @csrf
                    <div class="flex flex-col justify-center items-center">
                        <label class="text-4xl pt-12" for="name">Full name:</label>
                        <input type="text" name="name" class="w-1/2 h-16 border-8 rounded-full border-4 border-grey text-center" placeholder="Enter your name here..." required>
                        <label class="text-4xl pt-6" for="mail">Email:</label>
                        <input type="email" name="mail" class="w-1/2 h-16 border-8 rounded-full border-4 border-grey text-center" placeholder="name@example.com" required>
                        <label class="text-4xl pt-6" for="message">Your question</label>
                        <textarea type="text" name="message" class="w-3/4 h-64 border-8 border-4 border-grey rounded-lg md:rounded-full text-center pt-[1%]" placeholder="Enter your name here..." required></textarea >
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-6 px-16 my-8 rounded">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
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
        <div class="h-[100vh] justify-center items-center flex">
            <div class="flex w-[92%] h-[92%] bg-white rounded-[4rem]">
                <div class="w-1/6 flex justify-center items-center flex-col pl-6">
                    <a  href=" {{ asset ('/contact') }} " class="text-2xl bg-blue-500 hover:bg-blue-400 text-white font-bold text-lg py-4 px-8 border-b-8 border-blue-700 hover:border-blue-500 rounded w-46 h-24">
                        Contact me 
                    </a>
                    <div class="pt-24">
                        Als je veagen heb over iets kan je via email contact opnemen met mij door op de knop hierboven te klikken. Als je vragen of toevegingen heb aan mijn github projecten stuur mij dan via github een bericht. Je kan mij altijd gewoon een leuk bericht sturen als je gewoon even wil praten met iemand.
                    </div>
                </div>


                <div class="border-2 w-0 h-[85%] m-12">

                </div>

                <div class="w-2/6 flex justify-center flex-col">
                    <div>            
                        <h1 class="font-bold leading-tight text-8xl mt-0 mb-2 text-blue-600">David Vos</h1>
                        <h1 class="font-exralight leading-tight text-2xl mt-0 mb-2 text-blue-600">/Wazeback</h1>
                    </div>
                    <div class="flex w-full pt-6">
                        <div class="p-2">
                            Mijn specialitieten zijn HTML, CSS en PHP. Ook kan ken ik de basis van python. Hiernaast heb ik meerdere kleine <a class="underline text-blue-600 decoration-indigo-500" href="https://localhost/public/contact">projecten</a> gemaakt in programeertalen zoals P5.js, java, c++ & c.
                        </div>
                        <div class="p-2"> 
                            Een groot deel van mijn projecten staan op deze website. als je de code door wil lezen en meer informatie wil hebben over de projecten zelf kan je altijd mijn mijn <a class="underline text-blue-600 decoration-indigo-500" href="https://github.com/Wazeback">github.</a>
                    </div>
                    </div>
                </div>
                <div class="w-2/5 h-full">
                    <img src="images/IMG_8055-2.jpg" alt="mijn mooie hoofd" class="rounded-full w-full h-full" >
                </div>  
            <div>
        </div>
    </div>
</div>
<div class="h-[100vh] justify-center items-center flex">
    <div class="flex w-[92%] h-[92%] bg-white rounded-[4rem] flex-center flex flex-col">
        <div class="flex justify-center">
            <h1 class="font-bold leading-tight text-8xl mt-0 mb-2 text-blue-600">PROJECTS</h1>
        </div>
        <hr class="h-24">
</div>
</x-guest-layout>  
</body>
</html> 
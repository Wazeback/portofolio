<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>contact me</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

</head>
<body class="w-[100%] bg-indigo-500">
<x-guest-layout> 
    <div class="h-[100vh] justify-center items-center flex">
        <div class="flex w-[92%] h-[92%] bg-white rounded-[4rem]">
            <div class="w-1/2 flex">
                <div class="flex justify-center items-center flex-col">
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    <input type="email" id="email" name="email" placeholder="Your last name..">
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
                    <input type="submit" value="Submit">
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
</body>
</html>
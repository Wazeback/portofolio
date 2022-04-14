<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <h1 class="text-center text-4xl text-blue-600">ADD PROJECT</h1>
                        <form enctype="multipart/form-data" action="{{ route('projects.store') }}" method="POST">
                            @csrf

                            @if ($errors->any())
                                @foreach($errors->all() AS $error)
                                    <div class="m-8 p-4 bg-red-400 rounded-lg">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif


                            <label class="text-3xl" for="title">Title:</label><br>
                            <input class="border-4" type="text" id="title" name="title" placeholder="Place title here." required><br>
                            <label class="text-3xl" for="desc">Description:</label><br>
                            <textarea class="border-4" type="text" cols="40" rows="10" id="desc" name="desc" placeholder="Put your descrition here." required></textarea><br>
                            <div>
                                <label class="text-2xl" for="progress">Done: </label>
                                <input class="my-8" type="checkbox" id="progress" name="progress" value="1" checked>
                            </div>
                            <label class="text-3xl" for="progress">image: </label>
                            <input class="border-4" type="file" name="image" required><br>
                            <input class="my-8 p-2 rounded-lg bg-green-400" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

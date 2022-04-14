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
                        <h1 class="text-center text-4xl text-blue-600">EDIT PROJECTS</h1>

                        @if ($errors->any())
                            @foreach($errors->all() AS $error)
                                <div class="m-8 p-4 bg-red-400 rounded-lg">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif


                        <form enctype="multipart/form-data" action="{{ route('projects.update', ['project' => $project]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <label class="text-3xl" for="title">Title:</label><br>
                            <input class="border-4" type="text" id="title" name="title" placeholder="{{ $project->title }}" value="{{ $project->title }}" required><br>
                            <label class="text-3xl" for="desc">Description:</label><br>
                            <textarea class="border-4" type="text" cols="40" rows="10" id="desc" name="desc" required> {{ $project->description }} </textarea><br>
                            <div>
                                <label class="text-2xl" for="progress">Done: </label>
                                <input class="my-8" type="checkbox" id="progress" name="progress" value="1" checked>
                            </div>
                            <label class="text-3xl" for="progress" required>File:</label><br>
                            <input class="border-4" type="file" name="image" value="{{ $project->picture }}" required> <br>
                            <input class="my-8 p-2 rounded-lg bg-green-400" type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

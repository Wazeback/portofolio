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
{{--                        {{dd($project)}}--}}
                        <h1 class="text-center text-4xl text-blue-600">EDIT PROJECTS</h1>

                        @foreach($errors->all() AS $error)
                            <div>{{ $error }}</div>
                        @endforeach

                        <form enctype="multipart/form-data" action="{{ route('projects.update', ['project' => $project]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <label for="title">Title:</label><br>
                            <input type="text" id="title" name="title" placeholder="{{ $project->title }}" value="{{ $project->title }}"><br>
                            <label for="desc">Description:</label><br>
                            <textarea type="text" cols="40" rows="10" id="desc" name="desc" placeholder="{{ $project->description }}" value="{{ $project->description }}"></textarea><br>
                            <label for="progress">Progress:</label><br>
                            <input type="number" id="progress" name="progress" placeholder="{{ $project->progress }}" value="{{ $project->progress }}"><br>
                            <label for="progress">File:</label><br>
                            <input type="file" name="image" value="{{ $project->picture }}"> <br>
                            <input type="submit" value="Submit">
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

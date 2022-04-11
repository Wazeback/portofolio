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
                        <h1 class="text-center text-4xl text-blue-600">ADD PROJECTS</h1>
                        <form enctype="multipart/form-data" action="{{ route('projects.store') }}" method="POST">
                            @csrf
                            <label for="title">Title:</label><br>
                            <input type="text" id="title" name="title" placeholder="Place title here."><br>
                            <label for="desc">Description:</label><br>
                            <input type="text" id="desc" name="desc" placeholder="Put your descrition here."><br><br>
                            <label for="progress">Progress:</label><br>
                            <input type="number" id="progress" name="progress" placeholder="0 or 1."><br>
                            <label for="progress">Progress:</label><br>
                            <input type="file" name="image"><br>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

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
                        <h1 class="text-center text-4xl text-blue-600">ALL PROJECTS</h1>
                        {{$projects->links()}}
                        <table class="w-full table-fixed border-[1px] border-black px-2">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Titel</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Progress</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $project)
                                    <tr class="text-left font-[Caros-Bold] border-[1px] border-black">
                                        <td>{{ $project->id }} </td>
                                        <td>{{ $project->title }}</td>
                                        <td>{{ $project->description }}</td>
                                        <td><img class="h-full w-full" src="{{ asset( 'storage/' . $project->picture ) }}" alt=""></td>
                                        <td>
                                            @if ($project->progress == 1)
                                                <div class="mx-4 bg-green-400 text-center rounded-lg ">Done</div>
                                            @else
                                                <div class="mx-4 bg-red-400 text-center rounded-lg">in progress</div>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('projects.edit', ['project'  => $project]) }}">Edit projects</a>
                                            <form action="{{ route('projects.destroy', ['project'  => $project->id]) }}" method="post">@csrf @method('DELETE') <button type="submit">Delete products </button> </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

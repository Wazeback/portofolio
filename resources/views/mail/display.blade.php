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
                        <h1 class="text-center text-4xl text-blue-600">INBOX</h1>
                        <table class="w-full table-fixed border-[1px] border-black px-2">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Mail</th>
                                <th>Message</th>
                                <th>read</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($mails as $mail)
                                <tr class="text-left font-[Caros-Bold] border-[1px] border-black">
                                    <td>{{ $mail->id }}</td>
                                    <td>{{ $mail->name }} </td>
                                    <td>{{ $mail->mail }}</td>
                                    <td>{{ $mail->message }}</td>
                                    <td>
                                        @if ($mail->read == 0)
                                            <div class="mx-4 bg-green-400 text-center rounded-lg ">READ</div>
                                        @else
                                            <div class="mx-4 bg-red-400 text-center rounded-lg">NOT READ</div>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('mails.update', ['mail'  => $mail]) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit">bekijken</button>
                                        </form>
                                        <form action="{{ route('mails.destroy', ['mail'  => $mail->id]) }}" method="post">@csrf @method('DELETE') <button type="submit">/verwijderen </button> </form>
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

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <x-feedback-status class="mb-4" :status="session('message')" />

            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg">
            
            <table class="border-separate border-spacing-2 border border-slate-400 ...">
                <thead>
                    <tr>
                        <th class="border border-slate-300 ...">ID</th>
                        <th class="border border-slate-300 ...">Name</th>
                        <th class="border border-slate-300 ...">Email</th>
                        <th class="border border-slate-300 ...">Rating</th>
                        <th class="border border-slate-300 ...">Edit</th>
                        <th class="border border-slate-300 ...">Delete</th>
                    </tr>
                </thead>
                    @forelse ($feedbacks as $feedback)
                    <tr>
                        <td class="border border-slate-300 ...">{{ $feedback->id }}</td>
                        <td class="border border-slate-300 ...">{{ $feedback->name }}</td>
                        <td class="border border-slate-300 ...">{{ $feedback->email }}</td>
                        <td class="border border-slate-300 ...">{{ $feedback->rating }}</td>
                        <td class="border border-slate-300 ...">
                            <a href="{{ url('/edit-feedback/'.$feedback->id) }}" class="py-2 px-4 bg-blue text-black font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Edit</a>
                        </td>
                        <td class="border border-slate-300 ...">
                            <!-- <a href="{{ url('/') }}" class="py-2 px-4 bg-blue-500 text-black font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Delete</a> -->
                            <form action="{{ url('/delete-feedback/'.$feedback->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <x-primary-button class="btn btn-danger">Delete</x-primary-button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">No records found</td>
                    </tr>
                    @endforelse
            </table>

            </div>
        </div>
    </div>
</x-app-layout>

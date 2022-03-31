<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        @if (session()->has('status'))
            <div class="mb-5 bg-purple-500 px-4 py-2  font-bold">
                {{session('status')}}
            </div>
        @endif
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-800">
                    

                    <table class="table-auto table-dark">
                    <thead>
                        <tr>
                        <th scope="row">Name</th>
                        <th scope="row">Title</th>
                        <th scope="row">Body</th>
                        <th scope="row">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($posts as $post)
                            <tr>
                            <td scope="row" > {{$post->user->name}} </td>
                            <td scope="row">{{ $post->title }}</td>
                            <td scope="row">{{ $post->body }}</td>
                            <td scope="row"> <a href="{{ url('/post/delete', $post->id) }}" class="bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-black text-sm py-1 px-2 rounded">Delete</a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

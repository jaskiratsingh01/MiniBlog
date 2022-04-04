<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        @if (session()->has('status'))
            <div style="margin-left:60px; margin-right:60px; color:white; background-color:#673ab7;" class="mb-5 bg-purple-500 px-4 py-2  font-bold">
                {{session('status')}}
            </div>
        @endif
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                        <thead>
                            <tr style="background-color:#001429; color:white;" class="text-left font-bold">
                                <td class="border px-6 py-4" >Name</td>
                                <td class="border px-6 py-4" >Title</td>
                                <td class="border px-6 py-4" >Body</td>
                                <td colspan="2" style="text-align:center;" class="border px-6 py-4" >Actions</td>
                            </tr>
                        </thead>
                        @foreach($posts as $post)
                            <tr style="background-color:#002952; color:white;" >
                                <td class="border px-6 py-4" >{{$post->user->name}}</td>
                                <td class="border px-6 py-4" >{{$post->title}}</td>
                                <td class="border px-6 py-4" >{{$post->body}}</td>
                                <td class="border px-6 py-4" > <a href="{{ url('/post/edit', $post->id) }}"> <button style="background-color:#673ab7; color:white; border-radius:5px; padding:4px;">Edit</button> </a> </td>
                                <td class="border px-6 py-4" > <a href="{{ url('/post/delete', $post->id) }}"> <button style="background-color:red; color:white; border-radius:5px; padding:4px;">Delete</button> </a> </td>
                            </tr>
                        @endforeach
                    </table>
 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

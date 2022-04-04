<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <div style="margin: 20px;" class="headcont">
                    <h1 class="p-5 font-bold text-white">Edit Post</h1>
                </div>

                
                <hr class="border-gray-600">
                <div class="p-6 bg-gray-700">
                    <form class="w-full max-w-sm" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="title">Title</label>

                                </div>

                                <div class="md:w-2/3">
                                    <input style="width:350px;" class="border-2 border-gray-200
                                     rounded w-fully py-2 px-4" id="title" type="text" name="title" value="{{$post->title}}">
                                </div>

                        </div>

                        <br>

                        <div class="md:flex md:items-center mb-6">
                            <div class="md:w-1/3">
                                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="body">Body</label>

                            </div>

                            <div class="md:w-2/3">
                                <textarea style="width:350px;" class="resize border rounded-md" name="body" style="width:255px;">{{$post->body}}</textarea>
                            </div>
                        </div>

                        <br>


                        <div class="md:flex md:items-center">
                            <div class="md:w-1/3"></div>
                            <div class="md:w-2/3">
                                <input style="background-color:green;" type="submit" class="shadow bg-green-500 hover:bg-green-400
                                 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                                  value="Update">
                            </div>
                        </div>

                    </form>

                    @if (session()->has('status'))
                        <div style="background-color:#673ab7; margin-top:35px; color:white;" class="mt-5 shadow bg-purple-500 font-bold py-2 px-4 rounded">
                        {{session('status')}}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-800 leading-tight">
            {{ $post->category->name }}
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center bg-blue-900 text-gray-400">
                    {{ $post->title }}
                </div>
                <div class="flex justify-center">
                        <img src="{{ asset('/storage/' . $post -> image) }}" alt="">
                </div>
                <div class="flex justify-start">
                    {{ $post->content }}
                </div>
            
                <div>
                    <a href="#" class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                        <h1 class="font-bold text-gray-700 hover:underline">
                            {{$post -> user->name}}
                        </h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
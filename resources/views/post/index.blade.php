<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Actualité du club ') }}
        </h2>
    </x-slot>
    

<div class="overflow-x-hidden  flex justify-center">
    <div class="px-6 py-8">
        <div class="container flex justify-between mx-auto">
            <div class="w-full lg:w-8/12">
                
                        
                    </div>
                </div>
                @foreach ($posts as $post) 
                <div class="mt-6">
                    <div class="max-w-4xl px-10 py-6 mx-auto bg-blue-50 hover:bg-blue-200 rounded-lg shadow-lg shadow-white animate__bounceIn ">
                        <div class="flex items-center justify-between">
                            <span class="font-light text-gray-600">
                               {{ $post->created_at->format('d M Y') }}
                            </span>
                                <a href="{{route('posts.show', $post)}}" class="px-2 py-1 font-bold text-gray-100 shadow-gray-500 shadow-md rounded hover:bg-gray-500" style="background-color:#03045E;">
                                    {{ $post -> category->name }}
                                </a>
                        </div>
                        <div class="mt-2">
                            <a href="{{route('posts.show', $post)}}" class="text-2xl font-bold text-gray-700 hover:bg-blue-900 hover:text-white rounded px-2">
                                {{ $post->title }}
                            </a>
                            <p class="mt-2 text-gray-600">
                                {{ Str :: limit ($post-> content, 120) }}
                            </p>
                        </div>
                        <div class="flex items-center justify-between mt-4">
                            <a href="{{route('posts.show', $post)}}"
                                class="text-blue-500 animate__heartBeat">
                                Voir plus
                            </a>

                            <div>
                                <a href="#" class="flex items-center">
                                    <h1 class="font-bold text-blue-900">
                                            {{$post -> user->name}}
                                    </h1>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                
            </div>
            @include('partials.sidebar')
        </div>
    </div>
    @include('partials.footer')
</div>

    
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ">
            {{ __('Tous vos Posts') }}
        </h2>
        <div>
            <br />
            <h3>Retrouvez tous les contenu que vous avez créé ici !</h3>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
            {{ session('success') }}
            @endif

            <div class="bg-white overflow-hidden sm:rounded-lg">
                @foreach ($posts as $post)

                    <div class="flex items-center bg-slate-300">
                        {{ $post->title }}
                    </div>
                    <div class="flex items-center bg-gray-100">
                        {{ $post->content }}
                    </div>
                    <div class="flex items-center justify-center">
                    <img src="{{ asset('/storage/' . $post -> image) }}" alt="">
                    </div>
                    <div class="flex items-center m-5 p-5">
                        
                        <a href="{{ route('posts.edit', $post )}}" class="bg-yellow-500 px-2 py-3 block">Modifier</a>
                        
                        <a href="#" class="bg-red-500 px-2 py-3 block" 
                            onclick="event.preventDefault 
                            document.getElementById('destroy-post-form').submit();">Supprimer  
                            <form action="{{ route ('posts.destroy', $post) }}" method="post" id="destroy-post-form"> 
                            @csrf
                            @method('delete')
                        </form></a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</x-app-layout>

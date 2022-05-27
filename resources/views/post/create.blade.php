<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-red-800 leading-tight">
            {{ __('créer un post') }}
        </h2>
    </x-slot>

    
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <div class="my-5">
        @foreach($errors->all() as $error)
            <span class="block text-red-600 font-extrabold">{{ $error }}</span>
        @endforeach
    </div>    

    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">

    @csrf
        <x-label for="title" value="Titre du post" />
        <x-input id="title" name="title" />

        <x-label for="content" value="contenu du post" />
        <textarea name="content" id="content" cols="50" rows="5"></textarea>

        <x-label for="image" value="Image du post" />
        <x-input id="image" type="file" name="image" />

        <x-label for="category" value="categorie du post" />
        <select name="category" id="category">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <x-button style="display : block !important;" class="mt-5">Créer mon post</x-button>
    </form>
    
</div>

    
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('créer un post') }}
        </h2>
    </x-slot>
<div class=" bg-blue-100 p-4 w-auto flex justify-center border-2 rounded-lg border-blue-900">
    <h3 class="font-bold">Créer un Post, dites ce que vous pensez et partagez-le !</h3>
</div>
    
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">

    <div class="my-5">
        @foreach($errors->all() as $error)
            <span class="block text-red-600 font-extrabold">{{ $error }}</span>
        @endforeach
    </div>    
    <div class=" flex justify-center border border-blue-200 rounded-lg ">
        <form class="" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">

            @csrf
            <div class="">
                <x-label for="title" value="Titre du post" class="m-5 font-bold my-2 text-xl text-white" />
                <x-input class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Le titre de votre post" id="title" name="title" />
                
                <x-label for="content" value="Contenu du post" class="m-5 font-bold my-2 text-xl text-white "  />
                <textarea class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" placeholder="Ecrivez ce que vous voulez ici" name="content" id="content" cols="50" rows="5"></textarea>

                <x-label for="image"  value="Image du post" class="text-white font-bold mt-1 px-3 py-2 text-xl "/>
                <x-input class="rounded-xl text-white " id="image" type="file" name="image" />

                <x-label for="category" value="categorie du post" class="text-white font-bold mt-1 px-3 py-2 text-xl" />
                <select class=" rounded-xl border-blue-200  " name="category" id="category">
                    @foreach ($categories as $category)
                    <option class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <x-button style="display : block !important;" class="mt-5">Créer mon post</x-button>
        </form>
    </div>
</div>

    
</x-app-layout>
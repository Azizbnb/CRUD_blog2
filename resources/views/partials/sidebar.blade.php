<div class="hidden w-4/12 -mx-8 lg:block">

                <div class="px-8 mt-10 animate__bounceIn">
                    <h1 class="mb-4 text-xl font-bold text-gray-700"></h1>
                    <div class="flex flex-col max-w-sm px-8 py-6 mx-auto bg-blue-50 hover:bg-blue-200 rounded-lg shadow-md">
                        <div class="flex items-center justify-center"><a href="{{route('posts.show', $post)}}"
                                class="px-2 py-1 text-sm text-green-100 bg-gray-600 rounded hover:bg-gray-500">{{ $post->title }}</a>
                        </div>
                        <div class="mt-4" class="text-lg font-medium text-gray-700 hover:underline">{{Str :: limit ($post->content, 60) }}</div>
                        <div class="flex items-center justify-between mt-4">
                            <div class="flex items-center"><img
                                    class="mx-3 text-sm text-gray-700 hover:underline"><span class="text-sm px-2 py-1 text-blue-900 font-bold ">{{$post -> user->name}}</span></a></div><span
                                class="text-sm font-light text-gray-600">Jun 1, 2020</span>
                        </div>
                    </div>
                </div>
                
                <div class="px-8 mt-10">
                    <h1 class="mb-4 text-xl font-bold text-gray-200">Categories</h1>
                    <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-blue-50 hover:bg-blue-200 rounded-lg shadow-md">
                        <ul>
                             @foreach($categories as $category)   
                            <li><a href="{{route('posts.show', $post)}}" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">- 
                                    {{ $category->name }}</a></li>
                            
                            @endforeach
                           
                        </ul>
                    </div>
                </div>

                
                
               
            </div>
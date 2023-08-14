<x-layout>
        <section class="px-6 py-8">

            <h1 class="text-center font-light text-xl  text-blue-400 ">Create your post</h1>

            <main class="max-w-lg mx-auto mt-10 border border-gray-300 bg-gray-100 p-6 rounded-xl ">



                <form method="POST" action="/admin/posts" class="mt-10"   enctype=multipart/form-data>

                @csrf
       
                   {{-- title --}}
                   <div class="mb-6">
                      <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-900">title</label>
                      <input type="text" id="title" name="title" value="{{old('title')}}" required class="border border-gray-400 p-2 w-full rounded-xl" placeholder="">
       
                      @error('title')
                       <p class= "text-red-300 text-xs mt-1">{{$message}}</p>
                      @enderror
       
                    </div>


                        {{-- slug --}}
                   <div class="mb-6">
                    <label for="slug" class="block mb-2 uppercase font-bold text-xs text-gray-900">slug</label>
                    <input type="text" id="slug" name="slug" value="{{old('slug')}}" required class="border border-gray-400 p-2 w-full rounded-xl" placeholder="">
     
                    @error('slug')
                     <p class= "text-red-300 text-xs mt-1">{{$message}}</p>
                    @enderror
     
                  </div>
          
                {{-- excerpt --}}
                <div class="mb-6">
                <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-gray-900">excerpt</label>
                {{-- <input type="text" id="excerpt" name="excerpt" value="{{old('excerpt')}}" required class="border border-gray-400 p-2 w-full rounded-xl" placeholder=""> --}}
                 <textarea name="excerpt" id="excerpt" cols="30" rows="5" required class="border border-gray-400 p-2 w-full rounded-xl" placeholder=""> {{old('excerpt')}}</textarea>


                @error('excerpt')
                    <p class= "text-red-300 text-xs mt-1">{{$message}}</p>
                @enderror
                </div>
        

                {{-- body --}}
                <div class="mb-6">
                <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-900">body</label>
                <textarea  id="body" name="body" required class="border border-gray-400 p-2 w-full rounded-xl" placeholder="........">
                    {{old('body')}}
                </textarea>

                @error('body')
                    <p class= "text-red-300 text-xs mt-1">{{$message}}</p>
                @enderror
    
                </div>
               
                {{-- thumbnails --}}

           
                        <div class="mb-6">
                          <label for="thumbnail" class="block mb-2 uppercase font-bold text-xs text-gray-900">slug</label>
                          <input type="file" id="thumbnail" name="thumbnail" value="{{old('slug')}}" required class="border border-gray-400 p-2 w-full rounded-xl" placeholder="">
           
                          @error('thumbnail')
                           <p class= "text-red-300 text-xs mt-1">{{$message}}</p>
                          @enderror
           
                        </div>
              
                {{-- category --}}
             <div class="relative  rounded-xl">

                      {{-- get all categories as array --}}
                 @php
                     $categories= \App\Models\Category::all() ;
                 @endphp

                <label for="category_id" class="block mb-2 uppercase font-bold text-xs text-gray-900">Select category</label>
 
                   <select name="category_id" id="category_id" class="bg-gray-200 rounded-sm p-2" >

                        @foreach( $categories as $category)
                         <option value="{{$category->id}}"  {{old('category_id') == $category->id ? 'selected'  :'' }}  >  {{ucwords($category->name)}} </option>
                        @endforeach

                  </select>  

                    @error('category_id')
                    <p class= "text-red-300 text-xs mt-1">{{$message}}</p>
                    @enderror
                </div>
        
               
           {{-- submit --}}

           <div class="mb-6  flex justify-center"> 
            <button type="submit" required class="text-center border border-gray-400 text-black hover:bg-gray-700  hover:text-white bg-blue-100 p-2 rounded-xl ">
              Submit
            </button>   
           </div>


            </form>
          </main>
        </section>


</x-layout>

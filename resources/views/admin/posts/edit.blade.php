

<x-setting heading="Edit Post" >

    <main class="max-w-lg mx-auto mt-10 border border-gray-300 bg-gray-100 p-6 rounded-xl ">

        <form method="POST" action="/admin/posts/{{$post->id}}" class="mt-10"   enctype=multipart/form-data>

        @csrf

        {{-- this method add hidden input to tell laravel we  want patch request--}}
        @method('PATCH')

        <x-formPieces.input name="title" :value="old('title', $post->title)" />
        <x-formPieces.input name="slug"  :value="old('slug', $post->slug)"  />
        <x-formPieces.textarea name="excerpt" > {{old('excerpt', $post->excerpt)}} </x-formPieces.textarea>
        <x-formPieces.textarea name="body" >  {{old('body', $post->body)}}   </x-formPieces.textarea>

        <div class="mt-6 flex inline">
            <div class="flex-1">
             <x-formPieces.input name="thumbnail" type="file"  :value="old('thumbnail',$post->thumbnail)" />
           </div>

        <img src= "/storage/{{$post->thumbnail}}" alt="not found" class="rounded-xl ml-6" width="100" >
       </div>

        {{-- category --}}
     <div class="relative  rounded-xl">

                {{-- get all categories as array --}}
          @php
              $categories= \App\Models\Category::all() ;
          @endphp

          <x-formPieces.label name="category_id" />

            <select name="category_id" id="category_id" class="bg-gray-200 rounded-sm p-2" >

                  @foreach( $categories as $category)
                  <option value="{{$category->id}}"  {{old('category_id', $post->category_id ) == $category->id ? 'selected'  :'' }}  >  {{ucwords($category->name)}} </option>
                  @endforeach

            </select>  

            <x-formPieces.error name="category_id" />

        </div>

       
   {{-- submit --}}
   <x-formPieces.button name="Submit" />

  

    </form>
  </main>

</x-setting>


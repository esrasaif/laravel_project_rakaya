<x-setting heading="Add new Post" >

            <main class="max-w-lg mx-auto mt-10 border border-gray-300 bg-gray-100 p-6 rounded-xl ">

                <form method="POST" action="/admin/posts" class="mt-10"   enctype=multipart/form-data>

                @csrf
       
                <x-formPieces.input name="title" />
                <x-formPieces.input name="slug" />
                <x-formPieces.textarea name="excerpt" />
                <x-formPieces.textarea name="body" />
                <x-formPieces.input name="thumbnail" type="file"  />

        
                {{-- category --}}
             <div class="relative  rounded-xl">

                        {{-- get all categories as array --}}
                  @php
                      $categories= \App\Models\Category::all() ;
                  @endphp

                  <x-formPieces.label name="category_id" />

                    <select name="category_id" id="category_id" class="bg-gray-200 rounded-sm p-2" >

                          @foreach( $categories as $category)
                          <option value="{{$category->id}}"  {{old('category_id') == $category->id ? 'selected'  :'' }}  >  {{ucwords($category->name)}} </option>
                          @endforeach

                    </select>  

                    <x-formPieces.error name="category_id" />

                </div>
        
               
           {{-- submit --}}
           <x-formPieces.button name="Submit" />

          

            </form>
          </main>

</x-setting>

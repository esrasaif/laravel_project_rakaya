<x-layout>
 
  @include('posts.header')
  
<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6 ">
  

  @if( $posts->count())
  <x-posts-grid :posts="$posts"  />
  
   <div class="flex justify-center ">{{$posts->links()}}</div>

 @else
          <p class="text-center">  </p>
 @endif

</main>

</x-layout>
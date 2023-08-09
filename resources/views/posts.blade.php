<x-layout>
 
  @include('posts-header')
  
<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6  space-x-6 ">
  

  @if( $posts->count())
  <x-posts-grid :posts="$posts"  />
 
 @else
          <p class="text-center"> NO , Posts  </p>
 @endif



{{-- 
    <div class="lg:grid lg:grid-cols-3">
      <x-post-card />
      <x-post-card />
    </div> --}}


</main>

</x-layout>
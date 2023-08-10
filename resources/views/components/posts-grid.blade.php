@props(['posts'])

<x-post-featured-card :post="$posts[0]" />

@if( $posts->count() >1)
      <div class="lg:grid lg:grid-cols-1">
          @foreach( $posts->skip(1) as $post)
               <x-post-card :post="$post" class="bg-red-100" />
          @endforeach
     </div>
@endif

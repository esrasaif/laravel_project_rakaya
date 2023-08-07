<x-layout>

    
    <article>
                    
       <h1>   {!!  $post->title !!}   </h1>  
    
       wrote by: <a href="/authors/{{$post->author->username}}">{{$post->author->username}}  </a>
       <br>
       category :  <a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a>


       <div> 
        {!! $post->body !!}  
       {{-- dispaly the content of html without the markups --}}
       </div>

     </article>

     <a href="/">back</a>


 </x-layout>

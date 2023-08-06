<x-layout>

    
    <article>
                    
       <h1>
        {!!  $post-> title !!} 
    </h1>  

       <div> 

        {{-- <?= $post->body ;?> --}}

        {!! $post->body !!}  

         {{-- dispaly the content of html without the markups --}}
       </div>

     </article>

     <a href="/">back</a>


 </x-layout>

<x-layout>


{{-- here posts variable store array of all posts and with its metadata so we can displat the metadata and also the body --}}
  <?php  foreach($posts as $post):  ?>


    <article>
       
        <h1> 
          
          <h4>title</h4>
          <a href="/posts/<?=  $post-> id ;   ?> ">
            {!!  $post->title !!} 
          </a>
        
        
        </h1>  

        <div>

          <h4>category</h4>
          <a href="/categories/{{$post->category->id}}">{{$post->category->name}}</a>

        </div>




    </article>
  

  
  <?php endforeach; ?>

</x-layout>
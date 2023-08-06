<x-layout>


{{-- here posts variable store array of all posts and with its metadata so we can displat the metadata and also the body --}}
  <?php  foreach($posts as $post):  ?>


    <article>
       
        <h1> 
          
          <a href="/posts/<?=  $post-> id;   ?> ">
            {!!  $post-> title !!} 
          </a>
        
        
        </h1>  

        <div>
          {{-- { !! $post-> excerpt !! } --}}
        </div>




    </article>
  

  
  <?php endforeach; ?>

</x-layout>
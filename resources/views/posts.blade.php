<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/app.css">

    <title>posts</title>

</head>

<body>
   
{{-- here posts variable store array of all posts and with its metadata so we can displat the metadata and also the body --}}
  <?php  foreach($posts as $post):  ?>


    <article>
       
        <h1> 
          
          <a href="/posts/<?=  $post-> slug;   ?> ">
            <?=  $post-> title;   ?> 
          </a>
        
        
        </h1>  

        <div>
          <?=  $post-> excerpt ;   ?> 
        </div>




    </article>
  

  
  <?php endforeach; ?>

   
</body>
</html>
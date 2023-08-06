<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/app.css">
     <!-- ui library >> tailwend -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.css" rel="stylesheet">
     <!-- google fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    

    <title>post</title>

</head>

<body>
    
    {{$slot}}

</body>

 <!-- footer begins -->
 <footer class="border-top text-center small py-3 w-full max-w-screen-xl mx-auto justify-between">
    <p class="">Copyright &copy; {{date("Y/M/D")}} 
    
    <a href="/" class="">medisoft</a>. All rights reserved.
   </p>
  </footer>

</html>
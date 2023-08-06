<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />


    <title>post</title>

</head>

<body>
    
    {{$slot}}

</body>

 <!-- footer begins -->
 <footer class="border-top text-center small text-muted py-3">
    <p class="m-0">Copyright &copy; {{date("Y/M/D")}} <a href="/" class="text-muted">medisoft</a>. All rights reserved.</p>
  </footer>

</html>
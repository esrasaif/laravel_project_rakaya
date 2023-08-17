@props(["comment"])
<article class="block flex p-6 bg-gray-800 border-gray-200 rounded-xl space-x-4 space-y-2 ">
                        
    <div class="flex-shrink-0">
       <img src="https://i.pravatar.cc/600?id={{$comment->id}}" alt="not found"  class="rounded-xl" width="60" height="60">

    </div>
    
    <div>

       <header class="mb-4">
           <h3 class="font-bold">{{$comment->author->username}}</h3>
           <p> Posted <time> {{$comment->created_at}}</time> </p>
       </header>

       <p>{{$comment->body}}</p>

    </div>

    </article>
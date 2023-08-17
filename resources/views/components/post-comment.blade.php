@props(["comment"])

<x-panel class="bg-gray-50 ">
<article class=" flex space-x-4 space-y-2 ">
                        
    <div class="flex-shrink-0">
       <img src="https://i.pravatar.cc/60?id={{$comment->id}}" alt="not found"  class="rounded-xl" width="60" height="60">

    </div>
    
    <div>

       <header class="mb-4">
           <h3 class="font-bold">{{$comment->author->username}}</h3>
           <p> Posted <time> {{$comment->created_at}}</time> </p>
       </header>

       <p>{{$comment->body}}</p>

    </div>

    </article>

   </x-panel>
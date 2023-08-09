@props(['category'])
   
<a href="/categories/{{$post->category->id}}"
    class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
    style="font-size: 10px">
    {{$post->category->name}}
 </a>
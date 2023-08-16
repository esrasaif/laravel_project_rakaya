@props(['category'])
   
<a href="/?category={{$category->id}}"
    class="px-3 py-1 border bg-blue-900 border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
    style="font-size: 10px">
    {{$category->name}}
 </a> 
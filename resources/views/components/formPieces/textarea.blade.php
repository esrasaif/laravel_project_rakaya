@props(['name'])


<x-formPieces.container>

    <x-formPieces.label name="{{$name}}" />

    <textarea name="{{$name}}" id="{{$name}}" cols="30" rows="5" required class="border border-gray-400 p-2 w-full rounded-xl" placeholder="">
         {{ old($name)}}
    </textarea>

    <x-formPieces.error name="{{$name}}" />
   
</x-formPieces.container>
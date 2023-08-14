@props(['name' , 'type'=>'text'])


<x-formPieces.container>

    <x-formPieces.label name="{{$name}}" />

    <input type="{{$type}}" id= "{{$name}}" name="{{$name}}" value="{{ old($name) }}" required class="form-control border border-gray-400 p-2 w-full rounded-xl" placeholder="">

   <x-formPieces.error name="{{$name}}" />
   
</x-formPieces.container>
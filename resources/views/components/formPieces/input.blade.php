@props(['name' , 'type'=>'text'])


<x-formPieces.container>

    <x-formPieces.label name="{{$name}}" />

    <input 
    type="{{$type}}" 
    id="{{$name}}"
     name="{{$name}}"
  
      class="form-control border border-gray-400 p-2 w-full rounded-xl" 
      placeholder="" autocomplete="" 
      
      {{ $attributes(['value' => old($name)])  }} 
      
      >

   <x-formPieces.error name="{{$name}}" />
   
</x-formPieces.container>
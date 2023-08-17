@auth
{{-- comment form --}}

<x-panel class="bg-gray-50 ">
<form action="/posts/{{$post->slug}}/comments" method="POST" class="">
@csrf

    <header class="flex items-center">
        <img src="https://i.pravatar.cc/60?id={{ auth()->id() }}" alt="not found"  class="rounded-xl" width="60" height="60"> 
        <h2 class="ml-4">Share with us ?</h2>
    </header>

    <div>
            <textarea name="body" id="body" cols="10" rows="10" class="mt-4 w-full text-sm border-none bg-gray-100 focus:outline-none rounded-xl " placeholder = "your comment important " required >
            </textarea>   
            
            <x-formPieces.error name="body" />

    </div>

    <div class=" justify-left border-t border-gray-400 flex mt-6 pt-6">
        {{-- <button type="submit" id="submit" class="p-4 bg-gray-">
            Share
        </button> --}}
        <x-formPieces.button name="Share" />                    
    </div>

</form>
</x-panel>

@endauth
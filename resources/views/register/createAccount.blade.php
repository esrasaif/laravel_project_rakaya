<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 border border-gray-300 bg-gray-100 p-6 rounded-xl ">
          
            <h1 class="text-center font-bold text-xl  text-blue-400">welcome!</h1>
                <h6 class="text-center text-xl mt-2">Register</h6>


        <form method="POST" action="/register" class="mt-10">

         @csrf

            {{-- name --}}
            <x-formPieces.input name="name" />
             {{-- username --}}
             <x-formPieces.input name="username" />
             {{-- email --}}
              <x-formPieces.input name="email" type="email" />

              {{-- pass --}}
              <x-formPieces.input name="password" type="password" />

              {{-- <x-formPieces.input name="password confirm" type="password" /> --}}



               {{-- submit --}}

              <x-formPieces.button name="Submit" />

        </form>

        </main>
    </section>


</x-layout>
<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 border border-gray-300 bg-gray-100 p-6 rounded-xl ">
          
            <h1 class="text-center font-bold text-xl  text-blue-400">welcome!</h1>
                <h6 class="text-center text-xl mt-2">Log In </h6>

        <form method="POST" action="/logIn" class="mt-10">

            @csrf
              {{-- email --}}
              <x-formPieces.input name="email" type="email" autocomplete="username" />

              {{-- pass --}}
              <x-formPieces.input name="password" type="password" autocomplete="new-password" />
    
              {{-- submit --}}
              <x-formPieces.button name="Log In" />

        </form>

        </main>
    </section>
</x-layout>
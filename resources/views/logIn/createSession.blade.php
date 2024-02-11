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
    
              <div class="flex items-start ">

                <div class="flex items-center h-5 checked:border-gray-900">
                    <input id="remember" name="remember" aria-describedby="remember" type="checkbox" class="">
                </div>

                <div class="mx-1 text-sm">
                    <label for="remember" class="text-gray-500 dark:text-gray-300"> remember me </label>
                </div>

            </div>







              {{-- submit --}}
              <x-formPieces.button name="Log In" />

        </form>

        </main>
    </section>
</x-layout>
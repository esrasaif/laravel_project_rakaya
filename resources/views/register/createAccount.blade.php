<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 border border-gray-300 bg-gray-100 p-6 rounded-xl ">
       <h1 class="text-center font-bold text-xl">welcome!</h1>
       <h2 class="text-center font-bold text-xl">Register</h2>


        <form method="POST" action="/register" class="mt-10">

         @csrf

            {{-- name --}}
            <div class="mb-6">
               <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-900">name</label>
               <input type="text" id="name" name="name" required class="border border-gray-400 p-2 w-full">
             </div>

             {{-- username --}}
             <div class="mb-6">
                <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-900">username</label>
                <input type="text" id="username" name="username" required class="border border-gray-400 p-2 w-full">
              </div>
 

          {{-- email --}}
          <div class="mb-6"> 
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-900">email</label>
            <input type="email" id="email" name="email" required class="border border-gray-400 p-2 w-full">
          </div>
 


          {{-- pass --}}
          <div class="mb-6"> 
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-900">password</label>
            <input type="password" id="password" name="password" required class="border border-gray-400 p-2 w-full">
          </div>
 


           {{-- submit --}}

           <div class="mb-6"> 
            <button type="submit" required class="text-center border border-gray-400 hover:bg-gray-700 bg-blue-100 p-2 text-white rounded">
              Submit
            </button>
        
        </div>






        </form>

        </main>
    </section>


</x-layout>
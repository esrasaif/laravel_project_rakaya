<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 border border-gray-300 bg-gray-100 p-6 rounded-xl ">
          
            <h1 class="text-center font-bold text-xl  text-blue-400">welcome!</h1>
                <h6 class="text-center text-xl mt-2">Log In </h6>


        <form method="POST" action="/logIn" class="mt-10">

         @csrf
          {{-- email --}}
          <div class="mb-6"> 
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-900">email</label>
            <input type="email" id="email" name="email"   value= "{{old('email')}}" class="border border-gray-400 p-2 w-full rounded-xl" placeholder="xxx@example.com"  required>
          
            @error('email')
            <p class= "text-red-300 text-xs mt-1">{{$message}}</p>
           @enderror
          
          </div>
 


          {{-- pass --}}
          <div class="mb-6"> 
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-900">password</label>
            <input type="password" id="password" name="password" required class="border border-gray-400 p-2 w-full rounded-xl" placeholder="********">
        
           @error('password')
            <p class= "text-red-300 text-xs mt-1">{{$message}}</p>
           @enderror
        
          </div>
 


           {{-- submit --}}

           <div class="mb-6  flex justify-center"> 
            <button type="submit" required class="text-center border border-gray-400 text-black hover:bg-gray-700  hover:text-white bg-blue-100 p-2 rounded-xl ">
              Log In
            </button>
        
        </div>






        </form>

        </main>
    </section>


</x-layout>
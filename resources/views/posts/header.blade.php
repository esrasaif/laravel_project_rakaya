<header class="max-w-xl mx-auto mt-20 text-center">

    {{-- <img src="\images\pexels-fauxels-3183165.jpg" alt="not found" class="w-screen z-1"> --}}

    <h1 class="text-2xl mb-4 mt-2">
        <span class="text-gray-500">SCITECH</span> 

      Where Science Meets Technology! Dive into our world where innovation thrives. Stay updated on the latest in science and technology with our engaging articles, reviews, and insights. From groundbreaking discoveries to futuristic gadgets, explore the wonders of SciTech and join our community of tech enthusiasts!    </h1>

    <div class="lg:space-y-0 lg:space-x-2  flex inline-flex">
        
        <!--  Category -->
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl ">

            {{-- here we make the dropdown list for categories in specific component--}}
                <x-category-dropdown>
                </x-category-dropdown>
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">
              
                @if (request('category'))
                   <input type="hidden" name="category"  value="{{request('category')}}">
                @endif

                <input type="text" name="search" placeholder="Find something"
                       class="border-none bg-transparent placeholder-black font-semibold text-sm"
                       value="{{request('search')}}"
                >
                  
            </form>
        </div>

    </div>


</header>
{{-- end header --}}
















{{-- 
         <!--  Category -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
            <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                <option value="category" disabled selected>Category
                </option>
                <option value="personal">Personal</option>
                <option value="business">Business</option>
            </select>

            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                 height="22" viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222"
                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
            </svg>
        </div>

    
    
    
    
    
    
    
    
    
    
    
    --}}
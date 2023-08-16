<!doctype html>

<title>MediScript</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
{{-- image in title bar --}}
<link rel="icon" type="image/x-icon" href="/images/tinywow_change_bg_photo_24059822.png">

{{-- flowbite --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />

{{-- alpine.js   javascript framework --}}
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>


<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center ">
            <div>
                <a href="/">
                    <img src="/images/tinywow_change_bg_photo_24059822.png" alt="mediscript Logo" width="250" height="64">
                </a>
            </div>


         <div class="mt-8 md:mt-0 flex items-center">

            @auth
             {{-- dropdown list --}}
             <x-dropdown>

                <x-slot name="trigger">   

                    <button  class= "flex inline-flex bg-gray-200 rounded-xl py-2 pl-3 pr-9 text-xs w-full font-semibold lg:w-32 text-left flex lg:inline-flex">
                        
                        <p class="text-gray-900">Wellcome {{auth()->user()->name}}</p>
                        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                                height="22" viewBox="0 0 22 22">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z"> </path>

                                    <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                                </g>
                          </svg> 
                    
                    </button>
            
                </x-slot>    
                
               @admin
                <x-dropdownItemStyle href="/admin/posts/createPost/" :active="request()->is('/admin/posts/createPost')">Add Post</x-dropdownItemStyle>
                <x-dropdownItemStyle href="/admin/posts" :active="request()->is('/admin/posts')">Dashboard</x-dropdownItemStyle>
                @endadmin

                <x-dropdownItemStyle href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</x-dropdownItemStyle>

                <form action="/logOut" id="logout-form" method="POST" class="text-xs font-bold uppercase " class="hidden">
                    @csrf
                 </form>



            </x-dropdown>

         

            @else   

            <a href="/register" class="bg-blue-900 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">Register</a>
            <a href="/logIn" class="bg-blue-900 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5" >Log In</a>

            @endauth

                <a href="#" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>

            </div>
        </nav>
         
        {{-- here flash messages --}}
        <x-flash/> 

        {{$slot}}




        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest Updates</h5>
            <p class="text-sm mt-3">keep up to date</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="#" class="lg:flex text-sm">
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" type="text" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
</body>
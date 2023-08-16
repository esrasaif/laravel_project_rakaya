<x-dropdown>
    {{-- trigg --}}

<x-slot name="trigger">   

        <button  class= "py-2 pl-3 pr-9 text-sm w-full font-semibold lg:w-32 text-left flex lg:inline-flex">
            {{isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}
               
            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                    height="22" viewBox="0 0 22 22">
                    <g fill="none" fill-rule="evenodd">
                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                        </path>
                        <path fill="#222"
                                d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                    </g>
              </svg> 
        
        </button>
 </x-slot>    

    {{-- links , here the value for slot in dropdown page --}}
    <x-dropdownItemStyle 
    href="/?{{ http_build_query( request()->except('category' , 'page') ) }}"
     :active="request()->routeIs('home') && is_null(request()->getQueryString())"  > 
     All </x-dropdownItemStyle>


      @foreach($categories as $category)

           <x-dropdownItemStyle
            {{-- href="/categories/{{$category->slug}}"       previouse mathod to display categories --}} 
            href="/?category={{$category->slug}}&{{http_build_query( request()->except('category','page') )}}" 

            :active='request()->fullUrlIs("*?category={$category->slug}*")' 
            >

            {{ucwords($category->name)}} 
            
           </x-dropdownItemStyle>

      @endforeach

</x-dropdown >




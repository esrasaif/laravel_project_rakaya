@props(['heading'])

<x-layout>
    <section class="px-6 py-8 max-w-4xl mx-auto">

        <h1 class="text-lg font-light text-xl  text-blue-900 font-bold border-b mb-8">{{$heading}}</h1>
     
    <div class="flex ">

        <aside class="w-64 rounded-xl p-6">
            <h4 class="font-bold mb-4">Navigations</h4>

            <ul>
             <li> <a href="/admin/posts/createPost" class="{{ request()->is('admin/posts/createPost') ? 'text-blue-900': '' }} ">Add Post</a>  </li>
             <li> <a href="/admin/Dashboard" class="{{ request()->is("admin/Dashboard") ? 'text-gray-900': '' }} " >Dashboard</a>  </li>
            </ul>

        </aside>

        <div class="flex-1">
                {{$slot}}
        </div>

    </div>

    </section>
</x-layout>
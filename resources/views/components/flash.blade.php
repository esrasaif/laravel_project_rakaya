@if(session()->has('success'))
<div

x-data="{ show: true }"
x-init="setTimeout( ()=> show = false,4000)"
x-show="show"
class="bg-green-300 p-3 border border-gray-100 text-center text-gray-800 w-full  flex justify-center rounded-xl mt-4  "

>
<p class=" ">{{session('success')}}</p>

</div>



@endif
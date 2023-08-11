@if(session()->has('success'))
<div

x-data="{ show: true }"
x-init="setTimeout( ()=> show = false,4000)"
x-show="show"
class="bg-green-100 p-3 border border-gray-100 text-center text-gray-800 w-96  flex justify-center rounded-xl mt-20"

>
<p class=" ">{{session('success')}}</p>

</div>



@endif
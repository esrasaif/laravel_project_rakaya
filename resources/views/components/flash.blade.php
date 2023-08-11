@if(session()->has('success'))
<div

x-data="{ show: true }"
x-init="setTimeout( ()=> show = false,4000)"
x-show="show"
class="bg-green-100 p-3 border border-gray-100 text-center text-white w-full rounded-xl mt-6"

>
<p>{{session('success')}}</p>

</div>



@endif
<div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-800 rounded-md md:w-4/5" data-aos="zoom-in">
    <div class="text-center mx-auto">
        <img src="{{url('/')}}/{{$image}}" alt="" class="rounded-lg h-[200px] mx-auto">
    </div>
    <p class="text-xl mt-5 text-center">
        {{$name}}
    </p>
    <p class="text-lg text-red-500 text-center my-5">
    </p>
    <div class="flex lg:flex flex-row justify-center">
        <button onclick="window.location.href='{{$url}}'"
            class="py-2 bg-gradient-to-r rounded-md shadow-md text-white px-10 mx-2 from-pink-500 to-yellow-600 hover:from-pink-600 hover:to-yellow-900 active:from-yellow-700 active:to-yellow-500">
            View Details
        </button>
    </div>
</div>
<div class="mx-auto w-full shadow-lg text-white p-5 bg-gray-900 rounded-md md:w-4/5" data-aos="zoom-in">
    <div class="text-center mx-auto">
        <img src="{{url('/')}}/{{ $url }}" alt="" class="rounded-lg h-[200px] mx-auto">
    </div>
    <p class="text-xl mt-5 text-center">
        {{ $name }}
    </p>
    <p class="text-lg text-red-500 text-center my-5">
        {{ $position }}
    </p>
    <div class="text-center mt-3 grid grid-cols-3 w-full gap-1">
        <div class="bg-purple-500 p-2 rounded-md cursor-pointer"onclick="window.location.href='#'">
            <img src="{{url('/')}}/assets/images/facebook.png" alt="" srcset=""
                class="h-6 mx-auto">
        </div>
        <div class="bg-purple-500 p-2 rounded-md cursor-pointer"onclick="window.location.href='#'">
            <img src="{{url('/')}}/assets/images/whatsapp.png" alt="" srcset=""
                class="h-6 mx-auto">
        </div>
        <div class="bg-purple-500 p-2 rounded-md cursor-pointer"onclick="window.location.href='#'">
            <img src="{{url('/')}}/assets/images/gmail.png" alt="" srcset="" class="h-6 mx-auto">
        </div>
    </div>
</div>
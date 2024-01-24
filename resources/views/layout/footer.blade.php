{{-- Creating footer --}}
<footer class="bg-gray-800 text-white">
    <div
        class="grid px-3 grid-cols-2 lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 lg:px-24 py-32 border-b-[1px] border-gray-500">
        {{-- footer branding --}}
        <div class="flex flex-col justify-between mx-auto">
            <div>
                <img src="{{url('/')}}/assets/images/fec-logo.jpeg" class="h-32 mx-auto">
            </div>
            <div class="py-3">
                <p class="text-2xl text-purple-400 mb-3">
                    FEC
                </p>
                <small class="text-lg text-justify">
                    Innovate, Create, Transform: That's Engineering
                </small>
            </div>
        </div>
        {{-- Links in footer --}}
        <div class="flex flex-col">
            <p class="font-bold text-2xl mx-auto">
                Links
            </p>
            <p class="text-md mx-auto py-3">
                <a href="#home" class="hover:text-blue-500">Home</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="#about" class="hover:text-blue-500">About</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="#administration" class="hover:text-blue-500">Administration</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="#clubs" class="hover:text-blue-500">Clubs</a>
            </p>
        </div>
        <div class="flex flex-col">
            <p class="font-bold text-2xl mx-auto">
                Solution
            </p>
            <p class="text-md mx-auto py-3">
                <a href="#home" class="hover:text-blue-500">Home</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="#about" class="hover:text-blue-500">About</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="#administration" class="hover:text-blue-500">Administration</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="#clubs" class="hover:text-blue-500">Clubs</a>
            </p>
        </div>
        <div class="flex flex-col">
            <p class="font-bold text-2xl mx-auto">
                Important
            </p>
            <p class="text-md mx-auto py-3">
                <a href="#home" class="hover:text-blue-500">Home</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="#about" class="hover:text-blue-500">About</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="#administration" class="hover:text-blue-500">Administration</a>
            </p>
            <p class="text-md mx-auto py-3">
                <a href="#clubs" class="hover:text-blue-500">Clubs</a>
            </p>
        </div>
    </div>
    <div class="text-center text-sm py-3">
        All rights reserved &copy;{{ date('Y') }}. Developed By <a href="https://github.com/Jakiur1234">AJDM Jakiur
            Rahman.</a>
    </div>
</footer>
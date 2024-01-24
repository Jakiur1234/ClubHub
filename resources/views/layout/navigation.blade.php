{{-- Create a navbar --}}
<nav class="bg-gray-900 p-3 fixed top-0 w-full flex justify-between font-sans border-b-1 border-white z-10 shadow-xl">
    {{-- Branding section --}}
    <div class="flex items-center justify-start">
        <img src="{{ url('/')}}/assets/images/fec-logo.jpeg" class="w-auto h-10">
        <span class="text-white justify-start px-5 py-1 text-2xl cursor-pointer">
            FEC
        </span>
    </div>
    {{-- Menubar for mobile --}}
    <div class="lg:hidden">
        <button id="nav-toggle" class="text-white text-3xl focus:outline-none">
            <span id="icon">&#9776;</span>
        </button>
    </div>
    {{-- All menu for desktop --}}
    <ul class="hidden lg:flex flex-row justify-center">
        <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
            <a href="#home">
                Home
            </a>
        </li>
        <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
            <a href="#about">
                About
            </a>
        </li>
        <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
            <a href="#administration">
                Administration
            </a>
        </li>
        <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
            <a href="#clubs">
                Clubs
            </a>
        </li>
    </ul>

    {{-- Navbar design for mobile --}}

    <div id="mobile-menu" class="hidden lg:hidden absolute top-full left-0 w-full bg-gray-900 shadow-lg">
        <ul class="flex flex-col items-center">
            <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
                <a href="#home">
                    Home
                </a>
            </li>
            <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
                <a href="#about">
                    About
                </a>
            </li>
            <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
                <a href="#administration">
                    Administration
                </a>
            </li>
            <li class="cursor-pointer text-white px-5 py-2 hover:text-blue-500">
                <a href="#clubs">
                    Clubs
                </a>
            </li>
        </ul>
    </div>

</nav>

{{-- Script for toggle the menu on mobile phone --}}
<script>
    const navToggle = document.getElementById('nav-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const icon = document.getElementById('icon');

    navToggle.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
        // Toggle the icon between hamburger and cross
        icon.innerHTML = mobileMenu.classList.contains('hidden') ? '&#9776;' : '&#10005;';
    });
</script>
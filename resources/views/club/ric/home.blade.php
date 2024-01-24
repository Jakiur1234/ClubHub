@extends('club.ric.app');
@section('document-title')
RIC - Research and innovation center
@endsection
@section('body-section')
{{-- <!---Hero Section---> --}}
<section class="hero-section bg-slate-400 min-h-full text-white p-5" id="home">
    <div class="container mx-auto">
        <div class="relative w-full items-center p-0 xl:p-12 grid grid-cols-1 xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1">
            <div>
                <p class="my-3 text-3xl md:text-6xl" data-aos="fade-up">
                    Welcome to
                </p>
                <p class="my-3 text-5xl md:text-5xl subpixel-antialiased font-bold text-blue-500" data-aos="fade-up">
                    Faridpur Engineering College
                </p>
                <p class="text-lg md:text-xl subpixel-antialiased my-3" data-aos="fade-down">
                    Innovate, Create, Transform: That's Engineering
                </p>
                <button onclick="window.location.href='#about'"
                    class="my-5 px-10 py-3 bg-blue-700 rounded-md hover:bg-blue-600 active:bg-blue-500"
                    data-aos="fade-down">
                    Get Started
                </button>
            </div>
            <div data-aos=""="fade-down">
                <img src="{{url('/')}}/assets/images/fec.jpeg" alt="">
            </div>
        </div>
    </div>
</section>

{{-- <!---About Section---> --}}
<section class="hero-section bg-gray-900 min-h-full text-white p-5" id="about">
    <div class="container mx-auto">
        <div class="relative w-full items-center p-0 xl:p-12 grid grid-cols-1 xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1">
            <div data-aos="fade-down">
                <!-- Video Background -->
                <video autoplay muted loop class="md:h-96 w-full object-cover">
                    <source src="{{url('/')}}/assets/videos/background-video.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <!-- End Video Background -->
            </div>
            <div class="p-5 md:px-10">
                <div class="text-3xl text-blue-500" data-aos="fade-down">About Us</div>
                <ul class="list-disc text-lg md:px-5 md:my-5">
                    <li class="my-2 md:my-3" data-aos="fade-up">
                        Faridpur Engineering College, a public institution in Faridpur, offers 3 Bachelor of Science degrees: Civil, Electrical & Electronic, and Computer Science Engineering.
                    </li>
                    <li class="my-2 md:my-3" data-aos="fade-up">
                        Located 2.7 km from city center, the college boasts modern facilities like library, computer lab, and well-equipped labs/workshops.
                    </li>
                    <li class="my-2 md:my-3" data-aos="fade-up">
                        With 180 seats and currently 750 students, it provides merit scholarships to half its student body.
                    </li>
                    <li class="my-2 md:my-3" data-aos="fade-up">
                        The campus features 1 administrative building, 3 academic buildings, 2 dormitories, a canteen, and more.
                    </li>
                  </ul>
            </div>
        </div>
    </div>
</section>

{{-- <!--Administration section--> --}}
<section class="examiners bg-gray-800 px-5 pt-10 pb-10" id="administration">
    <div class="container mx-auto">
        <div class="text-4xl text-center my-10 text-purple-500" data-aos="fade-down">
            Administration
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-y-5">
            {{--- Use the card to view the components ---}}
            <x-teacher-card name="Professor Dr. Engr. M. Mizanur Rahman" position="Principal - Faridpur Engineering College" url="assets/images/principal.jpeg" />
            <x-teacher-card name="Professor Dr. Engr. M. Mizanur Rahman" position="Head of CSE Department - FEC" url="assets/images/cse-head.jpeg" />
            <x-teacher-card name="Professor Dr. Engr. M. Mizanur Rahman" position="Head of EEE Department - FEC" url="assets/images/eee-head.jpeg" />
            <x-teacher-card name="Professor Dr. Engr. M. Mizanur Rahman" position="Head of CE Department - FEC" url="assets/images/civil-head.jpeg" />
        </div>
    </div>
</section>

<!--Students Review Section -->
<section class="review bg-gray-900 pb-10 pt-10 px-5" id="clubs">
    <div class="container mx-auto">
        <div class="text-center text-white my-3 p-3 text-4xl" data-aos="fade-up">
            Our Clubs - We are here
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 sm:grid-cols-1 justify-center">
            <x-club-card name="Research And Innovation Centre (RIC)" url="{{route('ric-home')}}" image="assets/images/ric.jpeg" />
            <x-club-card name="Faridpur Engineering College Photographic Club (FECPC)" url="{{route('fecpc-home')}}" image="assets/images/photo.jpeg" />
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 md:mt-5 sm:grid-cols-1 justify-center">
            <x-club-card name="Faridpur Engineering College Programming Club (FECPC)" url="{{route('fecpc-home')}}" image="assets/images/program.jpeg" />
            <x-club-card name="Faridpur Engineering College Sport Association (FECSSA)" url="{{route('fecsa-home')}}" image="assets/images/fecsa.jpeg" />
        </div>
    </div>
</section>
@endsection
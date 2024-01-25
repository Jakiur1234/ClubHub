@extends('club.fecpc.app');
@section('document-title')
FECPC - Faridpur Engineering College Photographic Club
@endsection
@section('style')
<style>
    #home{
        background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('{{url("/")}}/assets/images/fecpc.jpeg');
        background-repeat: no-repeat;
        background-position: center;
    }
</style>
@endsection
@section('body-section')
{{-- <!---Hero Section---> --}}
<section class="hero-section bg-slate-900 min-h-screen text-white p-5 flex items-center" id="home">
    <div class="container mx-auto">
        <div class="relative w-full p-0 xl:p-12 text-center">
            <div>
                <p class="my-3 text-3xl md:text-6xl" data-aos="fade-up">
                    Welcome to
                </p>
                <p class="my-3 text-5xl md:text-5xl subpixel-antialiased font-bold text-blue-500" data-aos="fade-up">
                    Faridpur Engineering College Photographic Club <br />
                    - ( FECPC )
                </p>
                <p class="text-lg md:text-xl subpixel-antialiased my-3" data-aos="fade-down">
                    Explore, Create, Inspire
                </p>
                <button onclick="window.location.href='#about'"
                    class="my-5 px-10 py-3 bg-blue-700 rounded-md hover:bg-blue-600 active:bg-blue-500"
                    data-aos="fade-down">
                    Get Started
                </button>
            </div>
        </div>
    </div>
</section>


{{-- <!---About Section---> --}}
<section class="hero-section bg-gray-900 text-white p-5" id="about">
    <div class="container mx-auto">
        <div class="relative w-full items-center p-0 xl:p-12 grid grid-cols-1 xl:grid-cols-2 lg:grid-cols-2 md:grid-cols-2 sm:grid-cols-1">
            <div data-aos=""="fade-down">
                <img src="{{url('/')}}/assets/images/fecb.jpeg" alt="">
            </div>
            <div class="p-5 md:px-10">
                <div class="text-3xl text-blue-500" data-aos="fade-down">About FECPC</div>
                <ul class="list-disc text-lg md:px-5 md:my-10">
                    <li class="my-2 md:my-5" data-aos="fade-up">
                        Define your focus: Nature, street, portraits? Know your storytelling style.
                    </li>
                    <li class="my-2 md:my-5" data-aos="fade-up">
                        Shoot, edit, repeat: Practice, experiment, refine - be a lifelong learner.
                    </li>
                    <li class="my-2 md:my-5" data-aos="fade-up">
                        Compose like a pro: Frame your story, guide the eye, make it sing.

                    </li>
                    <li class="my-2 md:my-5" data-aos="fade-up">
                        Master the basics: Light, angles, settings - unlock your camera's potential.
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
            <x-teacher-card name="Akash Datta" position="President" url="assets/images/image.jpeg" />
            <x-teacher-card name="Shakil Ahmed Sabuj" position="Vice President" url="assets/images/image.jpeg" />
            <x-teacher-card name="Shakhawat Hossain" position="Vice President" url="assets/images/image.jpeg" />
            <x-teacher-card name="Ishraq Enam" position="Vice President" url="assets/images/image.jpeg" />
        </div>
    </div>
</section>

<!--Students Review Section -->
<section class="review bg-gray-900 pb-10 pt-10 px-5" id="events">
    <div class="container mx-auto">
        <div class="text-center text-white my-3 p-3 text-4xl" data-aos="fade-up">
            Events - Ongoing
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 sm:grid-cols-1 justify-center">
            <x-club-card name="Ongoing Event 1" url="{{route('ric-events')}}" image="assets/images/ongoing.jpeg" />
            <x-club-card name="Ongoing Event 2" url="{{route('ric-events')}}" image="assets/images/ongoing.jpeg" />
        </div>
        <div class="text-center text-white my-10 mb-3 p-3 text-4xl" data-aos="fade-up">
            Events - Upcoming
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 sm:grid-cols-1 justify-center">
            <x-club-card name="Coming soon 1" url="{{route('ric-events')}}" image="assets/images/coming-soon.jpeg" />
            <x-club-card name="Coming soon 2" url="{{route('ric-events')}}" image="assets/images/coming-soon.jpeg" />
        </div>
        <div class="text-center text-white my-10 mb-3 p-3 text-4xl" data-aos="fade-up">
            Events - Previous
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 sm:grid-cols-1 justify-center">
            <x-club-card name="Previous Event 1" url="{{route('ric-events')}}" image="assets/images/past.jpeg" />
            <x-club-card name="Previous Event 2" url="{{route('ric-events')}}" image="assets/images/past.jpeg" />
        </div>
    </div>
</section>

{{-- <!--Administration section--> --}}
<section class="examiners bg-gray-800 px-5 pt-10 pb-10" id="achievement">
    <div class="container mx-auto">
        <div class="text-4xl text-center my-10 text-purple-500" data-aos="fade-down">
            Achievement
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-y-5">
            {{--- Use the card to view the components ---}}
            <x-achievement image="assets/images/ach.jpeg" description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut mauris aliquet, ultrices ex vitae, interdum ipsum. Integer sagittis nisl vel tortor elementum, nec mattis massa accumsan. Maecenas vestibulum sem non luctus mattis. Sed lectus velit, ultricies eu fermentum nec, efficitur sed tortor. Integer quis iaculis justo, et rhoncus justo. " />
            <x-achievement image="assets/images/ach.jpeg"  description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut mauris aliquet, ultrices ex vitae, interdum ipsum. Integer sagittis nisl vel tortor elementum, nec mattis massa accumsan. Maecenas vestibulum sem non luctus mattis. Sed lectus velit, ultricies eu fermentum nec, efficitur sed tortor. Integer quis iaculis justo, et rhoncus justo. " />
            <x-achievement image="assets/images/ach.jpeg"  description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut mauris aliquet, ultrices ex vitae, interdum ipsum. Integer sagittis nisl vel tortor elementum, nec mattis massa accumsan. Maecenas vestibulum sem non luctus mattis. Sed lectus velit, ultricies eu fermentum nec, efficitur sed tortor. Integer quis iaculis justo, et rhoncus justo. " />
            <x-achievement image="assets/images/ach.jpeg" description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut mauris aliquet, ultrices ex vitae, interdum ipsum. Integer sagittis nisl vel tortor elementum, nec mattis massa accumsan. Maecenas vestibulum sem non luctus mattis. Sed lectus velit, ultricies eu fermentum nec, efficitur sed tortor. Integer quis iaculis justo, et rhoncus justo. " />
            <x-achievement image="assets/images/ach.jpeg"  description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut mauris aliquet, ultrices ex vitae, interdum ipsum. Integer sagittis nisl vel tortor elementum, nec mattis massa accumsan. Maecenas vestibulum sem non luctus mattis. Sed lectus velit, ultricies eu fermentum nec, efficitur sed tortor. Integer quis iaculis justo, et rhoncus justo. " />
            <x-achievement image="assets/images/ach.jpeg"  description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut mauris aliquet, ultrices ex vitae, interdum ipsum. Integer sagittis nisl vel tortor elementum, nec mattis massa accumsan. Maecenas vestibulum sem non luctus mattis. Sed lectus velit, ultricies eu fermentum nec, efficitur sed tortor. Integer quis iaculis justo, et rhoncus justo. " />
        </div>
    </div>
</section>
@endsection
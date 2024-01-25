@extends('club.ric.app')
@section('document-title')
    Event - RIC
@endsection
@section('style')
    <style>
        #nav{
            display: none;
        }
    </style>
@endsection
@section('body-section')
    <section class="hero-section bg-slate-700 min-h-screen text-white p-5" id="home">
        <div class="container mx-auto">
            <div class="w-full p-0 xl:p-5">
                <div>
                    <p class="text-xl text-center mt-3 underline hover:underline-offset-1 mb-5">
                        The event title goes here. Here is the event title :
                    </p>
                    <p class="text-justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ut mauris aliquet, ultrices ex
                        vitae, interdum ipsum. Integer sagittis nisl vel tortor elementum, nec mattis massa accumsan.
                        Maecenas vestibulum sem non luctus mattis. Sed lectus velit, ultricies eu fermentum nec, efficitur
                        sed tortor. Integer quis iaculis justo, et rhoncus justo. Ut mollis eget nunc quis faucibus. Duis
                        tortor arcu, gravida ac vehicula ut, sollicitudin vitae felis. Quisque dignissim lacus ac turpis
                        vulputate condimentum. Fusce dignissim ante ac blandit maximus.
                        <br />
                        <br />
                        Nunc ut sollicitudin elit, eget maximus turpis. Nam sit amet libero non diam iaculis pretium ut in
                        ex. Cras nec urna non libero pulvinar vestibulum et consectetur dui. Ut commodo, nulla vitae aliquam
                        congue, arcu neque placerat justo, sed molestie ante ipsum a nisl. Sed tincidunt elit tortor, at
                        fringilla lorem fermentum quis. Nunc sodales vel sem nec lacinia. Ut ac molestie nulla. Nullam at
                        sapien lacinia, imperdiet purus eu, hendrerit felis. Praesent blandit suscipit hendrerit. Aliquam
                        nec velit sapien. Proin porta molestie est, vel lobortis elit vehicula in. Pellentesque commodo eget
                        arcu eget placerat.
                        <br />
                        <br />
                        Duis ornare viverra imperdiet. Proin imperdiet rhoncus est, sit amet feugiat nisl bibendum eget.
                        Morbi ultricies pulvinar nunc, in gravida nibh ullamcorper at. Phasellus consectetur iaculis
                        iaculis. Aenean orci sem, iaculis vitae libero vel, malesuada porttitor urna. Ut vitae sodales
                        ligula. Aenean pellentesque erat ac tempus fringilla. Aenean sed libero pellentesque, interdum
                        mauris vel, ultricies sapien. Phasellus consequat mi sem, vitae tristique risus ullamcorper non.
                        Praesent nec quam luctus, cursus massa ac, semper lorem. Donec lobortis massa nec suscipit dictum.
                        Phasellus tristique libero a fermentum facilisis. Nulla imperdiet consequat dui, a ornare libero
                        tempor et. Maecenas non condimentum massa.
                        <br />
                        <p class="text-center">
                            <img src="{{url('/')}}/assets/images/event-common.jpeg" alt="" class="inline-block">
                        </p>
                        <br />
                        Phasellus vitae aliquet lorem, bibendum sodales mauris. Mauris justo neque, efficitur in
                        sollicitudin ut, commodo porta felis. Aenean non neque eros. Donec iaculis turpis sed magna
                        imperdiet convallis. Integer semper fringilla dui ac hendrerit. Phasellus turpis mauris, elementum
                        quis eleifend sed, eleifend quis nulla. Donec venenatis consectetur ipsum, id euismod arcu eleifend
                        ut. Fusce hendrerit, turpis eu maximus rhoncus, neque magna eleifend massa, non sagittis ligula est
                        sit amet tellus. Etiam quis est sed turpis tempor luctus ut in urna. Aliquam nisi dui, venenatis
                        eget semper eget, auctor sit amet risus. Vestibulum finibus convallis quam id fermentum.
                        <br />
                        <br />
                        Nulla vel tristique mi. Vestibulum eget commodo justo, congue blandit ante. Donec dictum luctus
                        elementum. Donec vulputate fermentum laoreet. Praesent ut placerat dui. Aliquam in velit justo.
                        Proin in metus enim. Nulla volutpat id nisl vitae ultrices. Ut luctus vestibulum finibus. Mauris
                        luctus eget dolor id pulvinar. Suspendisse ornare in lectus vitae ultrices. Aliquam nec imperdiet
                        lacus, in rutrum purus. Nam elementum, turpis ac condimentum dictum, urna justo varius est, eu
                        molestie lacus leo eget odio. Praesent vitae sem nisi. Nunc sed gravida tortor.
                        <p class="text-center">
                            <img src="{{url('/')}}/assets/images/event-common.jpeg" alt="" class="inline-block">
                        </p>
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed
                        quis sapien porttitor, sagittis urna in, convallis magna. In auctor nisi eu molestie interdum. In
                        quis metus leo. Phasellus vitae dolor velit. Maecenas lacus arcu, vulputate a neque vitae,
                        sollicitudin mollis orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                        ridiculus mus. Curabitur iaculis sagittis risus non semper. Fusce ac velit ac erat mattis ornare
                        quis ut tellus. Cras nisl tortor, convallis vitae pharetra ac, posuere sit amet lacus. Aenean tellus
                        tortor, porta vel velit eu, eleifend fringilla mauris. Sed finibus ante eget magna ornare placerat.
                        Aliquam erat volutpat. Cras nisi est, blandit quis faucibus quis, consectetur in mauris. Fusce
                        blandit mauris non ex consequat, fringilla blandit mi bibendum. Cras sit amet pretium risus.
                        <br />
                        <br />
                        Nullam et volutpat ligula. Aliquam euismod mi vitae malesuada aliquam. Nunc vitae lacinia nisi.
                        Praesent condimentum, ligula vitae malesuada scelerisque, velit arcu convallis nisi, et vestibulum
                        nulla velit a sem. Nulla ut orci viverra dolor sagittis sodales vel vel arcu. Aliquam at purus
                        ipsum. In sed enim tincidunt, vehicula massa vel, rutrum enim. Pellentesque molestie ac felis at
                        efficitur. Suspendisse venenatis fringilla odio, eget vulputate arcu dictum eget. Quisque et tellus
                        convallis, cursus tortor nec, semper urna. Integer id eros non velit viverra laoreet. Aliquam
                        consectetur, ipsum vitae consectetur rutrum, nunc quam varius sem, ut ullamcorper risus orci in
                        diam. Pellentesque euismod tellus vel massa molestie, sit amet eleifend orci dignissim.
                        <br />
                        <br />
                        Mauris lobortis dictum sapien at facilisis. Etiam vehicula lectus at lorem ornare, at iaculis ex
                        ultrices. In a erat ut ligula finibus vehicula quis eu nibh. Vestibulum iaculis lectus porttitor
                        eleifend posuere. Fusce ut velit sollicitudin, tristique eros at, interdum orci. Aenean semper dolor
                        eros, ac luctus magna laoreet quis. Donec pulvinar libero eu cursus aliquet. Aenean feugiat lobortis
                        dolor, venenatis dictum ipsum iaculis id. Nunc egestas eu odio non mattis. Nunc eget massa quis eros
                        volutpat imperdiet.
                        <br />
                        <br />
                        Nunc sapien orci, rhoncus vel augue a, venenatis congue lectus. Aenean consectetur arcu non ornare
                        lobortis. Fusce fermentum ornare neque. Pellentesque vehicula enim quis turpis luctus hendrerit.
                        Proin pharetra ipsum eget quam dictum gravida. In nec nisi in massa ullamcorper vestibulum. Fusce
                        pretium, dui convallis lacinia eleifend, mi erat congue mauris, nec tincidunt tellus dolor in nunc.
                        Proin sed tellus magna. Sed rhoncus ante vel fermentum fermentum. Etiam vitae gravida lectus, vitae
                        hendrerit felis. Aenean congue vestibulum ultricies. Maecenas a massa eros. Sed congue sagittis
                        porta. Vestibulum ultricies velit et elit aliquet facilisis. Aliquam volutpat congue velit in
                        fringilla. Quisque blandit viverra dolor, sed dignissim lorem accumsan quis.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

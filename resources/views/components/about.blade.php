{{-- About Us --}}
<section class="h-screen flex items-center justify-center bg-slate-100 relative my-10 py-10" id="about">
    <h1 class=" text-center pb-8 text-slate-700 uppercase text-shadow-md font-bold text-5xl 
    tracking-wider absolute top-10 left-1/2 transform -translate-x-1/2"
        style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
        <span class="text-green-500">about</span> us
    </h1>

    <div class="flex items-center justify-center">
        <div class="font-poppins">
            <h3 class="text-5xl font-poppins text-slate-700 leading-12"
                style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">We Take Care of Your Healthy Life</h3>
            <p class="text-1xl text-light-color leading-8 py-4">Lorem Ipsum Dolor Sit Amet Consectetur, Adipisicing Elit.
                Iure Ducimus, Quod Ex Cupiditate Ullam In
                Assumenda Maiores Et Culpa Odit Tempora Ipsam Qui, Quisquam Quis Facere Iste Fuga, Minus Nesciunt.</p>
            <p class="text-1xl text-light-color leading-8 py-4">Lorem Ipsum Dolor, Sit Amet Consectetur Adipisicing Elit. Natus Vero Ipsam Laborum Porro Voluptates
                Voluptatibus A Nihil Temporibus Deserunt Vel?</p>
            <div class="basis-1/4 flex justify-start">
                @include('components.button', ['route' => '#', 'name' => 'Learn'])
            </div>
        </div>
        <div class="w-full h-full">
            <img src="assets/images/about-img.svg" alt="about-img" class="w-455px h-455px object-cover">
        </div>
    </div>
</section>

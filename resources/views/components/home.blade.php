{{-- Home --}}
<section class="h-screen flex items-center justify-center" id="home">
    <div class="flex items-center justify-center">
        <div class="w-full h-full">
            <img src="assets/images/home-img.svg" alt="home-img.svg" class="w-full h-full object-cover">
        </div>
        <div class="ml-4">
            <h3 class="text-5xl font-poppins text-slate-700 leading-12" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Stay Safe, Stay Healthy</h3>
            <p class="text-1xl text-light-color leading-8 py-4">Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit.
                Rem Sed Autem Vero? Magnam, Est Laboriosam!</p>
            <div class="basis-1/4 flex justify-start">
                @include('components.button', ['route' => '#about', 'name' => 'About'])
            </div>
        </div>
    </div>
</section>

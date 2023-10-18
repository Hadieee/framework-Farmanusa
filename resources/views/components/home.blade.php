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
            {{-- <a href="{{ route('login') }}" class="group relative bg-blue-900 px-8 py-4 w-36 rounded-lg font-bold flex justify-center gap-4 hover:scale-105 group/expand-hover:px-10 hover:bg-blue-800 transition ease-in">
                <p class="invisible">Portal</p>
                <p class="absolute text-white group-hover:-translate-x-[40%] transition ease-out">Login</p>
                <span class="absolute invisible group-hover:visible group-hover:inline-block group-hover:translate-x-[150%] transition ease-out ">
                    <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M647-440H200q-17 0-28.5-11.5T160-480q0-17 11.5-28.5T200-520h447L451-716q-12-12-11.5-28t12.5-28q12-11 28-11.5t28 11.5l264 264q6 6 8.5 13t2.5 15q0 8-2.5 15t-8.5 13L508-188q-11 11-27.5 11T452-188q-12-12-12-28.5t12-28.5l195-195Z"/></svg>
                </span>
            </a> --}}
        </div>
    </div>
</section>

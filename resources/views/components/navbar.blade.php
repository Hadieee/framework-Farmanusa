{{-- Navigation Bar --}}
<nav class="flex flex-row justify-between items-center p-3 bg-white z-10 top-0 border-b border-gray-300 shadow-lg">
    <div class="flex items-center">
        <a href="#" class="flex items-center">
            <img src="{{ asset('assets/images/heart-health-48.png') }}" alt="Logo Farmanusa" class="w-fit h-10">
            <span class="ml-2 font-sans text-2xl">Farmanusa</span>
        </a>
    </div>
    <ul class="flex flex-row gap-12 font-sans text-center text-xl transition duration-200 ease-out">
        <li><a href="#home" class="hover:text-green-500">Home</a></li>
        <li><a href="#about" class="hover:text-green-500">About</a></li>
        <li><a href="#recipe" class="hover:text-green-500">Drug Recipe</a></li>
        <li><a href="#pharmacist" class="hover:text-green-500">Pharmacist</a></li>
    </ul>
    <div class="flex items-center">
        @include('components.button', ['route' => '#', 'name' => 'Login'])
    </div>
</nav>

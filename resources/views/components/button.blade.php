<a href="{{ $route}}"
    class="group relative bg-white px-8 py-4 w-36 rounded-lg font-bold flex
    justify-center gap-4 hover:scale-105 group/expand-hover:px-10 hover:bg-green-500
    transition ease-in border border-green-500">
    <p class="invisible">{{ $name }}</p>
    <p class="absolute text-green-500 group-hover: transition ease-out group-hover:text-white">{{ $name }}</p>

    <span
        class="absolute invisible group-hover:visible group-hover:inline-block group-
hover:translate-x-[150%] transition ease-out ">

        <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -
960 960 960" width="24">
<path d="M647-440H200q-17 0-28.5-11.5T160-480q0-17 11.5-28.5T200-520h447l-194-196q-12-12-12-28t12-28q12-11 28-11.5t28 11.5l264 264q6 6 8.5 13t2.5 15q0 8-2.5 15t-8.5 13l-264 264q-11 11-27.5 11T452-188q-12-12-12-28.5t12-28.5l195-195Z" />

        </svg>
    </span>
</a>

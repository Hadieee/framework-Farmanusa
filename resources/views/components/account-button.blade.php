<div class="relative">
    <button onclick="
        document.querySelector('#drop-down').classList.toggle('hidden');
        document.querySelector('#icon-more').classList.toggle('hidden');
        document.querySelector('#icon-less').classList.toggle('hidden');
        " class="group px-8 flex items-center gap-x-4" title="Account Center">
        <div class="w-12 h-12 rounded-full overflow-hidden group-hover:scale-105 transition">
            <img src="https://avatars.githubusercontent.com/{{ Auth::user()->username }}" alt="" class="object-cover ">
        </div>
        <div>
            <p class="text-white">{{ strtok(Auth::user()->name, ' ') }}</p>
        </div>
        <div class="w-6 h-6">
            <svg id="icon-more" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" class="block"><path d="M480-345 240-585l56-56 184 184 184-184 56 56-240 240Z"/></svg>
            <svg id="icon-less" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" class="hidden"><path d="m296-345-56-56 240-240 240 240-56 56-184-184-184 184Z"/></svg>
        </div>
    </button>
    <div id="drop-down" class="hidden w-full absolute z-10 mt-4 bg-white flex-col divide-y-2 shadow-md rounded-b-md overflow-hidden">
        <a href="{{ route('logout') }}" onclick="return confirm('Are you sure?')" class="flex p-4 gap-2 hover:bg-slate-50">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" class="fill-gray-400"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>
            Keluar
        </a>
    </div>
</div>

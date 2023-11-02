<div class="w-[400px] bg-green-600">
    <div class="fixed h-full p-4 flex flex-col justify-between">
        <div>
            @include('components.account-button')
        </div>
        <div class="">
            <a href="{{ route('staff.dashboard') }}"
                class="flex gap-4 items-center p-4 rounded-md hover:bg-green-700  transition ease-out duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="w-8 h-8 fill-white">
                    <path
                        d="M520-640v-160q0-17 11.5-28.5T560-840h240q17 0 28.5 11.5T840-800v160q0 17-11.5 28.5T800-600H560q-17 0-28.5-11.5T520-640ZM120-480v-320q0-17 11.5-28.5T160-840h240q17 0 28.5 11.5T440-800v320q0 17-11.5 28.5T400-440H160q-17 0-28.5-11.5T120-480Zm400 320v-320q0-17 11.5-28.5T560-520h240q17 0 28.5 11.5T840-480v320q0 17-11.5 28.5T800-120H560q-17 0-28.5-11.5T520-160Zm-400 0v-160q0-17 11.5-28.5T160-360h240q17 0 28.5 11.5T440-320v160q0 17-11.5 28.5T400-120H160q-17 0-28.5-11.5T120-160Zm80-360h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z" />
                </svg>
                <p class="text-xl font-medium text-white">Dashboard</p>
            </a>
            <a href="{{ route('staff.apoteker') }}"
                class="flex gap-4 items-center p-4 rounded-md hover:bg-green-700  transition ease-out duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="w-8 h-8 fill-white">
                    <path
                        d="M242-249q-20-11-31-29.5T200-320v-192l-96-53q-11-6-16-15t-5-20q0-11 5-20t16-15l338-184q9-5 18.5-7.5T480-829q10 0 19.5 2.5T518-819l381 208q10 5 15.5 14.5T920-576v256q0 17-11.5 28.5T880-280q-17 0-28.5-11.5T840-320v-236l-80 44v192q0 23-11 41.5T718-249L518-141q-9 5-18.5 7.5T480-131q-10 0-19.5-2.5T442-141L242-249Zm238-203 274-148-274-148-274 148 274 148Zm0 241 200-108v-151l-161 89q-9 5-19 7.5t-20 2.5q-10 0-20-2.5t-19-7.5l-161-89v151l200 108Zm0-241Zm0 121Zm0 0Z" />
                </svg>
                <p class="text-xl font-medium text-white">Apoteker</p>
            </a>
            <a href="{{ route('staff.resep') }}"
                class="flex gap-4 items-center p-4 rounded-md hover:bg-green-700  transition ease-out duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" class="w-8 h-8 fill-white">
                    <path
                        d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                </svg>
                <p class="text-xl font-medium text-white">Resep Obat</p>
            </a>
        </div>
    </div>
</div>

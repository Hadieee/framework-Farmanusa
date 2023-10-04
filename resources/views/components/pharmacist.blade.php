{{-- Pharmacist --}}
<section class=" h-auto flex items-center justify-around relative bg-white my-10 py-10" id="pharmacist">
    <h1 class="text-center pb-8 text-5xl text-slate-700 uppercase font-bold relative z-10">
        Our<span class="text-green-500"> Pharmacist</span>
    </h1>
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-2 gap-8">
        @foreach ($pharmacist as $pharmacist)
            <div class="text-center rounded-lg shadow-lg p-8" style="border-width: 2px; border-color: #00C853;">
                <img src="assets/images/phar-1.jpg" alt="Pharmacist Experts" class="h-auto rounded-lg my-3"
                    style="border-width: 1px; border-color: #E0E0E0;">
                <h3 class="text-2xl font-bold text-black">{{ $pharmacist['nama'] }}</h3>
                <span class="text-lg text-green-500">Expert Pharmacist</span>
                <div class="mt-4 flex justify-center items-center space-x-4">
                    <img src="assets/images/icons8-facebook-48.png"
                        class="text-green-500 hover:text-white hover:bg-green-500 rounded-full w-auto 
            h-auto flex items-center justify-center"
                        style="border-width: 1px; border-color: #00C853;">

                    <img src="assets/images/icons8-twitter-48.png"
                        class="text-green-500 hover:text-white hover:bg-green-500 rounded-full w-auto 
            h-auto flex items-center justify-center"
                        style="border-width: 1px; border-color: #00C853;">

                    <img src="assets/images/icons8-linkedin-48.png"
                        class="text-green-500 hover:text-white hover:bg-green-500 rounded-full w-auto 
            h-auto flex items-center justify-center"
                        style="border-width: 1px; border-color: #00C853;">

                    <img src="assets/images/icons8-instagram-48.png"
                        class="text-green-500 hover:text-white hover:bg-green-500 rounded-full w-auto 
            h-auto flex items-center justify-center"
                        style="border-width: 1px; border-color: #00C853;">
                </div>
            </div>
        @endforeach
    </div>
</section>

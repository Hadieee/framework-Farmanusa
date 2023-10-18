{{-- Pharmacist --}}
<section class="h-auto flex flex-col items-center justify-center bg-slate-100 my-10 py-10" id="pharmacist">
    <h1 class="text-center text-5xl text-slate-700 uppercase font-bold mb-8">
        Our<span class="text-green-500"> Pharmacist</span>
    </h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
        @foreach ($apoteker as $pharmacist)
            <div class="text-center rounded-lg shadow-lg p-4">
                <img src="assets/images/phar-1.jpg" alt="Pharmacist Experts" class="rounded-lg my-2 w-full">
                <h3 class="text-2xl font-bold text-black">{{ $pharmacist->nama_apoteker }}</h3>
                <span class="text-lg text-green-500">Expert Pharmacist</span>
                <div class="mt-4 flex justify-center items-center space-x-4">
                    <img src="assets/images/icons8-facebook-48.png"
                        class="text-green-500 hover:text-white hover:bg-green-500 rounded-full w-10 h-10 p-2"
                        style="border: 2px solid #00C853;">

                    <img src="assets/images/icons8-twitter-48.png"
                        class="text-green-500 hover:text-white hover-bg-green-500 rounded-full w-10 h-10 p-2"
                        style="border: 2px solid #00C853;">

                    <img src="assets/images/icons8-linkedin-48.png"
                        class="text-green-500 hover:text-white hover:bg-green-500 rounded-full w-10 h-10 p-2"
                        style="border: 2px solid #00C853;">

                    <img src="assets/images/icons8-instagram-48.png"
                        class="text-green-500 hover:text-white hover:bg-green-500 rounded-full w-10 h-10 p-2"
                        style="border: 2px solid #00C853;">
                </div>
            </div>
        @endforeach
    </div>
</section>

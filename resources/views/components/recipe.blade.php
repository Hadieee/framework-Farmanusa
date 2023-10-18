<!-- Recipe -->
<section class="h-auto flex items-center justify-around relative bg-white my-10 py-10" id="recipe">
    <h2 class="text-center pb-8 text-4xl text-slate-700 font-bold uppercase relative z-10">
        Our<span class="text-green-500"> Drug Recipe </span>
    </h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach ($resep as $resep)
            <div class="bg-green-300 rounded-lg shadow-lg p-4">
                <h3 class="text-xl font-bold text-green-800">{{ $resep->nama_resep }}</h3>
                <p class="text-lg text-green-600">Nama Obat: {{ $resep->nama_obat }}</p>
                <p class="text-lg text-green-600">Jumlah Obat: {{ $resep->jumlah_obat }}</p>
            </div>
        @endforeach
    </div>
</section>

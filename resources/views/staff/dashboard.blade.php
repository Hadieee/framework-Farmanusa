@extends('layouts.global')
@section('title')
Dashboard - Staff
@endsection

@section('content')
<div class="w-full h-full flex">
    @include('components.sidebar')
    <div class="w-full h-screen flex gap-4 flex-col bg-slate-100">

        <div class="w-auto h-[400px] mx-4 gap-4 flex">
            <div class="basis-1/2 h-full p-8 bg-slate-200 rounded-lg drop-shadow-md">
                <p class="text-xl font-bold">Data Apoteker</p>
            </div>
            <div class="basis-1/2 h-full p-8 bg-slate-200 rounded-lg drop-shadow-md">
                <p class="text-xl font-bold">Data Resep Obat</p>
            </div>
        </div>
        <div class="h-full mx-4 p-8 bg-slate-200 rounded-lg drop-shadow-md">
            <p class="text-xl font-bold">Aktivitas Terbaru</p>
        </div>
    </div>
</div>
@endsection

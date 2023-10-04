<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('assets/images/heart-health-48.png') }}">

    <title>Farmanusa</title>
    @vite('resources/css/app.css')
</head>

<body>
    @extends('layouts.global')
    @section('content')
        @include('components.navbar')
        @include('components.home')
        @include('components.about')
        @include('components.pharmacist')
        @include('components.footer')
    @endsection
</body>

</html>

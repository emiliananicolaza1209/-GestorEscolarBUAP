<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Sistema Escolar BUAP</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased bg-white">

<div class="min-h-screen flex flex-col items-center justify-center">

    <!-- Encabezado institucional -->
    <div class="w-full bg-[#003366] py-6 shadow-md">
        <div class="flex flex-col items-center">

            <img 
                src="{{ asset('images/escudo_negativo.png') }}" 
                alt="BUAP Logo"
                class="w-28 mb-3"
            >

            <h1 class="text-white text-2xl font-bold tracking-wide">
                Sistema Escolar BUAP
            </h1>

            <p class="text-[#4FA3FF] text-sm">
                Benemérita Universidad Autónoma de Puebla
            </p>

        </div>
    </div>


    <!-- Contenedor del login -->
    <div class="w-full flex justify-center mt-10">

        <div class="w-full sm:max-w-md px-8 py-6 bg-white shadow-xl rounded-xl border-t-4 border-[#003366]">

            {{ $slot }}

        </div>

    </div>

</div>

</body>
</html>
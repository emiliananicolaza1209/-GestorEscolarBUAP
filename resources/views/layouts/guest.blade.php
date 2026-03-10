<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Sistema Escolar BUAP</title>

<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

@vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="font-sans text-gray-900 antialiased bg-gradient-to-br from-[#003366] via-[#00264d] to-[#001a33]">

<div class="min-h-screen flex flex-col items-center justify-center">

<!-- CONTENEDOR PRINCIPAL -->
<div class="w-full max-w-lg">

<!-- HEADER INSTITUCIONAL -->
<div class="text-center mb-8">

<img 
src="{{ asset('images/escudo_negativo.png') }}" 
alt="BUAP Logo"
class="w-28 mx-auto mb-4 drop-shadow-lg"
/>

<h1 class="text-white text-3xl font-bold tracking-wide">
Sistema Escolar BUAP
</h1>

<p class="text-[#4FA3FF] text-sm mt-2">
Benemérita Universidad Autónoma de Puebla
</p>

</div>

<!-- TARJETA LOGIN -->
<div class="bg-white shadow-2xl rounded-2xl px-10 py-8 border-t-4 border-[#4FA3FF]">

{{ $slot }}

</div>

<!-- FOOTER -->
<div class="text-center mt-6 text-sm text-gray-300">

© {{ date('Y') }}  
Benemérita Universidad Autónoma de Puebla

</div>

</div>

</div>

</body>
</html>
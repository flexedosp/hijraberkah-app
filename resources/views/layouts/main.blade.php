<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/img/Logo_Square.ico" type="image/x-icon">
    <title>Hijrah Berkah | {{ $titlePage }} </title>

    {{-- CSS Library --}}
    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

 {{-- Tailwind --}}
 <script src="https://cdn.tailwindcss.com"></script>
 <script src="/js/tailwind.config.js"></script>

 {{-- Flowbite --}}
 <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

 {{-- Fontawesome --}}
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
 

    {{-- CSS Library END --}}
    
</head>
<body class="relative overflow-x-hidden">
    <header class="shadow-lg fixed bg-white lg:w-full w-screen z-50">
        @include('partials.navbar')
    </header>
    <section class="relative">
        @stack('banner')
    </section>
    <section class=" lg:px-20 px-10 lg:pb-28 lg:pt-10 pt-5 pb-20">
        @yield('container')
    </section>
    <footer>
        @include('partials.footbar')
    </footer>

    {{-- Javascript Library --}}

{{-- AOS --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

{{-- Flowbite --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

    {{-- Fontawesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- Custom --}}
    <script src="/js/scriptJS.js"></script>

    {{-- Javascript Library END --}}
</body>
</html>
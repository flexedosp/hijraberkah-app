<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hijra Berkah | {{ $titlePage }} </title>

    {{-- CSS Library --}}

 {{-- Tailwind --}}
 <script src="https://cdn.tailwindcss.com"></script>

 {{-- Fontawesome --}}
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
 

    {{-- CSS Library END --}}
    
</head>
<body class="relative">
    <header class="shadow-lg sticky top-0 bg-white lg:w-full w-screen">
        @include('partials.navbar')
    </header>

    <section class="px-20 py-5">
        @yield('container')
    </section>

    <footer>
        @include('partials.footbar')
    </footer>

    {{-- Javascript Library --}}

    {{-- Fontawesome --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- Custom --}}
    <script src="/js/scriptJS.js"></script>

    {{-- Javascript Library END --}}
</body>
</html>
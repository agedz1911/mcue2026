<!DOCTYPE html>
<html class="scroll-smooth" data-theme="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'MCUE 2027' }}</title>
    <meta name="description" content="Malang Continuing Urology Education" />
    <meta name="keywords" content="MCUE, Malang, Urology, Education, reconstructive urology" />
    <meta name="author" content="AV-PRO" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-scoped.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/custom_new.css') }}">
    @livewireStyles

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>



<body>
    <x-section.header />
    {{ $slot }}
    <x-section.footer />

    <!-- Back-to-top Button start -->
    <button onclick="topFunction()" id="back-to-top"
        class="fixed rounded z-10 bottom-5 end-5 bg-red-700 border-none shadow-none btn btn-sm hover:scale-105">
        <i class="fa-solid fa-angles-up"></i>
    </button>
    <!-- Back-to-top Button end -->

    <!-- javascript -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" data-navigate-once></script>
    <!-- SLIDER -->
    <script src="{{ asset('assets/js/speakers.js') }}" data-navigate-once></script>

    <script src="{{ asset('assets/js/tiny-slider.js') }}" data-navigate-once></script>
    <!-- Datepicker -->
    <script src="{{ asset('assets/js/datepicker.min.js') }}" data-navigate-once></script>
    <!-- Icons -->
    <script src="{{ asset('assets/js/feather.min.js') }}" data-navigate-once></script>
    <!-- Main Js -->
    <script src="{{ asset('assets/js/plugins.init.js') }}" data-navigate-once></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="{{ asset('assets/js/app.js') }}" data-navigate-once></script>
    <script src="{{ asset('assets/js/custom.js') }}" data-navigate-once></script>
    @livewireScripts
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

</html>
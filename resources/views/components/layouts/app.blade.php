<!DOCTYPE html>
<<<<<<< HEAD
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
=======
<html class="scroll-smooth" data-theme="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
>>>>>>> 4e48335 (feat: redesign for mcue 2027)

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<<<<<<< HEAD
    <title>{{ $title ?? 'MCUE 2026' }}</title>
    <meta name="description" content="18th Malang Continuing Urology Education" />
    <meta name="keywords" content="urology, urology education, malang urology, iaui" />
    <meta name="author" content="AV-Pro" />

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- Slider -->
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <!-- Date picker -->
    <link rel="stylesheet" href="assets/css/datepicker.min.css">
    <!-- Main Css -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
    <link href="assets/css/colors/skyblue.css" rel="stylesheet" id="color-opt">

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

=======
    <title>{{ $title ?? 'MCUE 2027' }}</title>
    <meta name="description" content="Malang Continuing Urology Education" />
    <meta name="keywords" content="MCUE, Malang, Urology, Education, reconstructive urology" />
    <meta name="author" content="AV-PRO" />

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom_new.css">
>>>>>>> 4e48335 (feat: redesign for mcue 2027)
    <!--FontAwesome CSS-->
    <script src="https://kit.fontawesome.com/6d07745da9.js" crossorigin="anonymous"></script>
</head>



<!-- Google tag (gtag.js) -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-MFPLHEGVD1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-MFPLHEGVD1');
</script> -->



<body>
    <x-section.header />
<<<<<<< HEAD
    {{ $slot }}
    <x-section.footer />

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i
            data-feather="arrow-up" class="icons"></i></a>
    <!-- Back to top -->
    @livewireScripts
=======

    {{ $slot }}
    <x-section.footer />

    <!-- Back-to-top Button start -->
    <button onclick="topFunction()" id="back-to-top"
        class="fixed rounded z-10 bottom-5 end-5 bg-red-700 border-none shadow-none btn btn-sm hover:scale-105">
        <i class="fa-solid fa-angles-up"></i>
    </button>
    <!-- Back-to-top Button end -->
>>>>>>> 4e48335 (feat: redesign for mcue 2027)

    <!-- javascript -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- SLIDER -->
    <script src="assets/js/speakers.js"></script>

    <script src="assets/js/tiny-slider.js "></script>
    <!-- Datepicker -->
    <script src="assets/js/datepicker.min.js"></script>
    <!-- Icons -->
    <script src="assets/js/feather.min.js"></script>
    <!-- Main Js -->
    <script src="assets/js/plugins.init.js"></script>
    <!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
    <script src="assets/js/app.js"></script>
    <!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
</body>

</html>
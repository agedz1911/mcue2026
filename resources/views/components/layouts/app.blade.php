<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
    {{ $slot }}
    <x-section.footer />

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i
            data-feather="arrow-up" class="icons"></i></a>
    <!-- Back to top -->
    @livewireScripts

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
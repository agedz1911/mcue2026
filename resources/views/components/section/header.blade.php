<<<<<<< HEAD
<!-- Navbar STart -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="/">
            <span class="logo-light-mode">
                <img src="assets/images/logo/logo-light.png" class="l-dark" height="36" alt="">
                <img src="assets/images/logo/logo-half-light.png" class="l-light" height="36" alt="">
            </span>
            <img src="assets/images/logo/logo-light.png" height="24" class="logo-dark-mode" alt="">
        </a>
        <!--<div class="buy-button">
                    <a href="#">
                        <div class="btn btn-outline-success login-btn-primary">Login VirConEx</div>
                        <div class="btn btn-light login-btn-light">Login VirConEx</div>
                    </a>
                </div>-->
        <!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
=======
<!-- Header -->
{{-- <header class="bg-gradient-to-l from-[#0E1E41] via-[#C0809A] to-[#4E6690] hidden lg:block text-white text-sm py-2">
    <div class="mx-auto flex justify-between items-center px-4 py-2">
        <div class="flex">
            <div class="border-l pr-3">
                <a href="javascript:void(0)" class="ml-4 text-sm hover:underline hover:text-[#C0809A]">
                    Asian Society of Head & Neck Oncology
                </a>
            </div>
            <div class="border-l pr-3">
                <a href="https://perdokli.org/" target="_blank"
                    class="ml-4 text-sm hover:underline hover:text-[#4E6690]">
                    Indonesian Head and Neck Oncologyst Society
                </a>
            </div>
        </div>
        <div>
            <a class="btn btn-sm btn-outline text-[#C0809A] border-white rounded-full shadow-none w-8"
                href="mailto:ashno2027@pharma-pro.com">
                <i class="fa fa-envelope">
                </i>
            </a>
            <a class="btn btn-sm btn-outline text-[#C0809A] border-white rounded-full shadow-none w-8"
                href="tel:+6282277832431">
                <i class="fa fa-phone">
                </i>
            </a>

            <a class="btn btn-sm btn-outline text-[#C0809A] border-white rounded-full shadow-none w-8"
                href="https://wa.me/+6282277832431" target="_blank">
                <i class="fa fa-whatsapp">
                </i>
            </a>
            <a class="btn btn-sm btn-outline text-[#C0809A] border-white rounded-full shadow-none w-8"
                href="javascript:void(0)">
                <i class="fa fa-instagram">
                </i>
            </a>
        </div>

    </div>
</header> --}}
<!-- Navigation -->
<nav id="navbar"
    class="w-full py-2 bg-transparent z-20 shadow-lg sticky lg:shadow-none lg:fixed transition-colors duration-300">
    <div class="drawer">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <div class="navbar">
                <div class="navbar-start">
                    <img src="assets/images/logo/logo-event-dark.png" class="w-full max-w-36 hidden md:block"
                        alt="Logo" />
                    <img src="assets/images/logo/logo-event-dark.png" class="w-full max-w-36 md:hidden" alt="Logo" />
                </div>
                <div class="navbar-center hidden xl:flex py-2  max-w-6xl">
                    <x-section.menu />
                </div>
                <div class="navbar-end">
                    <div onclick="contact.showModal()" class="btn bg-red-700 hover:bg-red-800 rounded-lg shadow-none mx-2 flex gap-2">
                        <i class="fa fa-image-portrait"></i>
                        Contact
>>>>>>> 4e48335 (feat: redesign for mcue 2027)
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu ">
                <li><a href="/" class="sub-menu-item {{ request()->is('/') ? 'text-primary' : '' }}">Home</a></li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)" class="{{ request()->is('organizing-committee') || request()->is('faculties') ? 'text-primary' : '' }}">Congress Information</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <!--<li class="has-submenu parent-menu-item"><a href="#welcome-message"> Welcome Message </a><span class="submenu-arrow"></span>
                                </li>-->
                        <li class="has-submenu parent-menu-item {{ request()->is('organizing-committee') ? 'text-primary' : '' }}"><a href="/organizing-committee"> Committee </a><span
                                class="submenu-arrow"></span>
                        </li>
                        <li class="has-submenu parent-menu-item {{ request()->is('faculties') ? 'text-primary' : '' }}"><a href="/faculties"> Faculties </a><span
                                class="submenu-arrow"></span>
                        </li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)" class="{{ request()->is('program-at-glance') || request()->is('scientific-schedule') ? 'text-primary' : '' }}">Scientific Program</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu parent-menu-item "><a class="{{ request()->is('program-at-glance') ? 'text-primary' : '' }}" href="/program-at-glance"> Program at Glance </a><span class="submenu-arrow"></span></li>
                        <li class="has-submenu parent-menu-item "><a class="{{ request()->is('scientific-schedule') ? 'text-primary' : '' }}" href="/scientific-schedule"> Scientific Schedule </a><span class="submenu-arrow"></span></li>
                        <!-- <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Topics </a><span class="submenu-arrow"></span></li> -->
                    </ul>
                </li>
                <li class="has-submenu parent-parent-menu-item">
                    <a href="/registration" class="{{ request()->is('registration') ? 'text-primary' : '' }}">Registration</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li class="has-submenu parent-menu-item"><a class="{{ request()->is('registration#reg-info') ? 'text-primary' : '' }}" href="/registration#reg-info"> Registration Info </a><span
                                class="submenu-arrow"></span></li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="/submission" class="{{ request()->is('submission') ? 'text-primary' : '' }}">Abstract</a><span class="menu-arrow"></span>
                    <!--<ul class="submenu">
                                <li class="has-submenu parent-menu-item"><a href="#">Video Competition</a><span class="submenu-arrow"></span></li>
                            </ul>-->
                </li>
                <!-- <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)" class="">MCUE Sport</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                                <li class="has-submenu parent-menu-item"><a href="/mcueride/">MCUE Ride</a><span class="submenu-arrow"></span></li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">MCUE Tennis</a><span class="submenu-arrow"></span></li>
                                <li class="has-submenu parent-menu-item"><a href="/mcuerun/">MCUE Run</a><span class="submenu-arrow"></span></li>
                            </ul>
                    </li>
                     <li class="has-submenu parent-parent-menu-item">
                            <a href="#sponsors" class="">Sponsors</a><span class="menu-arrow"></span>
                        </li> -->

            </ul><!--end navigation menu-->

        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->
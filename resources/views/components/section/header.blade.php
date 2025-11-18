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
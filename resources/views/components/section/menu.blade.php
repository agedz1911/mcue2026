<ul class="flex flex-wrap gap-6 uppercase items-center justify-center">
    <li>
        <a href="/" wire:navigate
            class="{{ request()->is('/') ? 'text-red-600' : 'text-white' }} hover:text-red-800 hover:underline ">Home
        </a>
    </li>
    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('organizing-committee') || request()->is('faculties') || request()->is('welcome-message')  ? 'text-red-600' : 'text-white' }} hover:cursor-pointer hover:text-red-800">
            Congress Information <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/welcome-message" wire:navigate
                    class="{{ request()->is('welcome-message') ? 'text-red-800' : '' }} justify-between hover:text-red-800 ">Welcome
                    Message <i class="fa-solid fa-angle-right"></i></a>
            </li>

            <li>
                <a href="/organizing-committee" wire:navigate
                    class="{{ request()->is('organizing-committee') ? 'text-red-800' : '' }} justify-between hover:text-red-800 "> Organizing
                    Committee <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/faculties" wire:navigate
                    class="{{ request()->is('faculties') ? 'text-red-800' : '' }} justify-between hover:text-red-800 ">Faculties
                    <i class="fa-solid fa-angle-right"></i></a>
            </li>
        </ul>
    </div>

    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('program-at-glance') || request()->is('topics') || request()->is('scientific-schedule') ? 'text-red-600' : 'text-white' }} hover:cursor-pointer hover:text-red-800">
            Scientific Program <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">

            {{-- <li>
                <a href="/topics" wire:navigate
                    class="{{ request()->is('topics') ? 'text-red-800' : '' }} justify-between hover:text-red-800">
            Topics <i class="fa-solid fa-angle-right"></i></a>
            </li> --}}
            <li>
                <a href="/program-at-glance" wire:navigate
                    class="{{ request()->is('program-at-glance') ? 'text-red-800' : '' }} justify-between hover:text-red-800">Program
                    at Glance <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/scientific-schedule" wire:navigate
                    class="{{ request()->is('scientific-schedule') ? 'text-red-800' : '' }} justify-between hover:text-red-800">Scientific
                    Schedule <i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>

    <li>
        <a href="/registration" wire:navigate
            class="{{ request()->is('registration') ? 'text-red-600' : 'text-white' }} hover:text-red-800 hover:underline">Registration
        </a>
    </li>
    <li>
        <a href="/accommodation" wire:navigate
            class="{{ request()->is('accommodation') ? 'text-red-600' : 'text-white' }} hover:text-red-800 hover:underline">Accommodation
        </a>
    </li>

    <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('submission')  || request()->is('presentation-schedule')  ? 'text-red-600' : 'text-white' }} hover:cursor-pointer hover:text-red-800">
            Free Paper <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            {{-- <li>
                <a href="/presentation-schedule" wire:navigate
                    class="{{ request()->is('presentation-schedule') ? 'text-red-600' : '' }} justify-between hover:text-red-800">
            Free Paper Schedule <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="#" class="justify-between hover:text-red-800">Free Paper Presentation Submission <i
                        class="fa-solid fa-angle-right"></i></a>
            </li> --}}
            <li>
                <a href="/submission" wire:navigate
                    class="{{ request()->is('submission') ? 'text-red-800' : '' }} justify-between hover:text-red-800">Abstract
                    Submission<i class="fa-solid fa-angle-right"></i></a>
            </li>
    </div>
    {{-- <div class="dropdown dropdown-hover">
        <div tabindex="0"
            class="{{ request()->is('visiting')  || request()->is('social-program')  ? 'text-red-600' : 'text-white' }} hover:cursor-pointer hover:text-red-800">
            Visiting <i class="fa-solid fa-angle-down"></i></div>
        <ul tabindex="0" class="dropdown-content menu bg-base-100 rounded-box gap-2 w-60 p-2 shadow-sm">
            <li>
                <a href="/visiting" wire:navigate
                    class="{{ request()->is('visiting') ? 'text-red-600' : '' }} justify-between hover:text-red-800">
                    Bali <i class="fa-solid fa-angle-right"></i></a>
            </li>
            <li>
                <a href="/visiting#venue"
                    class="{{ request()->is('visiting#venue') ? 'text-red-600' : '' }} justify-between hover:text-red-800">Conference
                    Venue <i class="fa-solid fa-angle-right"></i></a>
            </li>
             <li>
                <a href="/social-program" wire:navigate
                    class="{{ request()->is('social-program') ? 'text-red-600' : '' }} justify-between hover:text-red-800">Social
            Program <i class="fa-solid fa-angle-right"></i></a>
            </li> 
    </div>--}}
    <li>
        <a href="/sponsorship" wire:navigate
            class="{{ request()->is('sponsorship') ? 'text-red-600' : 'text-white' }} hover:text-red-800 hover:underline">Become a Sponsor
        </a>
    </li>

</ul>
<nav class="space-y-4">
    <ul class="flex flex-col gap-5">
        <li>
            <a href="/"
                class="{{ request()->is('/') ? 'text-red-700' : '' }} justify-between font-normal hover:text-red-800 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-red-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Home
                <i class="fa-solid fa-angle-right"></i></a>
        </li>

        <li>
            <a href="javascript:void(0)"
                class="{{ request()->is('welcome-message') ? 'text-red-700' : '' }} justify-between font-normal hover:text-red-800 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-red-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Welcome Message
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="javascript:void(0)"
                class="{{ request()->is('organizing-committee') ? 'text-red-700' : '' }} justify-between font-normal hover:text-red-800 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-red-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Organizing
                Committee <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="javascript:void(0)"
                class="{{ request()->is('faculties') ? 'text-red-700' : '' }} justify-between font-normal hover:text-red-800 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-red-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Faculties
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        {{-- <li>
            <a href="/topics"
                class="{{ request()->is('topics') ? 'text-red-700' : '' }} justify-between font-normal hover:text-red-800 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-red-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">
        Topics <i class="fa-solid fa-angle-right"></i></a>
        </li> --}}
        <li>
            <a href="javascript:void(0)"
                class="{{ request()->is('program-at-glance') ? 'text-red-700' : '' }} justify-between font-normal hover:text-red-800 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-red-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Program
                at Glance <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="javascript:void(0)"
                class="{{ request()->is('scientific-schedule') ? 'text-red-700' : '' }} justify-between font-normal hover:text-red-800 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-red-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Scientific
                Schedule <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="javascript:void(0)"
                class="{{ request()->is('registration') ? 'text-red-700' : '' }} justify-between font-normal hover:text-red-800 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-red-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Registration
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="javascript:void(0)"
                class="{{ request()->is('accommodation') ? 'text-red-700' : '' }} justify-between font-normal hover:text-red-800 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-red-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Accommodation
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        {{--<li>
            <a href="/presentation-schedule"
                class="{{ request()->is('presentation-schedule') ? 'text-red-700' : '' }} justify-between font-normal hover:text-red-800 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-red-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Free Paper Schedule
        <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="#"
                class=" justify-between font-normal hover:text-red-800 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-red-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Free Paper Presentation Submission
                <i class="fa-solid fa-angle-right"></i></a>
        </li> --}}
        <li>
            <a href="/submission"
                class="{{ request()->is('submission') ? 'text-red-700' : '' }} justify-between font-normal hover:text-red-800 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-red-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Abstract Submission
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        <li>
            <a href="/sponsors"
                class="{{ request()->is('sponsors') ? 'text-red-700' : '' }} justify-between font-normal hover:text-red-800 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-red-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Become a Sponsor
                <i class="fa-solid fa-angle-right"></i></a>
        </li>
        {{-- <li>
            <a href="/visiting"
                class="{{ request()->is('visiting') ? 'text-red-700' : '' }} justify-between font-normal hover:text-red-800 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-red-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Visiting
        <i class="fa-solid fa-angle-right"></i></a>
        </li>

        <li>
            <a href="/social-program"
                class="{{ request()->is('social-program') ? 'text-red-700' : '' }} justify-between font-normal hover:text-red-800 after:content-[''] relative after:absolute flex items-center hover:after:items-center transition-all after:transition-all duration-300 after:duration-300 after:bg-red-800 hover:ps-3 after:left-0 after:h-0 hover:after:h-[5px] after:w-0 hover:after:w-[5px] after:rounded-full">Social Program
                <i class="fa-solid fa-angle-right"></i></a>
        </li> --}}
    </ul>
</nav>
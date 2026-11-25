<nav id="navbar"
    class="w-full py-2 bg-transparent z-20 shadow-lg sticky lg:shadow-none lg:fixed transition-colors duration-300">
    <div class="drawer">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle">
        <div class="drawer-content flex flex-col">
            <div class="navbar">
                <div class="navbar-start">
                    <a href="/" wire:navigate>
                        <img src="{{ asset('assets/images/logo/logo-event-dark.png') }}" class="w-full max-w-36" alt="Logo">
                    </a>
                </div>
                <div class="navbar-center hidden xl:flex py-2 max-w-6xl">
                    <x-section.menu />
                </div>
                <div class="navbar-end">
                    <button type="button" onclick="document.getElementById('contact').showModal()"
                        class="btn bg-red-700 hover:bg-red-800 rounded-lg shadow-none mx-2 flex gap-2">
                        <i class="fa fa-image-portrait"></i> Contact
                    </button>
                    <div class="flex-none xl:hidden">
                        <label for="my-drawer-3" aria-label="open sidebar" class="btn btn-square btn-ghost">
                            <i class="fa fa-bars text-2xl"></i>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-3" aria-label="close sidebar" class="drawer-overlay"></label>
            <div class="min-h-full w-80 bg-base-100 p-4">
                <img src="{{ asset('assets/images/logo/logo-event-dark.png') }}" class="mb-5 w-full max-w-sm" alt="Logo">
                <x-section.menu-mobile />
            </div>
        </div>
    </div>
    <dialog id="contact" class="modal px-1">
        <div class="modal-box w-full max-w-5xl">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2" aria-label="Close">✕</button>
            </form>
            <x-section.contact-icon />
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>
</nav>

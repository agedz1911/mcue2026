<nav aria-label="Breadcrumb" class="mx-auto w-full max-w-7xl px-5 pt-4 text-sm sm:px-8 lg:px-12">
    <a href="{{ route('home') }}" wire:navigate class="hover:text-red-700">Home</a>
    <span aria-hidden="true" class="mx-2">/</span>
    <span aria-current="page">{{ $title ?? str(request()->segment(1))->replace('-', ' ')->title() }}</span>
</nav>

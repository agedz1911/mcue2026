<div class="relative" x-data="{
    countdownTimer: null,
    counterTimers: [],
    init() {
        const targetTime = new Date(2027, 4, 6, 8, 0, 0);
        const updateCountdown = () => {
            const totalSeconds = Math.max(0, Math.floor((targetTime - new Date()) / 1000));
            this.$refs.days.textContent = Math.floor(totalSeconds / 86400);
            this.$refs.hours.textContent = String(Math.floor((totalSeconds / 3600) % 24)).padStart(2, '0');
            this.$refs.minutes.textContent = String(Math.floor((totalSeconds / 60) % 60)).padStart(2, '0');
            this.$refs.seconds.textContent = String(totalSeconds % 60).padStart(2, '0');
        };
        updateCountdown();
        this.countdownTimer = setInterval(updateCountdown, 1000);
        this.$root.querySelectorAll('.num').forEach((valueDisplay) => {
            const endValue = parseInt(valueDisplay.dataset.val, 10);
            let value = 0;
            const timer = setInterval(() => {
                valueDisplay.textContent = ++value;
                if (value >= endValue) clearInterval(timer);
            }, Math.max(1, Math.floor(4000 / endValue)));
            this.counterTimers.push(timer);
        });
    },
    destroy() {
        clearInterval(this.countdownTimer);
        this.counterTimers.forEach(clearInterval);
    }
}">
    <section class="banner relative pb-16 lg:min-h-screen lg:pb-28">
        <div class="relative z-10 grid grid-cols-1 pt-10 md:pt-14 lg:pt-32">
            <div class="flex w-full max-w-6xl flex-col items-center px-5 md:items-start md:px-20">
                <img src="{{ asset('assets/images/logo/logo-all-new.png') }}" class="mb-5 w-full max-w-2xl"
                    alt="MCUE 2027">
                <div class="flex flex-col items-center justify-center tracking-widest sm:items-start sm:justify-start">
                    <h2
                        class="mb-1 text-base font-bold uppercase tracking-[0.6em] text-white/90 drop-shadow-[0_4px_6px_rgba(0,0,0,0.6)] md:text-xl">
                        Reconstruction
                    </h2>
                    <h1
                        class="tulisan2 px-4 text-5xl font-black italic uppercase leading-none tracking-tight text-metallic effect-3d sm:text-5xl md:text-6xl lg:text-7xl">
                        Homecoming
                    </h1>
                    <p
                        class="mt-3 mb-2 text-center text-base font-bold uppercase tracking-wide text-white/80 drop-shadow-[0_4px_6px_rgba(0,0,0,0.6)] md:text-start md:text-lg">
                        Advancing Global Expertise in Reconstructive Urology
                    </p>
                    <p class="mb-3 text-center text-sm sm:text-start">
                        In Conjunction with<br>
                        <span class="text-lg font-bold">InaGURS Annual Meeting</span>
                    </p>
                    <p class="mb-3 text-center sm:text-start">
                        Collaboration with<br>
                        <span class="text-lg font-bold">ISORU - GURS - APSARUS</span>
                    </p>
                </div>

                <div class="mt-2 flex flex-col items-center justify-center gap-3 md:flex-row lg:justify-start">
                    <div class="flex items-center border-y p-4 shadow-md">
                        <i class="fa-regular fa-calendar text-3xl" aria-hidden="true"></i>
                        <div class="ms-4 min-w-0 flex-1">
                            <p class="truncate text-sm font-medium">Thursday to Saturday</p>
                            <p class="truncate text-sm">May 6<sup>th</sup> - 8<sup>th</sup>, 2027</p>
                        </div>
                    </div>
                    <div class="flex items-center border-y p-4 shadow-md">
                        <i class="fa fa-map-marker text-3xl" aria-hidden="true"></i>
                        <div class="ms-4 min-w-0 flex-1">
                            <p class="truncate text-sm font-medium">Grand Mercure</p>
                            <p class="truncate text-sm">Malang Mirama, Indonesia</p>
                        </div>
                    </div>
                </div>

                <div class="mt-5 flex w-full flex-wrap justify-center gap-2 md:justify-start">
                    <a class="btn rounded-xl bg-red-700 hover:bg-red-800">
                        <i class="fa-solid fa-file-download mr-1 text-xs" aria-hidden="true"></i>
                        Download Announcement
                    </a>
                    <a 
                        class="btn btn-outline rounded-xl hover:border-red-800 hover:bg-red-800">
                        <i class="fa-solid fa-pen-to-square" aria-hidden="true"></i>
                        Register Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-0 px-2 py-2 lg:-mt-30 lg:px-7 lg:py-0">
        <div id="countdown" class="mx-auto flex w-full flex-wrap justify-center gap-4 md:flex-row lg:justify-end">
            <div class="card w-full max-w-2xl rounded-2xl bg-radial bg-radial-gradient from-red-700 via-red-800 to-red-900">
                <div class="card-body">
                    <div class="flex items-center justify-evenly gap-4">
                        <div class="text-center">
                            <span x-ref="days" class="mb-0 text-2xl font-bold lg:text-4xl"></span><br>
                            <small class="mt-0 text-xs">Days</small>
                        </div>
                        <div class="text-center">
                            <span x-ref="hours" class="mb-0 text-2xl font-bold lg:text-4xl"></span><br>
                            <small class="mt-0 text-xs">Hours</small>
                        </div>
                        <div class="text-center">
                            <span x-ref="minutes" class="mb-0 text-2xl font-bold lg:text-4xl"></span><br>
                            <small class="mt-0 text-xs">Minutes</small>
                        </div>
                        <div class="text-center">
                            <span x-ref="seconds" class="mb-0 text-2xl font-bold lg:text-4xl"></span><br>
                            <small class="mt-0 text-xs">Seconds</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="important-dates" class="relative z-0 px-5 py-20 lg:py-16">
        <div class="mx-auto flex w-full max-w-7xl flex-col gap-8 md:flex-row">
            <div class="w-full md:w-1/2">
                <livewire:section.important-date />
            </div>
            <div class="w-full md:w-1/2">
                <livewire:section.flyer />
            </div>
        </div>
    </section>

    <section class="relative z-0 py-20 lg:py-28">
        <div class="relative">
            <div class="mx-auto w-full px-5 sm:px-8 lg:px-12">
                <div class="mb-10 flex flex-col gap-4 text-center sm:mb-12">
                    <h2 class="text-3xl font-bold uppercase sm:text-4xl">
                        Welcome <span class="text-red-800">Message</span>
                    </h2>
                    <div class="mx-auto h-1 w-16 bg-red-800"></div>
                </div>

                <div class="mx-auto flex w-full max-w-6xl flex-col gap-4 md:flex-row">
                    @foreach ($messages as $message)
                    <article class="flex h-full flex-col overflow-hidden rounded-md border border-white/20 shadow-lg">
                        <div class="flex-1 p-7 sm:p-9">
                            <p class="mb-4 text-xs font-bold uppercase tracking-[0.16em]">{{ $message->title }}</p>
                            <div class="h-px w-12 bg-red-800"></div>
                            <div class="mt-6 text-justify text-sm leading-7 sm:text-base">
                                {!! Str::limit(str($message->description)->markdown()->sanitizeHtml(), 450) !!}
                            </div>
                        </div>
                        <div class="border-t p-6 sm:p-7">
                            <div class="flex flex-col justify-between gap-4 md:flex-row md:items-center">
                                <div class="flex min-w-0 items-center gap-4">
                                    <img src="{{ $message->image ? asset('storage/' . $message->image) : asset('assets/images/speaker.png') }}"
                                        alt="{{ $message->name }}"
                                        class="h-20 w-20 shrink-0 rounded-full border-4 border-white/20 bg-red-950 object-cover shadow-md sm:h-32 sm:w-32">
                                    <div class="min-w-0">
                                        @if ($message->title)
                                        <p class="text-xs leading-5">{{ $message->title }}</p>
                                        @elseif ($message->title2)
                                        <p class="text-xs leading-5">{{ $message->title2 }}</p>
                                        @endif
                                        <h3 class="mt-1 text-lg font-bold leading-tight text-red-700">
                                            {{ $message->name }}
                                        </h3>
                                    </div>
                                </div>
                                <a href="/welcome-message#{{ $message->id }}"
                                    class="shrink-0 rounded-lg border border-red-800 px-4 py-2 text-center text-xs font-bold uppercase tracking-[0.1em] text-red-800 transition hover:bg-red-800 hover:text-white">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>

                <div class="mx-auto mt-10 w-full max-w-6xl border-t border-opacity-35 pt-10">
                    <div class="mb-10 grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-4">
                        <div class="w-full border-e border-opacity-35">
                            <div class="border-b border-opacity-25 px-2 py-5 text-center md:border-b-0">
                                <p class="m-0 text-4xl font-semibold md:text-5xl">
                                    <span class="num" data-val="100"></span>+
                                </p>
                                <p class="text-xs">Speakers</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35">
                            <div class="border-b border-opacity-25 px-2 py-5 text-center md:border-b-0">
                                <p class="m-0 text-4xl font-semibold md:text-5xl">
                                    <span class="num" data-val="4"></span>+
                                </p>
                                <p class="text-xs">Pre &amp; Congress Days</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35">
                            <div class="border-b border-opacity-25 px-2 py-5 text-center md:border-b-0">
                                <p class="m-0 text-4xl font-semibold md:text-5xl">
                                    <span class="num" data-val="5"></span>+
                                </p>
                                <p class="text-xs">Workshop &amp; Live Surgeries</p>
                            </div>
                        </div>
                        <div class="w-full border-e border-opacity-35">
                            <div class="border-b border-opacity-25 px-2 py-5 text-center md:border-b-0">
                                <p class="m-0 text-4xl font-semibold md:text-5xl">
                                    <span class="num" data-val="50"></span>+
                                </p>
                                <p class="text-xs">Topics</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <livewire:section.carousel-sponsor />

    <section class="w-full px-2 pt-24 pb-3 lg:px-4">
        <div class="mb-5 pb-10 text-center">
            <h2 class="mb-1 text-xl font-semibold uppercase md:text-3xl">
                The <span class="text-red-800">Venue</span>
            </h2>
        </div>
        <div>
            <div class="flex flex-col gap-5 lg:flex-row">
                <div class="w-full lg:w-1/3">
                    <div class="rounded-lg bg-gradient-to-tl from-red-950 to-red-800 px-4 py-10 shadow-md">
                        <h3 class="pb-2 font-semibold tracking-wide">Event Venue</h3>
                        <p class="m-0 pb-5 text-sm">Grand Mercure Malang Mirama</p>
                        <h3 class="pb-2 font-semibold tracking-wide">Address</h3>
                        <p class="m-0 pb-5 text-sm">
                            Jl. Raden Panji Suroso No.7, Purwodadi, Kec. Blimbing, Malang, East Java 65126
                        </p>
                        <a href="https://maps.app.goo.gl/G7EmWKHznteaUXLo7" target="_blank" rel="noopener noreferrer"
                            class="hover:font-semibold hover:underline">
                            Get Directions
                        </a>
                    </div>
                </div>
                <div class="w-full px-1 lg:w-2/3">
                    <iframe class="h-80 w-full rounded-lg lg:h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.550224408039!2d112.64579757480752!3d-7.941951579107301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6299d697b0f9b%3A0x8b79b3b5afe9f2c9!2sGrand%20Mercure%20Malang%20Mirama!5e0!3m2!1sen!2sid!4v1793161974960!5m2!1sen!2sid"
                        title="Grand Mercure Malang Mirama map" style="border:0" allowfullscreen loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
            </div>

            <div class="mt-5 grid grid-cols-1 justify-items-center gap-2 md:grid-cols-3">
                <img src="{{ asset('assets/images/malang/4.jpg') }}"
                    class="max-h-96 w-full rounded-xl object-cover shadow-md" alt="Venue">
                <img src="{{ asset('assets/images/malang/5.jpg') }}"
                    class="h-full max-h-96 w-full rounded-xl object-cover shadow-md" alt="Venue">
                <img src="{{ asset('assets/images/malang/6.jpg') }}"
                    class="h-full max-h-96 w-full rounded-xl object-cover object-top shadow-md" alt="Venue">
            </div>
        </div>
    </section>
</div>

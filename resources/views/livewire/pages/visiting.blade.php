<div>
    <section class="relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_12%_20%,rgba(65,14,14,0.7),transparent_35%),radial-gradient(circle_at_90%_80%,rgba(71,41,41,0.95),transparent_45%)]">
        </div>
        <div class="relative mx-auto max-w-7xl px-5 py-16 sm:px-8 lg:px-12 lg:py-24">
            <h2 class="uppercase text-2xl font-bold tracking-wide lg:text-4xl">Visiting</h2>
            <div class="mt-7 h-1 w-20 bg-red-700"></div>
        </div>
    </section>
    <x-section.breadcrumbs />
    <section class="pb-24 pt-10 md:px-10 px-3" id="bali">
        <div class="px-2 lg:px-5">
            <div class="flex gap-2 flex-wrap justify-between w-full items-end">
                <div class="w-full max-w-xl pb-2">
                    <p class="mb-1 text-primary">Welcome to the Magnificent Venue</p>
                    <h2 class="mb-1 text-3xl font-extrabold tracking-wide">Bali, Indonesia</h2>
                    <p class="m-0 text-justify"><span class="text-primary">Bali</span> has
                        developed into a world of its own. It captures not only what is special about Indonesia, but
                        embodies a unique spirit that can only be found on the island.</p>
                </div>
                <div class="">
                    <a class="text-sm underline hover:text-primary" href="javascript:void(0)">See more story of Bali
                        <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 mt-5">
                <div class="w-full p-1 flex justify-center">
                    <img src="assets/images/bali/map.jpg" class="w-full max-w-xl rounded-lg shadow-lg"
                        alt="VR Presentation and conference">
                </div>
                <div class="w-full font-normal px-5">
                    <p class="mb-2">As one of the most magnificent islands in Indonesia - offering countless natural
                        beauties like its famous white sand beaches - Bali has become a popular tourist destination in
                        Asia. The uniqueness of its Hindu culture is ubiquitous in day-to-day life; it is echoed in the
                        temples and palaces, the arts and crafts centers, the countless ceremonies, the festivals, the
                        traditional dances and the distinctive tune of the gamelan.</p>
                    <p>With more than 60 international and domestic airlines operating at the Ngurah Rai Bali
                        International Airport, this beautiful island is just a flight away from anywhere in the world.
                    </p>
                    <div class="flex flex-wrap justify-between gap-3 p-2 mt-5">
                        <button onclick="visa.showModal()"
                            class="font-semibold hover:text-primary hover:cursor-pointer hover:underline">Visa
                            Regulation</button>
                        <i class="fa fa-arrows-up-down"></i>
                        <button onclick="flight.showModal()"
                            class="font-semibold hover:text-primary hover:cursor-pointer hover:underline">Flight time
                            to Bali </button>
                        <i class="fa fa-arrows-up-down"></i>
                        <button onclick="electric.showModal()"
                            class="font-semibold hover:text-primary hover:cursor-pointer hover:underline">Electric
                            Current </button>
                        <i class="fa fa-arrows-up-down"></i>
                        <a href="/visiting#venue"
                            class="font-semibold hover:text-primary hover:cursor-pointer hover:underline">Conference
                            Venue </a>
                    </div>

                    <dialog id="flight" class="modal">
                        <div class="modal-box w-full max-w-4xl bg-transparent">
                            <img src="assets/images/bali/Flightime-Bali.png" class="w-full rounded-lg shadow-lg"
                                alt="VR Presentation and conference">
                        </div>
                        <form method="dialog" class="modal-backdrop">
                            <button>close</button>
                        </form>
                    </dialog>
                    <dialog id="electric" class="modal">
                        <div class="modal-box w-full max-w-4xl bg-transparent">
                            <img src="assets/images/bali/Electric-Bali.jpg" class="w-full rounded-lg shadow-lg"
                                alt="VR Presentation and conference">
                        </div>
                        <form method="dialog" class="modal-backdrop">
                            <button>close</button>
                        </form>
                    </dialog>
                    <dialog id="visa" class="modal">
                        <div class="modal-box w-full max-w-6xl bg-transparent p-0 shadow-none">
                            <div class="overflow-hidden rounded-3xl border border-sky-100 bg-white shadow-2xl">
                                <div
                                    class="relative overflow-hidden bg-[radial-gradient(circle_at_10%_10%,rgba(56,189,248,0.45),transparent_42%),radial-gradient(circle_at_90%_85%,rgba(14,116,144,0.3),transparent_48%),linear-gradient(120deg,#0b4f8a,#0c6ca9)] p-6 sm:p-8">
                                    <div class="absolute -right-10 -top-10 h-36 w-36 rounded-full border border-white/20"></div>
                                    <div class="absolute -bottom-10 left-10 h-28 w-28 rounded-full border border-white/20"></div>

                                    <div class="relative flex flex-wrap items-start justify-center gap-4">
                                        <div class="max-w-2xl text-white">
                                            <img src="assets/images/bali/Visa-Bali.jpg"
                                                class="h-full min-h-[220px] w-full rounded-2xl object-cover shadow-lg"
                                                alt="Visa regulation in Bali">
                                        </div>
                                        <form method="dialog">
                                            <button
                                                class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/40 bg-white/10 text-xl text-white transition hover:rotate-90 hover:bg-white/20"
                                                aria-label="Close visa dialog">&times;</button>
                                        </form>
                                    </div>

                                </div>

                                <div class="grid grid-cols-1 ">

                                    <div class="">
                                        <div role="tablist" class="tabs tabs-lifted tabs-lg w-full">
                                            <input type="radio" name="visa_tabs" role="tab" class="tab [--tab-border-color:#0284c7]"
                                                aria-label="Electronic Visa on Arrivals" checked="checked" />
                                            <div role="tabpanel" class="tab-content rounded-box border border-sky-100 bg-sky-50/40 p-5">
                                                <h4 class="text-lg font-bold text-sky-900">Electronic Visa on Arrival (e-VOA)</h4>
                                                <p class="mt-2 text-sm leading-relaxed text-slate-700">Currently, the cost of an eVisa on Arrival is USD 35.</p>
                                                <div class="mt-4 rounded-xl border border-sky-200 bg-white p-4">
                                                    <p class="text-sm text-slate-600">The Official eVisa website for Indonesia:</p>
                                                    <a href="https://evisa.imigrasi.go.id/" target="_blank"
                                                        class="font-semibold text-sky-700 underline underline-offset-2">evisa.imigrasi.go.id</a>
                                                    <p class="text-sm text-slate-600 mt-5">List of Countries eligible to apply for Visa on Arrivals online or in person on arrival:</p>
                                                    <a href="https://evisa.imigrasi.go.id/front/info/evoa" target="_blank"
                                                        class="font-semibold text-sky-700 underline underline-offset-2">evisa.imigrasi.go.id/front/info/evoa</a>
                                                </div>
                                            </div>

                                            <input type="radio" name="visa_tabs" role="tab" class="tab [--tab-border-color:#0284c7]"
                                                aria-label="Bali Tourism Levy" />
                                            <div role="tabpanel" class="tab-content rounded-box border border-sky-100 bg-sky-50/40 p-5">
                                                <h4 class="text-lg font-bold text-sky-900">Bali Tourism Levy</h4>
                                                <p class="mt-2 text-sm leading-relaxed text-slate-700">There is a tourism levy for all tourists to Bali effective in Feb 2024. All tourists are highly recommended to make the payment of the levy online at this link</p>
                                                <div class="mt-4 rounded-xl border border-sky-200 bg-white p-4">
                                                    <p class="text-sm text-slate-600">Payment Portal:</p>
                                                    <a href="https://lovebali.baliprov.go.id/" target="_blank"
                                                        class="font-semibold text-sky-700 underline underline-offset-2">lovebali.baliprov.go.id</a>
                                                </div>
                                            </div>

                                            <input type="radio" name="visa_tabs" role="tab" class="tab [--tab-border-color:#0284c7]"
                                                aria-label="Custom Declaration Form for International Tourists" />
                                            <div role="tabpanel" class="tab-content rounded-box border border-sky-100 bg-sky-50/40 p-5">
                                                <h4 class="text-lg font-bold text-sky-900">Custom Declaration Form for International Tourists</h4>
                                                <p class="mt-2 text-sm leading-relaxed text-slate-700">All travellers, including Indonesians, entering Indonesia from any border points with a custom inspection area (international arrivals) will need to submit a Custom Declaration online and save the QR Code provided after submission to a Custom Officer for inspection.</p>
                                                <div class="mt-4 rounded-xl border border-sky-200 bg-white p-4">
                                                    <p class="text-sm text-slate-600">Official Website Direktorat Jenderal Bea dan Cukai:</p>
                                                    <a href="https://ecd.beacukai.go.id/" target="_blank"
                                                        class="font-semibold text-sky-700 underline underline-offset-2">ecd.beacukai.go.id</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <form method="dialog" class="modal-backdrop">
                            <button>close</button>
                        </form>
                    </dialog>
                </div>
            </div>



            {{-- <div class="pt-10 lg:pt-20">
                <h4 class="text-xl font-semibold tracking-wide mb-5">Top Reasons to Visit Bali</h4>
                
                <div class="tabs tabs-border justify-center gap-3 text-gray-500">
                    <input type="radio" name="my_tabs_2" class="tab text-sky-700 hover:text-sky-900"
                        aria-label="It's sunny all year!" checked="checked" />
                    <div class="tab-content border-base-300 bg-base-100 p-10 text-base">
                        <div class="flex flex-col lg:flex-row gap-5">
                            <div class="w-full lg:w-1/2">
                                <img src="assets/images/bali/It_s-sunny-all-year!-2.jpg"
                                    class="w-full rounded-lg shadow-lg saturate-150"
                                    alt="VR Presentation and conference">
                            </div>
                            <div class="w-full lg:w-1/2">
                                <p class="text-justify">Bali weather has 2 seasons - dry and wet - though you can expect
                                    mostly warm and humid days throughout the year. The dry season is from May to
                                    September. This offers sunny days and an average temperature of 31°C.
                                    Most consider the mid-year period to be the best time to go to Bali. You can expect
                                    a good balance between sun, sand and surf during the time. The wet season is October
                                    to April, with occasional downpours and overcast skies. The windy months are between
                                    June and August, which Bali locals often refer to as the kite season, when the skies
                                    are dotted with colourful traditional Balinese kites.</p>
                            </div>
                        </div>
                    </div>

                    <input type="radio" name="my_tabs_2" class="tab text-sky-700 hover:text-sky-900"
                        aria-label="Stunning beaches" />
                    <div class="tab-content border-base-300 bg-base-100 p-10">
                        <div class="flex flex-col lg:flex-row gap-5">
                            <div class="w-full lg:w-1/2 order-1 lg:order-2">
                                <img src="assets/images/bali/It_s-sunny-all-year!-1.jpg"
                                    class="w-full rounded-lg shadow-lg saturate-150"
                                    alt="VR Presentation and conference">
                            </div>
                            <div class="w-full lg:w-1/2 order-2 lg:order-1">
                                <p class="text-justify">Surfers love the waves at Nusa Lembongan near Nusa Penida. These
                                    islands are a 45
                                    minutes boat trip from Nusa Dua or from Sanur. At Nusa Penida's south western coast
                                    are the Manta Point and the Malibu point where divers can swim with Travally, big
                                    rays, and even sharks. Kelingking Beach, Atuh beach and Broken beach among the most
                                    famous spots of Nusa Penida. The best dive spots can be located at Menjangan island,
                                    with its reef flat, anchor wreck, eel garden and caves to explore. Located in the
                                    western part of Bali, you can enjoy the rare sight of deer swimming near the beach.
                                    Pemutaran is also famous for its diving activities renowned for reef conservation.
                                    Try exploring or trekking the West Bali National Park, where you may get up close
                                    and personal with Bali’s rich flora and fauna, such as Jalak Bali or the Bali
                                    Starling.
                                    Bali offers first-class adrenaline-pumping white water rafting down the spectacular
                                    Ayung River by Ubud. If you enjoy cycling, Ubud and its surrounding is a wonderful
                                    town to bike around. There are also good cycling paths at Uluwatu in the south.</p>
                            </div>
                        </div>
                    </div>

                    <input type="radio" name="my_tabs_2" class="tab text-sky-700 hover:text-sky-900"
                        aria-label="Bali's unique culture" />
                    <div class="tab-content border-base-300 bg-base-100 p-10">
                        <div class="flex flex-col lg:flex-row gap-5">
                            <div class="w-full lg:w-1/2">
                                <img src="assets/images/bali/6.jpg" class="w-full rounded-lg shadow-lg saturate-150"
                                    alt="VR Presentation and conference">
                            </div>
                            <div class="w-full lg:w-1/2">
                                <p class="text-justify">The many temples around Bali celebrate their anniversaries once
                                    every 6 Gregorian months according to the 210-day Balinese calendar. That means
                                    you'll most likely stumble across a lively ceremony during your visit.
                                    Towering colourful fruit offerings, decorated shrines and lively processions are all
                                    ready for your camera. Rites of passage, even death, is a festive sight as ngaben
                                    cremations or pelebon for royalties, is a sight to behold with towering effigies are
                                    carried to the funeral pyre.</p>
                            </div>
                        </div>
                    </div>

                    <input type="radio" name="my_tabs_2" class="tab text-sky-700 hover:text-sky-900"
                        aria-label="The warmth of the people" />
                    <div class="tab-content border-base-300 bg-base-100 p-10">
                        <div class="flex flex-col lg:flex-row gap-5">
                            <div class="w-full lg:w-1/2 order-1 lg:order-2">
                                <img src="assets/images/bali/The-warmth-of-the-people.jpg"
                                    class="w-full rounded-lg shadow-lg sepia-50" alt="VR Presentation and conference">
                            </div>
                            <div class="w-full lg:w-1/2 order-2 lg:order-1">
                                <p class="text-justify">Most people who have been to Bali will agree that the Balinese
                                    are
                                    the friendliest people. Making new friends is easier here than anywhere else, as
                                    locals are often interested in engaging in a conversation with anyone, including
                                    tourists. Their friendliness and genuine warmth have made tourists feel at home for
                                    decades.</p>
                            </div>
                        </div>
                    </div>

                    <input type="radio" name="my_tabs_2" class="tab text-sky-700 hover:text-sky-900"
                        aria-label="Authentic Cuisine" />
                    <div class="tab-content border-base-300 bg-base-100 p-10">
                        <div class="flex flex-col lg:flex-row gap-5">
                            <div class="w-full lg:w-1/2 ">
                                <div class="carousel w-full shadow-md rounded-2xl">
                                    <div id="slide1"
                                        class="carousel-item relative w-full ease-in-out duration-300 h-full object-cover">
                                        <img src="assets/images/bali/kuliner1.jpg" class="w-full rounded-lg shadow-lg"
                                            alt="VR Presentation and conference">
                                        <div
                                            class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                                            <a href="#" class="btn btn-circle btn-primary btn-outline ">❮</a>
                                            <a href="#" class="btn btn-circle btn-primary btn-outline">❯</a>
                                        </div>
                                    </div>
                                    <div id="slide2"
                                        class="carousel-item relative w-full ease-in-out duration-300 h-full object-cover">
                                        <img src="assets/images/bali/kuliner2.jpg" class="w-full rounded-lg shadow-lg"
                                            alt="VR Presentation and conference">
                                        <div
                                            class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                                            <a href="#" class="btn btn-circle btn-primary btn-outline ">❮</a>
                                            <a href="#" class="btn btn-circle btn-primary btn-outline">❯</a>
                                        </div>
                                    </div>
                                    <div id="slide3"
                                        class="carousel-item relative w-full ease-in-out duration-300 h-full object-cover">
                                        <img src="assets/images/bali/kuliner3.jpg" class="w-full rounded-lg shadow-lg"
                                            alt="VR Presentation and conference">
                                        <div
                                            class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                                            <a href="#" class="btn btn-circle btn-primary btn-outline ">❮</a>
                                            <a href="#" class="btn btn-circle btn-primary btn-outline">❯</a>
                                        </div>
                                    </div>
                                    <div id="slide4"
                                        class="carousel-item relative w-full ease-in-out duration-300 h-full object-cover">
                                        <img src="assets/images/bali/kuliner4.jpg" class="w-full rounded-lg shadow-lg"
                                            alt="VR Presentation and conference">
                                        <div
                                            class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                                            <a href="#" class="btn btn-circle btn-primary btn-outline ">❮</a>
                                            <a href="#" class="btn btn-circle btn-primary btn-outline">❯</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="w-full lg:w-1/2 ">
                                <p class="text-justify">Balinese cuisine is the traditional cuisine of the Balinese
                                    people from the island of Bali. Balinese cuisine is one of the most complex cuisines
                                    in the world. Uses an incredible variety of spices, mixed with fresh vegetables,
                                    meat, and fish. This dish is part of Indonesian cuisine, it shows native traditions,
                                    as well as influences from other regional Indonesian, Chinese and Indian cuisines.
                                    The island's population is predominantly Hindu and its culinary traditions are
                                    somewhat different to other regions of Indonesia, with festivals and religious
                                    celebrations including many special foods prepared as offerings, as well as other
                                    dishes consumed communally during the celebrations.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}

        </div>
    </section>

    <section class="pb-24 md:px-10 px-3" id="venue">
        <div class="px-2 lg:px-5">
            <p class="mb-1 text-primary">Conference Venue</p>
            <h2 class="mb-1 text-xl font-extrabold tracking-wide">Bali Nusa Dua Convention Center (BNDCC)</h2>

            <div class="flex flex-col lg:flex-row gap-5 mt-8 text-gray-500">
                <div class="w-full lg:w-1/2 ">
                    <img src="assets/images/bali/1.jpg" class="w-full rounded-lg shadow-lg "
                        alt="VR Presentation and conference">
                </div>
                <div class="w-full lg:w-1/2 ">
                    <p class="text-justify mb-2">BNDCC is located at the very epicenter of Bali's premier luxury
                        destination
                        - The Nusa Dua ITDC complex. This multi-million-dollar complex hosts 19 of the world’s leading
                        5-star hotel brands offering a combined 7,500 opulent rooms, the acclaimed Bali National Golf
                        Club, an international hospital, a performing arts theater, galleries, temples and an array of
                        enticing dining options will leave guests spoiled for choice. Seamless white-sand beaches,
                        stunning natural landscape and spectacular limestone cliffs.</p>
                    <p class="text-justify">An exceptional venue for participants in theater capacity. It offers a total
                        of 44
                        multi-functional, flexible rooms including the bigger and sub divisible halls of 4,400 sq.m Nusa
                        Dua Hall, 1,770 sq.m Pecatu Hall, 1,734 sq.m Singaraja Hall or 920 sq.m Tanjung Benoa Hall</p>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-5 mt-8 text-gray-500">

                <div class="w-full lg:w-1/2 order-2 lg:order-1">
                    <h4 class="text-lg font-semibold mb-3">Several big events that have been held at BNDCC</h4>
                    <ul class="list-disc list-outside mb-3">
                        <li class="ml-4">G20 3rd Working Group Development under Indonesian G20 Presidency hosted by
                            Ministry of
                            National Development Planning (Bappenas) was held on 10th - 12th August 2022</li>
                        <li class="ml-4">Official Venue of the Annual Meetings International Monetary Fund - World Bank
                            Group 2018</li>
                        <li class="ml-4">The 33rd World Congress of Internal Medicine (WCIM) held on 22th - 25th August
                            2016</li>
                        <li class="ml-4">etc</li>
                    </ul>
                    <h4 class="text-lg font-semibold mb-3">Convention Hall</h4>
                    <p class="text-justify mb-3">Our Nusa Dua Hall with 4,400 sq.m and 9 m ceiling height provides extra
                        flexible space, it can be converted into 5 smaller separate rooms to suit your needs or enable
                        you to hold different functions simultaneously. This versatility gives you options to
                        accommodate any kind of events, plenary session, welcome reception, exhibition and others. Also,
                        it is located on Ground Floor area and has sufficient loading docks area to create an easy
                        access preparation.</p>
                    <h4 class="text-lg font-semibold mb-3">Meeting Rooms</h4>
                    <p class="text-justify">Prepare your most exclusive meeting in one of our 17 fully equipped meeting
                        rooms of various sizes, which spread over 2 levels and offer a range of audio-visual and
                        technical features. These rooms are ideal for breakout sessions, intimate luncheons, dinners,
                        refreshment, press conference and also numerous specifically designed spaces suitable for small
                        exhibitions.</p>
                </div>
                <div class="w-full lg:w-1/2 order-1 lg:order-2">
                    <img src="assets/images/bali/2.jpg" class="w-full rounded-lg shadow-lg "
                        alt="VR Presentation and conference">
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial bg-lightgrey">
        <div class="container">
            <div class="section-title text-center">
                <div class="row align-items-center ">
                    <div class="col-lg-8 pb-2">
                        <div class="title-content  text-lg-start">
                            <p class="mb-1 text-success">Welcome to</p>
                            <h2 class="mb-1">medan, north Sumatra <span class="text-danger">indonesia</span></h2>
                            <p class="m-0">Medan is not just a destination, but a journey of
                                history, flavors, and warm hospitality, leaving
                                unforgettable memories in every traveler's heart.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="speaker-button text-lg-end">
                            <a class="black btn-link" href="javascript:void(0)">See more story of Medan <i class="fa-solid fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-lg-4 mt-md-2">
                <div class="item col-lg-6 px-1 mb-2">
                    <img src="assets/images/medan/visit-medan.png" class="w-100 rounded" alt="VR Presentation and conference">
                </div>
                <div class="col-lg-6 px-5">
                    <p>Medan is the largest city in Sumatra and serves as both an economic and cultural hub in northern Indonesia. The combination of history and modernity creates a unique charm that attracts tourists from all over. The city’s cultural diversity is reflected in its architecture, traditions, and signature culinary delights. In addition to being a major trade center, Medan is also the gateway to various tourist destinations across North Sumatra. With its rapidly developing infrastructure and dynamic urban life, Medan is an exciting city to explore</p>
                    <p>As the main gateway to famous tourist attractions like Lake Toba, Medan also has a rich history showcased in its colonial buildings, museums, and well-preserved cultural sites. The city is also known for its diverse and authentic cuisine, making it a paradise for food lovers. Many legendary eateries offer unique and delicious local flavors</p>
                    <p>For shopping enthusiasts, Medan has modern shopping malls as well as traditional markets where visitors can find unique local souvenirs. The city’s vibrant nightlife, cultural performances, and entertainment venues add to the unforgettable experience of visiting Medan</p>
                    <p>Medan is not just a transit city; it is a destination that offers an unforgettable experience for all who wish to explore the charm of North Sumatra</p>
                </div>
            </div>
            <div class="row">
                <h4 class="section-title text-center text-md-start">Explore Medan</h4>
                <div class="col-md-4 mt-4 pt-2">
                    <ul class="nav nav-pills nav-justified flex-column rounded shadow p-3 mb-0 sticky-bar"
                        id="pills-tab" role="tablist">
                        <li class="nav-item border border-1 rounded">
                            <a class="nav-link rounded active" id="webdeveloping" data-bs-toggle="pill"
                                href="#developing" role="tab" aria-controls="developing" aria-selected="false">
                                <div class="text-center py-1">
                                    <h6 class="mb-0">Culinary Delights</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item mt-2 border border-1 rounded">
                            <a class="nav-link rounded" id="database" data-bs-toggle="pill" href="#data-analise"
                                role="tab" aria-controls="data-analise" aria-selected="false">
                                <div class="text-center py-1">
                                    <h6 class="mb-0">Souvenirs</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item mt-2 border border-1 rounded">
                            <a class="nav-link rounded" id="server" data-bs-toggle="pill" href="#security" role="tab"
                                aria-controls="security" aria-selected="false">
                                <div class="text-center py-1">
                                    <h6 class="mb-0">Entertainment & Cultural Landmarks</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->

                        <li class="nav-item mt-2 border border-1 rounded">
                            <a class="nav-link rounded" id="webdesigning" data-bs-toggle="pill" href="#designing"
                                role="tab" aria-controls="designing" aria-selected="false">
                                <div class="text-center py-1">
                                    <h6 class="mb-0">Nightlife & Entertainment</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->
                        <li class="nav-item mt-2 border border-1 rounded">
                            <a class="nav-link rounded" id="webdesigning" data-bs-toggle="pill" href="#kuliner"
                                role="tab" aria-controls="designing" aria-selected="false">
                                <div class="text-center py-1">
                                    <h6 class="mb-0">Transportation to Nearby Destinations</h6>
                                </div>
                            </a><!--end nav link-->
                        </li><!--end nav item-->
                    </ul><!--end nav pills-->
                </div><!--end col-->

                <div class="col-md-8 col-12 mt-4 pt-2">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active p-4 rounded shadow" id="developing"
                            role="tabpanel" aria-labelledby="webdeveloping">
                            <div class="row">
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/Rumah-Makan-Tabona-05.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>Rumah Makan Tabona</h4>
                                    <p>Enjoy the rich and flavorful chicken and beef curry of Medan, made with a blend of traditional spices and a savory broth that creates an unforgettable culinary experience</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://g.co/kgs/hiWBLYf" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS6c3AsxF/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/Bihun-Bebek-Asie-05.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>Bihun Bebek Asie</h4>
                                    <p>A bowl of thin vermicelli noodles served with a rich and aromatic duck broth, topped with tender slices of duck and a unique herbal spice blend</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/2Y8oYTgeohNW7rhS7" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS6cxeKV3/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/soto-sinar-pagi-05.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>SOTO SINAR PAGI</h4>
                                    <p>A famous beef soup with a thick, flavorful broth, packed with spices and served with tender beef slices</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/syrkvF3D1TjoUvgu8" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS6c9CbCb/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/si-bolang-05.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>SI BOLANG DURIAN</h4>
                                    <p>Pamper your tongue with delicious fresh durian at Si Bolang
                                        Durian, the best place in Medan to enjoy durian with
                                        distinctive sweet taste and soft texture</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/QtJY7ErtmFteNJLB7" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS6c9paBX/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/ucok-durian-05.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>UCOK DURIAN</h4>
                                    <p>Enjoy the best durian at Durian Ucok, an iconic place in Medan
                                        which serves selected durian with rich taste and texture
                                        soft, suitable for true durian lovers.</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/nGxT6Di8vAP9nuWS6" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS6c3bTBc/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/kedai-kopi-05.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>KEDAI KOPI APEK</h4>
                                    <p>Legendary place in Medan with typical traditional coffee, kopi
                                        cold milk, and rich jam toast in a pleasant atmosphere
                                        warm and full of memories.</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/DaM24aXGnAx1r6uP6" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63RDfhW/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/wajir-05.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>WAJIR SEAFOOD</h4>
                                    <p>Experience the sensation of fresh seafood at Wajir Seafood, with spices
                                        tempting specialties and attractive flavors in each
                                        bite!</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/HhVmGt6dB7v1gza16" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS6c3KNfq/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/gumarang-05.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>RM GUMARANG JAYA</h4>
                                    <p>Authentic Minang dishes with distinctive taste, Rumah Makan
                                        Gumarang offers a variety of delicious menus with spices
                                        which is appetizing</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/ChSs3RzSaFoWE83MA" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS6cxXQxL/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/nelayan-05.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>NELAYAN</h4>
                                    <p>Enjoy premium dim sum at Nelayan Sun Plaza Medan, which
                                        a must try when visiting Medan</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/nX48otR4sb2GEBL57" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS6wp56oX/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/tiptop-05.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>TIP TOP RESTAURANT</h4>
                                    <p>Classic dishes with legendary taste at TipTop, restaurant
                                        iconic Medan which serves a variety of delicious menus, from steak
                                        to Indonesian culinary delights, all with the best quality</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/cSqSH32MicnagS3s9" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href=" https://vt.tiktok.com/ZS6c9yDjr/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div><!--end teb pane-->

                        <div class="tab-pane fade bg-white p-4 rounded shadow" id="data-analise" role="tabpanel"
                            aria-labelledby="database">
                            <div class="row">
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/bika-03.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>BIKA AMBON ZULAIKHA</h4>
                                    <p>Legendary place in Medan to enjoy authentic Bika Ambon
                                        which is delicious with a sweet and chewy taste, is the right choice
                                        to taste typical Medan snacks</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/AJjMHQLfwjqskaSYA" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63af1HA/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/bolu-03.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>BOLU MERANTI</h4>
                                    <p>The layered sponge cake is super soft, tender and has a very sweet taste
                                        just right. Each layer is full of deliciousness, making it a snack
                                        perfect that should not be missed</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/W2jAPmmZ2VaG7Fyp8" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63a3oR7/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/gogo-03.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>RISOL SPESIAL GOGO</h4>
                                    <p>Risol with crispy skin and rich filling, snack
                                        a mouth-watering tantalizer full of flavour, perfect to accompany
                                        your relaxing time</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/9MjXk436krXMC8UM6" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63aTJ25/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/clover-03.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>CLOVER BAKESHOPPE</h4>
                                    <p>Delicious cakes and breads with mouth-watering flavors.
                                        Each option is made with quality materials, perfect for
                                        satisfy your sweet snack craving</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/jNUysHTAKUYuzFWt6" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63mA1em/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/toba-03.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>BOLU TOBA MEDAN</h4>
                                    <p>Soft, layered sponge cake with a distinctive taste makes it a souvenir
                                        a favorite that tourists are always looking for. With a sweet taste
                                        just right, this sponge cake is suitable to accompany various special moments!</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/RQBFNr7diA1JJgYT7" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63m5fLt/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/teri-03.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>TERI BAJAK</h4>
                                    <p>A typical Medan snack that is crunchy, spicy and tasty. Made
                                        with special spices that are rich in taste, every bite
                                        provides an appetizing sensation.</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/E71jU8iDLdFn1zcq5" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63ma9C7/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div><!--end teb pane-->

                        <div class="tab-pane fade bg-white p-4 rounded shadow" id="security" role="tabpanel"
                            aria-labelledby="server">
                            <div class="row">
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/tjong-08.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>Tjong A Fie Mansion</h4>
                                    <p>A historic house in Medan that holds cultural stories
                                        Chinese with magnificent architecture and a rich art collection
                                        stunning</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/PRXSUFLnrqqw3k8e6" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63RP89J/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/al-mashun-08.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>MASJID RAYA AL-MASHUN</h4>
                                    <p>Al-Mashun Mosque, Medan's architectural gem with beauty
                                        stunning design, offering a spiritual experience and
                                        deep history</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/2So4hXxox9yMELpF7" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href=" https://vt.tiktok.com/ZS638JsrV/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/maimun-08.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>MAIMUN PALACE</h4>
                                    <p>Maimun Palace, a symbol of the glory of the Deli Sultanate, is enchanting
                                        with magnificent architecture and preserved historical charm.</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/YKYNa3pT6zZsa1ay5" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS638CMvK" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/lake-toba-08.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>Lake TOBA</h4>
                                    <p>Lake Toba is the largest volcanic lake in the world, formed
                                        from a supervolcano eruption, with Samosir Island in the middle
                                        as a tourist and cultural destination.</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/cTBe8D3CiEJnwmam7" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS6wsJPF8/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/miki-funland-08.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>MIKIE FUNLAND</h4>
                                    <p>Known as the largest outdoor amusement park in Sumatra,
                                        located in Berastagi, with more than 35 exciting rides for
                                        all ages</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/o2PkJMRBMa2ELyH16" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href=" https://vt.tiktok.com/ZS6Kefa2U/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/taman-seribu-08.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>Taman Seribu Bunga Raya</h4>
                                    <p>Taman Seribu Bunga Raya is a tourist destination in Berastagi
                                        which presents the beauty of thousands of colorful flowers, replicas
                                        the Eiffel Tower, and local culinary delights in a cool mountain atmosphere</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/mUSkvcpcLvMp9dkx9" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS6KeDjVU" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/budaya-09.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>BUDAYALAND</h4>
                                    <p>Exciting amusement park in the city center, with rides and attractions
                                        Interesting for all ages, perfect for quality time
                                        with family and friends.</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/MhEyRSY8dEc8Z6jB9" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63UcPML/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/lumbini-09.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>LUMBINI NATURAL PARK</h4>
                                    <p>A tourist destination with a calm natural feel, beautiful views, and
                                        calming spiritual atmosphere.</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/a1rhPK18DZa5Pf9V7" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63yCFH5" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/gundaling-09.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>GUNDALING FARMSTEAD</h4>
                                    <p>Enjoy the farm experience in Berastagi with
                                        view of Mount Sinabung, feeding animals,
                                        horse riding, and fresh mountain air</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/je71hnJCcahYSobT7" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63yyQXH/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/sipiso-09.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>SIPISO-PISO WATERFALL</h4>
                                    <p>Offers spectacular views with a lake in the background
                                        Toba, Sipiso-piso Waterfall is the perfect place for
                                        enjoy the beauty of nature and fresh air.</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/XX8KBZpiUvePXJ1e8" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63f1f8P/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/efrata-09.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>EFRATA WATERFALL</h4>
                                    <p>Efrata Waterfall, hidden in the middle of the forest, offers
                                        Stunning natural beauty with a calm atmosphere
                                        and fresh, suitable for adventure and relaxation</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/wSM8zuhrgJeEzAbc7" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63yE1ad/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/laulutih-09.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>LAU LUTIH WATERFALL</h4>
                                    <p>Clear water flow and surrounded by green trees,
                                        offers a cool and calming natural atmosphere,
                                        perfect for outdoor adventures</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/aH5cWH681PVsi4dE9" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS635hDgp/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div><!--end teb pane-->

                        <div class="tab-pane fade bg-white p-4 rounded shadow" id="designing" role="tabpanel"
                            aria-labelledby="webdesigning">

                            <div class="row">
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/bistronomix-08.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>BISTRONOMIX</h4>
                                    <p>The perfect place to enjoy a delicious meal while
                                        Enjoy a relaxed atmosphere with entertaining live music</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/AVmccdMLekqhtTVp8" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS638GcjY/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/house-brew-08.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>HOUSE OF BREW 2</h4>
                                    <p>Enjoy various variants of coffee and specialty drinks with
                                        Cozy and comfortable atmosphere, suitable for gathering with friends
                                        friends or just relax.</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/5kpEMfVgwrxmDsjj8" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63LhQkK/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/tropical-08.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>TROPICAL ROOFTOP</h4>
                                    <p>Enjoy various variants of coffee and specialty drinks with
                                        Cozy and comfortable atmosphere, suitable for gathering with friends
                                        friends or just relax.</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="javascript:void(0)" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63LhQkK/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/bistronomix-08.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>THE THIRTY-SIX</h4>
                                    <p>Stylish decoration and warm atmosphere accompanied live
                                        music that will accompany your every moment.</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/py88Y5tzecozMu4z6" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63DBvbm/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/campion-08.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>CHAMPION CAFE</h4>
                                    <p>Cozy atmosphere with delicious menu choices, suitable for
                                        relax and enjoy time with friends or family.</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/8tg8GeeY2dpx384a8" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63D67g4/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/rumah-pohon-08.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>CAFE RUMAH POHON</h4>
                                    <p>Enjoy a delicious meal amidst the trees with ambiance
                                        unique and beautiful natural scenery, creating
                                        a calm and refreshing dining experience</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/d3Nwb7m44TFjT36F7" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS63DUPDu/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/no-brand-08.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>NO BRAND CAFE</h4>
                                    <p>Have fun hanging out with friends at No Brand Cafe!
                                        Cozy atmosphere, delicious menu, and cool live music
                                        hanging out becomes more fun. Enjoy delicious coffee, snacks
                                        appetizing, and comfortable vibes all night long</p>
                                    <div class="d-flex justify-content-evenly">
                                        <a href="https://maps.app.goo.gl/MUTTGiha7mcN8QV68" target="_blank" class="kuning">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <small class="text-muted">Address</small>
                                        </a>

                                        <a href="https://vt.tiktok.com/ZS6KYJa1U/" target="_blank" class="kuning">
                                            <i class="fa-solid fa-star"></i>
                                            <small class="text-muted">Review</small>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div><!--end teb pane-->

                        <div class="tab-pane fade bg-white p-4 rounded shadow" id="kuliner" role="tabpanel"
                            aria-labelledby="webdesigning">
                            <div class="row">
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/bus-09.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>Medan to Lake Toba</h4>
                                    <p class="mb-0">Land Track (Samosir via Tele)</p>
                                    <small class="mb-0">By Bus or Car</small>
                                    <ul>
                                        <li>Route: Medan - Berastagi - Kabanjahe - Simpang Tele - Jalan
                                            Tele - Samosir</li>
                                        <li>Distance: ~ 220 km / ~ 7 Hours</li>
                                        <li>Sampri Bus Terminal (Medan - Samosir): ~ Rp. 200,000</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/kereta-09.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>Medan to Lake Toba</h4>
                                    <p class="mb-0">Land Track (Parapat)</p>
                                    <small class="mb-0">By Train</small>
                                    <ul>
                                        <li>Route: Train (Medan Station - Siantar Station) - Terminal
                                            Parapat</li>
                                        <li>Distance: ~ 150 km / ~ 4-5 Hours</li>
                                        <li>Local Train (Medan Station - Siantar Station): Rp. 22,000</li>
                                        <li>Train tickets can be ordered via KAI Access</li>
                                        <li>Public Transportation Siantar Station - Parapat Terminal: Rp. 30,000</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/ferry-09.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>Medan to Lake Toba</h4>
                                    <p class="mb-0">Sea Track (Samosir via Parapat)</p>
                                    <small class="mb-0">By Train</small>
                                    <ul>
                                        <li>Route: Ajibata Parapat Harbor - Ambarita Harbor
                                            Samosir
                                        </li>
                                        <li>Distance: ~ 6 km / ~ 30 minutes</li>
                                        <li>Ferry (Ajibata Parapat Port - Ambarita Port
                                            Samosir): Rp. 16,700</li>
                                        <li>Ferry tickets can be ordered via trip.ferizy.com</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/bus2-09.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>Medan to Berastagi</h4>
                                    <p class="mb-0">Land Track</p>
                                    <small class="mb-0">By Public Transport</small>
                                    <ul>
                                        <li>Route: Medan – Sembahe – Sibaulangit – Berastagi
                                            ~ 50 km (~ 1.5 Hours - 2 Hours)
                                        </li>
                                        <li>Alternative Route: Medan – Pancurbatu – Sibaulangit – Berastagi
                                            ~ 55-60 km (~ 2 Hours - 2.5 Hours)</li>
                                        <li>Sinabung Bus (Terminal Padang Bulan - Penatapan
                                            Berastagi): ~ 20,000 - 25.00</li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 px-5 py-2">
                                    <img src="assets/images/medan/travel-09.jpg" class="img-fluid rounded" alt="tabona">
                                </div>
                                <div class="col-lg-8 px-5 py-5">
                                    <h4>Medan to Berastagi</h4>
                                    <p class="mb-0">Land Track</p>
                                    <small class="mb-0">Travel Trip Packages</small>
                                    <ul>
                                        <!-- <li>Travel: Besi Berani Travel</li> -->
                                        <!-- <li>Contact: +62 852 7560 9025</li> -->
                                        <li>Cost: Travel costs IDR 650,000 per car, including fuel,
                                            drivers, and cars. Does not include tourist tickets</li>
                                        <li>Tourist Locations: Silikap Waterfall, Pariban Hot Water, Pagoda
                                            Gundailing, Strawberry Farm, Gundaling Farmstead. Can
                                            request tourist attractions to visit</li>
                                        <li>Departure Time: 06:00 Morning from Medan</li>
                                        <li>Return Time: 18:00 Afternoon from Berastasgi, to Medan
                                            Evening</li>
                                    </ul>
                                </div>

                            </div>

                        </div><!--end teb pane-->
                    </div><!--end tab content-->
                </div><!--end col-->
            </div><!--end row-->
        </div>
    </section>
</div>
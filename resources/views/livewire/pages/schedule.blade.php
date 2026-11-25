<div>
<<<<<<< HEAD
    <section class="bg-half d-table w-100">
        <div class="bg-overlay-blue "></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title text-white"> Scientific Schedule </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Scientific Program</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sciientific Schedule</li>
                                </ul>
                            </nav>
=======

    <section class="relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_12%_20%,rgba(65,14,14,0.7),transparent_35%),radial-gradient(circle_at_90%_80%,rgba(71,41,41,0.95),transparent_45%)]">
        </div>
        <div class="relative mx-auto max-w-7xl px-5 py-16 sm:px-8 lg:px-12 lg:py-24">
            <h2 class="uppercase text-2xl font-bold tracking-wide lg:text-4xl">Scientific Schedule</h2>
            <div class="mt-7 h-1 w-20 bg-red-700"></div>
        </div>
    </section>
    <x-section.breadcrumbs />
    <div class="px-5 md:px-10 pt-0 mt-10 flex flex-col md:flex-row gap-4 justify-center">
        <label class="input input-lg input-warning rounded-lg w-full max-w-6xl">
            <i class="fa fa-search opacity-45 text-sm"></i>
            <input wire:model.live='search' type="text" class="grow" placeholder="Search Topic, Speaker, Room" />
        </label>
        <div class="flex flex-col items-center text-center md:text-start md:items-start">
            <button class="btn bg-[#C0809A] hover:bg-[#4E6690] hover:text-white  rounded-lg"><i
                    class="fa fa-download"></i> Download PDF Schedule</button>
            <span class="text-xs text-error italic">* The downloadable PDF schedule always reflects the most up-to-date information</span>
        </div>
    </div>

    <section class="pt-10 pb-24 px-2 lg:px-5">
        <div class="flex flex-col lg:flex-row justify-between gap-4">
            <div class="drawer drawer-end block lg:hidden z-30">
                <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                    <!-- Page content here -->
                    <label for="my-drawer-4"
                        class="drawer-button btn rounded-lg px-3"><i
                            class="fa-solid fa-filter"></i> Filter</label>
                </div>
                <div class="drawer-side">
                    <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
                    <div class="menu bg-base-200 text-base-content min-h-full w-80 p-4">
                        <!-- Sidebar content here -->
                        <div class="my-auto">
                            <h2 class="card-title">Filter</h2>
                            <fieldset class="fieldset p-4 bg-base-100 border border-base-300 rounded-box w-64">
                                <legend class="fieldset-legend">Date</legend>
                                <div class="flex items-center">
                                    <select wire:model.live='date' class="select flex-grow">
                                        <option value="0">Choose a date</option>
                                        @foreach ($uniqDates as $date)
                                        <option value="{{ $date }}">{{ \Carbon\Carbon::parse($date)->format('d F Y') }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @if($date)
                                    <button wire:click="resetDate" class="btn btn-xs btn-error ml-2">X</button>
                                    @endif
                                </div>
                            </fieldset>
                            <fieldset class="fieldset p-4 bg-base-100 border border-base-300 rounded-box w-64">
                                <legend class="fieldset-legend">Session</legend>
                                <div class="flex items-center">
                                    <select wire:model.live='category' class="select flex-grow">
                                        <option value="0">Choose a Session</option>
                                        @foreach ($uniqCategories as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                    @if($category)
                                    <button wire:click="resetCategory" class="btn btn-xs btn-error ml-2">X</button>
                                    @endif
                                </div>
                            </fieldset>
>>>>>>> 4e48335 (feat: redesign for mcue 2027)
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <section class="section">
        <div class="container">
            <div class="general-ques">
                <div class="row">
                    {{-- <div class="col-lg-4 order-1 order-lg-2 p-2 align-self-baseline" style="
                    position: sticky !important;
                    top: 0 !important;
                    z-index: 1;">
                        <div class="faq-form bg-white rounded box-shadow p-6 me-4 m-sm-0">
                            <div class="form-title mb-4 border-dashed-bottom-2">
                                <h5 class="mb-2"> Filter</h5>
                            </div>
                            <div>
                                <p class="fw-bold black">Date</p>
                                @foreach ($dates as $date)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $date }}"
                    id="date-{{ $loop->index }}" wire:model.live="selectedDates">
                    <label class="form-check-label" for="date-{{ $loop->index }}">
                        {{ \Carbon\Carbon::parse($date)->format('d F Y') }}
                    </label>
                </div>
                @endforeach

                <p class="fw-bold black mt-3">Room</p>
                @foreach ($rooms as $room)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{ $room }}"
                        id="room-{{ $loop->index }}" wire:model.live="selectedRooms">
                    <label class="form-check-label" for="room-{{ $loop->index }}">
                        {{ $room }}
                    </label>
                </div>
                @endforeach
                <p class="fw-bold black mt-3">Sessions</p>
                @foreach ($categories as $category)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{ $category }}"
                        id="category-{{ $loop->index }}" wire:model="selectedCategories">
                    <label class="form-check-label" for="category-{{ $loop->index }}">
                        {{ $category }}
                    </label>
                </div>
                @endforeach
            </div>
        </div>
</div> --}}

<div class="col-lg-12 order-2 order-lg-1 p-2">
    <div class="general-ques-right mx-5">
        <div class="row gy-3">
            <div class="px-3 pb-5">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa-solid fa-search"></i>
                    </span>
                    <input type="text" class="form-control border" placeholder="Search Schedule"
                        aria-label="Search Schedule" aria-describedby="basic-addon1"
                        wire:model.live.debounce.500ms="search">
                </div>
            </div>
        </div>

        @foreach ($uniqDates as $date)
        <div class="section-title py-2 text-center text-lg-start">
            <h4 class="mb-1">{{\Carbon\Carbon::parse($date)->format('l, d F')}}</h4>
        </div>
        @foreach ($uniqCategories as $item)
        @if (
        !($date == '2025-09-25' && ($item == 'Workshop' ))
        )
        <p class="mb-0 mt-5">{{$item}}</p>

        <div class="faq-accordion p-4 bg-lightgrey rounded border-2 border-light-subtle ">
            <div class="accordion accordion-faq " id="accordionFlushExample">
                @foreach ($atglances as $atglance)
                @if ($atglance->category_sesi == $item && $atglance->date == $date)
                <div class="accordion-item border mb-1 rounded">
                    <p class="accordion-header p-4">
                        <button class="accordion-button collapsed fw-semibold p-0" type="button"
                            data-bs-toggle="collapse" data-bs-target="#{{$loop->index}}"
                            aria-expanded="false" aria-controls="tes">
                            {{$atglance->title_ses}} - <small class="fst-italic"> {{$atglance->room}}</small>

                        </button>
                    </p>
                    <div id="{{$loop->index}}" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body bg-lightgrey">
                            <div class="px-0">
                                <h4>{{$atglance->title_ses}}</h4>
                                <p class="black mb-2">{{$atglance->time}} | {{$atglance->room}}</p>
                                <p class="black mb-2"></p>
                                <p class="mb-0">Moderator : <span
                                        class="black fw-semibold">{{$atglance->moderator}}
                                    </span></p>
                                <p class="">Panelist : <span
                                        class="black fw-semibold">{{$atglance->panelist}}
                                    </span></p>
                            </div>
                            <div class="table-responsive">
                                <table class="table rounded table-hover">
                                    <tbody>
                                        @foreach ($atglance->schedules as $schedule)
                                        <tr>
                                            <td>{{$schedule->time_speaker}}</td>
                                            <td><span
                                                    class="black fw-bold">{{$schedule->topic_title}}</span>
                                                <br><small>Speaker: {{$schedule->speaker}}</small>
                                            </td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                @endif
                @endforeach
            </div>
        </div>
        @endif
        @endforeach
        @endforeach
    </div>
</div>
</div>
</div>
</div>
</section>
</div>
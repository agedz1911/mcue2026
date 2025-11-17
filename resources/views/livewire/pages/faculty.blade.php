<div>
    <section class="bg-half d-table w-100">
        <div class="bg-overlay-blue "></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title text-white"> Faculties </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Congress Information</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Faculties</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div> <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->

    <section class="section">
        <div class="container">
            <div class="">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fa-solid fa-search"></i>
                    </span>
                    <input type="text" wire:model.live.debounce.500ms='searchTerm' class="form-control border"
                        placeholder="Search Faculties" aria-label="Search Faculties" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="mt-5">
                <nav>
                    <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="indonesian-tab" data-bs-toggle="tab"
                            data-bs-target="#indonesian" type="button" role="tab" aria-controls="indonesian"
                            aria-selected="true">Indonesian Faculties</button>
                        <button class="nav-link" id="foreign-tab" data-bs-toggle="tab" data-bs-target="#foreign"
                            type="button" role="tab" aria-controls="foreign" aria-selected="false">Foreign
                            Faculties</button>
                    </div>
                </nav>
                <div class="tab-content mt-5" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="indonesian" role="tabpanel"
                        aria-labelledby="indonesian-tab" tabindex="0">

                        <div class="sepaker-list">
                            <div class="row">
                                <small class="text-danger fst-italic mb-3">*within Confirmation</small>
                                @foreach ($indofaculties as $indo)
                                <div class="col-lg-3 col-md-6 mb-4 pb-2 text-center">
                                    <div class="card blog rounded border-0 shadow overflow-hidden">
                                        <div class="position-relative">
                                            <img src="{{$indo->image ? asset('storage/' . $indo->image) : "
                                            assets/images/speakers.jpg"}}" class="card-img-top" alt="{{$indo->name}}">
                                            <div class="overlay rounded-top"></div>
                                        </div>
                                        <div class="card-body content">
                                            <h5><a href="javascript:void(0)" class="card-title title text-dark">{{$indo->name}}</a></h5>
                                            <div class="post-meta d-flex justify-content-between mt-1">
                                                <p class="text-muted readmore">{{$indo->country}} </p>
                                                <small type="button" class="text-primary" data-bs-toggle="modal" data-bs-target="#indo{{$loop->index}}">
                                                    Read More..
                                                </small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="indo{{$loop->index}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title fs-5" id="ModalLabel">Faculty Detail
                                                    </h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-0 px-3">
                                                        <div class="row">
                                                            <div class="col-lg-8">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <img class="rounded-circle shadow img-thumbnail"
                                                                        style="width: 80px"
                                                                        src="{{$indo->image ? asset('storage/' . $indo->image) : "
                                                                    assets/images/speakers.jpg"}}"
                                                                        alt="{{$indo->name}}">
                                                                    <div>
                                                                        <p class="black mb-0"><span
                                                                                class="fw-bold">{{$indo->name}}</span> <br>
                                                                            {{$indo->country}}
                                                                        </p>
                                                                        <small>{{$indo->description}}</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-lg-5 mt-3 mb-2">
                                                            <div class="col-lg-12">
                                                                <p class="fw-bold">Session</p>
                                                                @foreach ($indo->schedules as $schedule)
                                                                <div class="d-flex gap-5 text-success fw-bold">
                                                                    <p>{{
                                                                    $schedule->sesi && $schedule->sesi->date ?
                                                                    \Carbon\Carbon::parse($schedule->sesi->date)->format('d
                                                                    F Y') : 'Tanggal tidak tersedia'
                                                                    }}</p>
                                                                    <p>{{$schedule->time_speaker}}</p>
                                                                    <p>{{$schedule->sesi && $schedule->sesi->room ? $schedule->sesi->room : 'room not available'}}</p>
                                                                </div>
                                                                <p class="fw-bold black mb-1">{{$schedule->sesi && $schedule->sesi->title_ses ? $schedule->sesi->title_ses : 'title not available'}}
                                                                </p>
                                                                <p class="black mb-5 border-dashed-bottom-2 pb-3">
                                                                    {{$schedule->topic_title}}
                                                                </p>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="foreign" role="tabpanel" aria-labelledby="foreign-tab" tabindex="0">

                        <div class="sepaker-list">
                            <div class="row">
                                <small class="text-danger fst-italic mb-3">*within Confirmation</small>
                                @foreach ($foreignfaculties as $foreign)
                                <div class="col-lg-3 col-md-6 p-2 text-center">
                                    <div class="card blog rounded border-0 shadow overflow-hidden">
                                        <div class="position-relative">
                                            <img src="{{$foreign->image ? asset('storage/' . $foreign->image) : "
                                            assets/images/speakers.jpg"}}" class="card-img-top" alt="{{$foreign->name}}">
                                            <div class="overlay rounded-top"></div>
                                        </div>
                                        <div class="card-body content">
                                            <h5><a href="javascript:void(0)" class="card-title title text-dark">{{$foreign->name}}</a></h5>
                                            <div class="post-meta d-flex justify-content-between mt-3">
                                                <p class="text-muted readmore">{{$foreign->country}} </p>
                                                <small type="button" class="text-primary" data-bs-toggle="modal" data-bs-target="#forein-{{$loop->index}}">
                                                    Read More..
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="forein-{{$loop->index}}" tabindex="-1"
                                        aria-labelledby="ModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title fs-5" id="ModalLabel">Faculty Detail
                                                    </h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mb-0 p-3">
                                                        <div class="row">
                                                            <div class="col-lg-8">
                                                                <div class="d-flex align-items-center gap-3">
                                                                    <img class="rounded-circle shadow img-thumbnail"
                                                                        style="width: 80px"
                                                                        src="{{$foreign->image ? asset('storage/' . $foreign->image) : "
                                                                    assets/images/speakers.jpg"}}"
                                                                        alt="{{$foreign->name}}">
                                                                    <div>
                                                                        <p class="black mb-0"><span
                                                                                class="fw-bold">{{$foreign->name}}</span>
                                                                            <br>
                                                                            {{$foreign->country}}
                                                                        </p>
                                                                        <small>{{$foreign->description}}</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-lg-5 mt-3 mb-2">
                                                            <div class="col-lg-12">
                                                                <p class="fw-bold">Session</p>
                                                                @foreach ($foreign->schedules as $schedule)
                                                                <div class="d-flex gap-5 text-success fw-bold">
                                                                    <p>{{
                                                                    $schedule->sesi && $schedule->sesi->date ?
                                                                    \Carbon\Carbon::parse($schedule->sesi->date)->format('d
                                                                    F Y') : 'Tanggal tidak tersedia'
                                                                    }}</p>
                                                                    <p>{{$schedule->time_speaker}}</p>
                                                                    <p>{{$schedule->sesi && $schedule->sesi->room ? $schedule->sesi->room : 'room not available'}}</p>
                                                                </div>
                                                                <p class="fw-bold black mb-1">{{$schedule->sesi && $schedule->sesi->title_ses ? $schedule->sesi->title_ses : 'title not available'}}
                                                                </p>
                                                                <p class="black mb-5 border-dashed-bottom-2 pb-3">
                                                                    {{$schedule->topic_title}}
                                                                </p>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn1 "
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
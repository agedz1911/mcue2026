<<<<<<< HEAD
<div>
    <section class="bg-half d-table w-100">
        <div class="bg-overlay-blue "></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title text-white"> Program at Glance </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Scientific Program</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Program at Glance</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
=======
<style>
    [x-cloak] {
        display: none !important;
    }
</style>

<div x-data="{
    searchTerm: '',
    matchesSearch(text) {
        return text.toLowerCase().includes(this.searchTerm.trim().toLowerCase());
    }
}">
    <section class="relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_12%_20%,rgba(65,14,14,0.7),transparent_35%),radial-gradient(circle_at_90%_80%,rgba(71,41,41,0.95),transparent_45%)]">
        </div>
        <div class="relative mx-auto max-w-7xl px-5 py-16 sm:px-8 lg:px-12 lg:py-24">
            <h2 class="text-white uppercase text-2xl font-bold tracking-wide lg:text-4xl">Program at a Glance</h2>
            <div class="mt-7 h-1 w-20 bg-red-700"></div>
>>>>>>> 4e48335 (feat: redesign for mcue 2027)
        </div>
        <!--end container-->
    </section>
    <!--end section-->

<<<<<<< HEAD

    <section class="section">
        <!-- HTML STATIC -->
        <div class="container">
            <nav>
                <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-25-tab" data-bs-toggle="tab" data-bs-target="#nav-25"
                        type="button" role="tab" aria-controls="nav-25" aria-selected="false">25 September</button>
                    <button class="nav-link " id="nav-26-tab" data-bs-toggle="tab" data-bs-target="#nav-26"
                        type="button" role="tab" aria-controls="nav-26" aria-selected="false">26 September</button>
                    <button class="nav-link" id="nav-27-tab" data-bs-toggle="tab" data-bs-target="#nav-27" type="button"
                        role="tab" aria-controls="nav-27" aria-selected="false">27 September</button>
                    <button class="nav-link" id="nav-28-tab" data-bs-toggle="tab" data-bs-target="#nav-28"
                        type="button" role="tab" aria-controls="nav-28" aria-selected="false">28 September</button>
                </div>
            </nav>
            <div class="tab-content mt-5" id="nav-tabContent">
                <div class="tab-pane show active" id="nav-25" role="tabpanel" aria-labelledby="nav-25-tab" tabindex="0">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 11%" class="text-center" scope="col">Convention 2</th>
                                    <th style="width: 11%" class="text-center" scope="col">Ballroom 1</th>
                                    <th style="width: 11%" class="text-center" scope="col">Ballroom 2</th>
                                    <th style="width: 11%" class="text-center" scope="col">Santika 15, 16 & 17</th>
                                    <th style="width: 11%" class="text-center" scope="col">Santika 5 & 6</th>
                                    <th style="width: 11%" class="text-center" scope="col">Santika 7</th>
                                    <th style="width: 11%" class="text-center" scope="col">Santika 8</th>
                                    <th style="width: 11%" class="text-center" scope="col">Foyer 2nd Floor</th>
                                    <th style="width: 11%" class="text-center" scope="col">Santika 9</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        @foreach ($duaPuluhLima as $convention)
                                        @if ($convention->room == 'Convention 2')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$convention->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$convention->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$convention->title_ses}}
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$convention->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($convention->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$convention->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$convention->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$convention->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$convention->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($convention->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhLima as $ballroom1)
                                        @if ($ballroom1->room == 'Ballroom 1')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$ballroom1->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$ballroom1->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$ballroom1->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$ballroom1->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($ballroom1->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$ballroom1->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$ballroom1->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$ballroom1->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$ballroom1->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($ballroom1->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhLima as $ballroom2)
                                        @if ($ballroom2->room == 'Ballroom 2')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$ballroom2->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$ballroom2->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$ballroom2->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$ballroom2->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($ballroom2->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$ballroom2->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$ballroom2->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$ballroom2->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$ballroom2->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($ballroom2->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhLima as $santika15)
                                        @if ($santika15->room == 'Santika 15, 16 & 17')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$santika15->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$santika15->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$santika15->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$santika15->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($santika15->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$santika15->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$santika15->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$santika15->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$santika15->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($santika15->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhLima as $santika5_25)
                                        @if ($santika5_25->room == 'Santika 5 & 6')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$santika5_25->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$santika5_25->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$santika5_25->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$santika5_25->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($santika5_25->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$santika5_25->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$santika5_25->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$santika5_25->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$santika5_25->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($santika5_25->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhLima as $santika7)
                                        @if ($santika7->room == 'Santika 7')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$santika7->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$santika7->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$santika7->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$santika7->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($santika7->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$santika7->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$santika7->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$santika7->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$santika7->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($santika7->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhLima as $santika8)
                                        @if ($santika8->room == 'Santika 8')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$santika8->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$santika8->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$santika8->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$santika8->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($santika8->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$santika8->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$santika8->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$santika8->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$santika8->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($santika8->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhLima as $foyer)
                                        @if ($foyer->room == 'Foyer 2nd Floor')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$foyer->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$foyer->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$foyer->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$foyer->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($foyer->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$foyer->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$foyer->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$foyer->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$foyer->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($foyer->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhLima as $santika9_25)
                                        @if ($santika9_25->room == 'Santika 9')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#modal{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$santika9_25->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$santika9_25->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$santika9_25->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="modal{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$santika9_25->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($santika9_25->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$santika9_25->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$santika9_25->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$santika9_25->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$santika9_25->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($santika9_25->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="tab-pane fade " id="nav-26" role="tabpanel" aria-labelledby="nav-26-tab" tabindex="0">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 11%" class="text-center" scope="col">Convention 2</th>
                                    <th style="width: 11%" class="text-center" scope="col">Ballroom 1</th>
                                    <th style="width: 11%" class="text-center" scope="col">Ballroom 2</th>
                                    <th style="width: 11%" class="text-center" scope="col">Santika 5, 6</th>
                                    <th style="width: 11%" class="text-center" scope="col">Santika 15, 16 & 17</th>
                                    <th style="width: 11%" class="text-center" scope="col">Santika 7</th>
                                    {{-- <th style="width: 11%" class="text-center" scope="col">Santika 8</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        @foreach ($duaPuluhEnam as $convention)
                                        @if ($convention->room == 'Convention 2')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#convention{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$convention->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$convention->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$convention->title_ses}}
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="convention{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$convention->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($convention->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$convention->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$convention->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$convention->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$convention->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($convention->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhEnam as $ballroom1)
                                        @if ($ballroom1->room == 'Ballroom 1')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$ballroom1->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$ballroom1->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$ballroom1->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$ballroom1->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($ballroom1->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$ballroom1->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$ballroom1->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$ballroom1->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$ballroom1->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($ballroom1->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhEnam as $ballroom2)
                                        @if ($ballroom2->room == 'Ballroom 2')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#ballroom2{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$ballroom2->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$ballroom2->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$ballroom2->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="ballroom2{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$ballroom2->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($ballroom2->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$ballroom2->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$ballroom2->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$ballroom2->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$ballroom2->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($ballroom2->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhEnam as $santika5)
                                        @if ($santika5->room == 'Santika 5 & 6')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#santika5{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$santika5->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$santika5->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$santika5->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="santika5{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$santika5->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($santika5->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$santika5->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$santika5->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$santika5->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$santika5->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($santika5->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhEnam as $santika15)
                                        @if ($santika15->room == 'Santika 15, 16 & 17')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#santika15{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$santika15->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$santika15->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$santika15->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="santika15{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$santika15->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($santika15->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$santika15->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$santika15->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$santika15->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$santika15->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($santika15->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ($duaPuluhEnam as $santika7)
                                        @if ($santika7->room == 'Santika 7')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#santika7{{$loop->index}}">
                                                <div class="card-header">
                                                    <small
                                                        class="badge text-light bg-success py-2">{{$santika7->category_sesi}}</small>
                                                </div>
                                                <div class="card-body">

                                                    <p class="black fw-bold text-center">{{$santika7->time}}</p>
                                                    <p class="mb-0 text-muted text-center">{{$santika7->title_ses}}</p>

                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="modal fade" id="santika7{{$loop->index}}" tabindex="-1"
                                            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                            {{$santika7->title_ses}}
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="d-flex flex-row justify-content-between">
                                                            <div>
                                                                <p class="mb-0">Date :<span class="fw-bold black">
                                                                        {{\Carbon\Carbon::parse($santika7->date)->format('d
                                                                        F Y')}}</p>
                                                                <p class="">Time :<span class="fw-bold black">
                                                                        {{$santika7->time}}
                                                                    </span></p>
                                                            </div>
                                                            <div>
                                                                <p class="">Room :<span class="fw-bold black">
                                                                        {{$santika7->room}}
                                                                    </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <p class="mb-0">Session : <span class="fw-bold black">
                                                                {{$santika7->title_ses}}</span></p>
                                                        <p class="">Moderator : <span class="fw-bold black">
                                                                {{$santika7->moderator}}
                                                            </span></p>
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col" style="width: 18%">Time</th>
                                                                    <th scope="col">Topic</th>
                                                                    <th scope="col">Speaker</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($santika7->schedules as $schedule)

                                                                <tr>
                                                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                                                    <td>{{$schedule->topic_title}}</td>
                                                                    <td>{{$schedule->speaker}}</td>
                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn1 "
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </td>
                                    {{-- <td>
                                        @foreach ($duaPuluhEnam as $santika8)
                                        @if ($santika8->room == 'Santika 8')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#santika8{{$loop->index}}">
                                    <div class="card-header">
                                        <small
                                            class="badge text-light bg-success py-2">{{$santika8->category_sesi}}</small>
                                    </div>
                                    <div class="card-body">

                                        <p class="black fw-bold text-center">{{$santika8->time}}</p>
                                        <p class="mb-0 text-muted text-center">{{$santika8->title_ses}}</p>

                                    </div>
                    </div>
                </div>
                @endif
                <div class="modal fade" id="santika8{{$loop->index}}" tabindex="-1"
                    aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                    {{$santika8->title_ses}}
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="d-flex flex-row justify-content-between">
                                    <div>
                                        <p class="mb-0">Date :<span class="fw-bold black">
                                                {{\Carbon\Carbon::parse($santika8->date)->format('d
                                                                        F Y')}}</p>
                                        <p class="">Time :<span class="fw-bold black">
                                                {{$santika8->time}}
                                            </span></p>
                                    </div>
                                    <div>
                                        <p class="">Room :<span class="fw-bold black">
                                                {{$santika8->room}}
                                            </span>
                                        </p>
                                    </div>
                                </div>
                                <p class="mb-0">Session : <span class="fw-bold black">
                                        {{$santika8->title_ses}}</span></p>
                                <p class="">Moderator : <span class="fw-bold black">
                                        {{$santika8->moderator}}
                                    </span></p>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 18%">Time</th>
                                            <th scope="col">Topic</th>
                                            <th scope="col">Speaker</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($santika8->schedules as $schedule)

                                        <tr>
                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                            <td>{{$schedule->topic_title}}</td>
                                            <td>{{$schedule->speaker}}</td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn1 "
                                    data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                </td> --}}
                </tr>
                </tbody>
                </table>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-27" role="tabpanel" aria-labelledby="nav-27-tab" tabindex="0">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 11%" class="text-center" scope="col">Ballroom 2</th>
                            <th style="width: 11%" class="text-center" scope="col">Santika 15, 16 & 17</th>
                            <th style="width: 11%" class="text-center" scope="col">Santika 5, 6</th>
                            <th style="width: 11%" class="text-center" scope="col">Santika 7</th>
                            <th style="width: 11%" class="text-center" scope="col">Santika 10, 11</th>
                            <th style="width: 11%" class="text-center" scope="col">Santika 9</th>
                            {{-- <th style="width: 11%" class="text-center" scope="col">Santika 12</th> --}}
                            <th style="width: 11%" class="text-center" scope="col">Santika 8</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                @foreach ($duaPuluhTujuh as $ballroom2_27)
                                @if ($ballroom2_27->room == 'Ballroom 2')
                                <div class="d-flex flex-column mb-2">
                                    <div class="card position-relative program-atglance shadow"
                                        style="cursor: pointer" data-bs-toggle="modal"
                                        data-bs-target="#tes{{$loop->index}}">
                                        <div class="card-header">
                                            <small
                                                class="badge text-light bg-success py-2">{{$ballroom2_27->category_sesi}}</small>
                                        </div>
                                        <div class="card-body">

                                            <p class="black fw-bold text-center">{{$ballroom2_27->time}}</p>
                                            <p class="mb-0 text-muted text-center">{{$ballroom2_27->title_ses}}
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="modal fade" id="tes{{$loop->index}}" tabindex="-1"
                                    aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                    {{$ballroom2_27->title_ses}}
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <p class="mb-0">Date :<span class="fw-bold black">
                                                                {{\Carbon\Carbon::parse($ballroom2_27->date)->format('d
                                                                        F Y')}}</p>
                                                        <p class="">Time :<span class="fw-bold black">
                                                                {{$ballroom2_27->time}}
                                                            </span></p>
                                                    </div>
                                                    <div>
                                                        <p class="">Room :<span class="fw-bold black">
                                                                {{$ballroom2_27->room}}
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="mb-0">Session : <span class="fw-bold black">
                                                        {{$ballroom2_27->title_ses}}</span></p>
                                                <p class="">Moderator : <span class="fw-bold black">
                                                        {{$ballroom2_27->moderator}}
                                                    </span></p>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="width: 18%">Time</th>
                                                            <th scope="col">Topic</th>
                                                            <th scope="col">Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($ballroom2_27->schedules as $schedule)

                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn1 "
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($duaPuluhTujuh as $santika15)
                                @if ($santika15->room == 'Santika 15, 16 & 17')
                                <div class="d-flex flex-column mb-2">
                                    <div class="card position-relative program-atglance shadow"
                                        style="cursor: pointer" data-bs-toggle="modal"
                                        data-bs-target="#santika15dua{{$loop->index}}">
                                        <div class="card-header">
                                            <small
                                                class="badge text-light bg-success py-2">{{$santika15->category_sesi}}</small>
                                        </div>
                                        <div class="card-body">

                                            <p class="black fw-bold text-center">{{$santika15->time}}</p>
                                            <p class="mb-0 text-muted text-center">{{$santika15->title_ses}}</p>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="modal fade" id="santika15dua{{$loop->index}}" tabindex="-1"
                                    aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                    {{$santika15->title_ses}}
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <p class="mb-0">Date :<span class="fw-bold black">
                                                                {{\Carbon\Carbon::parse($santika15->date)->format('d
                                                                        F Y')}}</p>
                                                        <p class="">Time :<span class="fw-bold black">
                                                                {{$santika15->time}}
                                                            </span></p>
                                                    </div>
                                                    <div>
                                                        <p class="">Room :<span class="fw-bold black">
                                                                {{$santika15->room}}
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="mb-0">Session : <span class="fw-bold black">
                                                        {{$santika15->title_ses}}</span></p>
                                                <p class="">Moderator : <span class="fw-bold black">
                                                        {{$santika15->moderator}}
                                                    </span></p>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="width: 18%">Time</th>
                                                            <th scope="col">Topic</th>
                                                            <th scope="col">Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($santika15->schedules as $schedule)

                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn1 "
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($duaPuluhTujuh as $santika5)
                                @if ($santika5->room == 'Santika 5 & 6')
                                <div class="d-flex flex-column mb-2">
                                    <div class="card position-relative program-atglance shadow"
                                        style="cursor: pointer" data-bs-toggle="modal"
                                        data-bs-target="#santikalima{{$loop->index}}">
                                        <div class="card-header">
                                            <small
                                                class="badge text-light bg-success py-2">{{$santika5->category_sesi}}</small>
                                        </div>
                                        <div class="card-body">

                                            <p class="black fw-bold text-center">{{$santika5->time}}</p>
                                            <p class="mb-0 text-muted text-center">{{$santika5->title_ses}}</p>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="modal fade" id="santikalima{{$loop->index}}" tabindex="-1"
                                    aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                    {{$santika5->title_ses}}
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <p class="mb-0">Date :<span class="fw-bold black">
                                                                {{\Carbon\Carbon::parse($santika5->date)->format('d
                                                                        F Y')}}</p>
                                                        <p class="">Time :<span class="fw-bold black">
                                                                {{$santika5->time}}
                                                            </span></p>
                                                    </div>
                                                    <div>
                                                        <p class="">Room :<span class="fw-bold black">
                                                                {{$santika5->room}}
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="mb-0">Session : <span class="fw-bold black">
                                                        {{$santika5->title_ses}}</span></p>
                                                <p class="">Moderator : <span class="fw-bold black">
                                                        {{$santika5->moderator}}
                                                    </span></p>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="width: 18%">Time</th>
                                                            <th scope="col">Topic</th>
                                                            <th scope="col">Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($santika5->schedules as $schedule)

                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn1 "
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($duaPuluhTujuh as $santika7)
                                @if ($santika7->room == 'Santika 7')
                                <div class="d-flex flex-column mb-2">
                                    <div class="card position-relative program-atglance shadow"
                                        style="cursor: pointer" data-bs-toggle="modal"
                                        data-bs-target="#santika7dua{{$loop->index}}">
                                        <div class="card-header">
                                            <small
                                                class="badge text-light bg-success py-2">{{$santika7->category_sesi}}</small>
                                        </div>
                                        <div class="card-body">

                                            <p class="black fw-bold text-center">{{$santika7->time}}</p>
                                            <p class="mb-0 text-muted text-center">{{$santika7->title_ses}}</p>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="modal fade" id="santika7dua{{$loop->index}}" tabindex="-1"
                                    aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                    {{$santika7->title_ses}}
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <p class="mb-0">Date :<span class="fw-bold black">
                                                                {{\Carbon\Carbon::parse($santika7->date)->format('d
                                                                        F Y')}}</p>
                                                        <p class="">Time :<span class="fw-bold black">
                                                                {{$santika7->time}}
                                                            </span></p>
                                                    </div>
                                                    <div>
                                                        <p class="">Room :<span class="fw-bold black">
                                                                {{$santika7->room}}
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="mb-0">Session : <span class="fw-bold black">
                                                        {{$santika7->title_ses}}</span></p>
                                                <p class="">Moderator : <span class="fw-bold black">
                                                        {{$santika7->moderator}}
                                                    </span></p>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="width: 18%">Time</th>
                                                            <th scope="col">Topic</th>
                                                            <th scope="col">Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($santika7->schedules as $schedule)

                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn1 "
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($duaPuluhTujuh as $santika10)
                                @if ($santika10->room == 'Santika 10 & 11')
                                <div class="d-flex flex-column mb-2">
                                    <div class="card position-relative program-atglance shadow"
                                        style="cursor: pointer" data-bs-toggle="modal"
                                        data-bs-target="#santika10dua{{$loop->index}}">
                                        <div class="card-header">
                                            <small
                                                class="badge text-light bg-success py-2">{{$santika10->category_sesi}}</small>
                                        </div>
                                        <div class="card-body">

                                            <p class="black fw-bold text-center">{{$santika10->time}}</p>
                                            <p class="mb-0 text-muted text-center">{{$santika10->title_ses}}</p>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="modal fade" id="santika10dua{{$loop->index}}" tabindex="-1"
                                    aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                    {{$santika10->title_ses}}
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <p class="mb-0">Date :<span class="fw-bold black">
                                                                {{\Carbon\Carbon::parse($santika10->date)->format('d
                                                                        F Y')}}</p>
                                                        <p class="">Time :<span class="fw-bold black">
                                                                {{$santika10->time}}
                                                            </span></p>
                                                    </div>
                                                    <div>
                                                        <p class="">Room :<span class="fw-bold black">
                                                                {{$santika10->room}}
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="mb-0">Session : <span class="fw-bold black">
                                                        {{$santika10->title_ses}}</span></p>
                                                <p class="">Moderator : <span class="fw-bold black">
                                                        {{$santika10->moderator}}
                                                    </span></p>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="width: 18%">Time</th>
                                                            <th scope="col">Topic</th>
                                                            <th scope="col">Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($santika10->schedules as $schedule)

                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn1 "
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($duaPuluhTujuh as $santika9)
                                @if ($santika9->room == 'Santika 9')
                                <div class="d-flex flex-column mb-2">
                                    <div class="card position-relative program-atglance shadow"
                                        style="cursor: pointer" data-bs-toggle="modal"
                                        data-bs-target="#santika9{{$loop->index}}">
                                        <div class="card-header">
                                            <small
                                                class="badge text-light bg-success py-2">{{$santika9->category_sesi}}</small>
                                        </div>
                                        <div class="card-body">

                                            <p class="black fw-bold text-center">{{$santika9->time}}</p>
                                            <p class="mb-0 text-muted text-center">{{$santika9->title_ses}}</p>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="modal fade" id="santika9{{$loop->index}}" tabindex="-1"
                                    aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                                    {{$santika9->title_ses}}
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="d-flex flex-row justify-content-between">
                                                    <div>
                                                        <p class="mb-0">Date :<span class="fw-bold black">
                                                                {{\Carbon\Carbon::parse($santika9->date)->format('d
                                                                        F Y')}}</p>
                                                        <p class="">Time :<span class="fw-bold black">
                                                                {{$santika9->time}}
                                                            </span></p>
                                                    </div>
                                                    <div>
                                                        <p class="">Room :<span class="fw-bold black">
                                                                {{$santika9->room}}
                                                            </span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="mb-0">Session : <span class="fw-bold black">
                                                        {{$santika9->title_ses}}</span></p>
                                                <p class="">Moderator : <span class="fw-bold black">
                                                        {{$santika9->moderator}}
                                                    </span></p>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" style="width: 18%">Time</th>
                                                            <th scope="col">Topic</th>
                                                            <th scope="col">Speaker</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($santika9->schedules as $schedule)

                                                        <tr>
                                                            <th scope="row">{{$schedule->time_speaker}}</th>
                                                            <td>{{$schedule->topic_title}}</td>
                                                            <td>{{$schedule->speaker}}</td>
                                                        </tr>
                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn1 "
                                                    data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </td>
                            {{-- <td>
                                        @foreach ($duaPuluhTujuh as $santika12)
                                        @if ($santika12->room == 'Santika 12')
                                        <div class="d-flex flex-column mb-2">
                                            <div class="card position-relative program-atglance shadow"
                                                style="cursor: pointer" data-bs-toggle="modal"
                                                data-bs-target="#santika12{{$loop->index}}">
                            <div class="card-header">
                                <small
                                    class="badge text-light bg-success py-2">{{$santika12->category_sesi}}</small>
                            </div>
                            <div class="card-body">

                                <p class="black fw-bold text-center">{{$santika12->time}}</p>
                                <p class="mb-0 text-muted text-center">{{$santika12->title_ses}}</p>

                            </div>
            </div>
        </div>
        @endif
        <div class="modal fade" id="santika12{{$loop->index}}" tabindex="-1"
            aria-labelledby="InaSPUModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                            {{$santika12->title_ses}}
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <p class="mb-0">Date :<span class="fw-bold black">
                                        {{\Carbon\Carbon::parse($santika12->date)->format('d
                                                                        F Y')}}</p>
                                <p class="">Time :<span class="fw-bold black">
                                        {{$santika12->time}}
                                    </span></p>
                            </div>
                            <div>
                                <p class="">Room :<span class="fw-bold black">
                                        {{$santika12->room}}
                                    </span>
                                </p>
                            </div>
                        </div>
                        <p class="mb-0">Session : <span class="fw-bold black">
                                {{$santika12->title_ses}}</span></p>
                        <p class="">Moderator : <span class="fw-bold black">
                                {{$santika12->moderator}}
                            </span></p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 18%">Time</th>
                                    <th scope="col">Topic</th>
                                    <th scope="col">Speaker</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($santika12->schedules as $schedule)

                                <tr>
                                    <th scope="row">{{$schedule->time_speaker}}</th>
                                    <td>{{$schedule->topic_title}}</td>
                                    <td>{{$schedule->speaker}}</td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn1 "
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        </td> --}}
        <td>
            @foreach ($duaPuluhTujuh as $santika8)
            @if ($santika8->room == 'Santika 8')
            <div class="d-flex flex-column mb-2">
                <div class="card position-relative program-atglance shadow"
                    style="cursor: pointer" data-bs-toggle="modal"
                    data-bs-target="#santikadelapan{{$loop->index}}">
                    <div class="card-header">
                        <small
                            class="badge text-light bg-success py-2">{{$santika8->category_sesi}}</small>
                    </div>
                    <div class="card-body">

                        <p class="black fw-bold text-center">{{$santika8->time}}</p>
                        <p class="mb-0 text-muted text-center">{{$santika8->title_ses}}</p>

                    </div>
                </div>
            </div>
            @endif
            <div class="modal fade" id="santikadelapan{{$loop->index}}" tabindex="-1"
                aria-labelledby="InaSPUModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="InaSPUModalLabel">
                                {{$santika8->title_ses}}
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <p class="mb-0">Date :<span class="fw-bold black">
                                            {{\Carbon\Carbon::parse($santika8->date)->format('d
                                                                        F Y')}}</p>
                                    <p class="">Time :<span class="fw-bold black">
                                            {{$santika8->time}}
                                        </span></p>
                                </div>
                                <div>
                                    <p class="">Room :<span class="fw-bold black">
                                            {{$santika8->room}}
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <p class="mb-0">Session : <span class="fw-bold black">
                                    {{$santika8->title_ses}}</span></p>
                            <p class="">Moderator : <span class="fw-bold black">
                                    {{$santika8->moderator}}
                                </span></p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 18%">Time</th>
                                        <th scope="col">Topic</th>
                                        <th scope="col">Speaker</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($santika8->schedules as $schedule)

                                    <tr>
                                        <th scope="row">{{$schedule->time_speaker}}</th>
                                        <td>{{$schedule->topic_title}}</td>
                                        <td>{{$schedule->speaker}}</td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn1 "
                                data-bs-dismiss="modal">Close</button>
=======
    <main class="mx-auto w-full max-w-8xl space-y-4 px-4 py-5 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between w-full items-start gap-2">
            <div class="flex flex-col gap-2 w-full">
                <label
                    class="flex flex-1 items-center gap-2 rounded-lg border border-slate-300 px-3 py-2 focus-within:ring-2 focus-within:ring-[#C0809A]">
                    <i class="fa fa-search text-sm text-slate-400" aria-hidden="true"></i>
                    <input x-model.debounce.300ms="searchTerm" type="search"
                        class="min-w-0 flex-1 border-0 bg-transparent text-sm outline-none focus:outline-none focus:ring-0"
                        placeholder="Search session, topic, Room, Speaker..." aria-label="Search sessions">
                    <button type="button" x-on:click="searchTerm = ''"
                        class="text-slate-400 transition hover:text-slate-700" aria-label="Reset search"
                        title="Reset search">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </label>
                <span x-show="searchTerm.trim()" x-cloak class="text-xs text-slate-500" aria-live="polite">
                    Matching sessions are highlighted; other sessions are dimmed.
                </span>
            </div>
            @if ($downloads->isNotEmpty())
            <div class="flex flex-col gap-2">
                <div class="flex flex-wrap items-center">
                    <a href="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($downloads->first()->atglance) }}"
                        target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center gap-2 rounded-lg bg-[#C0809A] px-4 py-2 text-sm font-semibold text-white transition hover:bg-[#A06080]">
                        <i class="fa fa-download" aria-hidden="true"></i>
                        Download PDF Schedule
                    </a>
                    <span class="text-xs italic text-slate-500">
                        Updated {{ \Carbon\Carbon::parse($downloads->first()->updated_at)->format('F jS, Y') }}
                    </span>
                </div>
                <span class="text-xs italic text-slate-500">
                    The PDF schedule always reflects the most up-to-date information.
                </span>
            </div>
            @endif
        </div>

        <div x-data="{ openTab: 1 }" class="space-y-4">
            <nav class="flex gap-2 overflow-x-auto pb-1" aria-label="Programme dates">
                @foreach ($days as $index => $day)
                <button type="button" x-on:click="openTab = {{ $index + 1 }}"
                    x-bind:class="openTab === {{ $index + 1 }} ? 'bg-[#C0809A] text-white shadow' : 'bg-white text-slate-3 hover:bg-fuchsia-50'"
                    class="shrink-0 rounded-xl px-4 py-2 text-left transition">
                    {{-- <span class="block text-xs opacity-80">Programme</span> --}}
                    <span class="font-semibold">{{ $day['label'] }}</span>
                </button>
                @endforeach
            </nav>

            @foreach ($days as $index => $day)
            <section x-show="openTab === {{ $index + 1 }}" x-cloak class="overflow-hidden rounded-xl bg-white shadow-sm"
                aria-label="{{ $day['label'] }} schedule">
                @if ($day['sessions']->isEmpty())
                <p class="p-6 text-center text-sm text-slate-500">
                    No sessions found for {{ $day['label'] }}.
                </p>
                @else
                <div class="max-h-[75vh] overflow-auto">
                    <div class="grid min-w-max text-xs"
                        style="grid-template-columns: 96px repeat({{ $day['rooms']->count() }}, minmax(150px, 1fr));">
                        <div
                            class="sticky left-0 top-0 z-30 flex items-center bg-[#C0809A] p-3 font-semibold text-white">
                            TIME
                        </div>
                        @foreach ($day['rooms'] as $roomName)
                        <div
                            class="sticky top-0 z-20 border-l border-slate-700 bg-[#C0809A] p-3 text-center font-semibold text-white">
                            {{ $roomName }}
                        </div>
                        @endforeach

                        @foreach ($day['timeSlots'] as $slot)
                        <div
                            class="sticky left-0 z-10 flex items-center border-t border-slate-200 bg-slate-50 p-3 font-semibold text-slate-600">
                            {{ $slot['time'] ?: 'Time to be announced' }}
                        </div>

                        @foreach ($slot['rooms'] as $room)
                        <div class="min-h-[84px] border-l border-t border-slate-200 p-1">
                            @foreach ($room['sessions'] as $session)
                            <button type="button"
                                onclick="document.getElementById('session-{{ $session->id }}').showModal()"
                                data-search-text="{{ \Illuminate\Support\Str::lower(implode(' ', array_filter([
                                    $session->title_ses,
                                    $session->room,
                                    $session->category_sesi,
                                    $session->moderator,
                                    $session->panelist,
                                    $session->schedules->pluck('topic_title')->implode(' '),
                                    $session->schedules->pluck('speaker')->implode(' '),
                                    $session->schedules->pluck('time_speaker')->implode(' '),
                                ]))) }}" x-bind:class="searchTerm.trim()
                                    ? (matchesSearch($el.dataset.searchText) ? 'ring-2 ring-amber-400 shadow-lg' : 'opacity-25')
                                    : ''"
                                class="mb-1 block min-h-[76px] w-full rounded-lg border border-fuchsia-200 bg-fuchsia-50 p-2 text-left text-fuchsia-950 transition hover:ring-2 hover:ring-fuchsia-400">
                                <span
                                    class="mb-1 inline-block rounded-full bg-fuchsia-100 px-2 py-0.5 text-[10px] font-semibold uppercase text-fuchsia-700">
                                    {{ $session->category_sesi ?: 'Session' }}
                                </span>
                                <span class="block font-semibold leading-tight">
                                    {{ $session->title_ses ?: 'Untitled session' }}
                                </span>
                                @if ($session->moderator)
                                <span class="mt-1 block text-[11px] text-fuchsia-700/70">
                                    {{ $session->moderator }}
                                </span>
                                @endif
                            </button>

                            <dialog id="session-{{ $session->id }}" class="modal">
                                <div class="modal-box max-h-[85vh] w-11/12 max-w-5xl text-left">
                                    <div class="flex items-start justify-between gap-4">
                                        <div>
                                            <span class="badge badge-info badge-sm">
                                                {{ $session->category_sesi ?: 'Session' }}
                                            </span>
                                            <h2 class="mt-2 text-xl font-bold text-slate-800">
                                                {{ $session->title_ses ?: 'Untitled session' }}
                                            </h2>
                                        </div>
                                        <form method="dialog">
                                            <button class="btn btn-ghost btn-sm" aria-label="Close dialog">✕</button>
                                        </form>
                                    </div>

                                    <dl class="mt-5 grid grid-cols-[auto_1fr] gap-x-4 gap-y-2 text-sm">
                                        <dt class="text-slate-500">Date</dt>
                                        <dd>{{ \Carbon\Carbon::parse($session->date)->format('d F Y') }}</dd>
                                        <dt class="text-slate-500">Time</dt>
                                        <dd>{{ $session->time ?: 'To be announced' }}</dd>
                                        <dt class="text-slate-500">Room</dt>
                                        <dd>{{ $session->room ?: 'To be announced' }}</dd>
                                        <dt class="text-slate-500">Moderator</dt>
                                        <dd>{{ $session->moderator ?: 'To be announced' }}</dd>
                                        @if ($session->panelist)
                                        <dt class="text-slate-500">Panelist</dt>
                                        <dd>{{ $session->panelist }}</dd>
                                        @endif
                                    </dl>

                                    <div class="mt-6 overflow-x-auto">
                                        <table class="table table-zebra">
                                            <thead>
                                                <tr>
                                                    <th>Time</th>
                                                    <th>Topic</th>
                                                    <th>Speaker</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($session->schedules as $schedule)
                                                <tr>
                                                    <th>{{ $schedule->time_speaker }}</th>
                                                    <td>{{ $schedule->topic_title }}</td>
                                                    <td>{{ $schedule->speaker }}</td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="3" class="text-center text-slate-500">
                                                        No session details available.
                                                    </td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <form method="dialog" class="modal-backdrop">
                                    <button aria-label="Close dialog">close</button>
                                </form>
                            </dialog>
                            @endforeach
>>>>>>> 4e48335 (feat: redesign for mcue 2027)
                        </div>
                        @endforeach
                        @endforeach
                    </div>
                </div>
<<<<<<< HEAD
            </div>
            @endforeach
        </td>
        </tr>
        </tbody>
        </table>
</div>
</div>
{{-- <div class="tab-pane fade" id="nav-28" role="tabpanel" aria-labelledby="nav-28-tab" tabindex="0">
                    5...
                </div> --}}
</div>

</div>
</section>
=======
                @endif
            </section>
            @endforeach
        </div>

        <p class="px-1 text-sm italic text-slate-500">
            Note: The scientific schedule is provisional and may be adjusted as requifuchsia.
        </p>
    </main>
>>>>>>> 4e48335 (feat: redesign for mcue 2027)
</div>
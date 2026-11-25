<div>
<<<<<<< HEAD
    <section class="bg-half d-table w-100">
        <div class="bg-overlay-blue "></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title text-white"> Registration </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Registration</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Online Registration</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
=======

    <section class="relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_12%_20%,rgba(65,14,14,0.7),transparent_35%),radial-gradient(circle_at_90%_80%,rgba(71,41,41,0.95),transparent_45%)]">
        </div>
        <div class="relative mx-auto max-w-7xl px-5 py-16 sm:px-8 lg:px-12 lg:py-24">
            <h2 class="uppercase text-2xl font-bold tracking-wide lg:text-4xl">Registration</h2>
            <div class="mt-7 h-1 w-20 bg-red-700"></div>
>>>>>>> 4e48335 (feat: redesign for mcue 2027)
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <section class="section">
        <div class="container">
            <div class="price-inner">
                <div class="price-title mb-7 w-lg-60 m-auto text-center">
                    <h2 class="mb-1">Registration <span class="kuning">Symposium</span></h2>
                </div>
                <div class="row">
                    <div class="price-options g-2 pb-6">
                        <span class="badge text-bg-warning px-3 rounded mb-3">Indonesian Participants</span>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead class="table-success text-center">
                                    <tr>
                                        <th scope="col" class="align-top">Category</th>
                                        <th scope="col" class="align-top">Early Bird Registration <br> up to 10 June
                                            2025
                                        </th>
                                        <th scope="col" class="align-top">Regular Registration <br> After 10 June 2025
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($regLocals as $regLocal)
                                    <tr>
                                        <th scope="row">{{$regLocal->title}}</th>
                                        <td class="text-center">IDR {{number_format($regLocal->early_bird_reg, 0, ',',
                                            '.')}}</td>
                                        <td class="text-center">IDR {{number_format($regLocal->normal_reg, 0, ',',
                                            '.')}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="relative">
                            <a href="https://expo.virconex-id.com/registration/asmiua2025/"
                                class="btn mb-3 float-end"><i class="fa-solid fa-list mx-3"></i>Register Now!</a>
                        </div>
                    </div>
                    <div class="price-options g-2 pb-6">
                        <span class="badge text-bg-warning px-3 rounded mb-3">Masterclass</span>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead class="table-success text-center">
                                    <tr>
                                        <th scope="col" class="align-top">Category</th>
                                        <th scope="col" class="align-top">Date
                                        </th>
                                        <th scope="col" class="align-top">Registration Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($masterclass as $ms)
                                    <tr>
                                        <th scope="row">{{$ms->title}}</th>
                                        <td class="text-center">
                                            {{\Carbon\Carbon::parse($ms->date_early_bird)->format('l, M jS, Y')}}
                                        </td>
                                        <td class="text-center">IDR
                                            @if(is_null($ms->early_bird_reg))
                                            TBA
                                            @elseif($ms->early_bird_reg == 0)
                                            Free
                                            @else
                                            {{ number_format($ms->early_bird_reg, 0, ',', '.') }}
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="relative">
                            <a href="https://expo.virconex-id.com/registration/asmiua2025/"
                                class="btn mb-3 float-end"><i class="fa-solid fa-list mx-3"></i>Register Now!</a>
                        </div>
                    </div>
                    <div class="price-options g-2 pb-6">
                        <span class="badge text-bg-warning px-3 rounded mb-3">Workshops</span>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead class="table-success text-center">
                                    <tr>
                                        <th scope="col" class="align-top">Category</th>
                                        <th scope="col" class="align-top">Date
                                        </th>
                                        <th scope="col" class="align-top">Registration Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($workshops as $ws)
                                    <tr>
                                        <th scope="row">{{$ws->title}}</th>
                                        <td class="text-center">
                                            {{\Carbon\Carbon::parse($ws->date_early_bird)->format('l, M jS, Y')}}
                                        </td>
                                        <td class="text-center">IDR
                                            @if(is_null($ws->early_bird_reg))
                                            TBA
                                            @elseif($ws->early_bird_reg == 0)
                                            Free
                                            @else
                                            {{ number_format($ws->early_bird_reg, 0, ',', '.') }}
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="relative">
                            <a href="https://expo.virconex-id.com/registration/asmiua2025/"
                                class="btn mb-3 float-end"><i class="fa-solid fa-list mx-3"></i>Register Now!</a>
                        </div>
                    </div>
                </div>

                <div class="price-options g-2 pb-6">
                    <span class="badge text-bg-primary px-3 rounded mb-3">Foreign Participants</span>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="table-secondary text-center">
                                <tr>
                                    <th scope="col" class="align-top">Category</th>
                                    <th scope="col" class="align-top">Early Bird Registration <br> up to 10 June 2025
                                    </th>
                                    <th scope="col" class="align-top">Regular Registration <br> After 10 June 2025</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($regForeigns as $regForeign)
                                <tr>
                                    <th scope="row">{{$regForeign->title}}</th>
                                    <td class="text-center">USD {{$regForeign->early_bird_reg}}</td>
                                    <td class="text-center">USD {{$regForeign->normal_reg}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="relative">
                        <a href="https://expo.virconex-id.com/registration/asmiua2025/"
                            class="btn btn1 mb-3 float-end"><i class="fa-solid fa-list mx-3"></i>Register Now!</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section" id="reg-info">
        <div class="container">
            <div class="ticket-inner  text-center position-relative">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ticket-left text-lg-start pb-6">
                            <div class="ticket-title">
                                <h2 class="mb-2">Registration
                                    <span class="kuning d-inline-block">information</span>
                                </h2>
                            </div>
                            <div class="ticket-info">
                                <div class="faq-accordion p-4 mb-6 shadow rounded">
                                    <div class="accordion accordion-faq" id="accordionExample">
                                        @foreach ($regInfos as $regInfo)
                                        <div class="accordion-item ">
                                            <p class="accordion-header p-4">
                                                <button
                                                    class="accordion-button fw-semibold p-0 text-uppercase collapsed"
                                                    type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#{{$regInfo->id}}" aria-expanded="false"
                                                    aria-controls="flush-{{$regInfo->id}}">
                                                    {{ $regInfo->title }}
                                                </button>
                                            </p>
                                            <div id="{{$regInfo->id}}" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body bg-lightgrey p-6">
                                                    {!!str($regInfo->description)->markdown()->sanitizeHtml() !!}
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
            </div>
        </div>
    </section>
</div>
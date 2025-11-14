<div>
    <section class="bg-half-170 d-table w-100 "
        style="background: url('assets/images/background/bg3.jpg') center center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="title-heading">
                        <h1 class="fw-bold title text-white mb-0">19<sup>th</sup> MC<span class="text-gold">U</span>E
                        </h1>
                        <!-- <p class="mt-0">Malang Continuing Urology Education </p> -->
                        <h4 class="fw-bold text-white">“Bridging Generations: Guiding the Next Generation Urologist”
                        </h4>
                        <p class="mb-0 text-gold">Workshop April 11<sup>th</sup> & 27<sup>th</sup> - 30<sup>th</sup>,
                            2026</p>
                        <p class="text-gold">Symposium 1<sup>st</sup> - 2<sup>nd</sup>, 2026</p>
                        <p class="fw-bold text-white">Department of Urology, Faculty of Medicine Universitas Brawijaya
                            <br>
                            Saiful Anwar General Hospital & <br>
                            Grand Mercure Malang Mirama, Malang, East Java
                        </p>
                        <div class="mt-4">
                            <div class="d-flex">
                                <a href="#about-us" class="btn btn-icon btn-pills btn-lg btn-primary"><i
                                        data-feather="arrow-down" class="icons"></i></a>
                            </div>
                            <!--<marquee behavior="" direction=""><p class="fw-bold text-primary mt-3">Extended abstract submission until 30<sup>th</sup> March 2022</p>  </marquee>-->
                        </div>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-6 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="card  rounded border-0 ms-lg-5 bg-transparent">
                        <div class="card-body rounded-2 ">
                            <div class="shape-before">
                                <!--  -->

                                <div class="carousel-cell">
                                    @if ($flyers->isEmpty())
                                    <img src="assets/images/landing.png" class="img-fluid rounded-md" alt="">
                                    @else
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            @foreach ($flyers as $index => $item)
                                            <div class="carousel-item {{$index === 0 ? 'active' : '' }}">
                                                <img src="{{asset('storage/' . $item->image)}}"
                                                    class="d-block rounded w-100 shadow" alt="...">
                                            </div>
                                            @endforeach
                                        </div>
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                    @endif
                                </div>

                                <p class="fw-bold text-gold small">Organized by: <br>
                                    <span class="text-white">
                                        Department of Urology, Faculty of Medicine-Universitas Brawijaya <br>
                                        Saiful Anwar General Hospital
                                    </span>
                                </p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#fff" fill-opacity="1" d="M0,32L720,128L1440,32L1440,320L720,320L0,320Z"></path>
            </svg>
        </div>
    </div>

    <section class="">
        <div class="container mt-100 mb-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-start">

                        <h1 class="fw-bold title text-primary mb-0">19<sup>th</sup> MC<span class="text-gold">U</span>E
                        </h1>
                        <p class="mt-0 mb-0 fw-bold">Malang Continuing Urology Education </p>
                        <h4 class="fw-bold">“Bridging Generations: Guiding the Next Generation Urologist”
                        </h4>
                        <p class="text-muted mb-0 mt-0 mx-auto para-desc">April 11<sup>th</sup>, 2026
                            - Workshop USG at Faculty of Medicine Universitas Brawijaya </p>
                        <p class="text-muted mb-0 mt-0 mx-auto para-desc">April 27<sup>th</sup> - 30<sup>th</sup>, 2026
                            - Workshop Endo-Urology Week at Saiful Anwar General Hospital </p>
                        <p class="text-muted mb-0 mt-0 mx-auto para-desc">May 1<sup>st</sup> - 2<sup>nd</sup>, 2026
                            - Symposium & Exhibition at Grand Mercure Malang Mirama, Malang</p>
                    </div>

                    {{-- <div class="mt-4">
                        <a href="javascript:void(0)" rel="noopener noreferrer" class="btn btn-primary text-uppercase"><i
                                class="uil uil-file-download-alt m-2"></i>Download
                            Announcement </a>
                    </div> --}}
                </div>
                <!--end col-->

                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="row">
                        <h5 class="card-title fw-bold">Important Dates</h5>
                        <livewire:section.important-date />
                    </div>


                </div>
                <!--end col-->

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <section class="bg-tes-gradient section position-relative z-0 start-0">
        {{-- <div class="overlay z-n1">
        </div> --}}
        <div class="container">
            <div class="feature-inner">
                <div class="counter text-center border-bottom border-white border-opacity-25">
                    <div class="inner-counter mb-7">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 p-2 ">
                                <div class="counter-box p-2 border-end border-white border-opacity-25">
                                    <h1 class="text-gold m-0"><span class="counter-value"
                                            data-target="100"></span><span>+</span>
                                    </h1>
                                    <p class="text-white">Speakers</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 p-2">
                                <div class="counter-box p-2 border-end border-white border-opacity-25">
                                    <h1 class="text-gold m-0"><span class="counter-value"
                                            data-target="50"></span><span>+</span>
                                    </h1>
                                    <p class="text-white">Symposium</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 p-2">
                                <div class="counter-box p-2 border-end border-white border-opacity-25">
                                    <h1 class="text-gold m-0"><span class="counter-value"
                                            data-target="10"></span><span>+</span>
                                    </h1>
                                    <p class="text-white">Workshops</p>
                                </div>
                            </div>
                            <!-- <div class="col-lg-3 col-md-3 p-2">
                                <div class="p-2">
                                    <h1 class="text-white m-0"><span class="num" data-val="300"></span><span>+</span></h1>
                                    <p class="mb-0">Journalist</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="row">
                        @foreach ($messages as $message)
                        <div class="col-lg-6 order-2 order-lg-1 p-2">
                            <div class="general-ques-left text-white">
                                <div class="text-center">
                                    <img src="{{asset('storage/' . $message->image)}}" alt="faq-general-image"
                                        class="img-fluid avatar avatar-large rounded-circle mx-auto shadow"><br>
                                </div>
                                <div class="bg-primary  p-4 rounded w-lg-80 mt-4">
                                    <div class="ps-4 border-start border-white border-7">
                                        <p class="text-gold fw-bold mb-0"><small>" {{$message->title}} "</small></p>
                                        <h6 class="text-white">{{$message->name}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <h2 class="mb-2 text-white text-center">Welcome <span class="text-gold">message </span>
                        </h2> --}}
                        <div class="col-lg-6 order-1 order-lg-2 p-4">
                            <div class="general-ques-right">
                                <div class="section-title pb-4 text-center text-white text-lg-start">
                                    {!! Str::limit(str($message->description)->markdown()->sanitizeHtml(), 500) !!}
                                    {{-- <a href="/welcome-message#{{$message->id}}" class="text-gold"><i
                                            class="fa fa-angle-right fs-6"></i> Read More...</a> --}}
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <p class="text-primary para-desc mb-0 mx-auto">19<sup>th</sup> MCUE</p>
                        <h4 class="uppercase fw-bold mb-1">Sponsors</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid border-dashed-bottom-2 pb-10">
            @if ($sponsors->isEmpty())
            @else
            <div class="row align-items-center bg-soft-blue">
                <div class="tiny-four-item p-4">
                    @foreach ($sponsors as $sponsor)
                    <div class="tiny-slide">
                        <a href="{{$sponsor->website ? $sponsor->website : 'javascript:void(0)'}}"
                            class="customer-testi" target="_blank">
                            {!! $sponsor->logo ? '<img src="' . asset('storage/' . $sponsor->logo) . '"
                                class="img-fluid w-50" alt="' . $sponsor->company . '" />' : '<small
                                class="text-center text-blue">' . $sponsor->company . '</small>' !!}
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center mt-5">
                <a class="btn btn-primary uppercase" href="/sponsors">VIEW MORE Sponsors</a>
            </div>

            @endif
        </div>
    </section>
</div>
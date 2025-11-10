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
                                    <img src="assets/images/banner.png" class="img-fluid rounded-md" alt="">
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
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <section class="section" style="padding-bottom: 0px;" id="about-us">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title text-primary mb-4">Congress Information</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">General Information <span
                                class="text-gold fw-bold">18<sup>th</sup> MCUE</span> </p>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->

        <div class="container mt-100 mb-5">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title text-center text-lg-start">

                        <h4 class="mt-0 mb-4 text-white fw-bold">18<sup>th</sup> Malang Continuing Urology Education
                            (MCUE)</span></h4>
                        <p class="fw-bold text-white">“Empowering The Next Generation Of Urologists: A Call To Action”
                        </p>
                        <p class="text-muted mb-0 mt-0 mx-auto para-desc">April 21<sup>st</sup> - 24<sup>th</sup> , 2025
                            - Workshops at Department of Urology, Faculty of Medicine Universitas
                            Brawijaya and Saiful Anwar General Hospital</p>
                        <p class="text-muted mb-0 mt-0 mx-auto para-desc">April 25<sup>th</sup> - 26<sup>th</sup>, 2025
                            - Symposium & Exhibition at Grand Mercure Malang Mirama, Malang</p>
                    </div>

                    <div class="mt-4">
                        <a href="javascript:void(0)" rel="noopener noreferrer" class="btn btn-primary text-uppercase"><i
                                class="uil uil-file-download-alt m-2"></i>Download
                            Announcement </a>
                    </div>
                </div>
                <!--end col-->

                <div class="col-lg-6 mt-lg-0 mt-5">
                    <div class="row">
                        <h5 class="card-title fw-bold">Important Dates</h5>
                        <table class="table table-hover table-light">
                            <tr>
                                <td><i class="uil uil-angle-right align-middle h4 mb-0"></i>Deadline for Abstract
                                    Submission: 15<sup>th</sup> Maret 2025</td>
                            </tr>
                            <tr>
                                <td><i class="uil uil-angle-right align-middle h4 mb-0"></i>Deadline for Early
                                    Registration: 15<sup>th</sup> March 2025</td>
                            </tr>
                            <tr>
                                <td><i class="uil uil-angle-right align-middle h4 mb-0"></i>Workshop:
                                    21<sup>st</sup> - 24<sup>th</sup> April 2025</td>
                            </tr>

                            <tr>
                                <td><i class="uil uil-angle-right align-middle h4 mb-0"></i>Symposium: 25<sup>th</sup> -
                                    26<sup>th</sup> April 2025</td>
                            </tr>
                            <tr>
                                <td><i class="uil uil-angle-right align-middle h4 mb-0"></i>Opening
                                    Ceremony: 25<sup>th</sup> April 2025</td>
                            </tr>
                            <tr>
                                <td><i class="uil uil-angle-right align-middle h4 mb-0"></i>Exhibition: 25<sup>th</sup>
                                    - 26<sup>th</sup> April 2025</td>
                            </tr>
                            <tr>
                                <td><i class="uil uil-angle-right align-middle h4 mb-0"></i>Alumni Night:
                                    25<sup>th</sup> April 2025</td>
                            </tr>
                            <tr>
                                <td><i class="uil uil-angle-right align-middle h4 mb-0"></i>Closing Ceremony:
                                    26<sup>th</sup> April 2025</td>
                            </tr>
                            <tr>
                                <td><i class="uil uil-angle-right align-middle h4 mb-0"></i>Sports : 27<sup>th</sup>
                                    April 2025</td>
                            </tr>

                        </table>
                    </div>


                </div>
                <!--end col-->

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <section class="partners">
        <div class="container">
            <div class="partner-inner">
                <div class="partner-title text-center pb-6 w-lg-60 m-auto">
                    <p class="mb-1 kuning">48<sup>th</sup> ASMIUA</p>
                    <h2 class="mb-1">important <span class="kuning">Dates</span></h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10 offset-lg-1">
                        <livewire:section.important-date />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature text-white position-relative z-0 start-0">
        <div class="overlay z-n1">
        </div>
        <div class="container">
            <div class="feature-inner">
                <div class="counter text-center border-bottom border-white border-opacity-25">
                    <div class="inner-counter mb-7">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 p-2 ">
                                <div class="counter-box p-2 border-end border-white border-opacity-25">
                                    <h1 class="text-white m-0"><span class="num" data-val="100"></span><span>+</span>
                                    </h1>
                                    <p>Speakers</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 p-2">
                                <div class="counter-box p-2 border-end border-white border-opacity-25">
                                    <h1 class="text-white m-0"><span class="num" data-val="50"></span><span>+</span>
                                    </h1>
                                    <p>Symposium</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 p-2">
                                <div class="counter-box p-2 border-end border-white border-opacity-25">
                                    <h1 class="text-white m-0"><span class="num" data-val="10"></span><span>+</span>
                                    </h1>
                                    <p>Workshops</p>
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
                <div class="general-ques mt-5">
                    <div class="row">
                        {{-- <div class="col-lg-6 order-2 order-lg-1 p-2">
                            <div class="general-ques-left text-white">
                                <div class="general-ques-image text-center">
                                    <img src="assets/images/team/4.png" alt="faq-general-image" class="w-50"><br>
                                </div>
                                <div class="speaker-statement-box p-4 rounded bg-blue w-lg-80 mb-mi">
                                    <div class="speaker-statement ps-4 border-start border-white border-7">
                                        <p><small>" Congress Chairman "</small></p>
                                        <h6 class="text-white">Name</h6>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <h2 class="mb-2 text-white text-center">Welcome <span class="kuning">message </span></h2>
                        @foreach ($messages as $message)
                        <div class="col-lg-6 order-1 order-lg-2 p-4">
                            <div class="general-ques-right">
                                <div class="section-title pb-4 text-center text-lg-start">
                                    {!! Str::limit(str($message->description)->markdown()->sanitizeHtml(), 500) !!}
                                    <a href="/welcome-message#{{$message->id}}" class="kuning"><i
                                            class="fa fa-angle-right fs-6"></i> Read More...</a>
                                </div>
                                <div class="speaker-statement-box p-4 rounded bg-blue w-lg-80 mb-mi">
                                    <div class="speaker-statement ps-4 border-start border-white border-7">
                                        <p><small>" {{$message->title}} "</small></p>
                                        <h6 class="text-white">{{$message->name}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>

    <livewire:section.competition />

    <section class="partners ">
        <div class="container border-dashed-bottom-2 pb-10">
            <div class="partner-inner ">
                <div class="partner-title text-center pb-6 w-lg-60 m-auto">
                    <p class="mb-1 kuning">48<sup>th</sup> ASMIUA</p>
                    <h2 class="mb-1">SPONSors</h2>
                </div>
                <div class="partner-img">
                    <div class="row row-cols-1 row-cols-lg-5 row-cols-md-5 ">
                        @foreach ($sponsors as $sponsor)
                        <div class="col p-0 border-end border-sm-0">
                            <div class="p-2 partner-img-box text-center">
                                <a href="{{$sponsor->website ? $sponsor->website : 'javascript:void(0)'}}"
                                    target="_blank">
                                    {!! $sponsor->logo ? '<img src="' . asset('storage/' . $sponsor->logo) . '"
                                        class="img-fluid opacity-75" alt="' . $sponsor->company . '" />' : '<small
                                        class="text-center text-blue">' . $sponsor->company . '</small>' !!}
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="partner-button text-center">
                    <a class="btn" href="/sponsors">VIEW MORE Sponsors</a>
                </div>
            </div>
        </div>
    </section>

    <section class="direction pb-0">
        <div class="container">
            <div class="section-title text-center pb-2 w-lg-60 m-auto">
                <p class="mb-1  kuning">Visiting</p>
                <h2 class="mb-1">GET DIRECTION TO THE <span class="kuning">Venue</span></h2>
            </div>
            <div class="direction-content">
                <div class="direction-info">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 px-1">
                            <div class="p-6 d-flex text-white w-100 h-100 rounded bg-blue ">
                                <div class="justify-content-center align-self-center ms-6">
                                    <h5 class="text-white pb-2">EVENT VENUE:</h5>
                                    <p class="pb-5 m-0">Santika Premiere Dyandra Hotel & Convention</p>
                                    <h5 class="text-white pb-2">ADDRESS:</h5>
                                    <p class="pb-5 m-0">Kapten Maulana Lubis No.7, Petisah Tengah, Kec. Medan Petisah,
                                        Medan City, North Sumatra</p>
                                    <!-- <h5 class="text-white pb-2">RECEPTION INFO:</h5>
                                    <p class="pb-5 m-0">Booking: (+62) 1919-2020</p> -->
                                    <a>Get Directions</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 px-1 py-2">
                            <iframe height="400" class="rounded w-100"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.993011784665!2d98.6676701954653!3d3.589077314075902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303131cfb9769189%3A0xc73602d265aeceb4!2sHotel%20Santika%20Premiere%20Dyandra%20Hotel%20%26%20Convention!5e0!3m2!1sen!2sid!4v1738729066520!5m2!1sen!2sid"></iframe>
                        </div>
                    </div>
                </div>
                <div class="location-gallery">
                    <div id="selector" class="row pt-1 justify-content-center">
                        <div class="item col-lg-4 col-md-6 p-1" data-src="assets/images/group/4.jpg">
                            <a><img src="assets/images/thumbnail/4.jpg" class="w-100 rounded"
                                    alt="Santika Premiere Dyandra Hotel & Convention"></a>
                        </div>
                        <div class="item col-lg-4 col-md-6 p-1" data-src="assets/images/group/5.jpg">
                            <a><img src="assets/images/thumbnail/5.jpg" class="w-100 rounded"
                                    alt="Santika Premiere Dyandra Hotel & Convention"></a>
                        </div>
                        <div class="item col-lg-4 col-md-6 p-1" data-src="assets/images/group/6.jpg">
                            <a><img src="assets/images/thumbnail/6.jpg" class="w-100 rounded"
                                    alt="Santika Premiere Dyandra Hotel & Convention"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
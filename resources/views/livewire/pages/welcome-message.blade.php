<div>
<<<<<<< HEAD
    <section class="banner page-banner position-relative pb-0">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="page-title text-center position-relative py-11">
                <h2 class="text-white text-uppercase">Welcome Message</h2>
            </div>
=======
    <section class="relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_12%_20%,rgba(65,14,14,0.7),transparent_35%),radial-gradient(circle_at_90%_80%,rgba(71,41,41,0.95),transparent_45%)]">
        </div>
        <div class="relative mx-auto max-w-7xl px-5 py-16 sm:px-8 lg:px-12 lg:py-24">
            <h2 class="uppercase text-2xl font-bold tracking-wide lg:text-4xl">Welcome Message</h2>
            <div class="mt-7 h-1 w-20 bg-red-700"></div>
>>>>>>> 4e48335 (feat: redesign for mcue 2027)
        </div>
    </section>

    <section class="feature text-white position-relative z-0 start-0">
        <div class="overlay z-n1">
        </div>
        <div class="container">
            <div class="feature-inner">
                <div class="general-ques mt-5">
                    @foreach ($messages as $message)
                    <div class="row border-bottom border-white border-opacity-25" id="{{$message->id}}">
                        <div class="col-lg-6 order-2 order-lg-1 p-2">
                            <div class="general-ques-left text-white">
                                <div class="general-ques-image text-center">
                                    <img src="{{$message->image ? asset('storage/' . $message->image) : "assets/images/team/4.png"}} " alt="faq-general-image" class="w-50"><br>
                                </div>
                                <div class="speaker-statement-box p-4 rounded bg-blue w-lg-80 mb-mi">
                                    <div class="speaker-statement ps-4 border-start border-white border-7">
                                        <p><small>" {{$message->title}} "</small></p>
                                        <h6 class="text-white">{{$message->name}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 p-4">
                            <div class="general-ques-right">
                                <div class="section-title pb-4 text-center text-lg-start">
                                    {!! str($message->description)->markdown()->sanitizeHtml() !!}
                                </div>                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
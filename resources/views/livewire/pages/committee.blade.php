<div>

    <section class="relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_12%_20%,rgba(65,14,14,0.7),transparent_35%),radial-gradient(circle_at_90%_80%,rgba(71,41,41,0.95),transparent_45%)]">
        </div>
        <div class="relative mx-auto max-w-7xl px-5 py-16 sm:px-8 lg:px-12 lg:py-24">
            <h2 class="uppercase text-2xl font-bold tracking-wide lg:text-4xl">Organizing Committee</h2>
            <div class="mt-7 h-1 w-20 bg-red-700"></div>

        </div>
        <!--end container-->
    </section>
    <!--end section-->

    <section class="section">
        <div class="container">
            <div class="row">
                @foreach ($uniqueCategories as $category)
                <div class="col-lg-6">
                    <div class="">
                        <p class="mb-0 "><i class="uil uil-angle-double-right m-1"></i>{{$category}}</p>
                        @foreach ($committees as $committee)
                        @if ($committee->category == $category)
                        <ul class="text-muted">
                            <li>{{ $committee->name }}
                                @if ($committee->title != null)
                                <br>
                                <span class="font-semibold">({{ $committee->title }})</span>
                                @endif
                            </li>
                        </ul>
                        @endif
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
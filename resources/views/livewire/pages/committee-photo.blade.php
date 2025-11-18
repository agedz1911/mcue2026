<div>
    <section class="bg-half d-table w-100">
        <div class="bg-overlay-blue "></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title text-white"> Organizing Committee </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Congress Information</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Organizing Committee</li>
                                </ul>
                            </nav>
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
            <div class="row justify-content-center text-center">
                @foreach ($uniqueCategories as $category)
                <h4 class="mb-1 mt-3"><span class="">{{$category}}</span></h4>
                @foreach ($committees as $committee)
                @if ($committee->category == $category)
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="card blog rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="{{$committee->image ? asset('storage/' . $committee->image) : "
                                assets/images/speakers.jpg"}}" class="card-img-top" alt="{{$committee->name}}">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="javascript:void(0)" class="card-title title text-dark">{{$committee->name}}</a>
                            </h5>
                            <p class="text-muted readmore">Read More <i class="fa fa-angle-right align-middle"></i></p>
                        </div>

                    </div>
                </div>
                @endif
                @endforeach
                @endforeach
            </div>
            
        </div>
    </section>
</div>
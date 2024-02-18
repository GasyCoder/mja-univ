<div>
    <!-- =======================
    Main banner START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Card item START -->
                    <div class="card overflow-hidden h-250px h-xl-400px rounded-3"
                        style="background-image:url({{ asset('storage/' .$image_cover) }}); background-position: center left; background-size: cover;">
                        <!-- Background dark overlay -->
                        <div class="bg-overlay bg-dark opacity-6"></div>

                        <!-- Card image overlay -->
                        <div class="card-img-overlay d-flex align-items-start flex-column">
                            <!-- Card overlay Top -->
                            <div class="w-100 mb-auto d-flex justify-content-end">
                                <button class="btn btn-sm btn-white mb-0"><i class="bi bi-share"></i> Partager</button>
                            </div>
                            <!-- Card overlay bottom -->
                            <div class="w-100 mt-auto">
                                <div class="row p-0 p-sm-3">
                                    <div class="col-11 col-lg-7">
                                        <!-- Title -->
                                        <h1 class="text-white">{{ $title }}</h1>
                                        <p class="text-white mb-0">{{$sub_title}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Main banner END -->
    <!-- =======================
    Page content START -->
    <section class="pt-0">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <!-- Main content START -->
                <div class="col-lg-8 order-2">
                    <!-- Organization and time -->
                    <div class="bg-light rounded-3 p-3 mb-4">
                        <div class="row g-4">
                            <!-- Organization -->
                            <div class="col-md-4">
                                <h6 class="small">Organisé par:</h6>
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar align-middle">
                                        <div class="avatar-img rounded-1 bg-danger"><span
                                                class="text-white position-absolute top-50 start-50 translate-middle fw-bold">{{ substr($organisator, 0, 2) }}</span>
                                        </div>
                                    </div>
                                    <!-- Info -->
                                    <div class="ms-2">
                                        <h6 class="mb-0">{{ $organisator }}</h6>
                                        <small>Université de Mahajanga</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="col-md-4">
                                <h6 class="small">Emplacement:</h6>
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar align-middle flex-shrink-0">
                                        <div class="avatar-img rounded-2 bg-success">
                                            <span class="position-absolute top-50 start-50 translate-middle text-white"><i
                                                    class="bi bi-geo-alt-fill"></i></span>
                                        </div>
                                    </div>
                                    <h6 class="fw-normal mb-0 ms-2">{{ $location }}</h6>
                                </div>
                            </div>

                            <!-- Date & Time -->
                            <div class="col-md-4">
                                <h6 class="small">Date & Time:</h6>
                                <div class="d-flex align-items-center">
                                    <!-- Avatar -->
                                    <div class="avatar align-middle flex-shrink-0">
                                        <div class="avatar-img rounded-2 bg-success">
                                            <span class="position-absolute top-50 start-50 translate-middle text-white"><i
                                                    class="bi bi-calendar-fill"></i></span>
                                        </div>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">{{ $dateStart->format('d M y') }} au {{ $dateEnd->format('d M y') }}</h6>
                                        <small>{{ $hourStart->format('h:i a') }} à {{ $hourEnd->format('h:i a') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content -->
                    <h5>Descriptions</h5>
                    <p>{!! $description !!}</p>

                    @if(!empty($file_path))
                    <!-- Speakers -->
                    <h5 class="mt-4 mb-0">Document</h5>
                    <p>Understand that theory is important to build a solid foundation, we understand that theory alone</p>
                    <!-- Speaker list START -->
                    <div class="row g-4">
                        <!-- Speaker item -->
                        <div class="col-sm-12">
                            <div class="card card-body border">
                                <div class="d-xl-flex justify-content-between align-items-center">
                                    <!-- Avatar and info -->
                                    <div class="hstack gap-2 mb-2 mb-xl-0">
                                        <!-- Avatar -->
                                        <div class="avatar flex-shrink-0">
                                           <span class="display-6 lh-1 text-danger mb-0">
                                            <i class="fas fa-file-pdf"></i>
                                        </span>
                                        </div>
                                        <!-- Info -->
                                        <div>
                                            <!-- Avatar -->
                                            <h6 class="card-title mb-0"><a href="{{ asset('storage/' .$file_path) }}" target="_blank">Fichier PDF</a></h6>
                                            <small>2.5Ko</small>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <a href="{{ asset('storage/' .$file_path) }}" target="_blank" class="btn btn-sm btn-dark mb-0">Télécharger</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Speaker list END -->
                    @endif

                    @if($evenement >= 2 )
                    <!-- Counter -->
                    <div class="p-4 mt-5">
                        <div class="row g-2">
                            <a class="btn btn-primary w-100" href="#"> Voir autre évènements </a>
                        </div>
                    </div>
                    @endif
                </div>
                <!-- Main content END -->

                <!-- Left sidebar START -->
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="card card-body shadow">
                        <a class="btn btn-secondary w-100" href="#"> Google Maps </a>
                        <div class="mt-2">
                        @if(!empty($url_location))
                        <iframe class="w-100 d-block rounded-bottom" height="230"
                            src="{{ $url_location }}"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        @else
                            <iframe class="w-100 d-block rounded-bottom" height="230"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d43455.01020248642!2d46.31449823044521!3d-15.702579897128292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smg!4v1708035747874!5m2!1sen!2smg"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        @endif
                        </div>
                    </div>
                </div>
                <!-- Left sidebar END -->

            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->
</div>

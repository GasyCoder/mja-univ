<div>
<!-- =======================
Main Banner START -->
<section class="bg-light">
    <div class="container">
        <!-- Title -->
        <div class="row position-relative pb-4">
            <div class="col-lg-8 position-relative">
                <!-- Title -->
                <h3>Organigramme</h3>
                <p>
                    {{ $intro }}
                </p>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Main Banner END -->
<!-- =======================
Page content START -->
<section class="pt-2 pt-xl-5">
    <div class="container" data-sticky-container="">
        <div class="row g-4">
            <!-- Main content START -->
            <div class="col-xl-8">
                <div class="row g-4">
                    <!-- FAQs START -->
                    <div class="col-12">
                        <div class="card border rounded-3">
                            <!-- Card header START -->
                            <div class="card-header border-bottom">
                                <h4 class="mb-0">UNIVERSITE DE MAHAJANGA - LISTE PROTOCOLAIRE</h4>
                            </div>
                            <!-- Card header END -->

                            <!-- Card body START -->
                            <div class="card-body">
                                <!-- FAQ item -->
                                <div>
                                   {!! $body !!}
                                </div>
                            </div>
                            <!-- Card body START -->
                        </div>
                    </div>
                    <!-- FAQs END -->
                </div>
            </div>
            <!-- Main content END -->

            <!-- Right sidebar START -->
            <div class="col-xl-4">
                <div data-sticky="" data-margin-top="80" data-sticky-for="768">
                    <div class="row g-4">
                        <!-- Président START -->
                        <div class="col-md-6 col-xl-12">
                            <div class="card card-body border p-4">
                            <!-- Right content START -->
                            <!-- Title -->
                            <h6 class="mb-0">PRESIDENCE DE L’UNIVERSITE DE MAHAJANGA</h6>
                            <hr>
                            <!-- Avatar -->
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar avatar-xl">
                                    <!-- Avatar image -->
                                    <img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/01.jpg') }}" alt="avatar">
                                    <!-- Medal badge -->
                                    <div class="position-absolute bottom-0 end-0">
                                        <img src="{{ asset('assets/images/element/medal-badge.png') }}" class="position-relative" alt="">
                                    </div>
                                </div>
                                <!-- Title -->
                                <div class="ms-3">
                                    <h6 class="mb-1">Pr Tituleur Blanchard</h6>
                                    <p class="mb-0">Président</p>
                                </div>
                            </div>

                            <!-- Avatar -->
                            <div class="d-flex align-items-center mb-3">
                                <div class="avatar avatar-xl">
                                    <!-- Avatar image -->
                                    <img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/03.jpg') }}" alt="avatar">
                                    <!-- Medal badge -->
                                    <div class="position-absolute bottom-0 end-0">
                                        <img src="{{ asset('assets/images/element/medal-badge.png') }}" class="position-relative" alt="">
                                        <span
                                            class="fw-bold text-dark smaller position-absolute top-50 start-50 translate-middle">1<sup>ère</sup></span>
                                    </div>
                                </div>
                                <!-- Title -->
                                <div class="ms-3">
                                    <h6 class="mb-1">Pr Tituleur RAZAFIMAHEFA</h6>
                                    <p class="mb-0">Vice Président I</p>
                                </div>
                            </div>

                            <!-- Avatar -->
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <!-- Avatar image -->
                                    <img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/06.jpg') }}" alt="avatar">
                                    <!-- Medal badge -->
                                    <div class="position-absolute bottom-0 end-0">
                                        <img src="{{ asset('assets/images/element/medal-badge.png') }}" class="position-relative" alt="">
                                        <span
                                            class="fw-bold text-dark smaller position-absolute top-50 start-50 translate-middle">2<sup>ème</sup></span>
                                    </div>
                                </div>
                                <!-- Title -->
                                <div class="ms-3">
                                    <h6 class="mb-1">Dr. Geoslin</h6>
                                    <p class="mb-0">Vice Président II </p>
                                </div>
                            </div>
                            <!-- Right content END -->
                            </div>
                        </div>
                        <!-- Président END -->
                        <div class="col-md-6 col-xl-12 filter-container overflow-hidden" data-isotope='{"layoutMode": "masonry"}'">
                            <!-- Image-->
                            <div class="card overflow-hidden">
                                <div class="card-overlay-hover">
                                <img src="{{ asset('storage/' .$image_path) }}" class="rounded-3" alt="course image">
                            </div>
                            <!-- Full screen button -->
                            <a class="card-element-hover position-absolute w-100 h-100" data-glightbox="" data-gallery="gallery"
                                href="{{ asset('storage/' .$image_path) }}" target="_bkank">
                                <i class="bi bi-fullscreen fs-6 text-white position-absolute top-50 start-50 translate-middle bg-dark rounded-3 p-2 lh-1"></i>
                            </a>
                            </div>
                        </div>
                    </div><!-- Row End -->
                </div>
            </div>
            <!-- Right sidebar END -->

        </div><!-- Row END -->
    </div>
</section>
<!-- =======================
Page content END -->
</div>

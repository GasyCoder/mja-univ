<div>
<!-- =======================
Main Banner START -->
<section class="bg-light">
    <div class="container">
        <!-- Title -->
        <div class="pb-4 row position-relative">
            <div class="col-lg-12 position-relative">
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
                        <div class="border card rounded-3">
                            <!-- Card header START -->
                            <div class="card-header border-bottom">
                                <h4 class="mb-0">UNIVERSITE DE MAHAJANGA - ORGANISATIONS</h4>
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
                            <div class="p-4 border card card-body">
                            <!-- Right content START -->
                            <!-- Title -->
                            <h6 class="mb-0">PRESIDENCE DE L’UNIVERSITE DE MAHAJANGA</h6>
                            <hr>
                            <!-- Avatar -->
                            <div class="mb-3 d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <!-- Avatar image -->
                                    <img class="avatar-img rounded-circle" src="{{ asset('storage/' .$photo) }}" alt="avatar">
                                    <!-- Medal badge -->
                                    <div class="bottom-0 position-absolute end-0">
                                        <img src="{{ asset('assets/images/element/medal-badge.png') }}" class="position-relative" alt="">
                                    </div>
                                </div>
                                <!-- Title -->
                                <div class="ms-3">
                                    <h6 class="mb-1">Professeur Titulaire RANDRIANAMBININA Blanchard</h6>
                                    <p class="mb-0">Président</p>
                                </div>
                            </div>
                            <!-- Vice Président 1 -->
                            <div class="mb-3 d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <!-- Avatar image -->
                                    <img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/vice_president.jpg') }}"
                                        alt="avatar">
                                    <!-- Medal badge -->
                                    <div class="bottom-0 position-absolute end-0">
                                        <img src="{{ asset('assets/images/element/medal-badge.png') }}" class="position-relative" alt="">
                                        <span
                                            class="fw-bold text-dark smaller position-absolute top-50 start-50 translate-middle">1<sup>ère</sup></span>
                                    </div>
                                </div>
                                <!-- Title -->
                                <div class="ms-3">
                                    <h6 class="mb-1">Dr. RAKOTOARIVELO Geoslin</h6>
                                    <p class="mb-0">Vice Président I </p>
                                </div>
                            </div>
                            <!-- Vice Président 1 END -->
                           <!-- Vice Président 2 -->
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-xl">
                                    <!-- Avatar image -->
                                    <img class="avatar-img rounded-circle" src="{{ asset('assets/images/avatar/pr_mahefa.jpg') }}" alt="avatar">
                                    <!-- Medal badge -->
                                    <div class="bottom-0 position-absolute end-0">
                                        <img src="{{ asset('assets/images/element/medal-badge.png') }}" class="position-relative" alt="">
                                        <span
                                            class="fw-bold text-dark smaller position-absolute top-50 start-50 translate-middle">2<sup>ème</sup></span>
                                    </div>
                                </div>
                                <!-- Title -->
                                <div class="ms-3">
                                    <h6 class="mb-1">Pr Titulaire RAZAFIMAHEFA</h6>
                                    <p class="mb-0">Vice Président II</p>
                                </div>
                            </div>
                            </div>
                        </div>
                       <!-- Vice Président 2 END -->

                        <div class="overflow-hidden col-md-6 col-xl-12 filter-container" data-isotope='{"layoutMode": "masonry"}'">
                            <!-- Image-->
                            <div class="overflow-hidden card">
                                <div class="card-overlay-hover">
                                <img src="{{ asset('storage/' .$image_path) }}" class="rounded-3" alt="course image">
                            </div>
                            <!-- Full screen button -->
                            <a class="card-element-hover position-absolute w-100 h-100" data-glightbox="" data-gallery="gallery"
                                href="{{ asset('storage/' .$image_path) }}" target="_bkank">
                                <i class="p-2 text-white bi bi-fullscreen fs-6 position-absolute top-50 start-50 translate-middle bg-dark rounded-3 lh-1"></i>
                            </a>
                            </div>
                        </div>
                    </div>
                    <!-- Row End -->
                </div>
            </div>
            <!-- Right sidebar END -->

        </div><!-- Row END -->
    </div>
</section>
<!-- =======================
Page content END -->
</div>

<div>
    <!-- =======================
    Main Banner START -->
    <section class="bg-light">
        <div class="container pt-0 mt-0 mt-lg-2">
            <!-- Title and SVG START -->
            <div class="pb-0 mb-0 row position-relative mb-sm-0 pb-lg-0">
                <div class="mx-auto text-center col-lg-8 position-relative">
                    <figure class="top-0 position-absolute start-0 ms-n9">
                        <svg width="22px" height="22px" viewbox="0 0 22 22">
                            <polygon class="fill-orange"
                                points="22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 ">
                            </polygon>
                        </svg>
                    </figure>
                    <!-- SVG decoration -->
                    <figure class="position-absolute top-100 start-100 translate-middle ms-5 d-none d-lg-block">
                        <svg width="21.5px" height="21.5px" viewbox="0 0 21.5 21.5">
                            <polygon class="fill-success"
                                points="21.5,14.3 14.4,9.9 18.9,2.8 14.3,0 9.9,7.1 2.8,2.6 0,7.2 7.1,11.6 2.6,18.7 7.2,21.5 11.6,14.4 18.7,18.9 ">
                            </polygon>
                        </svg>
                    </figure>
                    <!-- SVG decoration -->
                    <figure class="top-0 position-absolute start-100 translate-middle d-none d-md-block">
                        <svg width="27px" height="27px">
                            <path class="fill-purple"
                                d="M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z">
                            </path>
                        </svg>
                    </figure>
                    <!-- Title -->
                    <h2>Résultats de Pré-inscription.</h2>
                    <p>Les résultats de pré-inscription sont prêts ! Vous pouvez consulter les résultats en cliquant sur l'établissement de
                    votre choix. </p>
                </div>
            </div>
            <!-- Title and SVG END -->
        </div>
    </section>
    <!-- =======================
    Main Banner END -->

    <!-- =======================
    Category START -->
    <section>
        <div class="container">
            <div class="row g-4">
            @foreach($resultats as $resultat)
                <!-- Category item -->
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="shadow card card-body rounded-3">
                        <div class="d-flex align-items-center">
                            <!-- Icon -->
                            <div class="icon-lg bg-success bg-opacity-10 rounded-circle text-orange"><i
                                    class="fas fa-file-pdf"></i></div>
                            <div class="ms-2">
                                <h5 class="mb-0">
                                    <a href="{{ $resultat->url_file }}" target="_blank" class="stretched-link">
                                        {{ $resultat->etab->sigle }}
                                    </a>
                                </h5>
                                <small class="text-truncate-2">{{ Str::limit($resultat->etab->name, 30) }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
    <!-- =======================
    Category END -->
</div>

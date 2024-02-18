<div>
   <!-- =======================
Main banner START -->
<section class="pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Card item START -->
                <div class="bg-light rounded-3 p-3 mb-4">
                    <div class="row g-4">
                        <!-- Organization -->
                        <div class="col-md-4">
                            <h6 class="small fw-bold">Offres de formations:</h6>
                            <div class="d-flex align-items-center">
                                <!-- Avatar -->
                                <div class="avatar align-middle">
                                    <div class="avatar-img rounded-1 ">
                                        <img src="{{ asset('storage/' .$icon_path) }}" class="h-40px"
                                            style="width: 40px; height: 40px; object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <!-- Info -->
                                <div class="ms-2">
                                    <h4 class="mb-0">{{ $name }}</h4>
                                    <small>Attribué avec {{ $domaine->etabs->count() }} établissement(s).</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
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
                <!-- Content -->
                <h5>Descriptions</h5>
                <p>
                   {{ $resume}}
                </p>
                <!-- Etablissement -->
                <h5 class="mt-4 mb-0">Etablissements</h5>
                <p>Voici l'établissement(s) relier avec cette offres de formations : </p>
                <!-- Etablissment list START -->
                <div class="row g-4">
                    @foreach($domaine->etabs as $etab)
                    <!-- Speaker item -->
                    <div class="col-sm-6">
                        <div class="card card-body border">
                            <div class="d-xl-flex justify-content-between align-items-center">
                                <!-- Avatar and info -->
                                <div class="hstack gap-2 mb-2 mb-xl-0">
                                    <!-- Avatar -->
                                    <div class="avatar flex-shrink-0">
                                        <img class="avatar-img rounded-circle" src="{{ asset('storage/' .$etab->image_path) }}"
                                            alt="avatar">
                                    </div>
                                    <!-- Info -->
                                    <div>
                                        <!-- Avatar -->
                                        <h6 class="card-title mb-0">
                                            <a href="{{ route('single_etab', ['uuid' => $etab->uuid]) }}">{{ $etab->sigle }}</a>
                                        </h6>
                                        <small>{{ $etab->name }}</small>
                                    </div>
                                </div>

                                <!-- Button -->
                                <a href="{{ route('single_etab', ['uuid' => $etab->uuid]) }}" wire:navigate class="btn btn-sm btn-primary mb-0">Voir plus</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Etablissment list END -->
            </div>
            <!-- Main content END -->
            <!-- Left sidebar START -->
            <div class="col-lg-4 order-1 order-lg-2">
               <div class="card card-body shadow p-4 mb-4">
                <!-- Title -->
                <h5 class="mb-3">Autres offres de formations</h5>
                <ul class="list-inline mb-0 g-3">
                    <!-- Item -->
                    @foreach($domaines as $domaine)
                    <li class="list-inline-item mb-2">
                        <a href="{{ route('detail_domaine', ['uuid' => $domaine->uuid]) }}" wire:navigate class="badge badge-sm bg-primary text-white">{{ $domaine->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-md-6 col-xl-12 d-grid">
                <div class="bg-danger p-4 p-sm-4 rounded-3">
                    <div class="row position-relative">
                        <!-- Svg decoration -->
                        <figure class="fill-white opacity-1 position-absolute top-50 start-0 translate-middle-y">
                            <svg width="141px" height="141px">
                                <path
                                    d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z">
                                </path>
                            </svg>
                        </figure>
                        <!-- Action box -->
                        <div class="col-12 mx-auto position-relative">
                            <div class="row align-items-center">
                                <!-- Title -->
                                <div class="col-lg-12 mb-2">
                                    <h5 class="text-white">Vous ne savez pas où étudier ?</h5>
                                    <p class="text-white mb-3 mb-lg-0">Optez pour l'Université de Mahajanga, où la clarté et la rapidité guident votre parcours éducatif. Notre engagement
                                    envers l'excellence académique crée un environnement propice à l'épanouissement, éliminant les doutes qui peuvent
                                    entourer le choix de l'établissement.</p>
                                </div>
                                <!-- Content and input -->
                                <div class="col-lg-12 mt-1 text-lg-end">
                                    <a href="{{ route('etablissement') }}" wire:navigate class="btn btn-warning mb-0">Voir tous nos
                                        établissements</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
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

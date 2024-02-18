<!-- Right sidebar START -->
<div class="col-xl-4">
    <div data-sticky="" data-margin-top="80" data-sticky-for="768">
        <div class="row g-4">
            <div class="col-md-6 col-xl-12">
                <form class="p-2 border rounded">
                    <div class="input-group input-borderless">
                        <input class="form-control me-1" type="search" placeholder="Rechercher...">
                        <button type="button" class="mb-0 rounded btn btn-primary z-index-1"><i
                                class="fas fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-xl-12">
            <div class="card card-body shadow p-4 mb-0">
                <!-- Title -->
                <h4 class="mb-3">Catégories</h4>
                <!-- Item -->
                @foreach($categories as $cat)
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <a href="#" class="h6 fw-light"><i class="fas fa-caret-right text-orange me-2"></i>{{ $cat->name }}</a>
                    <span class="small">({{ $cat->posts->count() }})</span>
                </div>
                @endforeach
                <!-- End Item -->
            </div>
            </div>
            <!-- Tags START -->
            <div class="col-md-6 col-xl-12">
                <div class="p-4 border card card-body">
                    <h4 class="mb-3">Tags</h4>
                    <ul class="mb-0 list-inline">
                        @foreach($categories as $cat)
                        <li class="list-inline-item">
                            <a class="btn btn-outline-light btn-sm" href="#">{{ $cat->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- Tags END -->
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
                                        <a href="{{ route('etablissement') }}" wire:navigate class="btn btn-warning mb-0">Voir tous nos établissements</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Row END -->
                    </div>
                </div>
            <!-- Button -->
            <div class="col-md-6 col-xl-12 d-grid">
                <a href="{{ route('all_article') }}" wire:navigate class="mb-0 btn btn-lg btn-primary">Tous les actualités</a>
            </div>
        </div><!-- Row End -->
    </div>
</div>
<!-- Right sidebar END -->

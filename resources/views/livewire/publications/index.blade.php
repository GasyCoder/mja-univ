<div>
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="p-4 text-center bg-light rounded-3">
                        <h2 class="m-0">Publications Scientifiques</h2>
                        <!-- Breadcrumb -->
                        <div class="d-flex justify-content-center">
                            <nav aria-label="breadcrumb">
                                <ol class="mb-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="/" wire:navigate>Accueil</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Listes des revues</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-2 mb-6">
        <div class="container">
            <!-- Title -->
            <div class="mb-4 row">
                <div class="col-lg-4 text-start">
                    <h5>Liste des revues</h5>
                    <p class="mb-0">Il y a {{ $countRevue }} revues scientifiques</p>
                </div>
            </div>

            <div class="row g-4">
            @foreach ($revues as $revue)
                <!-- Item -->
                <div class="col-sm-8 col-md-6 col-xl-4">
                    <div class="text-center shadow-lg card card-body position-relative btn-transition">
                        <!-- Image -->
                        <div class="mx-auto mb-3 icon-xl bg-body rounded-circle">
                            @if(!empty($revue->logo))
                            <img src="{{ asset('storage/' . $revue->logo) }}" alt="">
                            @else
                            <img src="{{ asset('assets/images/element/data-science.svg') }}" alt="">
                            @endif
                        </div>
                        <!-- Title -->
                        <h5 class="mb-0">
                            <a href="{{ route('open_revue', ['uuid' => $revue->uuid]) }}" class="stretched-link">{{ $revue->sigle }}</a>
                        </h5>
                        <span class="mb-2">{{ $revue->sub_title }}</span>
                        <h6 class="mb-0">{{ $countArticle }} articles</h6>
                        <div class="mt-4 justify-content-center align-items-center">
                            <a href="{{ route('open_revue', ['uuid' => $revue->uuid]) }}" class="mb-0 btn btn-sm btn-success-soft">Voir plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </section>

</div>

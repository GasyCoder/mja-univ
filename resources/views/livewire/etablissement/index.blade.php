<div>
    <!-- =======================
Main Banner END -->
    @if($etabs->count() > 0)
    <section class="bg-light">
        <div class="container">
            <div class="row position-relative">
                <!-- Title and breadcrumb -->
                <div class="mx-auto text-center col-lg-10 position-relative">
                    <!-- Title -->
                    @if(Route::is('etablissement'))
                    <h1>Nos établissements</h1>
                    @else <h1>Nos écoles doctorales</h1> @endif
                    <!-- Breadcrumb -->
                    <div class="d-flex justify-content-center position-relative">
                        <nav aria-label="breadcrumb">
                            <ol class="mb-0 breadcrumb">
                                <li class="breadcrumb-item"><a href="/" wire:navigate>Accueil</a></li>
                                @if(Route::is('etablissement'))
                                <li class="breadcrumb-item active" aria-current="page">Nos établissements</li>
                                @else
                                <li class="breadcrumb-item active" aria-current="page">Écoles Doctorales</li>
                                @endif
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-2 mb-6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if(Route::is('etablissement'))
                    <!-- University -->
                    <div class="mt-3 row g-4">
                        <h5>Facultés / Instituts / Écoles</h5>
                        <p>L'Université de Mahajanga compte 2 facultés, {{ $countInstitut }} instituts et {{ $countEcole }} écoles. Les instituts et écoles
                            proposent des
                            formations payantes ou semi-privées.</p>
                       @foreach($etabs->where('type_id', '!=', 5) as $etab)
                        <div class="col-md-6 col-xl-4">
                            <!-- Card START -->
                            <div class="p-4 shadow-lg card card-body align-items-start">
                                <!-- Image -->
                                @if(!empty($etab->image_path))
                                <img class="rounded-1 h-60px" src="{{ asset('storage/' .$etab->image_path) }}" alt="logo">
                                @else
                                <img class="rounded-1 h-60px" src="{{ asset('assets/images/01.png') }}" alt="logo">
                                @endif
                                <!-- Title -->
                                <h4 class="mt-3 mb-0 card-title">{{ $etab->sigle }}</h4>
                                <span>{{ $etab->name }}</span>
                                <!-- Button -->
                                <a href="{{ route('single_etab', ['uuid' => $etab->uuid]) }}" wire:navigate
                                    class="p-0 mt-3 btn btn-lg btn-link stretched-link"><u>
                                        Détails</u>
                                </a>
                            </div>
                            <!-- Card END -->
                        </div>
                        @endforeach
                    </div>
                    <!-- Pagination START -->
                    <nav class="mt-5 d-flex justify-content-center" aria-label="navigation">
                        <ul class="mb-0 rounded pagination pagination-primary-soft">
                            {{ $etabs->links() }}
                        </ul>
                    </nav>
                    <!-- Pagination END -->
                @elseif(Route::is('doctoral'))
                    @if($doctorales->count() > 0)
                    @include('livewire.etablissement.doctoral')
                    @else
                    <div class="mt-4 text-center alert alert-warning" role="alert">
                        <p>Aucun données disponible ici pour le moment.</p>
                    </div>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </section>
    @else
    <div class="pt-8 pb-8 d-flex justify-content-center align-items-center">
        <div class="shadow">
            <div class="py-2 mb-0 alert alert-danger d-flex align-items-center">
                <div class="text-center">
                    <small class="mb-0">Aucun données disponible ici pour le moment.</small>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

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
                                <li class="breadcrumb-item active" aria-current="page">Écoles Doctorales</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

@if($etabs->count() > 0)
<section class="pt-2 mb-6">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(Route::is('etablissement'))
                <!-- University -->
                <div class="row g-4 mt-3">
                   <h5>Facultés / Instituts / Écoles</h5>
                <p>L'Université de Mahajanga compte 2 facultés, 6 instituts et 3 écoles. Les instituts et écoles proposent des
                    formations payantes ou semi-privées.</p>
                @foreach($etabs as $etab)
                    <div class="col-md-6 col-xl-4">
                        <!-- Card START -->
                        <div class="card card-body shadow-lg p-4 align-items-start">
                            <!-- Image -->
                            <img class="rounded-1 h-60px" src="{{ asset('storage/' .$etab->image_path) }}"
                                alt="{{ $etab->sigle }}">
                            <!-- Title -->
                            <h4 class="card-title mt-3 mb-0">{{ $etab->sigle }}</h4>
                            <span>{{ $etab->name }}</span>
                            <!-- Button -->
                            <a href="{{ route('single_etab', ['uuid' => $etab->uuid]) }}"
                                wire:navigate
                                class="btn btn-lg btn-link p-0 mt-3 stretched-link"><u>
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
                @else
                    @if($doctorales->count() > 0)
                        @include('livewire.etablissement.doctoral')
                    @else
                    <div class="alert alert-warning mt-4 text-center" role="alert">
                        <p>Aucun données disponible ici pour le moment.</p>
                     </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
</section>
@else
<div class="d-flex justify-content-center align-items-center pt-8 pb-8">
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

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
                    <h1>Nos {{ $name }}</h1>
                    <!-- Breadcrumb -->
                    <div class="d-flex justify-content-center position-relative">
                        <nav aria-label="breadcrumb">
                            <ol class="mb-0 breadcrumb">
                                <li class="breadcrumb-item"><a href="/" wire:navigate>Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Nos {{ $name }}</li>
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
                    <!-- University -->
                    <div class="mt-3 row g-4">
                        <h5 class="border-bottom">Université de Mahajanga compte <span class="text-warning">{{ $counts }} {{ $name }}</span></h5>
                       @foreach($etabs as $etab)
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
                                @if($etab->type_id != 5)
                                <a href="{{ route('single_etab', ['uuid' => $etab->uuid]) }}" wire:navigate
                                    class="p-0 mt-3 btn btn-lg btn-link stretched-link"><u>
                                        Détails</u>
                                </a>
                                @else
                                <a href="{{ route('single_doc', ['uuid' => $etab->uuid]) }}" wire:navigate
                                    class="p-0 mt-3 btn btn-lg btn-link stretched-link"><u>
                                        Détails</u>
                                </a>
                                @endif
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

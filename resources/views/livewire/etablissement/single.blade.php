<div>
<section class="py-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bg-light p-4 text-center rounded-3">
                    <h3 class="m-0">{{ $name }}</h3>
                    <!-- Breadcrumb -->
                    <div class="d-flex justify-content-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb mb-0">
                               @if($type_etabs)
                                <li class="breadcrumb-item"><a href="/ecole-doctoral">Ecole Doctorale</a></li>
                               @else
                               <li class="breadcrumb-item"><a href="/nos-etablissements">Etablissement</a></li>
                               @endif
                                <li class="breadcrumb-item active" aria-current="page">{{ $sigle }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- =======================
    Page content START -->
    <section class="pt-5 pb-0">
        <div class="container">
            <div class="row g-0 g-lg-5">
                @include('livewire.etablissement.side')
                <!-- Main content START -->
                <div class="col-lg-8">
                    <!-- Title -->
                    <h5 class="mb-0">{{ $slogan }}</h5>
                    <!-- Content -->
                    <p class="mt-4">{{$about}}</p>
                    <!-- Personal info -->
                    <ul class="list-group list-group-borderless">
                     <div class="row">
                        <div class="col-6">
                        <li class="list-group-item px-0">
                            <span class="h6 fw-light">
                                <i class="fas fa-fw fa-headphones text-primary me-1 me-sm-3"></i>Téléphone:</span>
                            <span>{{ $phone_1 }}</span>
                        </li>
                        <li class="list-group-item px-0">
                            <span class="h6 fw-light">
                                <i class="fas fa-fw fa-headphones text-primary me-1 me-sm-3"></i>Téléphone:</span>
                            <span>{{ $phone_2 }}</span>
                        </li>
                        <li class="list-group-item px-0">
                            <span class="h6 fw-light"><i class="fas fa-fw fa-envelope text-primary me-1 me-sm-3"></i>Email:</span>
                           <a href="mailto:{{ $email }}">{{ $email }}</a>
                        </li>
                        </div>
                        <div class="col-6">
                        <li class="list-group-item px-0">
                            <span class="h6 fw-light"><i
                                    class="fas fa-fw fa-globe text-primary me-1 me-sm-3"></i>Facebook:</span>
                            <a href="{{ $facebook }}" target="_blank">{{ $facebook }}</a>
                        </li>
                        <li class="list-group-item px-0">
                            <span class="h6 fw-light"><i class="fas fa-fw fa-globe text-primary me-1 me-sm-3"></i>Website:</span>
                            <a href="{{ $siteweb }}" target="_blank">{{ $siteweb }}</a>
                        </li>
                        <li class="list-group-item px-0">
                            <span class="h6 fw-light"><i
                                    class="fas fa-fw fa-map-marker-alt text-primary me-1 me-sm-3"></i>Address:</span>
                            <span>{{ $adresse }}</span>
                        </li>
                        </div>
                    </div>
                    </ul>

                    @include('livewire.etablissement.tags')

                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->

    <!-- =======================
    Related instructor END -->
    <section class="pt-2 mb-6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- University -->
                    <div class="row g-4 mt-3 border-top">
                    @if(Route::currentRouteNamed('single_etab'))
                    <h5>Autre établissements</h5>
                    @foreach ($autres as $autre)
                        <div class="col-md-6 col-xl-4">
                            <!-- Card START -->
                            <div class="card card-body shadow-lg p-4 align-items-start">
                                <!-- Image -->
                                <img class="rounded-1 h-60px" src="{{ asset('storage/' .$autre->image_path) }}"
                                    alt="{{ $autre->sigle }}">
                                <!-- Title -->
                                <h4 class="card-title mt-3 mb-0">{{ $autre->sigle }}</h4>
                                <span>{{ $autre->name }}</span>
                                <!-- Button -->
                                <a href="{{ route('single_etab', ['uuid' => $autre->uuid]) }}" wire:navigate
                                    class="btn btn-lg btn-link p-0 mt-3 stretched-link"><u>
                                        Détails</u>
                                </a>
                            </div>
                            <!-- Card END -->
                        </div>
                        @endforeach
                        @else <h5>Autre écoles doctorales</h5>
                        @foreach ($doctorales as $doctorale)
                        <div class="col-md-6 col-xl-4">
                            <!-- Card START -->
                            <div class="card card-body shadow-lg p-4 align-items-start">
                                <!-- Image -->
                                <img class="rounded-1 h-60px" src="{{ asset('storage/' .$doctorale->image_path) }}" alt="{{ $doctorale->sigle }}">
                                <!-- Title -->
                                <h4 class="card-title mt-3 mb-0">{{ $doctorale->sigle }}</h4>
                                <span>{{ $doctorale->name }}</span>
                                <!-- Button -->
                                <a href="{{ route('single_etab', ['uuid' => $doctorale->uuid]) }}" wire:navigate
                                    class="btn btn-lg btn-link p-0 mt-3 stretched-link"><u>
                                        Détails</u>
                                </a>
                            </div>
                            <!-- Card END -->
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

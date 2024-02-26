<div>
<section class="py-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="p-4 text-center bg-light rounded-3">
                    <h3 class="m-0">{{ $name }}</h3>
                    <!-- Breadcrumb -->
                    <div class="d-flex justify-content-center">
                        <nav aria-label="breadcrumb">
                            <ol class="mb-0 breadcrumb">
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
                   <h5 class="mb-0 text-center blockquote-footer text-info">{{ $slogan }}</h5>
                    <!-- Content -->
                    <p class="mt-4">{!! $about !!}</p>
                    <hr>
                    <!-- Personal info -->
                    <ul class="list-group list-group-borderless">
                     <div class="row">
                        <div class="col-6">
                        @if($phone_1 ?? null)
                        <li class="px-0 list-group-item">
                            <span class="h6 fw-light">
                                <i class="fas fa-fw fa-headphones text-primary me-1 me-sm-3"></i>Téléphone:</span>
                            <span>{{ $phone_1 }}</span>
                        </li>
                        @endif
                        @if($phone_2 ?? null)
                        <li class="px-0 list-group-item">
                            <span class="h6 fw-light">
                                <i class="fas fa-fw fa-headphones text-primary me-1 me-sm-3"></i>Téléphone:</span>
                            <span>{{ $phone_2 }}</span>
                        </li>
                        @endif
                        @if($email ?? null)
                        <li class="px-0 list-group-item">
                            <span class="h6 fw-light"><i class="fas fa-fw fa-envelope text-primary me-1 me-sm-3"></i>Email:</span>
                           <a href="mailto:{{ $email }}">{{ $email }}</a>
                        </li>
                        @endif
                        </div>
                        <div class="col-6">
                        @if($facebook ?? null)
                        <li class="px-0 list-group-item">
                            <span class="h6 fw-light"><i
                                    class="fas fa-fw fa-globe text-primary me-1 me-sm-3"></i>Facebook:</span>
                            <a href="{{ $facebook }}" target="_blank">{{ $facebook }}</a>
                        </li>
                        @endif
                        @if($siteweb ?? null)
                        <li class="px-0 list-group-item">
                            <span class="h6 fw-light"><i class="fas fa-fw fa-globe text-primary me-1 me-sm-3"></i>Website:</span>
                            <a href="{{ $siteweb }}" target="_blank">{{ $siteweb }}</a>
                        </li>
                        @endif
                        @if($adresse ?? null)
                        <li class="px-0 list-group-item">
                            <span class="h6 fw-light"><i
                                    class="fas fa-fw fa-map-marker-alt text-primary me-1 me-sm-3"></i>Address:</span>
                            <span>{{ $adresse }}</span>
                        </li>
                        @endif
                        </div>
                    </div>
                    </ul>
                    @if(!$type_etabs)
                    @include('livewire.etablissement.tags')
                    @endif
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->

    <!-- =======================
    Related etablissements END -->

<section class="pb-0 pb-md-5">
    <div class="container">
        <!-- Title -->
        <div class="mb-4 row">
            @if(Route::is('single_etab'))
            <h4 class="mb-0">Autre <span class="text-warning">établissements</span></h4>
            @else
            <h4 class="mb-0">Autre <span class="text-warning">écoles d'octorale</span></h4>
            @endif
        </div>
        <div class="row">
            <!-- Slider START -->
            <div class="tiny-slider arrow-round arrow-creative arrow-blur arrow-hover">
                <div class="tiny-slider-inner" data-autoplay="true" data-arrow="true" data-dots="false"
                    data-items-xl="3" data-items-md="2" data-items-xs="1">
            @if(Route::is('single_etab'))
                    @foreach ($autres as $autre)
                    <!-- Card item START -->
                    <div class="bg-transparent card">
                        <div class="position-relative">
                            @if(!empty($autre->image_path))
                            <!-- Image -->
                            <img class="rounded-1 h-60px" src="{{ asset('storage/' .$autre->image_path) }}" alt="{{ $autre->sigle }}">
                            @else
                            <img class="rounded-1 h-60px" src="{{ asset('assets/images/01.png') }}" alt="{{ $autre->sigle }}">
                            @endif
                        </div>

                        <!-- Card body -->
                        <div class="px-2 card-body">
                            <!-- Title -->
                            <h5 class="card-title"><a href="{{ route('single_etab', ['uuid' => $autre->uuid]) }}">{{ $autre->sigle }}</a></h5>
                            <!-- Address and button -->
                            <div class="d-flex justify-content-between align-items-center">
                                <address class="mb-0"><i class="fas fa-flag me-1"></i>{{ $autre->name }}</address>
                                <a href="{{ route('single_etab', ['uuid' => $autre->uuid]) }}" class="mb-0 btn btn-sm btn-primary-soft">Détail</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                @endforeach
            @else
                @foreach ($doctorales as $doctorale)
                <!-- Card item START -->
                <div class="bg-transparent card">
                    <div class="position-relative">
                       @if(!empty($doctorale->image_path))
                        <!-- Image -->
                        <img class="rounded-1 h-60px" src="{{ asset('storage/' .$doctorale->image_path) }}" alt="{{ $doctorale->sigle }}">
                        @else
                        <img class="rounded-1 h-60px" src="{{ asset('assets/images/01.png') }}" alt="{{ $doctorale->sigle }}">
                        @endif
                    </div>

                    <!-- Card body -->
                    <div class="px-2 card-body">
                        <!-- Title -->
                        <h5 class="card-title"><a href="{{ route('single_doc', ['uuid' => $doctorale->uuid]) }}">{{ $doctorale->sigle }}</a></h5>
                        <!-- Address and button -->
                        <div class="d-flex justify-content-between align-items-center">
                            <address class="mb-0"><i class="fas fa-flag me-1"></i>{{ $doctorale->name }}</address>
                            <a href="{{ route('single_doc', ['uuid' => $doctorale->uuid]) }}" class="mb-0 btn btn-sm btn-primary-soft">Détail</a>
                        </div>
                    </div>
                </div>
                <!-- Card item END -->
                @endforeach
            @endif
                </div>
            </div>
            <!-- Slider END -->
        </div>
    </div>
</section>
</div>

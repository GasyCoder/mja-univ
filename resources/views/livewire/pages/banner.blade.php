<!-- ==========Main Banner START -->
<section class="pt-4" wire:ignore>
    <div class="container">
        <div class="row align-items-center g-4 mb-4">
            <div class="col-lg-6">
                <span class="badge bg-primary-soft text-primary rounded-pill">Université de Toamasina</span>
                <h1 class="mt-3 mb-3 display-6 fw-bold">Former, innover et connecter la recherche à la société</h1>
                <p class="lead mb-4">Découvrez nos formations, nos laboratoires et les dernières actualités qui font vivre la communauté universitaire.</p>
                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('etablissement') }}" wire:navigate class="btn btn-primary">Découvrir nos formations</a>
                    <a href="{{ route('pre_inscription') }}" wire:navigate class="btn btn-outline-primary">Pré-inscription</a>
                </div>
                <div class="d-flex flex-wrap gap-4 mt-4">
                    <div>
                        <h5 class="mb-0 fw-bold">20+ Établissements</h5>
                        <span class="small text-muted">Facultés & instituts</span>
                    </div>
                    <div>
                        <h5 class="mb-0 fw-bold">80+ Programmes</h5>
                        <span class="small text-muted">Licence, Master, Doctorat</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6">
                        <div class="p-3 h-100 border rounded-3 bg-light">
                            <div class="d-flex align-items-center mb-2">
                                <span class="icon-lg bg-primary text-white rounded-circle me-2"><i class="bi bi-mortarboard-fill"></i></span>
                                <h6 class="mb-0">Formations</h6>
                            </div>
                            <p class="small text-muted mb-0">Parcours adaptés au marché et à l’innovation.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 h-100 border rounded-3 bg-white shadow-sm">
                            <div class="d-flex align-items-center mb-2">
                                <span class="icon-lg bg-success text-white rounded-circle me-2"><i class="bi bi-lightbulb"></i></span>
                                <h6 class="mb-0">Recherche</h6>
                            </div>
                            <p class="small text-muted mb-0">Laboratoires, revues et publications.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 h-100 border rounded-3 bg-white shadow-sm">
                            <div class="d-flex align-items-center mb-2">
                                <span class="icon-lg bg-warning text-white rounded-circle me-2"><i class="bi bi-people"></i></span>
                                <h6 class="mb-0">Vie étudiante</h6>
                            </div>
                            <p class="small text-muted mb-0">Associations, événements et services.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3 h-100 border rounded-3 bg-light">
                            <div class="d-flex align-items-center mb-2">
                                <span class="icon-lg bg-info text-white rounded-circle me-2"><i class="bi bi-calendar-event"></i></span>
                                <h6 class="mb-0">Événements</h6>
                            </div>
                            <p class="small text-muted mb-0">Agenda des conférences à venir.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
              @if($setting && $setting->is_slider)
                <!-- Slider START -->
                <div class="overflow-hidden tiny-slider arrow-round arrow-blur arrow-hover rounded-3">
                    <div class="tiny-slider-inner" data-autoplay="true" data-gutter="0" data-arrow="true" data-dots="false"
                        data-items="1">
                        @foreach($sliders as $slider)
                        <!-- Card item START -->
                        <x-slider-item :slider="$slider" />
                        <!-- Card item END -->
                        @endforeach
                    </div>
                </div>
                @endif

                <!-- Slider END -->
                <div class="p-3 pt-3 mt-3 bg-light rounded-3">
                    <!-- Slider START -->
                    <div class="py-1 tiny-slider arrow-round arrow-creative arrow-blur arrow-hover">
                        <div class="tiny-slider-inner" data-autoplay="true" data-gutter="80" data-arrow="true"
                            data-dots="false" data-items="5" data-items-lg="3" data-items-md="2" data-items-xs="1">

                        @foreach($typeEtabs as $row)
                            <!-- Item -->
                           <div>
                                <div class="px-1 py-2 text-center border bg-body rounded-2 position-relative">
                                    {{-- <img src="{{ asset('storage/' .$row->icon_path) }}" class="h-40px"
                                        style="width: 40px; height: 40px; object-fit: cover;" alt=""> --}}
                                    <a href="{{ route('detail_type', ['slug' => $row->slug]) }}"
                                        wire:navigate
                                        class="text-primary-hover stretched-link">
                                        <span class="ms-2 text-{{ $row->bg_color }}">
                                            <i class="bi bi-mortarboard-fill"></i>
                                            {{ Str::limit($row->name, 14)}}
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <!-- Item -->
                        @endforeach
                        </div>
                    </div>
                    <!-- Slider END -->
                </div>

            </div>
        </div>
    </div>
</section>
<!-- =======================
Main Banner END -->

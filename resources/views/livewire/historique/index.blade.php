<div>
    <section class="bg-light">
        <div class="container">
            <!-- Title -->
            <div class="row position-relative pb-4">
                <div class="col-lg-8 position-relative">
                    <!-- Title -->
                    <h2>Historique de l'Université de Mahajanga</h2>
                    <p>
                        {{ $intro }}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Slider START -->
                    <div class="tiny-slider arrow-round arrow-blur arrow-hover rounded-3 overflow-hidden">
                        <div class="tiny-slider-inner" data-autoplay="false" data-gutter="0" data-arrow="true" data-dots="false"
                            data-items="1">
                        @foreach ($images_cover as $image)
                            <!-- Card item START -->
                            <div class="card overflow-hidden h-350px h-md-400px text-center rounded-0"
                                style="background-image:url({{ asset('storage/' .$image) }}); background-position: center left; background-size: cover;">
                                <!-- Background dark overlay -->
                                <div class="bg-overlay bg-dark opacity-1"></div>
                            </div>
                            <!-- Card item END -->
                        @endforeach
                        </div>
                    </div>
                    <!-- Slider END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Detail START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Content -->
                    <p>{!! $body!!}</p>

                    <!-- List -->
                    <div class="row mt-4">
                    <!-- Title -->
                    <h5 class="mt-3 mb-4">Nos établissements</h5>
                    <div class="col-md-6 col-xl-3">
					<!-- Card START -->
					<div class="card bg-light h-100">
						<!-- Title -->
						<div class="card-header bg-light pb-0 border-0">
							<i class="bi bi-mortarboard fs-1 text-purple"></i>
							<h5 class="card-title mb-0 mt-2">Facultés </h5>
						</div>
						<!-- List -->
						<div class="card-body">
							<ul class="nav flex-column">
                            @foreach($facultes as $fac)
								<li class="nav-item"><a class="nav-link d-flex"
                                    href="{{ route('single_etab', ['uuid' => $fac->uuid]) }}"
                                    wire:navigate>
                                <i class="fas fa-angle-right text-primary pt-1 me-2"></i>{{ $fac->name }}</a>
                                </li>
                            @endforeach
							</ul>
						</div>
					</div>
					<!-- Card END -->
				</div>

				<div class="col-md-6 col-xl-3">
					<!-- Card START -->
					<div class="card bg-light h-100">
						<!-- Title -->
						<div class="card-header bg-light pb-0 border-0">
							<i class="bi bi-mortarboard fs-1 text-purple"></i>
							<h5 class="card-title mb-0 mt-2">Instituts</h5>
						</div>
						<!-- List -->
						<div class="card-body">
							<ul class="nav flex-column">
							    @foreach($instituts as $institut)
                                <li class="nav-item"><a class="nav-link d-flex" href="{{ route('single_etab', ['uuid' => $institut->uuid]) }}">
                                        <i class="fas fa-angle-right text-primary pt-1 me-2"></i>{{ $institut->name }}</a>
                                </li>
                                @endforeach
							</ul>
						</div>
					</div>
					<!-- Card END -->
				</div>

				<div class="col-md-6 col-xl-3">
					<!-- Card START -->
					<div class="card bg-light h-100">
						<!-- Title -->
						<div class="card-header bg-light pb-0 border-0">
							<i class="bi bi-mortarboard fs-1 text-purple"></i>
							<h5 class="card-title mb-0 mt-2">Ecoles </h5>
						</div>
						<!-- List -->
						<div class="card-body">
							<ul class="nav flex-column">
								@foreach($ecoles as $ecole)
                                <li class="nav-item"><a class="nav-link d-flex" href="{{ route('single_etab', ['uuid' => $ecole->uuid]) }}">
                                        <i class="fas fa-angle-right text-primary pt-1 me-2"></i>{{ $ecole->name }}</a>
                                </li>
                                @endforeach
                            </ul>
						</div>
					</div>
					<!-- Card END -->
				</div>

				<div class="col-md-6 col-xl-3">
					<!-- Card START -->
					<div class="card bg-light h-100">
						<!-- Title START -->
						<div class="card-header bg-light pb-0 border-0">
							<i class="bi bi-mortarboard fs-1 text-purple"></i>
							<h5 class="card-title mb-0 mt-2">Ecole Doctorales </h5>
						</div>
						<!-- List -->
						<div class="card-body">
							<ul class="nav flex-column">
								@foreach($doctorales as $doctorale)
                                <li class="nav-item"><a class="nav-link d-flex" href="{{ route('single_etab', ['uuid' => $doctorale->uuid]) }}">
                                        <i class="fas fa-angle-right text-primary pt-1 me-2"></i>{{ $doctorale->name }}</a>
                                </li>
                                @endforeach
                            </ul>
						</div>
					</div>
					<!-- Card END -->
				</div>
                </div>

                <!-- Filières -->
               <div class="row mt-4">
                <!-- Title -->
                <div class="col-12">
                    <h5 class="mb-3">Nos fillières</h5>
                    <!-- Button list -->
                    <ul class="list-inline hstack gap-3 flex-wrap">
                        @foreach($parcours as $tag)
                        <li class="list-inline-item"> <a class="btn btn-light btn-sm mb-0" href="#">{{ $tag }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @include('livewire.historique.liste-president')
            </div>
        </div>
    </div>
</section>
    <!-- =======================
    Detail END -->

</div>

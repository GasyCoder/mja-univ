<div>
    <!-- =======================
    Trending courses END -->
    <section class="bg-light">
        <div class="container">
            <!-- Title -->
            <div class="pb-4 row position-relative">
                <div class="col-lg-12 position-relative">
                    <!-- Title -->
                    <h2>Historique de l'Université de Mahajanga</h2>
                    <p>
                        {{ $intro }}
                    </p>
                </div>
            </div>
            <div class="row" wire:ignore>
                <div class="col-12">
                <!-- Slider START -->
                <div class="tiny-slider arrow-round arrow-blur arrow-hover">
                    <div class="pb-1 tiny-slider-inner" data-autoplay="true" data-arrow="true" data-edge="2" data-dots="false"
                        data-items="6" data-items-lg="2" data-items-sm="1">
                        <!-- Card item START -->
                        @foreach ($images_cover as $image)
                        <div>
                            <div class="bg-transparent border card action-trigger-hover">
                                <!-- Image -->
                                <img src="{{ asset('storage/' .$image) }}" class="card-img-top" alt="image président">
                                <!-- Ribbon -->
                            </div>
                        </div>
                        @endforeach
                        <!-- Card item END -->
                    </div>
                </div>
                <!-- Slider END -->
                <small><i>Les Recteurs et Présidents de l’Université et les in depuis sa création.</i></small>
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
                    <div class="mt-4 row">
                    <!-- Title -->
                    <h5 class="mt-3 mb-4">Nos établissements</h5>
                    <div class="col-md-6 col-xl-3">
					<!-- Card START -->
					<div class="card bg-light h-100">
						<!-- Title -->
						<div class="pb-0 border-0 card-header bg-light">
							<i class="bi bi-mortarboard fs-1 text-purple"></i>
							<h5 class="mt-2 mb-0 card-title">Facultés </h5>
						</div>
						<!-- List -->
						<div class="card-body">
							<ul class="nav flex-column">
                            @foreach($facultes as $fac)
								<li class="nav-item"><a class="nav-link d-flex"
                                    href="{{ route('single_etab', ['uuid' => $fac->uuid]) }}"
                                    wire:navigate>
                                <i class="pt-1 fas fa-angle-right text-primary me-2"></i>{{ $fac->name }}</a>
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
						<div class="pb-0 border-0 card-header bg-light">
							<i class="bi bi-mortarboard fs-1 text-purple"></i>
							<h5 class="mt-2 mb-0 card-title">Instituts</h5>
						</div>
						<!-- List -->
						<div class="card-body">
							<ul class="nav flex-column">
							    @foreach($instituts as $institut)
                                <li class="nav-item"><a class="nav-link d-flex" href="{{ route('single_etab', ['uuid' => $institut->uuid]) }}">
                                        <i class="pt-1 fas fa-angle-right text-primary me-2"></i>{{ $institut->name }}</a>
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
						<div class="pb-0 border-0 card-header bg-light">
							<i class="bi bi-mortarboard fs-1 text-purple"></i>
							<h5 class="mt-2 mb-0 card-title">Ecoles </h5>
						</div>
						<!-- List -->
						<div class="card-body">
							<ul class="nav flex-column">
								@foreach($ecoles as $ecole)
                                <li class="nav-item"><a class="nav-link d-flex" href="{{ route('single_etab', ['uuid' => $ecole->uuid]) }}">
                                        <i class="pt-1 fas fa-angle-right text-primary me-2"></i>{{ $ecole->name }}</a>
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
						<div class="pb-0 border-0 card-header bg-light">
							<i class="bi bi-mortarboard fs-1 text-purple"></i>
							<h5 class="mt-2 mb-0 card-title">Ecole Doctorales </h5>
						</div>
						<!-- List -->
						<div class="card-body">
							<ul class="nav flex-column">
								@foreach($doctorales as $doctorale)
                                <li class="nav-item"><a class="nav-link d-flex" href="{{ route('single_etab', ['uuid' => $doctorale->uuid]) }}">
                                        <i class="pt-1 fas fa-angle-right text-primary me-2"></i>{{ $doctorale->name }}</a>
                                </li>
                                @endforeach
                            </ul>
						</div>
					</div>
					<!-- Card END -->
				</div>
                </div>

                <!-- Filières -->
               <div class="mt-4 row">
                <!-- Title -->
                <div class="col-12">
                    <h5 class="mb-3">Nos fillières</h5>
                    <!-- Button list -->
                    <ul class="flex-wrap gap-3 list-inline hstack">
                        @foreach($parcours as $tag)
                        <li class="list-inline-item"> <a class="mb-0 btn btn-light btn-sm" href="#">{{ $tag }}</a></li>
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

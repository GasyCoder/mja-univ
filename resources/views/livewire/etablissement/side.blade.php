<!-- Left sidebar START -->
<div class="col-lg-4">
    <div class="row">
        <div class="col-md-6 col-lg-12 d-flex justify-content-center">
            <!-- Instructor image START -->
            <div class="p-2 mb-2 text-center">
                <div class="avatar avatar-xxl">
                    @if(!empty($image_path))
                    <img class="rounded-2" src="{{ asset('storage/' .$image_path) }}" alt="logo">
                    @else
                    <img class="rounded-2" src="{{ asset('assets/images/01.png') }}" alt="logo">
                    @endif
                </div>
            </div>
            <!-- Instructor image END -->
        </div>
        <div class="col-md-6 col-lg-12">
            <div class="p-4 mb-4 shadow card card-body">
                <!-- Title -->
                <h5 class="mb-3">Responsables</h5>
                <!-- Education item -->
                <div class="mb-4 d-flex align-items-center">
                    <span class="mb-0 icon-md bg-light rounded-3"><i class="fas fa-user"></i></span>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ $director }}</h6>
                        @if($status)
                        <p class="mb-0 small">Doyen</p>
                        @else
                        <p class="mb-0 small">Directeur</p>
                        @endif
                    </div>
                </div>
                <hr> <!-- Divider -->
                <!-- Skills START -->
                <h5 class="mb-3">En chiffres</h5>
                @if($type_etabs)
                <div class="mb-4 overflow-hidden">
                    <h6 class="uppercase">Doctorants ({{ $etudiant }})</h6>
                    <div class="progress progress-sm bg-primary bg-opacity-10">
                        <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200"
                            data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: {{ $etudiantPourcentage }}%;"
                            aria-valuenow="{{ $etudiantPourcentage }}" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                @else
                <!-- Progress item -->
                <div class="mb-4 overflow-hidden">
                    <h6 class="uppercase">Enseignants ({{ $enseignant }})</h6>
                    <div class="progress progress-sm bg-primary bg-opacity-10">
                        <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right"
                            data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                            style="width: {{ $enseignantPourcentage }}%;" aria-valuenow="{{ $enseignantPourcentage }}"
                            aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <!-- Progress item -->
                <div class="mb-4 overflow-hidden">
                    <h6 class="uppercase">Personnels - PAT ({{ $personnel }})</h6>
                    <div class="progress progress-sm bg-primary bg-opacity-10">
                        <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right"
                            data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                            style="width: {{ $personnelPourcentage }}%;" aria-valuenow="{{ $personnelPourcentage }}"
                            aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <!-- Progress item -->
                <div class="mb-4 overflow-hidden">
                    <h6 class="uppercase">Enseignants Vacataire ({{ $vacataire }})</h6>
                    <div class="progress progress-sm bg-primary bg-opacity-15">
                        <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right"
                            data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                            style="width: {{ $vacatairePourcentage }}%;" aria-valuenow="{{ $vacatairePourcentage }}"
                            aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <!-- Progress item -->
                <div class="mb-4 overflow-hidden">
                    <h6 class="uppercase">Etudiants ({{ $etudiant }})</h6>
                    <div class="progress progress-sm bg-primary bg-opacity-10">
                        <div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right"
                            data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out"
                            style="width: {{ $etudiantPourcentage }}%;" aria-valuenow="{{ $etudiantPourcentage }}"
                            aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <!-- Skills END -->
            @endif
            </div>
        </div>
    </div> <!-- Row End -->
</div>
<!-- Left sidebar END -->

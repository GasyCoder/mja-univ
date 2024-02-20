<div>
@if($offres->count() > 0)
    <!-- =======================
    Page Banner START -->
    <section class="py-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="p-4 overflow-hidden bg-light rounded-3 position-relative">

                        <!-- Svg decoration -->
                        <figure class="top-0 mt-5 position-absolute end-0">
                            <svg width="566.3px" height="353.7px" viewbox="0 0 566.3 353.7">
                                <path stroke="#17a2b8" fill="none"
                                    d="M525.1,4c8.1,0.7,14.9,7.2,17.9,14.8c3,7.6,3,16,2.1,24.1c-4.7,44.3-32.1,84.7-69.4,108.9 c-37.4,24.2-83.7,32.8-127.9,27.6c-32.3-3.8-63.5-14.5-95.9-16.6c-21.6-1.4-45.6,2.1-60.1,18.3c-7.7,8.5-11.8,19.6-14.8,30.7 c-7.9,29.5-9,60.8-19.7,89.5c-5.5,14.8-14,29.1-27.1,38c-15.6,10.5-35.6,12-54.2,9.5c-18.6-2.5-36.5-8.6-55-12.1">
                                </path>
                                <path stroke="#F99D2B" fill="none"
                                    d="M560.7,0.2c10,18.3,3.7,41.1-5,60.1c-11.8,25.9-28,50.3-50.2,68.2c-29,23.3-66.3,34-103.2,38.6 c-36.9,4.6-74.3,3.8-111.3,7.2c-22.3,2-45.3,5.9-63.5,19c-26.8,19.2-39,55.3-68.3,70.4c-38.2,19.6-89.7-4.9-125.6,18.8 c-22.6,15-30.7,44.2-33.3,71.2">
                                </path>
                            </svg>
                        </figure>

                        <div class="row position-relative align-items-center">

                            <!-- Content -->
                            <div class="col-md-6 px-md-5">
                                <!-- Title -->
                                <h1 class="mb-3">Nos offres de formations</h1>
                                <p class="mb-3">Nos offres de formations s'ouvrent comme un chapitre captivant dans le livre de l'apprentissage, où chaque page élargit
                                les horizons du savoir.</p>
                            </div>

                            <!-- Image -->
                            <div class="text-center col-md-6">
                                <img src="{{ asset('assets/images/book/book-bg.svg') }}" alt="">
                            </div>
                        </div> <!-- Row END -->
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Detail START -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Table -->
                    <div class="mt-4 row">
                        <div class="col-12">
                            <div class="border-0 table-responsive-md">
                                <!-- Table START -->
                                <table class="table p-4 mb-0 align-middle caption-top table-bordered">
                                    <!-- Title -->
                                    <caption class="mb-0 text-white h5 bg-primary ps-4 rounded-top">
                                        Liste des offres de formation
                                    </caption>

                                    <!-- Table head -->
                                    <thead class="border-0">
                                        <tr class="border-top-0 table-border-color">
                                            <th scope="col">Titre</th>
                                            {{-- <th scope="col">Etablissements</th> --}}
                                            <th scope="col" class="text-center">Détails</th>
                                        </tr>
                                    </thead>

                                    <!-- Table body START -->
                                    <tbody class="border-top-0">
                                    @foreach($offres as $offre)
                                        <!-- Table item -->
                                        <tr>
                                            <!-- Table data -->
                                            <td> <span class="text-body h6">{{ $offre->name }}</span> </td>

                                            <!-- Table data -->
                                            {{-- <td>
                                             @foreach($offre->etabs as $etab)
                                                <a href="{{ route('single_etab', ['uuid' => $etab->uuid]) }}"
                                                    wire:navigate
                                                    class="badge bg-primary fw-light">{{ $etab->sigle }}
                                                    <i class="bi bi-box-arrow-up-right ms-1"></i></a>
                                            @endforeach
                                            </td> --}}

                                            <!-- Table data -->
                                            <td class="text-center">
                                                <a href="{{ route('detail_domaine', ['uuid' => $offre->uuid]) }}"
                                                    wire:navigate
                                                    class="fw-light btn btn-sm btn-success">Voir plus
                                                    <i class="bi bi-eye-fill ms-1"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <!-- Table body END -->
                                </table>
                                <!-- Table END -->
                            </div>
                        </div>
                    </div>

                    <!-- University -->

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

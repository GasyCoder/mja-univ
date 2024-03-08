<div>
    <!-- Page main content START -->
        <div class="border page-content-wrapper">

            <!-- Title -->
            <div class="mb-3 row">
               <div class="col-12 d-flex justify-content-between align-items-center">
                    <h3 class="mb-2 h3 mb-sm-0">Revues/Année/Volume
                    </h3>
                <div class="mb-3">
                    <a href="#" class="mb-0 btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#addRevue">Ajouter Revue</a>
                    <a href="#" class="mb-0 btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#addAnnee">Ajouter Année</a>
                    <a href="#" class="mb-0 btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#addVolume">Ajouter Volume</a>
                </div>
            </div>

            <!-- Card REVUES -->
            <div class="mb-4 bg-transparent border card">
                <!-- Card body START -->
                <div class="card-body">
                    <!-- Course table START -->
                    <div class="border-0 table-responsive rounded-3">
                        <!-- Table START -->
                        <table class="table p-4 mb-0 align-middle table-dark-gray table-hover">
                            <!-- Table head -->
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 rounded-start">Sigle</th>
                                    <th scope="col" class="border-0">Titre</th>
                                    <th scope="col" class="border-0">Status</th>
                                    <th scope="col" class="border-0">Publication</th>
                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                </tr>
                            </thead>

                            <!-- Table body START -->
                            <tbody>

                             @foreach($revues as $revue)
                                <!-- Table row -->
                                <tr>
                                    <!-- Table data -->
                                  <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <!-- Image -->
                                        <div class="w-40px">
                                            @if(!empty($revue->logo))
                                            <img src="{{ asset('storage/' . $revue->logo) }}" class="rounded" alt="">
                                            @else
                                            <img src="{{ asset('assets/images/element/data-science.svg') }}" class="rounded" alt="">
                                            @endif
                                        </div>
                                        <!-- Title -->
                                        <span class="mb-0 table-responsive-title ms-2">
                                            <a href="#" class="">{{ $revue->sigle }}</a>
                                        </span>
                                    </div>
                                </td>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <small class="mb-0 fw-light">
                                                {{ $revue->sub_title }}
                                            </small>
                                        </div>
                                    </td>
                                    <td>
                                        @if($revue->is_active == true)
                                        <span class="badge bg-success">Activé</span>
                                        @else
                                        <span class="badge bg-danger">Desactivé</span>
                                        @endif
                                    </td>
                                    <!-- Table data -->
                                    <td> {{ $revue->publications->count() }}</td>

                                    <!-- Table data -->
                                    <td>
                                        <a href="#" wire:click="editRevue({{ $revue->id }})"
                                        class="mb-1 btn btn-sm btn-success me-1 mb-md-0"
                                        data-bs-toggle="modal" data-bs-target="#editRevue">Editer</a>
                                        <button class="mb-0 btn btn-sm btn-danger"
                                        wire:confirm="Vous voulez supprimer?"
                                        wire:click="deleteRevue({{ $revue->id }})">Supprimer</button>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <!-- Table body END -->
                        </table>
                        <!-- Table END -->
                    </div>
                    <!-- Course table END -->
                </div>
                <!-- Card body END -->

                <!-- Card footer START -->
                <div class="pt-0 bg-transparent card-footer">
                    <!-- Pagination START -->
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                         <!-- Pagination -->
                        <nav class="mb-0 d-flex justify-content-center" aria-label="navigation">
                            <ul class="mb-0 rounded pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex">
                               {{ $revues->links() }}
                            </ul>
                        </nav>
                    </div>
                    <!-- Pagination END -->
                </div>
                <!-- Card footer END -->
            </div>
            <!-- Card END -->

            <!-- Card ANNEE -->
            <div class="bg-transparent border card">
                <!-- Card body START -->
                <div class="card-body">
                    <!-- Course table START -->
                    <div class="border-0 table-responsive rounded-3">
                        <!-- Table START -->
                        <table class="table p-4 mb-0 align-middle table-dark-gray table-hover">
                            <!-- Table head -->
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 rounded-start">Année</th>
                                    <th scope="col" class="border-0">Status</th>
                                    <th scope="col" class="border-0">Publication</th>
                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                </tr>
                            </thead>

                            <!-- Table body START -->
                            <tbody>

                             @foreach($annees as $annee)
                                <!-- Table row -->
                                <tr>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Title -->
                                            <h6 class="mb-0 table-responsive-title ms-2">
                                               {{ $annee->annee }}
                                            </h6>
                                        </div>
                                    </td>
                                    <td>
                                        @if($annee->is_active == true)
                                        <span class="badge bg-success">Activé</span>
                                        @else
                                        <span class="badge bg-danger">Desactivé</span>
                                        @endif
                                    </td>
                                    <!-- Table data -->
                                    <td> {{ $annee->publications->count() }}</td>

                                    <!-- Table data -->
                                    <td>
                                        <a href="#" wire:click="editAnnee({{ $annee->id }})"
                                        class="mb-1 btn btn-sm btn-success me-1 mb-md-0"
                                        data-bs-toggle="modal" data-bs-target="#editAnnee">Editer</a>
                                        <button class="mb-0 btn btn-sm btn-danger"
                                        wire:confirm="Vous voulez supprimer?"
                                        wire:click="delete({{ $annee->id }})">Supprimer</button>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <!-- Table body END -->
                        </table>
                        <!-- Table END -->
                    </div>
                    <!-- Course table END -->
                </div>
                <!-- Card body END -->

                <!-- Card footer START -->
                <div class="pt-0 bg-transparent card-footer">
                    <!-- Pagination START -->
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                         <!-- Pagination -->
                        <nav class="mb-0 d-flex justify-content-center" aria-label="navigation">
                            <ul class="mb-0 rounded pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex">
                               {{ $annees->links() }}
                            </ul>
                        </nav>
                    </div>
                    <!-- Pagination END -->
                </div>
                <!-- Card footer END -->
            </div>
            <!-- Card END -->

            <!-- Card VOLUME -->
            <div class="bg-transparent border card">
                <!-- Card body START -->
                <div class="card-body">
                    <!-- Course table START -->
                    <div class="border-0 table-responsive rounded-3">
                        <!-- Table START -->
                        <table class="table p-4 mb-0 align-middle table-dark-gray table-hover">
                            <!-- Table head -->
                            <thead>
                                <tr>
                                    <th scope="col" class="border-0 rounded-start">Volume</th>
                                    <th scope="col" class="border-0">Status</th>
                                    <th scope="col" class="border-0">Publication</th>
                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                </tr>
                            </thead>

                            <!-- Table body START -->
                            <tbody>

                                @foreach($volumes as $volume)
                                <!-- Table row -->
                                <tr>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Title -->
                                            <h6 class="mb-0 table-responsive-title ms-2">
                                                {{ $volume->volumeName }}
                                            </h6>
                                        </div>
                                    </td>
                                    <td>
                                        @if($volume->is_active == true)
                                        <span class="badge bg-success">Activé</span>
                                        @else
                                        <span class="badge bg-danger">Desactivé</span>
                                        @endif
                                    </td>
                                    <!-- Table data -->
                                    <td> {{ $volume->publications->count() }}</td>

                                    <!-- Table data -->
                                    <td>
                                        <a href="#" wire:click="editVolume({{ $volume->id }})"
                                            class="mb-1 btn btn-sm btn-success me-1 mb-md-0" data-bs-toggle="modal"
                                            data-bs-target="#addVolume">Editer</a>
                                        <button class="mb-0 btn btn-sm btn-danger" wire:confirm="Vous voulez supprimer?"
                                            wire:click="delete({{ $volume->id }})">Supprimer</button>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <!-- Table body END -->
                        </table>
                        <!-- Table END -->
                    </div>
                    <!-- Course table END -->
                </div>
                <!-- Card body END -->

                <!-- Card footer START -->
                <div class="pt-0 bg-transparent card-footer">
                    <!-- Pagination START -->
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                        <!-- Pagination -->
                        <nav class="mb-0 d-flex justify-content-center" aria-label="navigation">
                            <ul class="mb-0 rounded pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex">
                                {{ $volumes->links() }}
                            </ul>
                        </nav>
                    </div>
                    <!-- Pagination END -->
                </div>
                <!-- Card footer END -->
            </div>
            <!-- Card END -->


        </div>
        <!-- Page main content END -->
@include('livewire.admin.publications.revues.addRevue')
@include('livewire.admin.publications.revues.editRevue')

@include('livewire.admin.publications.revues.addAnnee')
@include('livewire.admin.publications.revues.editAnnee')

@include('livewire.admin.publications.revues.addVolume')
@include('livewire.admin.publications.revues.editVolume')
</div>

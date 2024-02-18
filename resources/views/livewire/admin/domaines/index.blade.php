<div>
    <!-- Page main content START -->
    <div class="border page-content-wrapper">

        <!-- Title -->
        <div class="mb-3 row">
            <div class="col-12 d-sm-flex justify-content-between align-items-center">
                <h3 class="mb-2 h3 mb-sm-0">Offres de formations <span class="badge bg-orange bg-opacity-10 text-orange">{{
                        $domaines->count() }}</span>
                </h3>
                <a href="#" class="mb-0 btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addDomaine">Nouvelle
                    Offres</a>
            </div>
        </div>

        <!-- Card START -->
        <div class="bg-transparent border card">

            <!-- Card header START -->
            <div class="card-header bg-light border-bottom">
                <!-- Search and select START -->
                <div class="row g-3 align-items-center justify-content-between">

                    <!-- Search bar -->
                    <div class="col-md-12">
                        <form class="rounded position-relative">
                            <input class="form-control bg-body" type="search" placeholder="Rechercher..."
                                aria-label="Search">
                            <button
                                class="p-2 bg-transparent border-0 position-absolute top-50 end-0 translate-middle-y text-primary-hover text-reset"
                                type="submit">
                                <i class="fas fa-search fs-6 "></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- Search and select END -->
            </div>
            <!-- Card header END -->

            <!-- Card body START -->
            <div class="card-body">
                <!-- Course table START -->
                <div class="border-0 table-responsive rounded-3">
                    <!-- Table START -->
                    <table class="table p-4 mb-0 align-middle table-dark-gray table-hover">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope="col" class="border-0 rounded-start">Titre</th>
                                <th scope="col" class="border-0">Slug</th>
                                <th scope="col" class="border-0">Status</th>
                                <th scope="col" class="border-0">Etablissement</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>

                        <!-- Table body START -->
                        <tbody>

                            @foreach($domaines as $domaine)
                            <!-- Table row -->
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!-- Avatar -->
                                        <div class="avatar avatar-xs flex-shrink-0">
                                            <img class="avatar-img rounded-circle" src="{{ asset('storage/' .$domaine->icon_path) }}" alt="avatar">
                                        </div>
                                        <!-- Info -->
                                        <div class="ms-2">
                                            <h6 class="mb-0 fw-light">{{
                                            $domaine->name }}</h6>
                                        </div>
                                    </div>
                                </td>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center">
                                        <small class="mb-0 fw-light">{{ $domaine->slug }}</small>
                                    </div>
                                </td>
                                <td>
                                    @if($domaine->is_active == true)
                                    <span class="badge bg-success">Activé</span>
                                    @else
                                    <span class="badge bg-danger">Desactivé</span>
                                    @endif
                                </td>
                                <!-- Table data -->
                                <td> {{ $domaine->etabs->count() }}</td>

                                <!-- Table data -->
                                <td>
                                    <a href="#" wire:click="edit({{ $domaine->id }})"
                                        class="mb-1 btn btn-sm btn-success me-1 mb-md-0" data-bs-toggle="modal"
                                        data-bs-target="#editDomaine">Editer</a>
                                    <button class="mb-0 btn btn-sm btn-danger" wire:confirm="Vous voulez supprimer?"
                                        wire:click="delete({{ $domaine->id }})">Supprimer</button>
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
                        <ul
                            class="mb-0 rounded pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex">
                            {{ $domaines->links() }}
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
    @include('livewire.admin.domaines.add')
    @include('livewire.admin.domaines.edit')
</div>

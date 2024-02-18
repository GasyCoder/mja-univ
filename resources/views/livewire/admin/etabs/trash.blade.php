<!-- Page main content START -->
    <div class="border page-content-wrapper">
        <!-- Title -->
        <div class="mb-3 row">
            <div class="col-12">
                <h3 class="mb-2 h3 mb-sm-0">Corbeille <span class="badge bg-orange bg-opacity-10 text-orange">
                        {{ $archivesCount }}</span>
                </h3>
                <a href="#" wire:click="cancel()" class="mb-0 btn btn-sm btn-warning">
                    <i class="bi bi-arrow-left"></i> Retour
                </a>
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
                                <th scope="col" class="border-0 rounded-start">Nom</th>
                                <th scope="col" class="border-0">Pédagogie</th>
                                <th scope="col" class="border-0">Statistique</th>
                                <th scope="col" class="border-0">Contact/Adresse</th>
                                <th scope="col" class="border-0">Status</th>
                                <th scope="col" class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>
                        <!-- Table body START -->
                        <tbody>
                            @foreach($archives as $row)
                            <!-- Table row -->
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class="d-flex align-items-center position-relative">
                                        <!-- Title -->
                                        <h6 class="mb-0 table-responsive-title ms-2">
                                            <a href="#" class="text-primary stretched-link bg-opacity-15">
                                                {{ $row->sigle}}
                                            </a><br>
                                            <small>{{ $row->rubrique->name }}</small>
                                        </h6>
                                    </div>
                                </td>
                                <td>
                                    {{-- pédagogie --}}
                                    @if($row->pedagogies->contains(function ($pedagogie) {
                                    return $pedagogie->domaine != null;
                                    }))
                                    <a href="#" wire:click="succesPedago({{ $row->id }})"
                                        class="mb-1 badge bg-success me-1 mb-md-0" data-bs-toggle="modal"
                                        data-bs-target="#pedago">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    @else
                                    <a href="#" wire:click="pedago({{ $row->id }})"
                                        class="mb-1 badge bg-primary me-1 mb-md-0" data-bs-toggle="modal"
                                        data-bs-target="#pedago">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    {{-- statistique --}}
                                    @if($row->statistiques->contains(function ($statistique) {
                                    return $statistique->enseignant != null;
                                    }))
                                    <a href="#" wire:click="succesState({{ $row->id }})"
                                        class="mb-1 badge bg-success me-1 mb-md-0" data-bs-toggle="modal"
                                        data-bs-target="#state">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    @else
                                    <a href="#" wire:click="state({{ $row->id }})"
                                        class="mb-1 badge bg-primary me-1 mb-md-0" data-bs-toggle="modal"
                                        data-bs-target="#state">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    {{-- contact/adresse --}}
                                    @if($row->contact && $row->contact->phone_1 != null)
                                    <a href="#" wire:click="succesContact({{ $row->id }})"
                                        class="mb-1 badge bg-success me-1 mb-md-0" data-bs-toggle="modal"
                                        data-bs-target="#contact">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    @else
                                    <a href="#" wire:click="contact({{ $row->id }})"
                                        class="mb-1 badge bg-primary me-1 mb-md-0" data-bs-toggle="modal"
                                        data-bs-target="#contact">
                                        <i class="bi bi-plus"></i>
                                    </a>
                                    @endif
                                </td>
                                <!-- Table data -->
                                <td>
                                    @if($row->trashed())
                                    <span class="badge bg-danger">Archivé</span>
                                    @endif
                                </td>
                                <!-- Table data -->
                                <td>
                                    @if($row->trashed())
                                    <button class="mb-0 btn btn-sm btn-warning"
                                    wire:click="restore({{ $row->id }})">Restaurer</button>
                                    <button class="mb-0 btn btn-sm btn-danger"
                                    wire:confirm="Vous êtes sur de supprimer?"
                                    wire:click="forceDelete({{ $row->id }})">Supprimer définitivement</button>
                                    @endif
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
                            {{ $archives->links() }}
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

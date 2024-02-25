<div>
    <!-- Page main content START -->
        <div class="border page-content-wrapper">
            <!-- Title -->
            <div class="mb-3 row">
                <div class="col-12 d-sm-flex justify-content-between align-items-center">
                    <h3 class="mb-2 h3 mb-sm-0">Types <span class="badge bg-orange bg-opacity-10 text-orange">{{ $types->count() }}</span>
                    </h3>
                    <a href="#" class="mb-0 btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addType">Nouvelle type</a>
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
                                <input class="form-control bg-body" type="search" placeholder="Rechercher..." aria-label="Search">
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
                                    <th scope="col" class="border-0 rounded-start">ID</th>
                                    <th scope="col" class="border-0">Types</th>
                                    <th scope="col" class="border-0">Slug</th>
                                    <th scope="col" class="border-0">Status</th>
                                    <th scope="col" class="border-0">Nbre Etab</th>
                                    <th scope="col" class="border-0 rounded-end">Action</th>
                                </tr>
                            </thead>
                            <!-- Table body START -->
                            <tbody>
                             @foreach($types as $row)
                                <!-- Table row -->
                                <tr>
                                    <td> {{ $row->id }}</td>
                                    <!-- Table data -->
                                    <td>
                                        <div class="d-flex align-items-center position-relative">
                                            <!-- Title -->
                                            <h6 class="mb-0 table-responsive-title ms-2">
                                                <a href="#" class="text-primary stretched-link bg-opacity-15">{{ $row->name }}</a>
                                            </h6>
                                        </div>
                                    </td>
                                    <td> {{ $row->slug }}</td>
                                    <!-- Table data -->
                                    <td>
                                        @if($row->is_active == true)
                                        <span class="badge bg-success">Activé</span>
                                        @else
                                        <span class="badge bg-danger">Desactivé</span>
                                        @endif
                                    </td>
                                    <!-- Table data -->
                                    <td> {{ $row->etabs->count() }}</td>
                                    <!-- Table data -->
                                    <td>
                                        <a href="#" wire:click="edit({{ $row->id }})"
                                        class="mb-1 btn btn-sm btn-success me-1 mb-md-0"
                                        data-bs-toggle="modal" data-bs-target="#editType">Editer</a>
                                        <button class="mb-0 btn btn-sm btn-danger"
                                        wire:confirm="Vous voulez supprimer?"
                                        wire:click="delete({{ $row->id }})">Supprimer</button>
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
                               {{ $types->links() }}
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
@include('livewire.admin.etabs.types.add')
@include('livewire.admin.etabs.types.edit')
</div>

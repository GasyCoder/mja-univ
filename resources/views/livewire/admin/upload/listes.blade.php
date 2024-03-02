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
                        <th scope="col" class="border-0 rounded-start">#</th>
                        <th scope="col" class="border-0">Nom de fichier</th>
                        <th scope="col" class="border-0">Extension</th>
                        <th scope="col" class="border-0">Status</th>
                        <th scope="col" class="border-0 rounded-end">Action</th>
                    </tr>
                </thead>
                <!-- Table body START -->
                <tbody>
                    @foreach($files as $key => $file)
                    <!-- Table row -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                {{ $key+1 }}
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                {{ $file->original_name }}
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                {{ $file->extension }}
                            </div>
                        </td>
                        <td>
                            @if($file->is_active == true)
                            <span class="badge bg-success">Publié</span>
                            @else
                            <span class="badge bg-danger">Non publié</span>
                            @endif
                        </td>
                        <!-- Table data -->
                        <td>
                            <a href="#" wire:click="edit({{ $file->id }})"
                                class="mb-1 btn btn-success-soft btn-round me-1 mb-md-0"
                                data-bs-toggle="modal" data-bs-target="#editUploader">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <button wire:click="delete({{ $file->id }})"
                                class="mb-1 btn btn-dark-soft btn-round me-1 mb-md-0" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="" data-bs-original-title="Corbeille">
                                <i class="bi bi-trash2-fill"></i>
                            </button>
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
                    {{ $files->links() }}
                </ul>
            </nav>
        </div>
        <!-- Pagination END -->
    </div>
    <!-- Card footer END -->
</div>
<!-- Card END -->

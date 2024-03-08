<div>
    <!-- Page main content START -->
    <div class="border page-content-wrapper">
        <!-- Title -->
        <div class="mb-2 row">
            <div class="col-12 d-flex justify-content-between align-items-center">
                @if(!$openTrash)
                <h3 class="mb-2 h3 mb-sm-0">Fichier Télécharger
                    <span class="badge bg-orange bg-opacity-10 text-orange">
                        {{$allFiles}}
                    </span>
                </h3>
                <div>
                    <a href="#" class="mt-3 mb-0 btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#uploader">Ajouter fichier</a>
                    <a href="#" wire:click="trash()" class="mt-3 mb-0 btn btn-sm btn-dark">
                        <i class="bi bi-trash2-fill"></i> Corbeille
                    </a>
                </div>
                @endif
            </div>
        </div>

        @if(!$openTrash)
        @include('livewire.admin.publications.files.listes')
        @else
        @include('livewire.admin.publications.files.trash')
        @endif

    </div>
    <!-- Page main content END -->
    @include('livewire.admin.publications.files.add')
    @include('livewire.admin.publications.files.edit')
</div>

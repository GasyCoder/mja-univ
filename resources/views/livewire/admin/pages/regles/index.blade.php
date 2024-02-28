<!-- Page main content START -->
<div class="border page-content-wrapper">
    <!-- Title -->
    <div class="mb-3 row">
        <div class="col-12 d-sm-flex justify-content-between align-items-center">
            <h3 class="mb-2 h4 mb-sm-0">Règles</span>
            </h3>
            @if($updateForm)
            <a href="#" wire:click="cancelUpdate()" class="badge bg-danger text-end"><i class="fas fa-arrow-left me-2"></i> Retour à
                la liste</a>
            @endif
        </div>
    </div>

    @if($updateForm)
    @include('livewire.admin.pages.regles.update')
    @else
    @include('livewire.admin.pages.regles.listes')
    @endif

</div>

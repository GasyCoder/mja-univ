<!-- Add Categorie modal START -->
<div wire:ignore class="modal fade" id="addCat" tabindex="-1" aria-labelledby="addCatLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="text-white modal-title" id="addCatLabel">Ajouter</h5>
                <button type="button" class="mb-0 btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
                <form class="row text-start g-3" novalidate="" wire:submit.prevent="save">
                    <!-- Titre -->
                    <div class="col-12">
                        <label class="form-label">Titre</label>
                        <input class="form-control" type="text" wire:model="name" placeholder="Titre de rubrique">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Switch -->
                    <div class="mt-2 col-md-12">
                        <div class="form-check form-switch form-check-md">
                            <input class="form-check-input" wire:model="is_active" type="checkbox" id="publish">
                            <label class="form-check-label" for="publish">Publier</label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <a href="/adminx/rubrique-etab" wire:navigate class="my-0 btn btn-danger-soft">Close</a>
                        <button type="submit" class="my-0 btn btn-success">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add course modal START -->

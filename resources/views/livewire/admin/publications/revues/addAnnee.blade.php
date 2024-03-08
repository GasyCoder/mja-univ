<!-- Add Categorie modal START -->
<div wire:ignore class="modal fade" id="addAnnee" tabindex="-1" aria-labelledby="addAnneeLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="text-white modal-title" id="addAnneeLabel">Ajouter</h5>
                <button type="button" class="mb-0 btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
                <form class="row text-start g-3" novalidate="" wire:submit.prevent="saveAnnee">
                    <!-- Titre -->
                    <div class="col-12">
                        <label class="form-label">Année</label>
                        <input class="form-control" type="text" wire:model="annee" placeholder="Année">
                        @error('annee') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Switch -->
                    <div class="mt-2 col-md-12">
                        <div class="form-check form-switch form-check-md">
                            <input class="form-check-input" wire:model="is_active" type="checkbox" id="publish">
                            <label class="form-check-label" for="publish">Publier</label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <a href="/adminx/revues" wire:navigate class="my-0 btn btn-danger-soft">Close</a>
                        <button type="submit" class="my-0 btn btn-success">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add course modal START -->

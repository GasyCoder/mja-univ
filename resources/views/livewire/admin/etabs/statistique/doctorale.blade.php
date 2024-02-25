<!-- Add Categorie modal START -->
<div wire:ignore class="modal fade" id="stateDoc" tabindex="-1" aria-labelledby="stateDocLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="text-white modal-title" id="stateDocLabel">Ajouter</h5>
                <button type="button" class="mb-0 btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
                <form class="row text-start g-3" novalidate="" wire:submit.prevent="updateState">
                    <!-- Titre -->
                    <div class="col-12">
                        <label class="form-label" for="tags">Nombre Professeurs {{ $state_Id }}</label>
                        <input class="form-control " type="number" wire:model="enseignant"
                            placeholder="Nombre enseignant" autofocus>
                        @error('enseignant') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">Nombre doctorant</label>
                        <input class="form-control" type="number" wire:model="etudiant" placeholder="Nombre étudiant">
                        @error('etudiant') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">Nombre personnel</label>
                        <input class="form-control" type="number" wire:model="personnel" placeholder="Nombre personnel">
                        @error('personnel') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="modal-footer">
                        <a href="/adminx/doctorale-ecole" wire:navigate class="my-0 btn btn-danger-soft">Close</a>
                        <button type="submit" class="my-0 btn btn-success">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add course modal START -->

<!-- Add Categorie modal START -->
<div wire:ignore class="modal fade" id="state" tabindex="-1" aria-labelledby="stateLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="text-white modal-title" id="stateLabel">Ajouter</h5>
                <button type="button" class="mb-0 btn btn-sm btn-light"
                    data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
                <form class="row text-start g-3" novalidate="" wire:submit.prevent="submitState">
                    <!-- Titre -->
                    <div class="col-12">
                        <label class="form-label" for="tags">Nombre enseignant</label>
                        <input class="form-control " type="number" wire:model="enseignant" placeholder="Nombre enseignant" autofocus>
                        @error('enseignant') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">Nombre étudiant/Doctorant</label>
                        <input class="form-control" type="number" wire:model="etudiant" placeholder="Nombre étudiant">
                        @error('etudiant') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">Nombre personnel</label>
                        <input class="form-control" type="number" wire:model="personnel" placeholder="Nombre personnel">
                        @error('personnel') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">Vacataire</label>
                        <input class="form-control" type="number" wire:model="vacataire"
                        placeholder="Vacataire">
                        @error('vacataire') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="modal-footer">
                        <a href="/adminx/profil-etab" wire:navigate class="my-0 btn btn-danger-soft">Close</a>
                        <button type="submit" class="my-0 btn btn-success">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add course modal START -->

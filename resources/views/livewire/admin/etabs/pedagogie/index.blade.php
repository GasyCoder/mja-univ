<!-- Add Categorie modal START -->
<div wire:ignore class="modal fade" id="pedago" tabindex="-1" aria-labelledby="pedagoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="text-white modal-title" id="pedagoLabel">Ajouter</h5>
                <button type="button" class="mb-0 btn btn-sm btn-light"
                    data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
                <form class="row text-start g-3" novalidate="" wire:submit.prevent="submitPedagogie">
                    <div class="col-12">
                        <label class="form-label">Mention</label>
                        <input class="form-control" type="text" id='mention_tags' wire:model="mention" placeholder="Mention">
                        @error('mention.*') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">Parcours</label>
                        <input class="form-control" type="text" id='parcour_tags' wire:model="parcour" placeholder="Parcours">
                        @error('parcour.*') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Titre -->
                    <div class="col-12">
                        <label class="form-label" for="tags">Diplômes délivré</label>
                        <input class="form-control " type="text" id='diplomes_tags' wire:model="diplomes" autofocus>
                        @error('diplomes.*') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    {{-- <div class="col-6">
                        <label class="form-label">Responsable de Mention</label>
                        <input class="form-control" type="text" wire:model="respo_mention"
                        placeholder="Responsable de Mention">
                        @error('respo_mention') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-6">
                    <label class="form-label">Responsable de Parcours</label>
                    <input class="form-control" type="text" wire:model="respo_parcour"
                    placeholder="Responsable de Parcours">
                    @error('respo_parcour') <span class="text-danger">{{ $message }}</span> @enderror
                    </div> --}}

                    <div class="modal-footer">
                        <a href="/adminx/profil-etab" wire:navigate class="my-0 btn btn-danger-soft">Close</a>
                        <button type="submit" class="my-0 btn btn-success">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add pedagogie modal START -->

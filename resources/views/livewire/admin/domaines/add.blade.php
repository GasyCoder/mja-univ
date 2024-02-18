<!-- Add Domaine modal START -->
<div wire:ignore class="modal fade" id="addDomaine" tabindex="-1" aria-labelledby="addDomaineLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="text-white modal-title" id="addDomaineLabel">Ajouter</h5>
                <button type="button" class="mb-0 btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
                <form class="row text-start g-3" novalidate="" wire:submit.prevent="save">
                    <!-- Titre -->
                    <div class="col-12">
                        <label class="form-label">Titre offre</label>
                        <input class="form-control" type="text" wire:model="name" placeholder="Offre de formation">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-12">
                        Etablissement
                        <select class="form-control" wire:model="etab_id" multiple>
                            <option value="" disabled selected>--choisir--</option>
                            @foreach($etabs as $row)
                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                        {{-- <div class="form-text">Sélectionnez une catégorie</div> --}}
                    </div>
                    <div class="col-12">
                        <label class="form-label">Icon</label>
                        <input class="form-control" type="file" wire:model="icon_path">
                        @error('icon_path') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Textarea item -->
                    <div class="col-12">
                        <label class="form-label">Resumé</label>
                        <textarea class="form-control" rows="4" cols="4" wire:model="resume"></textarea>
                        <div class="form-text">Max 120 carractères</div>
                    </div>
                    <!-- Switch -->
                    <div class="mt-2 col-md-12">
                        <div class="form-check form-switch form-check-md">
                            <input class="form-check-input" wire:model="is_active" type="checkbox" id="publish">
                            <label class="form-check-label" for="publish">Publier</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="/adminx/domaines" wire:navigate class="my-0 btn btn-danger-soft">Close</a>
                        <button type="submit" class="my-0 btn btn-success">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add course modal START -->

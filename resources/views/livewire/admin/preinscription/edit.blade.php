<!-- Edit Domaine modal START -->
<div wire:ignore class="modal fade" id="editResult" tabindex="-1" aria-labelledby="editResultLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="text-white modal-title" id="editResultLabel">Modifier</h5>
                <button type="button" class="mb-0 btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
               <form class="row text-start g-3" novalidate="" wire:submit.prevent="update">
                <!-- Titre -->
                <div class="col-12">
                    <label class="form-label">Année Universitaire</label>
                    <input class="form-control" type="text" wire:model="year_univ" placeholder="Année Universitaire">
                    @error('year_univ') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-lg-12">
                    Etablissement
                    <select class="form-control" wire:model="etab_id">
                        <option value="" selected>--choisir--</option>
                        @foreach($etabs as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label">Lien de fichier</label>
                    <input class="form-control" type="url" wire:model="url_file">
                    @error('url_file') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <!-- Switch -->
               <div class="mt-2 col-md-12">
                    <div class="form-check form-switch form-check-md">
                        @if($is_active == true)
                        <input class="form-check-input" wire:model="is_active" checked type="checkbox" id="publish">
                        @else
                        <input class="form-check-input" wire:model="is_active" type="checkbox" id="publish">
                        @endif
                        <label class="form-check-label" for="publish">Publier</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/adminx/pre-inscription" wire:navigate class="my-0 btn btn-danger-soft">Close</a>
                    <button type="submit" class="my-0 btn btn-success">Mise à jour</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- Add course modal START -->

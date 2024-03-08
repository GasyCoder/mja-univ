<!-- Edit Domaine modal START -->
<div wire:ignore class="modal fade" id="editFile" tabindex="-1" aria-labelledby="editFileLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="text-white modal-title" id="editFileLabel">Modifier</h5>
                <button type="button" class="mb-0 btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
            <form class="row text-start g-3" novalidate="" wire:submit.prevent="update">
                <div class="col-lg-4">
                    <label class="form-label">Revues</label>
                    <select class="border-1 form-select js-choice z-index-9" aria-label=".form-select-sm" wire:model="revue_id">
                        <option value="">--choisir--</option>
                        @foreach($revues as $row)
                        <option value="{{ $row->id }}">{{ $row->sigle }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-lg-4">
                    <label class="form-label">Année</label>
                    <select class="border-1 form-select js-choice z-index-9" aria-label=".form-select-sm" wire:model="annee_id">
                        <option value="">--choisir--</option>
                        @foreach($annees as $row)
                        <option value="{{ $row->id }}">{{ $row->annee }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col-lg-4">
                    <label class="form-label">Volume</label>
                    <select class="border-1 form-select js-choice z-index-9" aria-label=".form-select-sm" wire:model="volume_id">
                        <option value="">--choisir--</option>
                        @foreach($volumes as $row)
                        <option value="{{ $row->id }}">{{ $row->volumeName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6">
                    <label class="form-label">Page début</label>
                    <input class="form-control" type="number" wire:model="startPage" placeholder="Premier page">
                    @error('startPage') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-6">
                    <label class="form-label">Page fin</label>
                    <input class="form-control" type="number" wire:model="endPage" placeholder="Fin de page">
                    @error('endPage') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12">
                    <label class="form-label">ISSN</label>
                    <input class="form-control" type="text" wire:model="issn" placeholder="International Standard Serial Number">
                    @error('issn') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <!-- File -->
                <div class="mb-4 col-12 file-input">
                    <label class="form-label">Fichier</label>
                    <input class="form-control" type="file" wire:model="file_path">
                    @error('file_path') <span class="text-danger">{{ $message }}</span> @enderror
                    <label class="mt-4">le fichier actuel</label>
                    <input type="text" wire:model="original_name">
                </div>
                <!-- Switch -->
                <div class="col-lg-3">
                    <label class="form-label">Publier</label>
                   <div class="form-check form-switch form-check-md">
                        @if($is_active == true)
                        <input class="mt-0 form-check-input price-toggle me-2" checked wire:model="is_active" type="checkbox"
                            id="flexSwitchCheckDefault">
                        @else
                        <input class="mt-0 form-check-input price-toggle me-2" wire:model="is_active" type="checkbox"
                            id="flexSwitchCheckDefault">
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/adminx/fichiers" wire:navigate class="my-0 btn btn-danger-soft">Close</a>
                    <button type="submit" class="my-0 btn btn-success">Mettre à jour</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- Add course modal START -->
@push('scripts')

@endpush

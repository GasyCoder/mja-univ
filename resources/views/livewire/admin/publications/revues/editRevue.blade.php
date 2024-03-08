<!-- Edit categorie modal START -->
<div wire:ignore class="modal fade" id="editRevue" tabindex="-1" aria-labelledby="editRevueLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="text-white modal-title" id="editRevueLabel">Modifier</h5>
                <button type="button" class="mb-0 btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
               <form class="row text-start g-3" novalidate="" wire:submit.prevent="updateRevue">
                <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                    x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
                    x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                <!-- Titre -->
                <div class="col-12 mb-3">
                    <label class="form-label">Sigle</label>
                    <input class="form-control" type="text" wire:model="sigle" placeholder="Abréviation">
                    @error('sigle') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Sous-titre</label>
                    <input class="form-control" type="text" wire:model="sub_title" placeholder="Sous titre">
                    @error('sub_title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>

                <div class="col-12 mb-3">
                    <label class="form-label">Logo</label>
                    <input class="form-control" type="file" wire:model="logo">
                    @error('logo') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <!-- Progress Bar -->
                <div x-show="uploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
                @if ($logo)
                 <img src="{{ $logo->temporaryUrl() }}" width="50" height="50" style="line-height:25px">
                @else
                 <img src="{{ asset('storage/' . $logoCurrent) }}" width="50" height="50" style="line-height:25px">
                @endif

                <!-- Switch -->
                <div class="mt-2 col-md-12">
                    <div class="form-check form-switch form-check-md">
                        <input class="form-check-input" wire:model="is_active" type="checkbox" id="publish">
                        <label class="form-check-label" for="publish">Publier</label>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="/adminx/revues" wire:navigate class="my-0 btn btn-danger-soft">Close</a>
                    <button type="submit" class="my-0 btn btn-success">Mettre à jour</button>
                </div>

            </div>
            </form>
            </div>
        </div>
    </div>
</div>
<!-- Add course modal START -->

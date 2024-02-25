<!-- Add Categorie modal START -->
<div wire:ignore class="modal fade" id="addEtab" tabindex="-1" aria-labelledby="addEtabLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h5 class="text-white modal-title" id="addEtabLabel">Ajouter</h5>
                <button type="button" class="mb-0 btn btn-sm btn-light" data-bs-dismiss="modal" aria-label="Close"><i
                        class="bi bi-x-lg"></i></button>
            </div>
            <div class="modal-body">
                <form class="row text-start g-3" novalidate="" wire:submit.prevent="save">
                    <!-- Titre -->
                    <div class="col-6">
                        <label class="form-label">Titre</label>
                        <input class="form-control" type="text" wire:model="name" placeholder="Nom">
                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-lg-6">
                       <label class="form-label">Types</label>
                        <select class="form-control" wire:model="type_id">
                            <option value="">--choisir--</option>
                            @foreach($types as $row)
                            <option value="{{ $row->id }}">{{ $row->name }}</option>
                            @endforeach
                        </select>
                        @error('type_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-6">
                        <label class="form-label">Sigle</label>
                        <input class="form-control" type="text" wire:model="sigle" placeholder="Abréviation">
                        @error('sigle') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-6">
                        <label class="form-label">Directeur/Doyen</label>
                        <input class="form-control" type="text" wire:model="director" placeholder="Directeur/Doyen">
                        @error('director') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">Slogan</label>
                        <textarea class="form-control" wire:model="slogan" id="slogan" cols="2" rows="2"></textarea>
                        @error('slogan') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-12">
                        <label class="form-label">Apropos/Historique</label>
                        <textarea class="form-control" wire:model="about" id="slogan" cols="6" rows="6"></textarea>
                        @error('about') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                        x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
                        x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                    <div class="col-12">
                        <label class="form-label">Logo</label>
                        <input class="form-control" type="file" wire:model="image_path" placeholder="Logo">
                        @error('image_path') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <!-- Progress Bar -->
                    <div x-show="uploading">
                        <progress max="100" x-bind:value="progress"></progress>
                    </div>
                    </div>
                    @if ($image_path)
                    <img src="{{ $image_path->temporaryUrl() }}" width="50" height="50" style="line-height:25px">
                    @endif

                    <!-- Switch -->
                    <div class="mt-3 col-md-12">
                        <div class="form-check form-switch form-check-md">
                            <input class="form-check-input" wire:model="status" type="checkbox" id="publish">
                            <label class="form-check-label" for="publish">Publier</label>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <a href="/adminx/profil-etab" wire:navigate class="my-0 btn btn-danger-soft">Close</a>
                        <button type="submit" class="my-0 btn btn-primary">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Add course modal START -->

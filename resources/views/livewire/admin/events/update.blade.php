<div>
    <style>
        .my-alert {
            background-color: red !important;
        }

        .ql-container {
            height: 200px !important;
        }
    </style>
    <!-- Page main content START -->
    <div class="row g-2">
        <!-- Personal Information content START -->
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-top">
                <h5 class="card-header-title">Modifier</h5>
                <a href="#" wire:click="cancelUpdate()" class="badge bg-danger text-end"><i
                        class="fas fa-arrow-left me-2"></i>Retour</a>
            </div>
            <!-- Card body START -->
            <div class="card-body">
             <form class="row g-4 align-items-center" wire:submit.prevent="update">
                <!-- Input item -->
                <div class="col-lg-12">Titre</label>
                    <input type="text" wire:model="title" class="form-control" placeholder="Titre d'article">
                </div>
                <!-- Textarea item -->
                <div class="col-12">
                    <label class="form-label">Sous titre</label>
                    <textarea class="form-control" rows="2" wire:model="sub_title"></textarea>
                    <div class="form-text">Max 25 carractères</div>
                </div>
                <div class="col-lg-6">Organisateur</label>
                    <input type="text" wire:model="organisator" class="form-control" placeholder="Organisateur">
                </div>
                <div class="col-lg-6">Lieu</label>
                    <input type="text" wire:model="location" class="form-control" placeholder="Lieu">
                </div>
                <div class="col-lg-6">URL Google Maps</label>
                    <input type="url" wire:model="url_location" class="form-control" placeholder="URL Google Maps">
                </div>
                <div class="col-lg-6">Date début</label>
                    <input type="date" wire:model="dateStart" class="form-control" placeholder="Date début">
                </div>
                <div class="col-lg-6">Date Fin</label>
                    <input type="date" wire:model="dateEnd" class="form-control" placeholder="Date fin">
                </div>
                <div class="col-lg-6">Heur Fin</label>
                    <input type="time" wire:model="hourStart" class="form-control" placeholder="Heur début">
                </div>
                <div class="col-lg-6">Heur Fin</label>
                    <input type="time" wire:model="hourEnd" class="form-control" placeholder="Heur fin">
                </div>
                <div class="col-lg-6">Fichier/Document</label>
                    <input type="file" wire:model="file_path" class="form-control" placeholder="Fichier/Document">
                    @if ($dbFile)
                    <div>
                        <a href="{{ asset('storage/' .$dbFile) }}" target="_blank" class="nav-lik">Fichier</a>
                    </div>
                    @endif
                </div>
                <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
                x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                <!-- Upload image START -->
                <div class="col-12">
                    <div
                        class="p-4 text-center border border-2 border-dashed justify-content-center align-items-center p-sm-5 position-relative rounded-3">
                        <!-- Image -->
                        <img src="{{ asset('assets/images/element/gallery.svg') }}" class="h-50px" alt="">
                        <div>
                            <h6 class="my-2">Upload course image here, or<a href="#!" class="text-primary"> Browse</a></h6>
                            <label style="cursor:pointer;">
                                <span>
                                    <input class="form-control stretched-link" type="file" wire:model="image_cover" id="image_path"
                                        accept="image/gif, image/jpeg, image/png">
                                </span>
                            </label>
                            <p class="mt-2 mb-0 small"><b>Note:</b> Only JPG, JPEG and PNG.</p>
                            @error('image_cover') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <!-- Progress Bar -->
                        <div x-show="uploading">
                            <progress max="100" x-bind:value="progress"></progress>
                        </div>
                        @if ($image_cover)
                        <img src="{{  $image_cover->temporaryUrl() }}" width="200" height="150"
                            style="line-height:25px">
                        @else
                        <img src="{{ asset('storage/' . $currentImage) }}" width="200" height="150" style="line-height:25px">
                        @endif
                    </div>
                    </div>
                </div>
                <!-- Upload image END -->
                <!-- Textarea item -->
                <div class="col-12" wire:ignore>
                <label class="form-label">Description</label>
                    <div>
                        <div>
                            <textarea class="form-control" wire:model="description" id="description" cols="5" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <!-- Switch item -->
                <div class="col-lg-3">
                    <label class="form-label">Publier</label>
                    <div class="mb-0 form-check form-switch form-check-lg">
                        @if($is_active == true)
                        <input class="mt-0 form-check-input price-toggle me-2" checked wire:model="is_active" type="checkbox"
                            id="flexSwitchCheckDefault">
                        @else
                        <input class="mt-0 form-check-input price-toggle me-2" wire:model="is_active" type="checkbox"
                            id="flexSwitchCheckDefault">
                        @endif
                        <label class="mt-1 form-check-label" for="flexSwitchCheckDefault">Oui</label>
                    </div>
                </div>
                <!-- Save button -->
                <div class="d-sm-flex justify-content-start">
                    <button type="submit" class="mb-0 btn btn-success">Mettre à jour</button>
                </div>
            </form>
            </div>
            <!-- Card body END -->
        </div>
        <!-- Personal Information content END -->
    </div> <!-- Row END -->
    <!-- Page main content END -->
</div>

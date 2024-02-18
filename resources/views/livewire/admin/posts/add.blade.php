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
                    <h5 class="card-header-title">Ajouter</h5>
                    <a href="#" wire:click="cancelAdd()" class="badge bg-danger text-end"><i class="fas fa-arrow-left me-2"></i>Retour</a>
                </div>
                <!-- Card body START -->
                <div class="card-body">
                    <form class="row g-4 align-items-center" wire:submit.prevent="save">
                        <!-- Input item -->
                        <div class="col-lg-6">Titre</label>
                            <input type="text" wire:model="title" class="form-control" placeholder="Titre d'article">
                        </div>
                        <!-- Choice item -->
                        <div class="col-lg-6">
                            Catégorie
                            <select class="border-1 form-select js-choice z-index-9"
                                aria-label=".form-select-sm" wire:model="category_id">
                                <option value="">--choisir--</option>
                                @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            {{-- <div class="form-text">Sélectionnez une catégorie</div> --}}
                        </div>
                        <!-- Textarea item -->
                        <div class="col-12">
                            <label class="form-label">Sous titre</label>
                            <textarea class="form-control" rows="2" wire:model="sub_title"></textarea>
                            <div class="form-text">Max 25 carractères</div>
                        </div>
                        <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                        x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
                        x-on:livewire-upload-error="uploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                        <!-- Upload image START -->
                        <div class="col-12">
                            <div
                                class="p-4 text-center border border-2 border-dashed justify-content-center align-items-center p-sm-5 position-relative rounded-3">
                                <!-- Image -->
                                <img src="assets/images/element/gallery.svg" class="h-50px" alt="">
                                <div>
                                    <h6 class="my-2">Upload course image here, or<a href="#!" class="text-primary"> Browse</a></h6>
                                    <label style="cursor:pointer;">
                                        <span>
                                            <input class="form-control stretched-link" type="file" multiple wire:model="images" id="images"
                                                accept="image/gif, image/jpeg, image/png">
                                        </span>
                                    </label>
                                    <p class="mt-2 mb-0 small"><b>Note:</b> Only JPG, JPEG and PNG.</p>
                                    @error('images') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <!-- Progress Bar -->
                                <div x-show="uploading">
                                    <progress max="100" x-bind:value="progress"></progress>
                                </div>
                                @if ($images)
                                @foreach ($images as $image)
                                <img src="{{ $image->temporaryUrl() }}" width="200" height="150" style="line-height:25px">
                                @endforeach
                                @endif
                            </div>
                            <!-- Button -->
                            {{-- <div class="mt-2 d-sm-flex justify-content-end">
                                <button type="button" class="mb-3 btn btn-sm btn-danger-soft">Remove image</button>
                            </div> --}}
                            </div>
                        </div>
                        <!-- Upload image END -->
                        <!-- Textarea item -->
                        <div class="col-12" wire:ignore>
                        <label class="form-label">Contenus</label>
                            <div>
                                <div style="height: 100%;">
                                    <livewire:quill-text-editor wire:model.defer="contenus" theme="snow" />
                                </div>
                            </div>
                        </div>
                        <!-- Radio items -->
                        <div class="col-lg-4">
                            <label class="form-label">Mettre en Slide?</label>
                            <div class="d-sm-flex">
                                <!-- Radio -->
                                <div class="form-check radio-bg-light me-4">
                                    <input class="form-check-input" type="radio" value="0" wire:model="is_slider"
                                        id="flexRadioDefault1" checked="">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Non
                                    </label>
                                </div>
                                <!-- Radio -->
                                <div class="form-check radio-bg-light me-4">
                                    <input class="form-check-input" type="radio" value="1" wire:model="is_slider"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Oui
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Switch item -->
                        <div class="col-lg-4">
                            <label class="form-label">Publier</label>
                            <div class="mb-0 form-check form-switch form-check-lg">
                                <input class="mt-0 form-check-input price-toggle me-2" wire:model="is_active" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="mt-1 form-check-label" for="flexSwitchCheckDefault">Oui</label>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <label class="form-label">Envoyer par email</label>
                            <div class="mb-0 form-check form-switch form-check-lg">
                                <input class="mt-0 form-check-input price-toggle me-2" wire:model="send_to_subscribers" type="checkbox"
                                    id="flexSwitchCheckDefault_2">
                                <label class="mt-1 form-check-label" for="flexSwitchCheckDefault_2">Oui</label>
                            </div>
                        </div>

                        <!-- Save button -->
                        <div class="d-sm-flex justify-content-start">
                            <button type="submit" class="mb-0 btn btn-primary">Ajouter article</button>
                        </div>
                    </form>
                </div>
                <!-- Card body END -->
            </div>
        <!-- Personal Information content END -->
    </div> <!-- Row END -->
<!-- Page main content END -->
</div>


@push('scripts')

@endpush

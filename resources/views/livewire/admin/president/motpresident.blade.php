<div class="d-flex align-items-center justify-content-center">
    <style>
        .my-alert {
            background-color: red !important;
        }

        .ql-container {
            height: 400px !important;
        }
    </style>
    <!-- Page main content START -->
    <div class="border row g-2 page-content-wrapper col-xl-10 col-lg-10 col-md-12 col-12">
        <!-- Personal Information content START -->
        <div class="shadow card">
            <!-- Card header -->
            <div class="card-header">
                <h5 class="card-header-title">Mot du président</h5>
            </div>
            <!-- Card body START -->
            <div class="card-body">
                <form class="row g-4 align-items-center" wire:submit.prevent="update">
                    <!-- Input item -->
                    <div class="col-lg-12">Nom du président</label>
                        <input type="text" wire:model="name" class="form-control"
                        placeholder="Nom du président">
                    </div>
                    <!-- Choice item -->
                    <!-- Textarea item -->
                    <div class="col-12">
                        <label class="form-label">Introduction</label>
                        <textarea class="form-control" rows="4" wire:model="intro"></textarea>
                        <div class="form-text">Max 25 carractères</div>
                    </div>
                    <!-- Textarea item -->
                    <div class="col-12" wire:ignore>
                        <label class="form-label">Mots</label>
                        <div>
                            <div style="height: 100%;">
                                <textarea class="form-control" wire:model.defer="body" rows="30" cols="30"></textarea>
                                {{-- <livewire:quill-text-editor wire:model.defer="body" theme="snow" /> --}}
                            </div>
                        </div>
                    </div>
                    <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                        x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
                        x-on:livewire-upload-error="uploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                        <!-- Upload image START -->
                        <div class="col-12">
                            <div class="p-4 text-center border border-2 border-dashed justify-content-center align-items-center p-sm-5 position-relative rounded-3">
                                <!-- Image -->
                                <img src="{{ asset('assets/images/element/gallery.svg') }}" class="h-50px" alt="">
                                <div>
                                    <h6 class="my-2">Upload image ici, or<a href="#!" class="text-primary">
                                            Browse</a></h6>
                                    <label style="cursor:pointer;">
                                        <span>
                                            <input class="form-control stretched-link" type="file"
                                                wire:model="image_path" id="image_path"
                                                accept="image/gif, image/jpeg, image/png">
                                        </span>
                                    </label>
                                    <p class="mt-2 mb-0 small"><b>Note:</b> Only JPG, JPEG and PNG.</p>
                                    @error('image_path') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <!-- Progress Bar -->
                                <div x-show="uploading">
                                    <progress max="100" x-bind:value="progress"></progress>
                                </div>

                                @if ($image_path)
                               <img src="{{ $image_path->temporaryUrl() }}" width="200" height="150" style="line-height:25px">
                                @else
                                <img src="{{ asset('storage/' . $currentImage) }}" width="200" height="150" style="line-height:25px">
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Upload image END -->
                    <div class="col-lg-12">
                        Mettre fond de couleur
                        <select class="form-control" wire:model="bg_color">
                            <option value="">--choisir--</option>
                            <option value="danger">Par défaut</option>
                            <option value="grad-pink">Rose</option>
                            <option value="primary">Bleu</option>
                            <option value="info">Bleu Ciel</option>
                            <option value="warning">Jaune</option>
                            <option value="dark">Noire</option>
                        </select>
                    </div>
                    <!-- Switch item -->
                    <div class="col-lg-3">
                        <label class="form-label">Activer</label>
                        <div class="mb-0 form-check form-switch form-check-lg">
                            @if($is_active == true)
                            <input class="mt-0 form-check-input price-toggle me-2"
                                checked wire:model="is_active" type="checkbox"
                                id="flexSwitchCheckDefault">
                            @else
                            <input class="mt-0 form-check-input price-toggle me-2"
                                wire:model="is_active" type="checkbox"
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


@push('scripts')

@endpush

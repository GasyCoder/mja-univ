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
    <div class="border row g-2 page-content-wrapper col-xl-12 col-lg-12 col-md-12 col-12">
        <!-- Personal Information content START -->
        <div class="shadow card">
            <!-- Card header -->

            <div class="card-header">
                <div class="col-12 d-sm-flex justify-content-between align-items-center">
                    <h3 class="card-header-title">Historique
                    </h3>
                    <a href="{{ route('list_president') }}" class="mb-0 btn btn-sm btn-primary">
                        Liste des présidents</a>
                </div>
            </div>
            <!-- Card body START -->
            <div class="card-body">
                <form class="row g-4 align-items-center" wire:submit.prevent="update">
                    <!-- Input item -->
                    <div class="col-lg-12">Slogan</label>
                        <input type="text" wire:model="slogan" class="form-control"
                        placeholder="Slogan">
                    </div>
                    <!-- Choice item -->
                    <!-- Textarea item -->
                    <div class="col-12">
                        <label class="form-label">Introduction</label>
                        <textarea class="form-control" rows="4" wire:model="intro"></textarea>
                        <div class="form-text">Max 200 carractères</div>
                    </div>
                    <!-- Textarea item -->
                    <div class="col-12" wire:ignore>
                        <label class="form-label">Desciptions</label>
                        <div>
                            <div style="height: 100%;">
                                <livewire:quill-text-editor wire:model.defer="body" theme="snow" />
                            </div>
                        </div>
                    </div>
                    <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                        x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-cancel="uploading = false"
                        x-on:livewire-upload-error="uploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress">
                        <!-- Upload image START -->
                        <div class="col-12">
                            <div
                                class="p-4 text-center border border-2 border-dashed justify-content-center align-items-center p-sm-5 position-relative rounded-3">
                                <!-- Image -->
                                <img src="{{ asset('assets/images/element/gallery.svg') }}" class="h-50px" alt="">
                                <div>
                                    <h6 class="my-2">Upload image ici, or<a href="#!" class="text-primary">
                                            Browse</a></h6>
                                    <label style="cursor:pointer;">
                                        <span>
                                            <input class="form-control stretched-link" type="file"
                                                wire:model="images_cover" id="images_cover" multiple
                                                accept="image/gif, image/jpeg, image/png">
                                        </span>
                                    </label>
                                    <p class="mt-2 mb-0 small"><b>Note:</b> Only JPG, JPEG and PNG.</p>
                                    @error('images_cover.*') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <!-- Progress Bar -->
                                <div x-show="uploading">
                                    <progress max="100" x-bind:value="progress"></progress>
                                </div>
                                @if ($images_cover)
                                @foreach ($images_cover as $image)
                                <img src="{{ $image->temporaryUrl() }}" width="200" height="150" style="line-height:25px">
                                @endforeach
                                @else
                                @foreach ($currentImage as $img)
                                <img src="{{ asset('storage/' . $img) }}" width="200" height="150" style="line-height:25px">
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- Upload image END -->
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
